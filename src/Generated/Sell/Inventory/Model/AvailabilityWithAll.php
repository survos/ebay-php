<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify the quantity of the inventory items that are available for purchase if the items will be shipped to the buyer, and the quantity of the inventory items that are available for In-Store Pickup at one or more of the merchant's physical stores. In-Store Pickup is only available to large merchants selling on the US, UK, Germany, and Australia sites.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AvailabilityWithAll
{
    /**
     * @param list<PickupAtLocationAvailability>|null $pickupAtLocationAvailability This container consists of an array of one or more of the merchant's physical stores where the inventory item is available for in-store pickup. The store ID, the quantity available, and the fulfillment time (how soon the...
     * @param ShipToLocationAvailabilityWithAll|null $shipToLocationAvailability This container specifies the quantity of the inventory items that are available for a standard purchase, where the item is shipped to the buyer.
     */
    public function __construct(
        public ?array $pickupAtLocationAvailability = null,
        public ?ShipToLocationAvailabilityWithAll $shipToLocationAvailability = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            pickupAtLocationAvailability: isset($data['pickupAtLocationAvailability']) && is_array($data['pickupAtLocationAvailability'])
                ? array_values(array_map(static fn (array $i): PickupAtLocationAvailability => PickupAtLocationAvailability::fromArray($i), $data['pickupAtLocationAvailability']))
                : null,
            shipToLocationAvailability: isset($data['shipToLocationAvailability']) && is_array($data['shipToLocationAvailability']) ? ShipToLocationAvailabilityWithAll::fromArray($data['shipToLocationAvailability']) : null,
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
        if ($this->pickupAtLocationAvailability !== null) {
            $data['pickupAtLocationAvailability'] = array_map(static fn (PickupAtLocationAvailability $i): array => $i->toArray(), $this->pickupAtLocationAvailability);
        }
        if ($this->shipToLocationAvailability !== null) {
            $data['shipToLocationAvailability'] = $this->shipToLocationAvailability->toArray();
        }

        return $data;
    }
}
