<?php

declare(strict_types=1);

/**
 * Re-download eBay's OpenAPI 3 contracts into resources/openapi/.
 *
 *   php tools/refresh-specs.php            # fetch all, report what changed
 *   php tools/refresh-specs.php --check    # fail if anything is stale, write nothing
 *   php tools/refresh-specs.php sell.inventory
 *
 * The specs are VENDORED rather than fetched at build time, so a generated client
 * is reproducible and a CI run does not depend on developer.ebay.com being
 * reachable and unguarded. Run this deliberately, read the diff, commit it.
 *
 * eBay sits behind Cloudflare, which fingerprints the TLS handshake (JA3), not just
 * the headers. Measured on 2026-09-07 against the same URL, same minute:
 *
 *   curl 8.7.1  (SecureTransport / LibreSSL)  -> 200
 *   PHP ext-curl 8.21.0 (OpenSSL 3.6.3)       -> 403
 *
 * Header set identical, both HTTP/2. No combination of CURLOPT_ENCODING,
 * CURLOPT_HTTP_VERSION or explicit Accept-Encoding changes the PHP result -- the
 * OpenSSL ClientHello is simply not browser-shaped. So this script shells out to
 * the system curl binary instead of using ext-curl.
 *
 * That also means the fetch is not portable: a Linux CI runner's curl is usually
 * OpenSSL-linked and will get 403 too. Which is the real argument for vendoring --
 * refresh on a machine where it works, commit the result, and let CI read files.
 * Use --check in CI only as an advisory drift signal, never as a gate.
 */

const OPENAPI_DIR = __DIR__ . '/../resources/openapi';
const MANIFEST = OPENAPI_DIR . '/manifest.json';
const BASE = 'https://developer.ebay.com/api-docs/master';

/** key => [category, call, version, why we need it] */
const CONTRACTS = [
    'sell.inventory' => ['sell', 'inventory', 'v1',
        'Inventory items, offers, publish/withdraw, merchant locations. The listing flow.'],
    'sell.account' => ['sell', 'account', 'v1',
        'Payment/return/fulfillment policies and program opt-in. publishOffer fails without policy ids.'],
    'commerce.taxonomy' => ['commerce', 'taxonomy', 'v1',
        'Category suggestions and per-category item aspects. Feeds AttributeSchema.'],
    'sell.metadata' => ['sell', 'metadata', 'v1',
        'Marketplace-level policies: item conditions, listing limits, shipping services.'],
    'sell.fulfillment' => ['sell', 'fulfillment', 'v1',
        'Orders and shipping fulfillments. Not needed to list, needed to sell.'],
];

/** Cloudflare wants a complete browser fingerprint; a partial set is refused. */
const BROWSER_HEADERS = [
    'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
    'Accept-Language: en-US,en;q=0.9',
    'Accept-Encoding: gzip, deflate, br',
    'sec-ch-ua: "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "macOS"',
    'Sec-Fetch-Dest: document',
    'Sec-Fetch-Mode: navigate',
    'Sec-Fetch-Site: none',
    'Sec-Fetch-User: ?1',
    'Upgrade-Insecure-Requests: 1',
];

function contractUrl(string $category, string $call, string $version): string
{
    return sprintf('%s/%s/%s/openapi/3/%s_%s_%s_oas3.json', BASE, $category, $call, $category, $call, $version);
}

