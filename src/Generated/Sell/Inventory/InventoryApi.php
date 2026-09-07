<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory;

use Survos\Ebay\Http\EbayTransportInterface;
use Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * Inventory API.
 *
 * Generated from eBay's OpenAPI contract. Do not edit.
 * Authentication, sandbox selection and error mapping live behind the transport.
 */
final readonly class InventoryApi
{
    public const string BASE_PATH = '/sell/inventory/v1';

    public function __construct(
        private EbayTransportInterface $transport,
    ) {
    }

    /**
     * Note: Please note that any eBay listing created using the Inventory API cannot be revised or relisted using the Trading API calls. Note: Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be...
     */
    public function bulkCreateOrReplaceInventoryItem(Model\BulkInventoryItem $body): Model\BulkInventoryItemResponse
    {
        $path = self::BASE_PATH . '/bulk_create_or_replace_inventory_item';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\BulkInventoryItemResponse::fromArray($response);
    }

    /**
     * This call retrieves up to 25 inventory item records. The SKU value of each inventory item record to retrieve is specified in the request payload. Note: In addition to the authorization header, which is required for all Inventory API calls, this call also requi...
     */
    public function bulkGetInventoryItem(Model\BulkGetInventoryItem $body): Model\BulkGetInventoryItemResponse
    {
        $path = self::BASE_PATH . '/bulk_get_inventory_item';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\BulkGetInventoryItemResponse::fromArray($response);
    }

    /**
     * This call is used by the seller to update the total ship-to-home quantity of one inventory item, and/or to update the price and/or quantity of one or more offers associated with one inventory item. Up to 25 offers associated with an inventory item may be updat...
     */
    public function bulkUpdatePriceQuantity(Model\BulkPriceQuantity $body): Model\BulkPriceQuantityResponse
    {
        $path = self::BASE_PATH . '/bulk_update_price_quantity';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\BulkPriceQuantityResponse::fromArray($response);
    }

    /**
     * This call retrieves the inventory item record for a given SKU. The SKU value is passed in at the end of the call URI. There is no request payload for this call. The authorization header is the only required HTTP header for this call, and it is required for all...
     *
     * @param string $sku This path parameter specifies the seller-defined SKU value of the product whose inventory item record you wish to retrieve. Use the getInven...
     */
    public function getInventoryItem(string $sku): Model\InventoryItemWithSkuLocaleGroupid
    {
        $path = strtr(self::BASE_PATH . '/inventory_item/{sku}', [
            '{sku}' => rawurlencode($sku),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\InventoryItemWithSkuLocaleGroupid::fromArray($response);
    }

    /**
     * Note: Please note that any eBay listing created using the Inventory API cannot be revised or relisted using the Trading API calls. Note: Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be...
     *
     * @param string $sku This path parameter specifies the seller-defined SKU value for the inventory item being created or updated. SKU values must be unique across...
     */
    public function createOrReplaceInventoryItem(string $sku, Model\InventoryItem $body): Model\BaseResponse
    {
        $path = strtr(self::BASE_PATH . '/inventory_item/{sku}', [
            '{sku}' => rawurlencode($sku),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return Model\BaseResponse::fromArray($response);
    }

    /**
     * This call is used to delete an inventory item record associated with a specified SKU. A successful call will not only delete that inventory item record, but will also have the following effects:Delete any and all unpublished offers associated with that SKU;Del...
     *
     * @param string $sku This path parameter specifies the seller-defined SKU value of the product whose inventory item record you wish to delete. Use the getInvento...
     *
     * @return array<string, mixed>
     */
    public function deleteInventoryItem(string $sku): array
    {
        $path = strtr(self::BASE_PATH . '/inventory_item/{sku}', [
            '{sku}' => rawurlencode($sku),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This call retrieves all inventory item records defined for the seller's account. The limit query parameter allows the seller to control how many records are returned per page, and the offset query parameter is used to retrieve a specific page of records. The s...
     *
     * @param string|null $limit The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the...
     * @param string|null $offset The value passed in this query parameter sets the page number to retrieve. The first page of records has a value of 0, the second page of re...
     */
    public function getInventoryItems(?string $limit = null, ?string $offset = null): Model\InventoryItems
    {
        $path = self::BASE_PATH . '/inventory_item';
        $query = [];
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($offset !== null) {
            $query['offset'] = $offset;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\InventoryItems::fromArray($response);
    }

    /**
     * This call is used by the seller to retrieve the list of products that are compatible with the inventory item. The SKU value for the inventory item is passed into the call URI, and a successful call with return the compatible vehicle list associated with this i...
     *
     * @param string $sku This path parameter specifies the SKU (stock keeping unit) of the inventory item associated with the product compatibility list being retrie...
     */
    public function getProductCompatibility(string $sku): Model\Compatibility
    {
        $path = strtr(self::BASE_PATH . '/inventory_item/{sku}/product_compatibility', [
            '{sku}' => rawurlencode($sku),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\Compatibility::fromArray($response);
    }

    /**
     * This call is used by the seller to create or replace a list of products that are compatible with the inventory item. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and acc...
     *
     * @param string $sku This path parameter specifies the SKU (stock keeping unit) of the inventory item associated with the compatibility list being created. Use t...
     */
    public function createOrReplaceProductCompatibility(string $sku, Model\Compatibility $body): Model\BaseResponse
    {
        $path = strtr(self::BASE_PATH . '/inventory_item/{sku}/product_compatibility', [
            '{sku}' => rawurlencode($sku),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return Model\BaseResponse::fromArray($response);
    }

    /**
     * This call is used by the seller to delete the list of products that are compatible with the inventory item that is associated with the compatible product list. The inventory item is identified with a SKU value in the URI. Product compatibility is currently onl...
     *
     * @param string $sku This path parameter specifies the SKU (stock keeping unit) of the inventory item that is associated with the product compatibility list that...
     *
     * @return array<string, mixed>
     */
    public function deleteProductCompatibility(string $sku): array
    {
        $path = strtr(self::BASE_PATH . '/inventory_item/{sku}/product_compatibility', [
            '{sku}' => rawurlencode($sku),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This call retrieves the inventory item group for a given inventoryItemGroupKey value. The inventoryItemGroupKey value is passed in at the end of the call URI.
     *
     * @param string $inventoryItemGroupKey This path parameter specifies the unique identifier of the inventory item group being retrieved. This value is assigned by the seller when a...
     */
    public function getInventoryItemGroup(string $inventoryItemGroupKey): Model\InventoryItemGroup
    {
        $path = strtr(self::BASE_PATH . '/inventory_item_group/{inventoryItemGroupKey}', [
            '{inventoryItemGroupKey}' => rawurlencode($inventoryItemGroupKey),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\InventoryItemGroup::fromArray($response);
    }

    /**
     * Note: Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day. This call creates a new inventory item group or updates an existing inv...
     *
     * @param string $inventoryItemGroupKey This path parameter specifies the unique identifier of the inventory item group being created or updated. This identifier is defined by the...
     */
    public function createOrReplaceInventoryItemGroup(string $inventoryItemGroupKey, Model\InventoryItemGroup $body): Model\BaseResponse
    {
        $path = strtr(self::BASE_PATH . '/inventory_item_group/{inventoryItemGroupKey}', [
            '{inventoryItemGroupKey}' => rawurlencode($inventoryItemGroupKey),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return Model\BaseResponse::fromArray($response);
    }

    /**
     * This call deletes the inventory item group for a given inventoryItemGroupKey value.
     *
     * @param string $inventoryItemGroupKey This path parameter specifies the unique identifier of the inventory item group being deleted. This value is assigned by the seller when an...
     *
     * @return array<string, mixed>
     */
    public function deleteInventoryItemGroup(string $inventoryItemGroupKey): array
    {
        $path = strtr(self::BASE_PATH . '/inventory_item_group/{inventoryItemGroupKey}', [
            '{inventoryItemGroupKey}' => rawurlencode($inventoryItemGroupKey),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This call is used to convert existing eBay Listings to the corresponding Inventory API objects. If an eBay listing is successfully migrated to the Inventory API model, new Inventory Location, Inventory Item, and Offer objects are created. For a multiple-variat...
     */
    public function bulkMigrateListing(Model\BulkMigrateListing $body): Model\BulkMigrateListingResponse
    {
        $path = self::BASE_PATH . '/bulk_migrate_listing';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\BulkMigrateListingResponse::fromArray($response);
    }

    /**
     * This method allows sellers to retrieve the locations mapped to a specific SKU within a listing. The listingId and sku of the listing are passed in as path parameters. This method only retrieves location mappings for a single SKU value; if a seller wishes to re...
     *
     * @param string $listingId This path parameter specifies the unique identifier of the listing that the SKU belongs to for which all mapped locations will be retrieved....
     * @param string $sku This path parameter specifies the seller-defined SKU value of the item/variation for which location mappings will be retrieved. This SKU val...
     */
    public function getSkuLocationMapping(string $listingId, string $sku): Model\LocationMapping
    {
        $path = strtr(self::BASE_PATH . '/listing/{listingId}/sku/{sku}/locations', [
            '{listingId}' => rawurlencode($listingId),
            '{sku}' => rawurlencode($sku),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\LocationMapping::fromArray($response);
    }

    /**
     * This method allows sellers to map multiple fulfillment center locations to single-SKU listing, or to a single SKU within a multiple-variation listing. This allows eBay to leverage the location metadata associated with a seller’s fulfillment centers to calculat...
     *
     * @param string $listingId This path parameter specifies the unique identifier of the listing for which multiple fulfillment center locations will be mapped to a SKU w...
     * @param string $sku This path parameter specifies the seller-defined SKU value of the item/variation for which multiple fulfillment center locations will be map...
     *
     * @return array<string, mixed>
     */
    public function createOrReplaceSkuLocationMapping(string $listingId, string $sku, Model\LocationMapping $body): array
    {
        $path = strtr(self::BASE_PATH . '/listing/{listingId}/sku/{sku}/locations', [
            '{listingId}' => rawurlencode($listingId),
            '{sku}' => rawurlencode($sku),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This method allows sellers to remove all location mappings associated with a specific SKU within a listing. The listingId and sku of the listing are passed in as path parameters. Important! To remove all location mappings from a multiple-variation listing, thi...
     *
     * @param string $listingId This path parameter specifies the unique identifier of the listing that the SKU belongs to for which all mapped locations will be removed. U...
     * @param string $sku This path parameter specifies the seller-defined SKU value of the item/variation for which location mappings will be removed. This SKU value...
     *
     * @return array<string, mixed>
     */
    public function deleteSkuLocationMapping(string $listingId, string $sku): array
    {
        $path = strtr(self::BASE_PATH . '/listing/{listingId}/sku/{sku}/locations', [
            '{listingId}' => rawurlencode($listingId),
            '{sku}' => rawurlencode($sku),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This call creates multiple offers (up to 25) for specific inventory items on a specific eBay marketplace. Although it is not a requirement for the seller to create complete offers (with all necessary details) right from the start, eBay recommends that the sell...
     */
    public function bulkCreateOffer(Model\BulkEbayOfferDetailsWithKeys $body): Model\BulkOfferResponse
    {
        $path = self::BASE_PATH . '/bulk_create_offer';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\BulkOfferResponse::fromArray($response);
    }

    /**
     * Note: Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day. This call is used to convert unpublished offers (up to 25) into publish...
     */
    public function bulkPublishOffer(Model\BulkOffer $body): Model\BulkPublishResponse
    {
        $path = self::BASE_PATH . '/bulk_publish_offer';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\BulkPublishResponse::fromArray($response);
    }

    /**
     * This call retrieves all existing offers for the specified SKU value. The seller has the option of limiting the offers that are retrieved to a specific eBay marketplace, or to a listing format. Note: At this time, the same SKU value can not be offered across mu...
     *
     * @param string|null $format This enumeration value sets the listing format for the offers being retrieved. This query parameter will be passed in if the seller only wan...
     * @param string|null $limit The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the...
     * @param string|null $marketplace_id The unique identifier of the eBay marketplace. This query parameter will be passed in if the seller only wants to see the product's offers o...
     * @param string|null $offset The value passed in this query parameter sets the page number to retrieve. Although this field is a string, the value passed in this field s...
     * @param string|null $sku The seller-defined SKU value is passed in as a query parameter. All offers associated with this product are returned in the response. Note:...
     */
    public function getOffers(?string $format = null, ?string $limit = null, ?string $marketplace_id = null, ?string $offset = null, ?string $sku = null): Model\Offers
    {
        $path = self::BASE_PATH . '/offer';
        $query = [];
        if ($format !== null) {
            $query['format'] = $format;
        }
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($marketplace_id !== null) {
            $query['marketplace_id'] = $marketplace_id;
        }
        if ($offset !== null) {
            $query['offset'] = $offset;
        }
        if ($sku !== null) {
            $query['sku'] = $sku;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\Offers::fromArray($response);
    }

    /**
     * This call creates an offer for a specific inventory item on a specific eBay marketplace. It is up to the sellers whether they want to create a complete offer (with all necessary details) right from the start, or sellers can provide only some information with t...
     */
    public function createOffer(Model\EbayOfferDetailsWithKeys $body): Model\OfferResponse
    {
        $path = self::BASE_PATH . '/offer';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\OfferResponse::fromArray($response);
    }

    /**
     * This call retrieves a specific published or unpublished offer. The unique identifier of the offer (offerId) is passed in at the end of the call URI.The authorization header is the only required HTTP header for this call. See the HTTP request headers section fo...
     *
     * @param string $offerId This path parameter specifies the unique identifier of the offer that is to be retrieved. Use the getOffers method to retrieve offer IDs.
     */
    public function getOffer(string $offerId): Model\EbayOfferDetailsWithAll
    {
        $path = strtr(self::BASE_PATH . '/offer/{offerId}', [
            '{offerId}' => rawurlencode($offerId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\EbayOfferDetailsWithAll::fromArray($response);
    }

    /**
     * This call updates an existing offer. An existing offer may be in published state (active eBay listing), or in an unpublished state and yet to be published with the publishOffer call. The unique identifier (offerId) for the offer to update is passed in at the e...
     *
     * @param string $offerId This path parameter specifies the unique identifier of the offer being updated. Use the getOffers method to retrieve offer IDs.
     */
    public function updateOffer(string $offerId, Model\EbayOfferDetailsWithId $body): Model\OfferResponse
    {
        $path = strtr(self::BASE_PATH . '/offer/{offerId}', [
            '{offerId}' => rawurlencode($offerId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return Model\OfferResponse::fromArray($response);
    }

    /**
     * If used against an unpublished offer, this call will permanently delete that offer. In the case of a published offer (or live eBay listing), a successful call will either end the single-variation listing associated with the offer, or it will remove that produc...
     *
     * @param string $offerId This path parameter specifies the unique identifier of the offer being deleted. Use the getOffers method to retrieve offer IDs.
     *
     * @return array<string, mixed>
     */
    public function deleteOffer(string $offerId): array
    {
        $path = strtr(self::BASE_PATH . '/offer/{offerId}', [
            '{offerId}' => rawurlencode($offerId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This call is used to retrieve the expected listing fees for up to 250 unpublished offers. An array of one or more offerId values are passed in under the offers container. In the response payload, all listing fees are grouped by eBay marketplace, and listing fe...
     */
    public function getListingFees(Model\OfferKeysWithId $body): Model\FeesSummaryResponse
    {
        $path = self::BASE_PATH . '/offer/get_listing_fees';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\FeesSummaryResponse::fromArray($response);
    }

    /**
     * Note: Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day. This call is used to convert an unpublished offer into a published offe...
     *
     * @param string $offerId This path parameter specifies the unique identifier of the offer that is to be published. Use the getOffers method to retrieve offer IDs.
     */
    public function publishOffer(string $offerId): Model\PublishResponse
    {
        $path = strtr(self::BASE_PATH . '/offer/{offerId}/publish', [
            '{offerId}' => rawurlencode($offerId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, null, $headers);
        return Model\PublishResponse::fromArray($response);
    }

    /**
     * Note: Please note that any eBay listing created using the Inventory API cannot be revised or relisted using the Trading API calls. Note: Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be...
     */
    public function publishOfferByInventoryItemGroup(Model\PublishByInventoryItemGroupRequest $body): Model\PublishResponse
    {
        $path = self::BASE_PATH . '/offer/publish_by_inventory_item_group';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\PublishResponse::fromArray($response);
    }

    /**
     * This call is used to end a single-variation listing that is associated with the specified offer. This call is used in place of the deleteOffer call if the seller only wants to end the listing associated with the offer but does not want to delete the offer obje...
     *
     * @param string $offerId This path parameter specifies the unique identifier of the offer that is to be withdrawn. Use the getOffers method to retrieve offer IDs.
     */
    public function withdrawOffer(string $offerId): Model\WithdrawResponse
    {
        $path = strtr(self::BASE_PATH . '/offer/{offerId}/withdraw', [
            '{offerId}' => rawurlencode($offerId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, null, $headers);
        return Model\WithdrawResponse::fromArray($response);
    }

    /**
     * This call is used to end a multiple-variation eBay listing that is associated with the specified inventory item group. This call only ends multiple-variation eBay listing associated with the inventory item group but does not delete the inventory item group obj...
     *
     * @return array<string, mixed>
     */
    public function withdrawOfferByInventoryItemGroup(Model\WithdrawByInventoryItemGroupRequest $body): array
    {
        $path = self::BASE_PATH . '/offer/withdraw_by_inventory_item_group';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This call retrieves all defined details of the inventory location that is specified by the merchantLocationKey path parameter.A successful call will return an HTTP status value of 200 OK.
     *
     * @param string $merchantLocationKey This path parameter specifies the unique merchant-defined key (ID) for an inventory location that is being retrieved. Use the getInventoryLo...
     */
    public function getInventoryLocation(string $merchantLocationKey): Model\InventoryLocationResponse
    {
        $path = strtr(self::BASE_PATH . '/location/{merchantLocationKey}', [
            '{merchantLocationKey}' => rawurlencode($merchantLocationKey),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\InventoryLocationResponse::fromArray($response);
    }

    /**
     * Use this call to create a new inventory location. In order to create and publish an offer (and create an eBay listing), a seller must have at least one location, as every offer must be associated with at least one location.Important!Publish offer note: Fields...
     *
     * @param string $merchantLocationKey This path parameter specifies the unique, seller-defined key (ID) for an inventory location. Max length: 36
     *
     * @return array<string, mixed>
     */
    public function createInventoryLocation(string $merchantLocationKey, Model\InventoryLocationFull $body): array
    {
        $path = strtr(self::BASE_PATH . '/location/{merchantLocationKey}', [
            '{merchantLocationKey}' => rawurlencode($merchantLocationKey),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This call deletes the inventory location that is specified in the merchantLocationKey path parameter. Note that deleting a location will not affect any active eBay listings associated with the deleted location, but the seller will not be able modify the offers...
     *
     * @param string $merchantLocationKey This path parameter specifies the unique merchant-defined key (ID) for the inventory location that is to be deleted. Use the getInventoryLoc...
     *
     * @return array<string, mixed>
     */
    public function deleteInventoryLocation(string $merchantLocationKey): array
    {
        $path = strtr(self::BASE_PATH . '/location/{merchantLocationKey}', [
            '{merchantLocationKey}' => rawurlencode($merchantLocationKey),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This call disables the inventory location that is specified in the merchantLocationKey path parameter. Sellers can not load/modify inventory to disabled locations. Note that disabling a location will not affect any active eBay listings associated with the disa...
     *
     * @param string $merchantLocationKey This path parameter specifies the unique merchant-defined key (ID) for an inventory location that is to be disabled. Use the getInventoryLoc...
     *
     * @return array<string, mixed>
     */
    public function disableInventoryLocation(string $merchantLocationKey): array
    {
        $path = strtr(self::BASE_PATH . '/location/{merchantLocationKey}/disable', [
            '{merchantLocationKey}' => rawurlencode($merchantLocationKey),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This call enables a disabled inventory location that is specified in the merchantLocationKey path parameter. Once a disabled location is enabled, sellers can start loading/modifying inventory to that location. A successful call will return an HTTP status value...
     *
     * @param string $merchantLocationKey This path parameter specifies unique merchant-defined key (ID) for a disabled inventory location that is to be enabled. Use the getInventory...
     *
     * @return array<string, mixed>
     */
    public function enableInventoryLocation(string $merchantLocationKey): array
    {
        $path = strtr(self::BASE_PATH . '/location/{merchantLocationKey}/enable', [
            '{merchantLocationKey}' => rawurlencode($merchantLocationKey),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This call retrieves all defined details for every inventory location associated with the seller's account. There are no required parameters for this call and no request payload. However, there are two optional query parameters, limit and offset. The limit quer...
     *
     * @param string|null $limit The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the...
     * @param string|null $offset Specifies the number of locations to skip in the result set before returning the first location in the paginated response. Combine offset wi...
     */
    public function getInventoryLocations(?string $limit = null, ?string $offset = null): Model\LocationResponse
    {
        $path = self::BASE_PATH . '/location';
        $query = [];
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($offset !== null) {
            $query['offset'] = $offset;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\LocationResponse::fromArray($response);
    }

    /**
     * Use this call to update location details for an existing inventory location. Specify the inventory location you want to update using the merchantLocationKey path parameter. You can update the following text-based fields: name, phone, timeZoneId, geoCoordinates...
     *
     * @param string $merchantLocationKey This path parameter specifies the unique merchant-defined key (ID) for an inventory location that is to be updated. Use the getInventoryLoca...
     *
     * @return array<string, mixed>
     */
    public function updateInventoryLocation(string $merchantLocationKey, Model\InventoryLocation $body): array
    {
        $path = strtr(self::BASE_PATH . '/location/{merchantLocationKey}/update_location_details', [
            '{merchantLocationKey}' => rawurlencode($merchantLocationKey),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }
}
