<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable shipping location metadata returned.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingLocationResponse
{
    /**
     * @param list<ShippingLocation>|null $shippingLocations The complete list of geographical regions, countries, domestic areas, and special locations for the specified eBay marketplace that can be set as shipping locations.
     */
    public function __construct(
        public ?array $shippingLocations = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            shippingLocations: isset($data['shippingLocations']) && is_array($data['shippingLocations'])
                ? array_values(array_map(static fn (array $i): ShippingLocation => ShippingLocation::fromArray($i), $data['shippingLocations']))
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
        if ($this->shippingLocations !== null) {
            $data['shippingLocations'] = array_map(static fn (ShippingLocation $i): array => $i->toArray(), $this->shippingLocations);
        }

        return $data;
    }
}
