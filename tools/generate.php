<?php

declare(strict_types=1);

/**
 * Generate typed PHP from the vendored eBay OpenAPI contracts.
 *
 *   php tools/generate.php
 *   php tools/generate.php --check     # regenerate to a temp dir and diff; no writes
 *
 * Reads resources/openapi/manifest.json, writes src/Generated/. Everything under
 * src/Generated is disposable -- never hand-edit it. Hand-written code lives in
 * src/ alongside and depends on the generated classes, not the other way round.
 *
 * Two facts about eBay's contracts shape the output:
 *
 *  1. NOT ONE schema declares `required`. All 103 Inventory schemas, all 52 Account
 *     schemas, none of them. Requiredness is documented in prose only. So every
 *     generated property is nullable with a null default -- anything else would be
 *     inventing a constraint the contract does not make.
 *
 *  2. NOT ONE property declares `enum`. eBay lists allowed values in the HTML
 *     description instead. So no PHP enums are generated; those belong in
 *     hand-written code where the values can be checked against the docs.
 */

const ROOT = __DIR__ . '/..';
const MANIFEST = ROOT . '/resources/openapi/manifest.json';
const OUT = ROOT . '/src/Generated';
const NS = 'Survos\\Ebay\\Generated';

/**
 * Known errors in eBay's OWN contracts, corrected at generation time.
 *
 * Not a style preference -- these declare a type the API demonstrably does not
 * accept, so generating them faithfully produces a client that cannot make the
 * call. `Product.aspects` is the clear case: the contract says `"type": "string"`
 * while the description in the same object calls it "a collection of item
 * specifics name-value pairs", and the API wants {"Brand": ["Nike"]}.
 *
 * Applied here rather than by editing src/Generated, so a spec refresh cannot
 * silently reintroduce the bug, and rather than by editing the vendored spec, so
 * `refresh-specs.php --check` still diffs cleanly against what eBay publishes.
 *
 * Keyed by contract, then Schema.property.
 */
const SPEC_OVERRIDES = [
    'sell.inventory' => [
        // A map of aspect name => list of values.
        'Product.aspects' => ['type' => 'object', 'additionalProperties' => ['type' => 'array', 'items' => ['type' => 'string']]],
        'InventoryItemGroup.aspects' => ['type' => 'object', 'additionalProperties' => ['type' => 'array', 'items' => ['type' => 'string']]],
    ],
];

const RESERVED = [
    'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class', 'clone',
    'const', 'continue', 'declare', 'default', 'do', 'echo', 'else', 'elseif', 'empty',
    'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'enum', 'extends',
    'final', 'finally', 'fn', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements',
    'include', 'instanceof', 'insteadof', 'interface', 'isset', 'list', 'match', 'namespace',
    'new', 'or', 'print', 'private', 'protected', 'public', 'readonly', 'require', 'return',
    'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor', 'yield',
];

/** Turn eBay's HTML-laden descriptions into one readable docblock line. */
function prose(?string $html, int $max = 220): string
{
    if ($html === null || trim($html) === '') {
        return '';
    }

    $text = preg_replace('/<br\s*\/?>/i', ' ', $html) ?? $html;
    $text = strip_tags($text);
    $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $text = trim((string) preg_replace('/\s+/u', ' ', $text));
    // A literal */ inside a docblock closes it early and breaks the file.
    $text = str_replace('*/', '*\\/', $text);

    if (mb_strlen($text) > $max) {
        $text = rtrim(mb_substr($text, 0, $max)) . '...';
    }

    return $text;
}

function classNameFor(string $schemaName): string
{
    $name = preg_replace('/[^A-Za-z0-9]/', '', $schemaName) ?? $schemaName;

    return ucfirst($name);
}

function propertyNameFor(string $name): string
{
    $php = preg_replace('/[^A-Za-z0-9_]/', '_', $name) ?? $name;
    $php = lcfirst($php);

    if (in_array(strtolower($php), RESERVED, true) || preg_match('/^\d/', $php)) {
        $php = '_' . $php;
    }

    return $php;
}

