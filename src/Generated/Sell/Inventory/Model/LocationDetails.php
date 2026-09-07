<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the createInventoryLocation call to provide an full or partial address of an inventory location.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LocationDetails
{
    /**
     * @param Address|null $address This required container sets the physical address of an inventory location. Except in the case store or fulfillment center location, a full address is not a requirement when setting up a location. For warehouse locations...
     * @param GeoCoordinates|null $geoCoordinates This container is used to set the Global Positioning System (GPS) latitude and longitude coordinates for the inventory location. Geographical coordinates are required for the location of In-Store Pickup inventory.
     */
    public function __construct(
        public ?Address $address = null,
        public ?GeoCoordinates $geoCoordinates = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            address: isset($data['address']) && is_array($data['address']) ? Address::fromArray($data['address']) : null,
            geoCoordinates: isset($data['geoCoordinates']) && is_array($data['geoCoordinates']) ? GeoCoordinates::fromArray($data['geoCoordinates']) : null,
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

        return $data;
    }
}
