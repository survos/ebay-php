<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the inventoryItems container that is returned in the response of the bulkMigrateListing call. Up to five sku/offerId pairs may be returned under the inventoryItems container, dependent on how many eBay listings the seller is attempting to migrate to the inventory model.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryItemListing
{
    /**
     * @param string|null $offerId Upon a successful migration of a listing, eBay auto-generates this unique identifier, and this offer ID value will be used to retrieve and manage the newly-created offer object. This value will only be generated and retu...
     * @param string|null $sku This is the seller-defined SKU value associated with the item(s) in a listing. This same SKU value will be used to retrieve and manage the newly-created inventory item object if the listing migration is successful. This...
     */
    public function __construct(
        public ?string $offerId = null,
        public ?string $sku = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            offerId: isset($data['offerId']) ? (string) $data['offerId'] : null,
            sku: isset($data['sku']) ? (string) $data['sku'] : null,
        );
    }

    /**
     * Null properties are omitted: eBay rejects some explicit nulls and reads
     * others as "clear this field", so emitting them is never harmless.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $data = [];
        if ($this->offerId !== null) {
            $data['offerId'] = $this->offerId;
        }
        if ($this->sku !== null) {
            $data['sku'] = $this->sku;
        }

        return $data;
    }
}