function refToClass(string $ref): string
{
    return classNameFor(substr($ref, (int) strrpos($ref, '/') + 1));
}

/**
 * @param array<string, mixed> $schema
 *
 * @return array{php: string, doc: string, model: ?string, listOf: ?string}
 */
function resolveType(array $schema): array
{
    if (isset($schema['$ref'])) {
        $class = refToClass($schema['$ref']);

        return ['php' => $class, 'doc' => $class, 'model' => $class, 'listOf' => null];
    }

    $type = $schema['type'] ?? 'string';

    if ($type === 'array') {
        $items = $schema['items'] ?? ['type' => 'string'];
        $inner = resolveType($items);

        return [
            'php' => 'array',
            'doc' => 'list<' . $inner['doc'] . '>',
            'model' => null,
            'listOf' => $inner['model'],
        ];
    }

    $php = match ($type) {
        'integer' => 'int',
        'number' => 'float',
        'boolean' => 'bool',
        'object' => 'array',
        default => 'string',
    };

    $doc = $php;
    if ($php === 'array') {
        $additional = $schema['additionalProperties'] ?? null;
        $doc = is_array($additional)
            ? 'array<string, ' . resolveType($additional)['doc'] . '>'
            : 'array<string, mixed>';
    }

    return ['php' => $php, 'doc' => $doc, 'model' => null, 'listOf' => null];
}

/**
 * @param array<string, mixed> $schema
 */
function renderModel(string $namespace, string $class, array $schema, string $sourceTitle): string
{
    $properties = $schema['properties'] ?? [];

    $uses = [];
    $params = [];
    $toArray = [];
    $fromArray = [];

    foreach ($properties as $wireName => $property) {
        $php = propertyNameFor((string) $wireName);
        $type = resolveType($property);
        $description = prose($property['description'] ?? null);

        $docType = $type['doc'];
        $paramDoc = '';
        if ($type['php'] === 'array' || $description !== '') {
            $paramDoc = sprintf(
                '     * @param %s $%s%s',
                $type['php'] === 'array' ? $docType . '|null' : $docType . '|null',
                $php,
                $description !== '' ? ' ' . $description : '',
            );
        }

        $params[] = ['php' => $php, 'type' => $type, 'doc' => $paramDoc];

        // toArray: omit nulls. eBay rejects some explicit nulls outright and
        // treats others as "clear this field", so sending them is never harmless.
        if ($type['listOf'] !== null) {
            $toArray[] = sprintf(
                "        if (\$this->%s !== null) {\n"
                . "            \$data['%s'] = array_map(static fn (%s \$i): array => \$i->toArray(), \$this->%s);\n"
                . '        }',
                $php,
                $wireName,
                $type['listOf'],
                $php,
            );
            $fromArray[] = sprintf(
                "            %s: isset(\$data['%s']) && is_array(\$data['%s'])\n"
                . "                ? array_values(array_map(static fn (array \$i): %s => %s::fromArray(\$i), \$data['%s']))\n"
                . '                : null,',
                $php,
                $wireName,
                $wireName,
                $type['listOf'],
                $type['listOf'],
                $wireName,
            );
        } elseif ($type['model'] !== null) {
            $toArray[] = sprintf(
                "        if (\$this->%s !== null) {\n            \$data['%s'] = \$this->%s->toArray();\n        }",
                $php,
                $wireName,
                $php,
            );
            $fromArray[] = sprintf(
                "            %s: isset(\$data['%s']) && is_array(\$data['%s']) ? %s::fromArray(\$data['%s']) : null,",
                $php,
                $wireName,
                $wireName,
                $type['model'],
                $wireName,
            );
        } else {
            $toArray[] = sprintf(
                "        if (\$this->%s !== null) {\n            \$data['%s'] = \$this->%s;\n        }",
                $php,
                $wireName,
                $php,
            );
            $cast = match ($type['php']) {
                'int' => '(int) $data[\'%s\']',
                'float' => '(float) $data[\'%s\']',
                'bool' => '(bool) $data[\'%s\']',
                'array' => '(array) $data[\'%s\']',
                default => '(string) $data[\'%s\']',
            };
            $fromArray[] = sprintf(
                "            %s: isset(\$data['%s']) ? %s : null,",
                $php,
                $wireName,
                sprintf($cast, $wireName),
            );
        }
    }

    $docLines = array_values(array_filter(array_map(static fn (array $p): string => $p['doc'], $params)));
    $classDoc = prose($schema['description'] ?? null, 400);

    $header = "<?php\n\ndeclare(strict_types=1);\n\nnamespace {$namespace};\n\n";
    $header .= "/**\n";
    if ($classDoc !== '') {
        $header .= ' * ' . $classDoc . "\n *\n";
    }
    $header .= " * Generated from eBay's {$sourceTitle} OpenAPI contract. Do not edit.\n";
    $header .= " * Every property is nullable because the contract declares no required fields.\n";
    $header .= " */\n";

    $body = "final readonly class {$class}\n{\n";
    if ($docLines !== []) {
        $body .= "    /**\n" . implode("\n", $docLines) . "\n     */\n";
    }
    $body .= "    public function __construct(\n";
    foreach ($params as $p) {
        $body .= sprintf("        public ?%s \$%s = null,\n", $p['type']['php'], $p['php']);
    }
    $body .= "    ) {\n    }\n\n";

    $body .= "    /** @param array<string, mixed> \$data */\n";
    $body .= "    public static function fromArray(array \$data): self\n    {\n";
    $body .= $fromArray === []
        ? "        return new self();\n"
        : "        return new self(\n" . implode("\n", $fromArray) . "\n        );\n";
    $body .= "    }\n\n";

    $body .= "    /**\n     * Null properties are omitted: eBay rejects some explicit nulls and reads\n"
        . "     * others as \"clear this field\", so emitting them is never harmless.\n     *\n"
        . "     * @return array<string, mixed>\n     */\n";
    $body .= "    public function toArray(): array\n    {\n        \$data = [];\n";
    $body .= $toArray === [] ? '' : implode("\n", $toArray) . "\n";
    $body .= "\n        return \$data;\n    }\n}\n";

    return $header . $body;
}

