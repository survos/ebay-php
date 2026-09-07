<?php

declare(strict_types=1);

namespace Survos\Ebay\Http;

/**
 * The single seam between generated API classes and the network.
 *
 * Generated code knows paths, parameters and response shapes; it knows nothing
 * about tokens, sandbox vs production, retries or error mapping. All of that lives
 * behind this interface, so regenerating from a newer contract never touches
 * authentication.
 */
interface EbayTransportInterface
{
    /**
     * @param string                          $method  HTTP verb
     * @param string                          $path    path below the API base, e.g. `/offer/{offerId}/publish`
     * @param array<string, scalar|null>      $query
     * @param array<string, mixed>|null       $body    JSON request body, already an array
     * @param array<string, string>           $headers operation-specific headers
     *
     * @return array<string, mixed> decoded JSON response; [] for 204 No Content
     */
    public function request(
        string $method,
        string $path,
        array $query = [],
        ?array $body = null,
        array $headers = [],
    ): array;
}
