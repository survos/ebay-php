<?php

declare(strict_types=1);

namespace Survos\Ebay\Auth;

/**
 * An eBay OAuth token pair.
 *
 * Deliberately eBay's own type rather than survos/marketplace-contracts'
 * MarketplaceToken: this library stands alone, and the bundle's adapter maps
 * between them. Depending on the contracts package here would make a plain-PHP
 * eBay consumer pull in a marketplace abstraction it never asked for.
 *
 * eBay's user access token lasts about 2 hours and its refresh token about 18
 * months. Unlike Mercado Libre, eBay does NOT rotate the refresh token on use, so
 * a refresh response usually omits it -- {@see refreshed()} carries the existing
 * one forward in that case.
 */
final readonly class EbayToken
{
    /** @param list<string> $scopes */
    public function __construct(
        public string $accessToken,
        public \DateTimeImmutable $expiresAt,
        public ?string $refreshToken = null,
        public ?\DateTimeImmutable $refreshTokenExpiresAt = null,
        public array $scopes = [],
    ) {
    }

    /**
     * @param array<string, mixed> $payload eBay's token endpoint response
     */
    public static function fromResponse(array $payload, ?\DateTimeImmutable $now = null): self
    {
        $now ??= new \DateTimeImmutable();
        $scopes = isset($payload['scope']) && is_string($payload['scope'])
            ? array_values(array_filter(explode(' ', $payload['scope'])))
            : [];

        return new self(
            accessToken: (string) ($payload['access_token'] ?? ''),
            expiresAt: $now->modify(sprintf('+%d seconds', (int) ($payload['expires_in'] ?? 0))),
            refreshToken: isset($payload['refresh_token']) ? (string) $payload['refresh_token'] : null,
            refreshTokenExpiresAt: isset($payload['refresh_token_expires_in'])
                ? $now->modify(sprintf('+%d seconds', (int) $payload['refresh_token_expires_in']))
                : null,
            scopes: $scopes,
        );
    }

    /** Expire early, so a call started just inside the window does not land outside it. */
    public function isExpired(?\DateTimeImmutable $now = null, int $leewaySeconds = 60): bool
    {
        $now ??= new \DateTimeImmutable();

        return $this->expiresAt <= $now->modify(sprintf('+%d seconds', $leewaySeconds));
    }

    public function canRefresh(?\DateTimeImmutable $now = null): bool
    {
        if ($this->refreshToken === null) {
            return false;
        }

        return $this->refreshTokenExpiresAt === null
            || $this->refreshTokenExpiresAt > ($now ?? new \DateTimeImmutable());
    }

    /**
     * @param array<string, mixed> $payload
     */
    public function refreshed(array $payload, ?\DateTimeImmutable $now = null): self
    {
        $next = self::fromResponse($payload, $now);

        return new self(
            accessToken: $next->accessToken,
            expiresAt: $next->expiresAt,
            // eBay normally omits refresh_token on refresh; keep the long-lived one.
            refreshToken: $next->refreshToken ?? $this->refreshToken,
            refreshTokenExpiresAt: $next->refreshToken !== null
                ? $next->refreshTokenExpiresAt
                : $this->refreshTokenExpiresAt,
            scopes: $next->scopes !== [] ? $next->scopes : $this->scopes,
        );
    }
}
