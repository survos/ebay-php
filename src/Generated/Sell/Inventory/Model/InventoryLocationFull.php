<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the createInventoryLocation call to provide details on the inventory location, including the location's name, physical address, operating hours, special hours, phone number and other details of an inventory location.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryLocationFull
{
    /**
     * @param LocationDetails|null $location This required container is used to set the physical address and geographical coordinates of a warehouse, store, or fulfillment center inventory location. A warehouse location only requires the postal code and country OR...
     * @param string|null $locationAdditionalInformation This text field is used by the merchant to provide additional information about an inventory location. Max length: 256
     * @param string|null $locationInstructions This text field is generally used by the merchant to provide special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to create a pl...
     * @param list<string>|null $locationTypes This container is used to define the function of the inventory location. Typically, an inventory location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than...
     * @param string|null $locationWebUrl This text field is used by the merchant to provide the Website address (URL) associated with the inventory location. Max length: 512
     * @param string|null $merchantLocationStatus This field is used to indicate whether the inventory location will be enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). If this field is omitted, a successful createInve...
     * @param string|null $name The seller-defined name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. A name is not required for warehouse locations. For...
     * @param list<OperatingHours>|null $operatingHours This container is used to express the regular operating hours for a store location during each day of the week. A dayOfWeekEnum field and an intervals container will be needed for each day of the week that the store loca...
     * @param string|null $phone This field is used to specify the phone number for an inventory location. Max length: 36
     * @param list<SpecialHours>|null $specialHours This container is used to express the special operating hours for a store inventory location on a specific date, such as a holiday. The special hours specified for the specific date will override the normal operating hou...
     * @param string|null $timeZoneId This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example America/Vancouver). For supported values, see Java Supported Zone Ids and Offsets. Note: If sp...
     * @param FulfillmentCenterSpecifications|null $fulfillmentCenterSpecifications This container is used to specify information about a fulfillment center's shipping specifications, such as the weekly cut-off time schedule for order handling and any cut-off time overrides. Note: This container is requ...
     */
    public function __construct(
        public ?LocationDetails $location = null,
        public ?string $locationAdditionalInformation = null,
        public ?string $locationInstructions = null,
        public ?array $locationTypes = null,
        public ?string $locationWebUrl = null,
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
            location: isset($data['location']) && is_array($data['location']) ? LocationDetails::fromArray($data['location']) : null,
            locationAdditionalInformation: isset($data['locationAdditionalInformation']) ? (string) $data['locationAdditionalInformation'] : null,
            locationInstructions: isset($data['locationInstructions']) ? (string) $data['locationInstructions'] : null,
            locationTypes: isset($data['locationTypes']) ? (array) $data['locationTypes'] : null,
            locationWebUrl: isset($data['locationWebUrl']) ? (string) $data['locationWebUrl'] : null,
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
