# survos/ebay-php

An eBay REST API client for PHP, generated from **eBay's own OpenAPI 3 contracts**.

Framework-agnostic. It depends on `symfony/http-client-contracts`, which is an
**interface** package — bring any implementation you like. The same code runs in a
Symfony application, a WordPress plugin, or a plain PHP script.

```bash
composer require survos/ebay-php symfony/http-client
```

## Why generated, and why not an existing SDK

There is **no official eBay PHP SDK** for listing, in any language. eBay ships only
two narrow official PHP packages (`ebay/digital-signature-php-sdk`,
`ebay/event-notification-php-sdk`), neither of which creates a listing. The
community options are `dts/ebay-sdk-php` (abandoned, last release 2018) and
`benmorel/ebay-sdk-php` (a maintained PHP 8 fork of it, but dynamic `public $prop`
objects and Guzzle).

eBay does, however, publish an OpenAPI 3 contract for every RESTful API. Generating
from those gives typed, `declare(strict_types=1)`, PHP 8.5 code that matches the rest
of this monorepo, and a one-command path to picking up eBay's changes.

| API | Models | Operations |
|---|---|---|
| Inventory | 103 | 36 |
| Account | 52 | 37 |
| Metadata | 86 | 27 |
| Fulfillment | 76 | 15 |
| Taxonomy | 24 | 9 |

## Layout

```
resources/openapi/     vendored eBay contracts + manifest.json (versions, sha256)
tools/refresh-specs.php   re-download the contracts
tools/generate.php        contracts -> src/Generated
src/Generated/            341 models, 124 operations. Disposable. Never hand-edit.
src/                      hand-written: transport, auth, exceptions
```

```php
$api = new Survos\Ebay\Generated\Sell\Inventory\InventoryApi($transport);

$response = $api->publishOffer($offerId);   // returns Model\PublishResponse
echo $response->listingId;
```

Authentication, sandbox selection and error mapping sit behind
`Survos\Ebay\Http\EbayTransportInterface`, so regenerating from a newer contract
never touches auth code.

## Refreshing the contracts

```bash
composer refresh-specs      # re-download; read the diff before committing
composer generate           # contracts -> src/Generated
```

The specs are **vendored on purpose**. Generation is then reproducible and CI never
depends on developer.ebay.com being reachable.

### The Cloudflare trap

eBay's developer site fingerprints the **TLS handshake**, not just headers. Measured
2026-09-07, same URL, same minute, identical headers, both HTTP/2:

| client | result |
|---|---|
| `curl` 8.7.1 (SecureTransport / LibreSSL) | **200** |
| PHP ext-curl 8.21.0 (OpenSSL 3.6.3) | **403** |

No combination of `CURLOPT_ENCODING`, `CURLOPT_HTTP_VERSION` or explicit
`Accept-Encoding` changes the PHP result — the OpenSSL ClientHello simply is not
browser-shaped. So `refresh-specs.php` shells out to the system `curl` binary.

This also means the fetch is **not portable**: a Linux CI runner's curl is usually
OpenSSL-linked and will get 403 as well. That is the real argument for vendoring.
Use `--check` in CI only as an advisory drift signal, never as a gate.

## Two things the contracts do not tell you

**Nothing is required.** Not one schema across all five contracts declares a
`required` array — 103 Inventory schemas, 52 Account schemas, zero. Requiredness
exists only in eBay's prose documentation. So every generated property is nullable
with a null default; asserting otherwise would invent a constraint the contract does
not make. Real requiredness belongs in hand-written validation.

**There are no enums.** Not one property declares `enum`; allowed values are listed
in the HTML description. So no PHP enums are generated.

`toArray()` omits null properties rather than emitting them. eBay rejects some
explicit nulls outright and reads others as "clear this field", so sending them is
never harmless.

## Tests

```bash
composer install
vendor/bin/phpunit
```
