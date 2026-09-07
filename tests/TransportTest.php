<?php

declare(strict_types=1);

namespace Survos\Ebay\Tests;

use PHPUnit\Framework\TestCase;
use Survos\Ebay\Auth\StaticAccessTokenProvider;
use Survos\Ebay\EbayEnvironment;
use Survos\Ebay\Exception\EbayApiException;
use Survos\Ebay\Exception\EbayAuthenticationException;
use Survos\Ebay\Exception\EbayRateLimitException;
use Survos\Ebay\Generated\Sell\Inventory\InventoryApi;
use Survos\Ebay\Http\EbayTransport;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class TransportTest extends TestCase
{
    /**
     * @param list<MockResponse> $responses
     *
     * @return array{0: EbayTransport, 1: MockHttpClient}
     */
    private function transport(array $responses, EbayEnvironment $env = EbayEnvironment::Sandbox): array
    {
        $client = new MockHttpClient($responses);

        return [new EbayTransport($client, new StaticAccessTokenProvider('tok-123'), $env), $client];
    }

    public function testSendsBearerTokenAndTheHeadersEbayRequires(): void
    {
        $seen = ['method' => '', 'url' => '', 'headers' => []];
        $client = new MockHttpClient(function (string $method, string $url, array $options) use (&$seen): MockResponse {
            $seen = ['method' => $method, 'url' => $url, 'headers' => $options['headers']];

            return new MockResponse('{"listingId":"110586523456"}');
        });

        $api = new InventoryApi(new EbayTransport($client, new StaticAccessTokenProvider('tok-123')));
        $api->publishOffer('9876543210');

        self::assertSame('POST', $seen['method']);
        self::assertSame(
            'https://api.sandbox.ebay.com/sell/inventory/v1/offer/9876543210/publish',
            $seen['url'],
        );

        $headers = array_change_key_case(
            array_column(array_map(
                static fn (string $h): array => explode(': ', $h, 2),
                $seen['headers'],
            ), 1, 0),
        );

        self::assertSame('Bearer tok-123', $headers['authorization']);
        self::assertSame('EBAY_US', $headers['x-ebay-c-marketplace-id']);
        // Omitting Content-Language yields errors that never mention language.
        self::assertSame('en-US', $headers['content-language']);
    }

    public function testProductionAndSandboxAreDifferentHosts(): void
    {
        $seen = '';
        $client = new MockHttpClient(function (string $m, string $url) use (&$seen): MockResponse {
            $seen = $url;

            return new MockResponse('{}');
        });

        (new InventoryApi(new EbayTransport(
            $client,
            new StaticAccessTokenProvider('t'),
            EbayEnvironment::Production,
        )))->publishOffer('1');

        self::assertStringStartsWith('https://api.ebay.com/', $seen);
    }

    public function testPathParametersAreUrlEncoded(): void
    {
        $seen = '';
        $client = new MockHttpClient(function (string $m, string $url) use (&$seen): MockResponse {
            $seen = $url;

            return new MockResponse('{}');
        });

        (new InventoryApi(new EbayTransport($client, new StaticAccessTokenProvider('t'))))
            ->getInventoryItem('PC ANIMALS/001');

        self::assertStringContainsString('PC%20ANIMALS%2F001', $seen);
    }

    public function testHydratesTheGeneratedResponseModel(): void
    {
        [$transport] = $this->transport([new MockResponse('{"listingId":"110586523456"}')]);

        $result = (new InventoryApi($transport))->publishOffer('9876543210');

        self::assertSame('110586523456', $result->listingId);
    }

    public function testEmptyBodyIsASuccessNotAFailure(): void
    {
        [$transport] = $this->transport([new MockResponse('', ['http_code' => 204])]);

        self::assertSame([], $transport->request('DELETE', '/sell/inventory/v1/offer/1'));
    }

    public function testMapsEbayErrorsOntoTheException(): void
    {
        [$transport] = $this->transport([new MockResponse(
            (string) json_encode(['errors' => [[
                'errorId' => 25002,
                'domain' => 'API_INVENTORY',
                'category' => 'REQUEST',
                'message' => 'A user error has occurred.',
                'longMessage' => 'The SKU is already associated with another offer.',
                'parameters' => [['name' => 'sku', 'value' => 'PC-ANIMALS-001']],
            ]]]),
            ['http_code' => 400],
        )]);

        try {
            $transport->request('POST', '/sell/inventory/v1/offer');
            self::fail('expected EbayApiException');
        } catch (EbayApiException $e) {
            self::assertSame(400, $e->statusCode);
            self::assertTrue($e->hasErrorId(25002));
            self::assertStringContainsString('already associated with another offer', $e->getMessage());
            self::assertStringContainsString('sku=PC-ANIMALS-001', (string) $e->errors[0]);
        }
    }

    public function testAuthFailuresGetTheirOwnTypeBecauseRetryingCannotHelp(): void
    {
        [$transport] = $this->transport([new MockResponse('{"errors":[]}', ['http_code' => 401])]);

        $this->expectException(EbayAuthenticationException::class);
        $transport->request('GET', '/sell/inventory/v1/offer');
    }

    public function testRateLimitGetsItsOwnTypeBecauseRetryingDoesHelp(): void
    {
        [$transport] = $this->transport([new MockResponse('{"errors":[]}', ['http_code' => 429])]);

        $this->expectException(EbayRateLimitException::class);
        $transport->request('GET', '/sell/inventory/v1/offer');
    }

    public function testNonJsonErrorBodyStillRaisesUsefully(): void
    {
        [$transport] = $this->transport([new MockResponse('<html>gateway timeout</html>', ['http_code' => 504])]);

        try {
            $transport->request('GET', '/sell/inventory/v1/offer');
            self::fail('expected EbayApiException');
        } catch (EbayApiException $e) {
            self::assertSame(504, $e->statusCode);
            self::assertStringContainsString('gateway timeout', (string) $e->rawBody);
        }
    }
}
