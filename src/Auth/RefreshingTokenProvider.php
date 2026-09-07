<?php

declare(strict_types=1);

namespace Survos\Ebay\Auth;

use Survos\Ebay\Exception\EbayAuthenticationException;

/**
 * Refreshes the access token when it is close to expiring, and hands the
 * replacement back to the caller's store.
 *
 * Storage is a pair of callables rather than an interface so this library stays
 * free of any persistence opinion -- Doctrine, a file, an env var, all fine.
 *
 * The $persist callback is invoked with the NEW token before it is used. Persist
 * synchronously: if the process dies between eBay issuing a token and the store
 * committing it, eBay's copy and yours disagree. That is survivable on eBay, whose
 * refresh tokens are stable and reusable, and fatal on providers that rotate them.
 */
final class RefreshingTokenProvider implements AccessTokenProviderInterface
{
    /** @var callable(): ?EbayToken */
    private $load;

    /** @var callable(EbayToken): void */
    private $persist;

    private ?EbayToken $cached = null;

    /**
     * @param callable(): ?EbayToken      $load
     * @param callable(EbayToken): void   $persist
     */
    public function __construct(
        private readonly OAuthService $oauth,
        callable $load,
        callable $persist,
        private readonly int $leewaySeconds = 60,
    ) {
        $this->load = $load;
        $this->persist = $persist;
    }

    public function accessToken(): string
    {
        $token = $this->cached ??= ($this->load)();

        if ($token === null) {
            throw new EbayAuthenticationException(
                401,
                [],
                'No stored eBay token. Send the seller through OAuthService::consentUrl() first.',
            );
        }

        if (!$token->isExpired(leewaySeconds: $this->leewaySeconds)) {
            return $token->accessToken;
        }

        if (!$token->canRefresh()) {
            throw new EbayAuthenticationException(
                401,
                [],
                'The eBay access token has expired and the refresh token is missing or expired. '
                . 'Re-consent is required: send the seller through OAuthService::consentUrl().',
            );
        }

        $refreshed = $this->oauth->refresh($token);
        ($this->persist)($refreshed);
        $this->cached = $refreshed;

        return $refreshed->accessToken;
    }
}
