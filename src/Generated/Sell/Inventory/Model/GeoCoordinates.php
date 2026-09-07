<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to express the Global Positioning System (GPS) latitude and longitude coordinates of an inventory location.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class GeoCoordinates
{
    /**
     * @param float|null $latitude The latitude (North-South) component of the geographic coordinate. This field is required if a geoCoordinates container is used. This field is returned if geographical coordinates are set for the location. Example: 33.08...
     * @param float|null $longitude The longitude (East-West) component of the geographic coordinate. This field is required if a geoCoordinates container is used. This field is returned if geographical coordinates are set for the location. Example: -88.70...
     */
    public function __construct(
        public ?float $latitude = null,
        public ?float $longitude = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            latitude: isset($data['latitude']) ? (float) $data['latitude'] : null,
            longitude: isset($data['longitude']) ? (float) $data['longitude'] : null,
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
        if ($this->latitude !== null) {
            $data['latitude'] = $this->latitude;
        }
        if ($this->longitude !== null) {
            $data['longitude'] = $this->longitude;
        }

        return $data;
    }
}
