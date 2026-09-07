<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base response of the getInventoryLocation and getInventoryLocations calls. These responses provide details about inventory location(s) defined for the merchant's account.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryLocationResponse
{
    /**
     * @param Location|null $location This container provides location details of an inventory location. The address container will always be returned, but it will not always have a complete street address. Except in the case of a store or fulfillment center...
     * @param string|null $locationAdditionalInformation This text field provides additional information about an inventory location. This field is returned if it is set for the location.
     * @param string|null $locationInstructions This text field is used by the merchant to provide special pickup instructions for the store location. This field can help create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If...
     * @param list<string>|null $locationTypes This container defines the function of the inventory location. Typically, a location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than one type.
     * @param string|null $locationWebUrl This text field shows the Website address (URL) associated with the inventory location. This field is returned if defined for the location.
     * @param string|null $merchantLocationKey The unique identifier of the inventory location. This identifier is set up by the merchant when the location is first created with the createInventoryLocation call.
     * @param string|null $merchantLocationStatus This field indicates whether the inventory location is enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). The merchant can use the enableInventoryLocation call to enable...
     * @param string|null $name The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. For store inventory locations, this field is not required for the c...
     * @param list<OperatingHours>|null $operatingHours This container shows the regular operating hours for a store location during the days of the week. A dayOfWeekEnum field and an intervals container is shown for each day of the week that the location is open.
     * @param string|null $phone The phone number for an inventory location. This field will typically only be returned for store locations.
     * @param list<SpecialHours>|null $specialHours This container shows the special operating hours for a store or fulfillment center location on a specific date or dates.
     * @param string|null $timeZoneId This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example America/Vancouver). For supported values, see Java Supported Zone Ids and Offsets.
     * @param FulfillmentCenterSpecifications|null $fulfillmentCenterSpecifications This container provides information about a fulfillment center's shipping specifications, such as the weekly cut-off time schedule for order handling and any cut-off time overrides. Note: This field is only returned for...
     */
    public function __construct(
        public ?Location $location = null,
        public ?string $locationAdditionalInformation = null,
        public ?string $locationInstructions = null,
        public ?array $locationTypes = null,
        public ?string $locationWebUrl = null,
        public ?string $merchantLocationKey = null,
        public ?string $merchantLocationStatus = null,
        public ?string $name = null,
        public ?array $operatingHours = null,
        public ?string $phone = null,
        public ?array $specialHours = null,
        public ?string $timeZoneId = null,
        public ?FulfillmentCenterSpecifications $fulfillmentCenterSpecifications = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            location: isset($data['location']) && is_array($data['location']) ? Location::fromArray($data['location']) : null,
            locationAdditionalInformation: isset($data['locationAdditionalInformation']) ? (string) $data['locationAdditionalInformation'] : null,
            locationInstructions: isset($data['locationInstructions']) ? (string) $data['locationInstructions'] : null,
            locationTypes: isset($data['locationTypes']) ? (array) $data['locationTypes'] : null,
            locationWebUrl: isset($data['locationWebUrl']) ? (string) $data['locationWebUrl'] : null,
            merchantLocationKey: isset($data['merchantLocationKey']) ? (string) $data['merchantLocationKey'] : null,
            merchantLocationStatus: isset($data['merchantLocationStatus']) ? (string) $data['merchantLocationStatus'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
            operatingHours: isset($data['operatingHours']) && is_array($data['operatingHours'])
                ? array_values(array_map(static fn (array $i): OperatingHours => OperatingHours::fromArray($i), $data['operatingHours']))
                : null,
            phone: isset($data['phone']) ? (string) $data['phone'] : null,
            specialHours: isset($data['specialHours']) && is_array($data['specialHours'])
                ? array_values(array_map(static fn (array $i): SpecialHours => SpecialHours::fromArray($i), $data['specialHours']))
                : null,
            timeZoneId: isset($data['timeZoneId']) ? (string) $data['timeZoneId'] : null,
            fulfillmentCenterSpecifications: isset($data['fulfillmentCenterSpecifications']) && is_array($data['fulfillmentCenterSpecifications']) ? FulfillmentCenterSpecifications::fromArray($data['fulfillmentCenterSpecifications']) : null,
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
        if ($this->location !== null) {
            $data['location'] = $this->location->toArray();
        }
        if ($this->locationAdditionalInformation !== null) {
            $data['locationAdditionalInformation'] = $this->locationAdditionalInformation;
        }
        if ($this->locationInstructions !== null) {
            $data['locationInstructions'] = $this->locationInstructions;
        }
        if ($this->locationTypes !== null) {
            $data['locationTypes'] = $this->locationTypes;
        }
        if ($this->locationWebUrl !== null) {
            $data['locationWebUrl'] = $this->locationWebUrl;
        }
        if ($this->merchantLocationKey !== null) {
            $data['merchantLocationKey'] = $this->merchantLocationKey;
        }
        if ($this->merchantLocationStatus !== null) {
            $data['merchantLocationStatus'] = $this->merchantLocationStatus;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->operatingHours !== null) {
            $data['operatingHours'] = array_map(static fn (OperatingHours $i): array => $i->toArray(), $this->operatingHours);
        }
        if ($this->phone !== null) {
            $data['phone'] = $this->phone;
        }
        if ($this->specialHours !== null) {
            $data['specialHours'] = array_map(static fn (SpecialHours $i): array => $i->toArray(), $this->specialHours);
        }
        if ($this->timeZoneId !== null) {
            $data['timeZoneId'] = $this->timeZoneId;
        }
        if ($this->fulfillmentCenterSpecifications !== null) {
            $data['fulfillmentCenterSpecifications'] = $this->fulfillmentCenterSpecifications->toArray();
        }

        return $data;
    }
}
