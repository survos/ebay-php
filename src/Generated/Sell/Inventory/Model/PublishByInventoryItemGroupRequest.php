<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the request payload of the publishByInventoryItemGroup call. The identifier of the inventory item group to publish and the eBay marketplace where the listing will be published is needed in the request payload.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PublishByInventoryItemGroupRequest
{
    /**
     * @param string|null $inventoryItemGroupKey This is the unique identifier of the inventory item group. All unpublished offers associated with this inventory item group will be published as a multiple-variation listing if the publishByInventoryItemGroup call is suc...
     * @param string|null $marketplaceId This is the unique identifier of the eBay site on which the multiple-variation listing will be published. The marketplaceId enumeration values are found in MarketplaceEnum. For implementation help, refer to eBay API docu...
     */
    public function __construct(
        public ?string $inventoryItemGroupKey = null,
        public ?string $marketplaceId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            inventoryItemGroupKey: isset($data['inventoryItemGroupKey']) ? (string) $data['inventoryItemGroupKey'] : null,
            marketplaceId: isset($data['marketplaceId']) ? (string) $data['marketplaceId'] : null,
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
        if ($this->inventoryItemGroupKey !== null) {
            $data['inventoryItemGroupKey'] = $this->inventoryItemGroupKey;
        }
        if ($this->marketplaceId !== null) {
            $data['marketplaceId'] = $this->marketplaceId;
        }

        return $data;
    }
}