/**
 * @param array<string, mixed> $spec
 */
function renderApi(string $namespace, string $class, array $spec, string $basePath, string $sourceTitle): string
{
    $methods = [];

    foreach ($spec['paths'] ?? [] as $path => $operations) {
        foreach ($operations as $verb => $operation) {
            if (!is_array($operation) || !isset($operation['operationId'])) {
                continue;
            }

            $name = lcfirst((string) $operation['operationId']);
            $signature = [];
            $pathParams = [];
            $queryParams = [];
            $headerParams = [];
            $docs = [];

            foreach ($operation['parameters'] ?? [] as $parameter) {
                $in = $parameter['in'] ?? 'query';
                $wire = (string) $parameter['name'];

                // Content-Type and Accept are the transport's business, not the caller's.
                if ($in === 'header' && in_array(strtolower($wire), ['content-type', 'accept', 'content-language', 'accept-language'], true)) {
                    continue;
                }

                $php = propertyNameFor($wire);
                $type = resolveType($parameter['schema'] ?? ['type' => 'string']);
                $required = (bool) ($parameter['required'] ?? false);
                $description = prose($parameter['description'] ?? null, 140);

                $signature[] = [
                    'php' => $php,
                    'type' => $type['php'],
                    'required' => $required && $in === 'path',
                ];
                if ($description !== '') {
                    $docs[] = sprintf('     * @param %s $%s %s', $type['php'] . ($required ? '' : '|null'), $php, $description);
                }

                match ($in) {
                    'path' => $pathParams[$wire] = $php,
                    'header' => $headerParams[$wire] = $php,
                    default => $queryParams[$wire] = $php,
                };
            }

            $bodyRef = $operation['requestBody']['content']['application/json']['schema']['$ref'] ?? null;
            $bodyClass = $bodyRef !== null ? 'Model\\' . refToClass($bodyRef) : null;

            $responseRef = null;
            foreach (['200', '201', '202'] as $code) {
                $responseRef = $operation['responses'][$code]['content']['application/json']['schema']['$ref'] ?? null;
                if ($responseRef !== null) {
                    break;
                }
            }
            $responseClass = $responseRef !== null ? 'Model\\' . refToClass($responseRef) : null;

            // Required path params first, then the body, then optional bits.
            usort($signature, static fn (array $a, array $b): int => ($b['required'] ? 1 : 0) <=> ($a['required'] ? 1 : 0));

            $args = [];
            foreach ($signature as $p) {
                $args[] = $p['required']
                    ? sprintf('%s $%s', $p['type'], $p['php'])
                    : sprintf('?%s $%s = null', $p['type'], $p['php']);
            }
            if ($bodyClass !== null) {
                array_splice($args, count(array_filter($signature, static fn (array $p): bool => $p['required'])), 0, [sprintf('%s $body', $bodyClass)]);
            }

            $pathExpr = 'self::BASE_PATH . ' . var_export($path, true);
            $replacements = [];
            foreach ($pathParams as $wire => $php) {
                $replacements[] = sprintf("'{%s}' => rawurlencode(\$%s)", $wire, $php);
            }
            $pathLine = $replacements === []
                ? sprintf('        $path = %s;', $pathExpr)
                : sprintf("        \$path = strtr(%s, [\n            %s,\n        ]);", $pathExpr, implode(",\n            ", $replacements));

            $queryLine = '        $query = [];';
            foreach ($queryParams as $wire => $php) {
                $queryLine .= sprintf(
                    "\n        if (\$%s !== null) {\n            \$query['%s'] = \$%s;\n        }",
                    $php,
                    $wire,
                    $php,
                );
            }

            $headerLine = '        $headers = [];';
            foreach ($headerParams as $wire => $php) {
                $headerLine .= sprintf(
                    "\n        if (\$%s !== null) {\n            \$headers['%s'] = (string) \$%s;\n        }",
                    $php,
                    $wire,
                    $php,
                );
            }

            $returnType = $responseClass ?? 'array';
            $docBlock = '';
            $description = prose($operation['description'] ?? $operation['summary'] ?? null, 260);
            if ($description !== '' || $docs !== []) {
                $docBlock = "    /**\n";
                if ($description !== '') {
                    $docBlock .= '     * ' . $description . "\n";
                    if ($docs !== []) {
                        $docBlock .= "     *\n";
                    }
                }
                if ($docs !== []) {
                    $docBlock .= implode("\n", $docs) . "\n";
                }
                if ($responseClass === null) {
                    $docBlock .= "     *\n     * @return array<string, mixed>\n";
                }
                $docBlock .= "     */\n";
            } elseif ($responseClass === null) {
                $docBlock = "    /** @return array<string, mixed> */\n";
            }

            $call = sprintf(
                "        \$response = \$this->transport->request(%s, \$path, \$query, %s, \$headers);",
                var_export(strtoupper($verb), true),
                $bodyClass !== null ? '$body->toArray()' : 'null',
            );

            $return = $responseClass !== null
                ? sprintf("\n        return %s::fromArray(\$response);", $responseClass)
                : "\n        return \$response;";

            $methods[] = $docBlock
                . sprintf("    public function %s(%s): %s\n    {\n", $name, implode(', ', $args), $returnType)
                . $pathLine . "\n" . $queryLine . "\n" . $headerLine . "\n\n" . $call . $return . "\n    }";
        }
    }

    $header = "<?php\n\ndeclare(strict_types=1);\n\nnamespace {$namespace};\n\n"
        . "use Survos\\Ebay\\Http\\EbayTransportInterface;\n\n"
        . "/**\n * {$sourceTitle}.\n *\n"
        . " * Generated from eBay's OpenAPI contract. Do not edit.\n"
        . " * Authentication, sandbox selection and error mapping live behind the transport.\n */\n";

    $body = "final readonly class {$class}\n{\n"
        . sprintf("    public const string BASE_PATH = '%s';\n\n", $basePath)
        . "    public function __construct(\n        private EbayTransportInterface \$transport,\n    ) {\n    }\n\n"
        . implode("\n\n", $methods)
        . "\n}\n";

    return $header . $body;
}

