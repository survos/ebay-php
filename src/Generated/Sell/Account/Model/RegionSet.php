<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type consists of the regionIncluded and regionExcluded arrays, which indicate the areas to where the seller does and doesn't ship.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class RegionSet
{
    /**
     * @param list<Region>|null $regionExcluded An array of one or more regionName values that specify the areas to where a seller does not ship. A regionExcluded list should only be set in the top-level shipToLocations container and not within the shippingServices.sh...
     * @param list<Region>|null $regionIncluded An array of one or more regionName fields that specify the areas to where a seller ships. Each eBay marketplace supports its own set of allowable shipping locations. Note: The regionIncluded array is not applicable for m...
     */
    public function __construct(
        public ?array $regionExcluded = null,
        public ?array $regionIncluded = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            regionExcluded: isset($data['regionExcluded']) && is_array($data['regionExcluded'])
                ? array_values(array_map(static fn (array $i): Region => Region::fromArray($i), $data['regionExcluded']))
                : null,
            regionIncluded: isset($data['regionIncluded']) && is_array($data['regionIncluded'])
                ? array_values(array_map(static fn (array $i): Region => Region::fromArray($i), $data['regionIncluded']))
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
        if ($this->regionExcluded !== null) {
            $data['regionExcluded'] = array_map(static fn (Region $i): array => $i->toArray(), $this->regionExcluded);
        }
        if ($this->regionIncluded !== null) {
            $data['regionIncluded'] = array_map(static fn (Region $i): array => $i->toArray(), $this->regionIncluded);
        }

        return $data;
    }
}
