<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable shipping location metadata.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingLocation
{
    /**
     * @param string|null $description The localized location name.
     * @param string|null $shippingLocation The name or abbreviation of the shipping location or region. Countries are returned through ISO 3166 codes. This field may also include continents and other larger geographical regions (for example, the Middle East, Sout...
     */
    public function __construct(
        public ?string $description = null,
        public ?string $shippingLocation = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            description: isset($data['description']) ? (string) $data['description'] : null,
            shippingLocation: isset($data['shippingLocation']) ? (string) $data['shippingLocation'] : null,
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
        if ($this->shippingLocation !== null) {
            $data['shippingLocation'] = $this->shippingLocation;
        }

        return $data;
    }
}
