<?php

declare(strict_types=1);

namespace Survos\Ebay\Auth;

/**
 * The OAuth scopes this library's APIs need.
 *
 * A token is only valid for the scopes it was minted with, and eBay rejects a call
 * whose scope is missing rather than degrading -- so the consent request has to
 * name every scope up front. Re-consent is a human action, which makes getting this
 * wrong expensive.
 */
final class EbayScope
{
    public const string SELL_INVENTORY = 'https://api.ebay.com/oauth/api_scope/sell.inventory';
    public const string SELL_ACCOUNT = 'https://api.ebay.com/oauth/api_scope/sell.account';
    public const string SELL_FULFILLMENT = 'https://api.ebay.com/oauth/api_scope/sell.fulfillment';
    public const string SELL_MARKETING = 'https://api.ebay.com/oauth/api_scope/sell.marketing';
    public const string COMMERCE_CATALOG_READONLY = 'https://api.ebay.com/oauth/api_scope/commerce.catalog.readonly';

    /** The public scope, sufficient for Taxonomy and other application-token calls. */
    public const string PUBLIC_DATA = 'https://api.ebay.com/oauth/api_scope';

    /**
     * Everything needed to create and publish a listing end to end.
     *
     * @return list<string>
     */
    public static function forListing(): array
    {
        return [self::SELL_INVENTORY, self::SELL_ACCOUNT];
    }
}
