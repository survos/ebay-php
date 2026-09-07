<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify/indicate the quantity of the inventory item that is available for an In-Store Pickup order at the merchant's physical store (specified by the merchantLocationKey field).
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PickupAtLocationAvailability
{
    /**
     * @param string|null $availabilityType The enumeration value in this field indicates the availability status of the inventory item at the merchant's physical store specified by the pickupAtLocationAvailability.merchantLocationKey field. This field is required...
     * @param TimeDuration|null $fulfillmentTime This container is used to indicate how soon an In-Store Pickup order will be available for pickup by the buyer after the order takes place. This container is required if the pickupAtLocationAvailability container is used...
     * @param string|null $merchantLocationKey The unique identifier of a merchant's store where the In-Store Pickup inventory item is currently located, or where inventory will be sent to. If the merchant's store is currently awaiting for inventory, the availability...
     * @param int|null $quantity This integer value indicates the quantity of the inventory item that is available for In-Store Pickup at the store identified by the merchantLocationKey value. The value of quantity should be an integer value greater tha...
     */
    public function __construct(
        public ?string $availabilityType = null,
        public ?TimeDuration $fulfillmentTime = null,
        public ?string $merchantLocationKey = null,
        public ?int $quantity = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            availabilityType: isset($data['availabilityType']) ? (string) $data['availabilityType'] : null,
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
        if ($this->availabilityType !== null) {
            $data['availabilityType'] = $this->availabilityType;
        }
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
