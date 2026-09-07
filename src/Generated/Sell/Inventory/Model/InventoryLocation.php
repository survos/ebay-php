<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the updateInventoryLocation call to update operating hours, special hours, phone number, and other minor details of an inventory location.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryLocation
{
    /**
     * @param LocationDetails|null $location This container is used to add any addition physical address and geographical coordinate information for a warehouse, store, or fulfillment center inventory location. Note: For warehouse and store inventory locations, add...
     * @param string|null $locationAdditionalInformation This text field is used by the merchant to provide/update additional information about an inventory location. Whatever text is passed in this field will replace the current text string defined for this field. If the text...
     * @param string|null $locationInstructions This text field is generally used by the merchant to provide/update special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to crea...
     * @param list<string>|null $locationTypes This container is used to update the location type(s) associated with an inventory location.
     * @param string|null $locationWebUrl This text field is used by the merchant to provide/update the Website address (URL) associated with the inventory location. The URL that is passed in this field will replace any other URL that may be defined for this fie...
     * @param string|null $name This text field is used by the merchant to update the name of the inventory location. This name should be a human-friendly name as it will be in In-Store Pickup and Click and Collect listings. A name is not required for...
     * @param list<OperatingHours>|null $operatingHours This container is used to provide/update the regular operating hours for a store location during the days of the week. A dayOfWeekEnum field and an intervals container will be needed for each day of the week that the loc...
     * @param string|null $phone This text field is used by the merchant to provide/update the phone number for the inventory location. The phone number that is passed in this field will replace any other phone number that may be defined for this field....
     * @param list<SpecialHours>|null $specialHours This container is used to provide/update the special operating hours for a store location on a specific date, such as a holiday. The special hours specified for the specific date will override the normal operating hours...
     * @param string|null $timeZoneId This field is used to provide/update the time zone of the inventory location being created. This value should be in Olson format (for example America/Vancouver). For supported values, see Java Supported Zone Ids and Offs...
     * @param FulfillmentCenterSpecifications|null $fulfillmentCenterSpecifications This container is used to update information about a fulfillment center's shipping specifications, such as the weekly cut-off time schedule for order handling and any cut-off overrides.
     */
    public function __construct(
        public ?LocationDetails $location = null,
        public ?string $locationAdditionalInformation = null,
        public ?string $locationInstructions = null,
        public ?array $locationTypes = null,
        public ?string $locationWebUrl = null,
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
