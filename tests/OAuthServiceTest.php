<?php

declare(strict_types=1);

namespace Survos\Ebay\Tests;

use PHPUnit\Framework\TestCase;
use Survos\Ebay\Auth\EbayCredentials;
use Survos\Ebay\Auth\EbayScope;
use Survos\Ebay\Auth\EbayToken;
use Survos\Ebay\Auth\OAuthService;
use Survos\Ebay\Auth\RefreshingTokenProvider;
use Survos\Ebay\EbayEnvironment;
use Survos\Ebay\Exception\EbayApiException;
use Survos\Ebay\Exception\EbayAuthenticationException;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class OAuthServiceTest extends TestCase
{
    private function credentials(): EbayCredentials
    {
        return new EbayCredentials('client-id', 'client-secret', 'Tac-App-PRD-abc123');
    }

    public function testConsentUrlUsesTheSandboxAuthHostAndTheRuName(): void
    {
        $service = new OAuthService(new MockHttpClient(), $this->credentials(), EbayEnvironment::Sandbox);

        $url = $service->consentUrl(EbayScope::forListing(), state: 'csrf-token');

        self::assertStringStartsWith('https://auth.sandbox.ebay.com/oauth2/authorize?', $url);
        parse_str((string) parse_url($url, PHP_URL_QUERY), $query);

        self::assertSame('client-id', $query['client_id']);
        self::assertSame('Tac-App-PRD-abc123', $query['redirect_uri'], 'eBay wants the RuName alias, not a URL');
        self::assertSame('code', $query['response_type']);
        self::assertSame('csrf-token', $query['state']);
        $scope = $query['scope'];
        self::assertIsString($scope);
        self::assertStringContainsString('sell.inventory', $scope);
        self::assertStringContainsString('sell.account', $scope);
    }

    public function testConsentUrlWithoutARuNameSaysWhatIsActuallyWrong(): void
    {
        $service = new OAuthService(new MockHttpClient(), new EbayCredentials('id', 'secret'));

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('redirect-URI alias');

        $service->consentUrl([EbayScope::PUBLIC_DATA]);
    }

    public function testExchangeCodeSendsBasicAuthAndReturnsBothTokens(): void
    {
        $seen = ['url' => '', 'headers' => [], 'body' => ''];
        $client = new MockHttpClient(function (string $method, string $url, array $options) use (&$seen): MockResponse {
            $seen = ['url' => $url, 'headers' => $options['headers'], 'body' => $options['body']];

            return new MockResponse((string) json_encode([
                'access_token' => 'user-access',
                'expires_in' => 7200,
                'refresh_token' => 'user-refresh',
                'refresh_token_expires_in' => 47304000,
                'scope' => EbayScope::SELL_INVENTORY . ' ' . EbayScope::SELL_ACCOUNT,
            ]));
        });

        $token = (new OAuthService($client, $this->credentials()))->exchangeCode('v^1.1#i^1#code');

        self::assertSame('https://api.sandbox.ebay.com/identity/v1/oauth2/token', $seen['url']);
        self::assertContains(
            'Authorization: Basic ' . base64_encode('client-id:client-secret'),
            $seen['headers'],
        );
        self::assertStringContainsString('grant_type=authorization_code', (string) $seen['body']);

        self::assertSame('user-access', $token->accessToken);
        self::assertSame('user-refresh', $token->refreshToken);
        self::assertCount(2, $token->scopes);
        self::assertFalse($token->isExpired());
    }

    public function testRefreshCarriesTheExistingRefreshTokenForward(): void
    {
        // eBay does not rotate refresh tokens, so the response omits one.
        $client = new MockHttpClient([new MockResponse((string) json_encode([
            'access_token' => 'fresh-access',
            'expires_in' => 7200,
        ]))]);

        $existing = new EbayToken(
            accessToken: 'stale',
            expiresAt: new \DateTimeImmutable('-1 hour'),
            refreshToken: 'long-lived-refresh',
            refreshTokenExpiresAt: new \DateTimeImmutable('+18 months'),
            scopes: [EbayScope::SELL_INVENTORY],
        );

        $refreshed = (new OAuthService($client, $this->credentials()))->refresh($existing);

        self::assertSame('fresh-access', $refreshed->accessToken);
        self::assertSame('long-lived-refresh', $refreshed->refreshToken);
        self::assertSame([EbayScope::SELL_INVENTORY], $refreshed->scopes);
        self::assertFalse($refreshed->isExpired());
    }

    public function testTokenEndpointErrorsAreNormalizedFromRfc6749Shape(): void
    {
        // The token endpoint speaks {error, error_description}, not eBay's {errors:[]}.
        $client = new MockHttpClient([new MockResponse(
            (string) json_encode(['error' => 'invalid_grant', 'error_description' => 'the code has expired']),
            ['http_code' => 400],
        )]);

        try {
            (new OAuthService($client, $this->credentials()))->exchangeCode('stale-code');
            self::fail('expected EbayApiException');
        } catch (EbayApiException $e) {
            self::assertSame(400, $e->statusCode);
            self::assertStringContainsString('the code has expired', $e->getMessage());
            self::assertSame('OAUTH', $e->errors[0]->domain);
        }
    }

    public function testApplicationTokenUsesClientCredentials(): void
    {
        $seen = '';
        $client = new MockHttpClient(function (string $m, string $u, array $o) use (&$seen): MockResponse {
            $seen = $o['body'];

            return new MockResponse((string) json_encode(['access_token' => 'app', 'expires_in' => 7200]));
        });

        $token = (new OAuthService($client, $this->credentials()))->applicationToken();

        self::assertStringContainsString('grant_type=client_credentials', (string) $seen);
        self::assertNull($token->refreshToken, 'application tokens cannot be refreshed');
    }
}

