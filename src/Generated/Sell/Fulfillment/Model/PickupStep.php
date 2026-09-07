<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used to indicate the merchant's store where the buyer will pickup their In-Store Pickup order. The pickupStep container is only returned for In-Store Pickup orders. The In-Store Pickup feature is supported in the US, Canada, UK, Germany, and Australia marketplaces.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PickupStep
{
    /**
     * @param string|null $merchantLocationKey A merchant-defined unique identifier of the merchant's store where the buyer will pick up their In-Store Pickup order. This field is always returned with the pickupStep container.
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