function fetchContract(string $url): string
{
    $command = ['curl', '--silent', '--show-error', '--compressed', '--location', '--max-time', '60',
        '--write-out', '\n%{http_code}'];

    foreach (BROWSER_HEADERS as $header) {
        $command[] = '-H';
        $command[] = $header;
    }
    $command[] = $url;

    $process = proc_open(
        $command,
        [1 => ['pipe', 'w'], 2 => ['pipe', 'w']],
        $pipes,
    );

    if (!is_resource($process)) {
        throw new RuntimeException('Could not start curl.');
    }

    $out = (string) stream_get_contents($pipes[1]);
    $err = (string) stream_get_contents($pipes[2]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    $code = proc_close($process);

    if ($code !== 0) {
        throw new RuntimeException(sprintf('curl exited %d: %s', $code, trim($err)));
    }

    $split = strrpos($out, "\n");
    if ($split === false) {
        throw new RuntimeException('Malformed curl output (no status line).');
    }

    $status = (int) substr($out, $split + 1);
    $body = substr($out, 0, $split);

    if ($status === 403) {
        throw new RuntimeException(sprintf(
            "%s: 403 from Cloudflare.\n"
            . "This is a TLS-fingerprint bot check, not a missing file and not rate limiting.\n"
            . "Your curl must be linked against a TLS stack whose ClientHello looks like a "
            . "browser's; macOS system curl (SecureTransport) passes, OpenSSL-linked curl "
            . "generally does not. Check: curl --version\n"
            . "If no local curl works, fetch the URL in a browser and save it into %s.",
            $url,
            realpath(OPENAPI_DIR) ?: OPENAPI_DIR,
        ));
    }
    if ($status !== 200) {
        throw new RuntimeException(sprintf('%s: HTTP %d', $url, $status));
    }

    return $body;
}

/** @return array{title: string, version: string, paths: int, schemas: int} */
function summarize(array $spec): array
{
    return [
        'title' => $spec['info']['title'] ?? '(untitled)',
        'version' => $spec['info']['version'] ?? '?',
        'paths' => count($spec['paths'] ?? []),
        'schemas' => count($spec['components']['schemas'] ?? []),
    ];
}

$argv = $_SERVER['argv'];
$checkOnly = in_array('--check', $argv, true);
$only = array_values(array_filter(array_slice($argv, 1), static fn (string $a): bool => !str_starts_with($a, '--')));

$manifest = is_file(MANIFEST)
    ? json_decode((string) file_get_contents(MANIFEST), true, 512, JSON_THROW_ON_ERROR)
    : ['contracts' => []];

$stale = [];
$next = [];
$exit = 0;

foreach (CONTRACTS as $key => [$category, $call, $version, $why]) {
    if ($only !== [] && !in_array($key, $only, true)) {
        $next[$key] = $manifest['contracts'][$key] ?? null;

        continue;
    }

    $filename = sprintf('%s_%s_%s_oas3.json', $category, $call, $version);
    $url = contractUrl($category, $call, $version);

    try {
        $body = fetchContract($url);
        $spec = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
    } catch (Throwable $e) {
        fwrite(STDERR, sprintf("FAIL  %-20s %s\n", $key, $e->getMessage()));
        $exit = 1;

        continue;
    }

    if (!str_starts_with((string) ($spec['openapi'] ?? ''), '3.')) {
        fwrite(STDERR, sprintf("FAIL  %-20s not an OpenAPI 3 document\n", $key));
        $exit = 1;

        continue;
    }

    // Re-encode rather than storing the raw body: stable key order and formatting
    // mean a refresh diff shows what eBay actually changed, not whitespace churn.
    $normalized = json_encode($spec, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n";
    $digest = hash('sha256', $normalized);
    $summary = summarize($spec);
    $previous = $manifest['contracts'][$key] ?? null;
    $changed = ($previous['sha256'] ?? null) !== $digest;

    if ($changed) {
        $stale[] = $key;
    }

    if ($checkOnly) {
        printf(
            "%-6s %-20s %s v%s\n",
            $changed ? 'STALE' : 'ok',
            $key,
            $summary['title'],
            $summary['version'],
        );
        $next[$key] = $previous;

        continue;
    }

    file_put_contents(OPENAPI_DIR . '/' . $filename, $normalized);

    printf(
        "%-6s %-20s %s v%s  (%d paths, %d schemas)%s\n",
        $changed ? 'UPDATE' : 'same',
        $key,
        $summary['title'],
        $summary['version'],
        $summary['paths'],
        $summary['schemas'],
        $previous !== null && $previous['version'] !== $summary['version']
            ? sprintf('  <- was v%s', $previous['version'])
            : '',
    );

    $next[$key] = [
        'file' => $filename,
        'url' => $url,
        'title' => $summary['title'],
        'version' => $summary['version'],
        'paths' => $summary['paths'],
        'schemas' => $summary['schemas'],
        'sha256' => $digest,
        'why' => $why,
        'fetchedAt' => gmdate('c'),
    ];
}

if (!$checkOnly) {
    file_put_contents(
        MANIFEST,
        json_encode(
            ['contracts' => array_filter($next)],
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
        ) . "\n",
    );
}

if ($checkOnly && $stale !== []) {
    fwrite(STDERR, sprintf(
        "\n%d contract(s) changed upstream: %s\nRun: php tools/refresh-specs.php\n",
        count($stale),
        implode(', ', $stale),
    ));

    exit(1);
}

exit($exit);
