<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * A complex type that is used to provide the physical address of a location, and it geo-coordinates.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Location
{
    /**
     * @param Address|null $address The address container is always returned in getInventoryLocation/getInventoryLocations calls. Except in the case of a store or fulfillment center location, a full address is not a requirement when setting up an inventory...
     * @param GeoCoordinates|null $geoCoordinates This container displays the Global Positioning System (GPS) latitude and longitude coordinates for the inventory location. This container is only returned if the geo-coordinates are set for an inventory location.
     * @param string|null $locationId A unique eBay-assigned ID for the location. Note: This field should not be confused with the seller-defined merchantLocationKey value. It is the merchantLocationKey value which is used to identify an inventory location w...
     */
    public function __construct(
        public ?Address $address = null,
        public ?GeoCoordinates $geoCoordinates = null,
        public ?string $locationId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            address: isset($data['address']) && is_array($data['address']) ? Address::fromArray($data['address']) : null,
            geoCoordinates: isset($data['geoCoordinates']) && is_array($data['geoCoordinates']) ? GeoCoordinates::fromArray($data['geoCoordinates']) : null,
            locationId: isset($data['locationId']) ? (string) $data['locationId'] : null,
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
        if ($this->address !== null) {
            $data['address'] = $this->address->toArray();
        }
        if ($this->geoCoordinates !== null) {
            $data['geoCoordinates'] = $this->geoCoordinates->toArray();
        }
        if ($this->locationId !== null) {
            $data['locationId'] = $this->locationId;
        }

        return $data;
    }
}
