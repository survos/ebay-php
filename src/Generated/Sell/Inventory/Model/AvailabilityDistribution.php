<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to set the available quantity of the inventory item at one or more warehouse locations.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AvailabilityDistribution
{
    /**
     * @param TimeDuration|null $fulfillmentTime This container is used to indicate the expected fulfillment time if the inventory item is shipped from the warehouse location identified in the corresponding merchantLocationKey field. The fulfillment time is the estimat...
     * @param string|null $merchantLocationKey The unique identifier of an inventory location where quantity is available for the inventory item. This field is conditionally required to identify the inventory location that has quantity of the inventory item. Use the...
     * @param int|null $quantity The integer value passed into this field indicates the quantity of the inventory item that is available at this inventory location. This field is conditionally required.
     */
    public function __construct(
        public ?TimeDuration $fulfillmentTime = null,
        public ?string $merchantLocationKey = null,
        public ?int $quantity = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fulfillmentTime: isset($data['fulfillmentTime']) && is_array($data['fulfillmentTime']) ? TimeDuration::fromArray($data['fulfillmentTime']) : null,
            merchantLocationKey: isset($data['merchantLocationKey']) ? (string) $data['merchantLocationKey'] : null,
            quantity: isset($data['quantity']) ? (int) $data['quantity'] : null,
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
        if ($this->fulfillmentTime !== null) {
            $data['fulfillmentTime'] = $this->fulfillmentTime->toArray();
        }
        if ($this->merchantLocationKey !== null) {
            $data['merchantLocationKey'] = $this->merchantLocationKey;
        }
        if ($this->quantity !== null) {
            $data['quantity'] = $this->quantity;
        }

        return $data;
    }
}
