<?php

declare(strict_types=1);

namespace Survos\Ebay\Auth;

/**
 * Supplies the bearer token for each request.
 *
 * The transport asks on every call rather than holding one, so refresh can happen
 * transparently without the transport knowing tokens expire.
 */
interface AccessTokenProviderInterface
{
    /** @throws \Survos\Ebay\Exception\EbayAuthenticationException when no usable token can be produced */
    public function accessToken(): string;
}
