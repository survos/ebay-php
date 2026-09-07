<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type provides an array of locations that are associated with a SKU within a listing.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LocationMapping
{
    /**
     * @param list<LocationAvailabilityDetails>|null $locations This array represents a collection of fulfillment center locations mapped to a SKU. Note: Only the first 50 locations mapped to a SKU will be considered when calculating estimated delivery dates. Sellers can set up more...
     */
    public function __construct(
        public ?array $locations = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            locations: isset($data['locations']) && is_array($data['locations'])
                ? array_values(array_map(static fn (array $i): LocationAvailabilityDetails => LocationAvailabilityDetails::fromArray($i), $data['locations']))
                : null,
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
        if ($this->locations !== null) {
            $data['locations'] = array_map(static fn (LocationAvailabilityDetails $i): array => $i->toArray(), $this->locations);
        }

        return $data;
    }
}
