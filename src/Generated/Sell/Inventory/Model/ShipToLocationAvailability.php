<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShipToLocationAvailability
{
    /**
     * @param list<AvailabilityDistribution>|null $availabilityDistributions This container is used to set the available quantity of the inventory item at one or more warehouse locations. This container will be returned if available quantity is set for one or more inventory locations.
     * @param int|null $quantity This container is used to set the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers. This field represents the total quantity of the item that is...
     */
    public function __construct(
        public ?array $availabilityDistributions = null,
        public ?int $quantity = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            availabilityDistributions: isset($data['availabilityDistributions']) && is_array($data['availabilityDistributions'])
                ? array_values(array_map(static fn (array $i): AvailabilityDistribution => AvailabilityDistribution::fromArray($i), $data['availabilityDistributions']))
                : null,
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
        if ($this->availabilityDistributions !== null) {
            $data['availabilityDistributions'] = array_map(static fn (AvailabilityDistribution $i): array => $i->toArray(), $this->availabilityDistributions);
        }
        if ($this->quantity !== null) {
            $data['quantity'] = $this->quantity;
        }

        return $data;
    }
}