// ---------------------------------------------------------------------------

$check = in_array('--check', $_SERVER['argv'], true);
$manifest = json_decode((string) file_get_contents(MANIFEST), true, 512, JSON_THROW_ON_ERROR);
$target = $check ? sys_get_temp_dir() . '/ebay-generated-' . bin2hex(random_bytes(4)) : OUT;

if (!$check && is_dir(OUT)) {
    $it = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(OUT, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST,
    );
    foreach ($it as $file) {
        $file->isDir() ? rmdir($file->getPathname()) : unlink($file->getPathname());
    }
}

$totalModels = 0;
$totalOps = 0;

foreach ($manifest['contracts'] as $key => $meta) {
    $spec = json_decode(
        (string) file_get_contents(ROOT . '/resources/openapi/' . $meta['file']),
        true,
        512,
        JSON_THROW_ON_ERROR,
    );

    // NOT $target -- that is the output directory, and shadowing it here silently
    // redirects every generated file to a relative path that does not exist.
    foreach (SPEC_OVERRIDES[$key] ?? [] as $overrideTarget => $replacement) {
        [$schemaName, $propertyName] = explode('.', $overrideTarget, 2);
        if (!isset($spec['components']['schemas'][$schemaName]['properties'][$propertyName])) {
            fwrite(STDERR, sprintf(
                "WARNING  override %s.%s no longer matches the contract -- eBay may have fixed it; "
                . "verify and remove from SPEC_OVERRIDES.\n",
                $key,
                $overrideTarget,
            ));

            continue;
        }

        $existing = $spec['components']['schemas'][$schemaName]['properties'][$propertyName];
        $spec['components']['schemas'][$schemaName]['properties'][$propertyName]
            = $replacement + ['description' => $existing['description'] ?? null];
        printf("  override %s.%s: %s -> %s\n", $key, $overrideTarget, $existing['type'] ?? '?', $replacement['type']);
    }

    [$category, $call] = explode('.', (string) $key);
    $segment = ucfirst($category) . '\\' . ucfirst($call);
    $dir = $target . '/' . str_replace('\\', '/', $segment);
    @mkdir($dir . '/Model', 0o775, true);

    $namespace = NS . '\\' . $segment;
    $title = (string) $meta['title'];

    foreach ($spec['components']['schemas'] ?? [] as $schemaName => $schema) {
        $class = classNameFor((string) $schemaName);
        file_put_contents(
            $dir . '/Model/' . $class . '.php',
            renderModel($namespace . '\\Model', $class, $schema, $title),
        );
        ++$totalModels;
    }

    $basePath = $spec['servers'][0]['variables']['basePath']['default'] ?? '';
    $apiClass = ucfirst($call) . 'Api';
    $source = renderApi($namespace, $apiClass, $spec, (string) $basePath, $title);
    // Models live in a sub-namespace; import them so the API signatures read cleanly.
    $source = str_replace(
        "use Survos\\Ebay\\Http\\EbayTransportInterface;",
        "use Survos\\Ebay\\Http\\EbayTransportInterface;\nuse {$namespace}\\Model;",
        $source,
    );
    file_put_contents($dir . '/' . $apiClass . '.php', $source);

    $ops = 0;
    foreach ($spec['paths'] ?? [] as $operations) {
        foreach ($operations as $operation) {
            if (is_array($operation) && isset($operation['operationId'])) {
                ++$ops;
            }
        }
    }
    $totalOps += $ops;

    printf("%-20s %-22s %3d models  %2d operations\n", $key, $apiClass, count($spec['components']['schemas'] ?? []), $ops);
}

printf("\n%d models, %d operations -> %s\n", $totalModels, $totalOps, $check ? $target : 'src/Generated');