final class RefreshingTokenProviderTest extends TestCase
{
    private function oauth(MockHttpClient $client): OAuthService
    {
        return new OAuthService($client, new EbayCredentials('id', 'secret', 'Ru-Name'));
    }

    public function testReturnsAStillValidTokenWithoutCallingEbay(): void
    {
        $client = new MockHttpClient([]); // any request would blow up
        $token = new EbayToken('good', new \DateTimeImmutable('+1 hour'), 'r');

        $provider = new RefreshingTokenProvider(
            $this->oauth($client),
            static fn (): EbayToken => $token,
            static function (EbayToken $t): void {},
        );

        self::assertSame('good', $provider->accessToken());
    }

    public function testRefreshesAndPersistsTheReplacementBeforeUsingIt(): void
    {
        $client = new MockHttpClient([new MockResponse(
            (string) json_encode(['access_token' => 'fresh', 'expires_in' => 7200]),
        )]);

        $persisted = null;
        $provider = new RefreshingTokenProvider(
            $this->oauth($client),
            static fn (): EbayToken => new EbayToken(
                'stale',
                new \DateTimeImmutable('-1 minute'),
                'refresh-me',
                new \DateTimeImmutable('+1 year'),
            ),
            function (EbayToken $t) use (&$persisted): void { $persisted = $t; },
        );

        self::assertSame('fresh', $provider->accessToken());
        self::assertNotNull($persisted, 'the new token must reach the store');
        self::assertSame('fresh', $persisted->accessToken);
    }

    public function testNoStoredTokenPointsAtConsentRatherThanFailingVaguely(): void
    {
        $provider = new RefreshingTokenProvider(
            $this->oauth(new MockHttpClient([])),
            static fn (): ?EbayToken => null,
            static function (EbayToken $t): void {},
        );

        $this->expectException(EbayAuthenticationException::class);
        $this->expectExceptionMessage('consentUrl');

        $provider->accessToken();
    }

    public function testExpiredBeyondRefreshDemandsReConsent(): void
    {
        $provider = new RefreshingTokenProvider(
            $this->oauth(new MockHttpClient([])),
            static fn (): EbayToken => new EbayToken(
                'stale',
                new \DateTimeImmutable('-1 day'),
                'dead-refresh',
                new \DateTimeImmutable('-1 hour'),
            ),
            static function (EbayToken $t): void {},
        );

        $this->expectException(EbayAuthenticationException::class);
        $this->expectExceptionMessage('Re-consent is required');

        $provider->accessToken();
    }
}
