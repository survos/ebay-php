<?php

declare(strict_types=1);

namespace Survos\Ebay\Auth;

use Survos\Ebay\EbayEnvironment;
use Survos\Ebay\Exception\EbayApiException;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * eBay's OAuth 2.0 flows.
 *
 * Two grants, and picking the wrong one is the usual first mistake:
 *
 * - `client_credentials` -> an APPLICATION token. Public data only. It cannot
 *   create a listing, and the failure it produces says "insufficient permissions"
 *   rather than "wrong grant".
 * - `authorization_code` -> a USER token, obtained by sending a human to
 *   {@see consentUrl()}. This is what publishes.
 */
final readonly class OAuthService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private EbayCredentials $credentials,
        private EbayEnvironment $environment = EbayEnvironment::Sandbox,
    ) {
    }

    /**
     * Where to send a seller to grant access.
     *
     * @param list<string> $scopes every scope the token will need; a scope not
     *                             requested here cannot be added later without
     *                             sending the seller back through consent
     * @param string|null  $state  round-tripped back to your redirect; use it for CSRF
     */
    public function consentUrl(array $scopes, ?string $state = null): string
    {
        if ($this->credentials->ruName === null) {
            throw new \LogicException(
                'consentUrl() needs the RuName. That is eBay\'s redirect-URI alias from the '
                . 'developer portal, not the redirect URL itself -- passing the URL fails with '
                . 'an unhelpful invalid_request.',
            );
        }

        $query = [
            'client_id' => $this->credentials->clientId,
            'redirect_uri' => $this->credentials->ruName,
            'response_type' => 'code',
            'scope' => implode(' ', $scopes),
        ];
        if ($state !== null) {
            $query['state'] = $state;
        }

        return $this->environment->authHost() . '/oauth2/authorize?' . http_build_query($query);
    }

    /**
     * Exchange the `code` from your redirect for a user token.
     *
     * The code is single-use and short-lived (minutes), and arrives URL-encoded --
     * decode it before calling if your framework has not already.
     */
    public function exchangeCode(string $code): EbayToken
    {
        return EbayToken::fromResponse($this->token([
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => (string) $this->credentials->ruName,
        ]));
    }

    /**
     * Trade a refresh token for a fresh access token.
     *
     * eBay does not rotate refresh tokens, so the response normally omits one and
     * the existing token carries forward.
     */
    public function refresh(EbayToken $token): EbayToken
    {
        if ($token->refreshToken === null) {
            throw new \LogicException('Cannot refresh a token that has no refresh token.');
        }

        return $token->refreshed($this->token([
            'grant_type' => 'refresh_token',
            'refresh_token' => $token->refreshToken,
            'scope' => implode(' ', $token->scopes),
        ]));
    }

    /**
     * An application token. Public data only -- it cannot list anything.
     *
     * @param list<string> $scopes
     */
    public function applicationToken(array $scopes = [EbayScope::PUBLIC_DATA]): EbayToken
    {
        return EbayToken::fromResponse($this->token([
            'grant_type' => 'client_credentials',
            'scope' => implode(' ', $scopes),
        ]));
    }

    /**
     * @param array<string, string> $body
     *
     * @return array<string, mixed>
     */
    private function token(array $body): array
    {
        $response = $this->httpClient->request('POST', $this->environment->apiHost() . '/identity/v1/oauth2/token', [
            'headers' => [
                'Authorization' => $this->credentials->basicAuthorization(),
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'body' => $body,
        ]);

        $status = $response->getStatusCode();
        $raw = $response->getContent(throw: false);
        $payload = json_decode($raw, true);
        $payload = is_array($payload) ? $payload : [];

        if ($status >= 400) {
            // The token endpoint speaks RFC 6749 ({error, error_description}), not
            // eBay's usual {errors:[...]}, so normalize before the generic mapper.
            if (!isset($payload['errors']) && isset($payload['error'])) {
                $payload['errors'] = [[
                    'errorId' => 0,
                    'message' => (string) $payload['error'],
                    'longMessage' => isset($payload['error_description'])
                        ? (string) $payload['error_description']
                        : null,
                    'domain' => 'OAUTH',
                ]];
            }

            throw EbayApiException::fromPayload($status, $payload, $raw);
        }

        return $payload;
    }
}
