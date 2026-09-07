<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable locations or region codes to be excluded.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingExcludeLocationResponse
{
    /**
     * @param list<ShippingExcludeLocation>|null $excludeShippingLocations The complete list of geographical regions, countries, domestic areas, and special locations for the specified eBay marketplace that the seller has designated as excluded shipping locations.
     */
    public function __construct(
        public ?array $excludeShippingLocations = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            excludeShippingLocations: isset($data['excludeShippingLocations']) && is_array($data['excludeShippingLocations'])
                ? array_values(array_map(static fn (array $i): ShippingExcludeLocation => ShippingExcludeLocation::fromArray($i), $data['excludeShippingLocations']))
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
        if ($this->excludeShippingLocations !== null) {
            $data['excludeShippingLocations'] = array_map(static fn (ShippingExcludeLocation $i): array => $i->toArray(), $this->excludeShippingLocations);
        }

        return $data;
    }
}
