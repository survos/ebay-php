<?php

declare(strict_types=1);

namespace Survos\Ebay\Auth;

/**
 * A fixed token. Fine for a script or a test; wrong for anything long-running,
 * since eBay user tokens last about two hours.
 */
final readonly class StaticAccessTokenProvider implements AccessTokenProviderInterface
{
    public function __construct(private string $token)
    {
    }

    public function accessToken(): string
    {
        return $this->token;
    }
}
