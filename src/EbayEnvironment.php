<?php

declare(strict_types=1);

namespace Survos\Ebay;

/**
 * Sandbox and production are entirely separate worlds: different hosts, different
 * keysets, different user accounts, different data. A token from one is meaningless
 * to the other.
 *
 * Modelled as an enum rather than a bool so the mistake reads as a mistake --
 * `sandbox: false` on a line that scrolled off screen is how test listings become
 * real ones.
 */
enum EbayEnvironment: string
{
    case Sandbox = 'sandbox';
    case Production = 'production';

    public function apiHost(): string
    {
        return match ($this) {
            self::Sandbox => 'https://api.sandbox.ebay.com',
            self::Production => 'https://api.ebay.com',
        };
    }

    /** Where a human is sent to grant consent. */
    public function authHost(): string
    {
        return match ($this) {
            self::Sandbox => 'https://auth.sandbox.ebay.com',
            self::Production => 'https://auth.ebay.com',
        };
    }

    public function isProduction(): bool
    {
        return $this === self::Production;
    }
}
