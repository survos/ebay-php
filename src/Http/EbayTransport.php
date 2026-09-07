<?php

declare(strict_types=1);

namespace Survos\Ebay\Http;

use Survos\Ebay\Auth\AccessTokenProviderInterface;
use Survos\Ebay\EbayEnvironment;
use Survos\Ebay\Exception\EbayApiException;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * The one place that knows about hosts, tokens, headers and error shapes.
 *
 * Generated API classes hold none of this, so regenerating from a newer contract
 * cannot disturb authentication.
 */
final readonly class EbayTransport implements EbayTransportInterface
{
    /**
     * @param string $marketplaceId   X-EBAY-C-MARKETPLACE-ID, e.g. EBAY_US
     * @param string $contentLanguage Content-Language. Omitting this on inventory
     *                                writes produces errors that name no field and
     *                                do not mention language, so it is always sent.
     */
    public function __construct(
        private HttpClientInterface $httpClient,
        private AccessTokenProviderInterface $tokenProvider,
        private EbayEnvironment $environment = EbayEnvironment::Sandbox,
        private string $marketplaceId = 'EBAY_US',
        private string $contentLanguage = 'en-US',
        private string $acceptLanguage = 'en-US',
    ) {
    }

    public function request(
        string $method,
        string $path,
        array $query = [],
        ?array $body = null,
        array $headers = [],
    ): array {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->tokenProvider->accessToken(),
                'Accept' => 'application/json',
                'X-EBAY-C-MARKETPLACE-ID' => $this->marketplaceId,
                'Content-Language' => $this->contentLanguage,
                'Accept-Language' => $this->acceptLanguage,
                ...$headers,
            ],
        ];

        if ($query !== []) {
            $options['query'] = array_filter($query, static fn (mixed $v): bool => $v !== null);
        }

        if ($body !== null) {
            $options['headers']['Content-Type'] = 'application/json';
            $options['body'] = json_encode($body, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES);
        }

        $response = $this->httpClient->request(
            $method,
            $this->environment->apiHost() . $path,
            $options,
        );

        $status = $response->getStatusCode();
        $raw = $response->getContent(throw: false);

        // 204 is a success with no body -- publishOffer's siblings use it, and
        // json_decode('') is null, which would otherwise read as a failure.
        if ($raw === '') {
            if ($status >= 400) {
                throw EbayApiException::fromPayload($status, [], $raw);
            }

            return [];
        }

        $payload = json_decode($raw, true);

        if (!is_array($payload)) {
            if ($status >= 400) {
                throw EbayApiException::fromPayload($status, [], $raw);
            }

            throw new EbayApiException($status, [], $raw);
        }

        if ($status >= 400) {
            throw EbayApiException::fromPayload($status, $payload, $raw);
        }

        return $payload;
    }
}
