<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type provides the unique identifier of an inventory location that is associated with a SKU within a listing.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LocationAvailabilityDetails
{
    /**
     * @param string|null $merchantLocationKey The unique identifier of a seller’s fulfillment center location where inventory is available for the item or item variation. Note: When creating a location mapping using the createOrReplaceSkuLocationMapping method, the...
     */
    public function __construct(
        public ?string $merchantLocationKey = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            merchantLocationKey: isset($data['merchantLocationKey']) ? (string) $data['merchantLocationKey'] : null,
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
        if ($this->merchantLocationKey !== null) {
            $data['merchantLocationKey'] = $this->merchantLocationKey;
        }

        return $data;
    }
}
