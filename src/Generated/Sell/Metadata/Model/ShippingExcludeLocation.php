<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable locations or region codes to be excluded set by the seller.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingExcludeLocation
{
    /**
     * @param string|null $description The localized location name.
     * @param string|null $location The location or region to be excluded. Countries are returned through ISO 3166 codes. This field may also include continents and other larger geographical regions (for example, the Middle East, Southeast Asia), as well a...
     * @param string|null $region The region of the excluded shipping area specified, such as: Africa Americas Asia Central America and Caribbean Europe Middle East North America Oceania South America Southeast Asia
     */
    public function __construct(
        public ?string $description = null,
        public ?string $location = null,
        public ?string $region = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            description: isset($data['description']) ? (string) $data['description'] : null,
            location: isset($data['location']) ? (string) $data['location'] : null,
            region: isset($data['region']) ? (string) $data['region'] : null,
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
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->location !== null) {
            $data['location'] = $this->location;
        }
        if ($this->region !== null) {
            $data['region'] = $this->region;
        }

        return $data;
    }
}
