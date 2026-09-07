<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to define the physical address of an inventory location.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Address
{
    /**
     * @param string|null $addressLine1 The first line of a street address. This field is required for store and fulfillment center locations. A street address is not required for warehouse locations. This field will be returned if defined for an inventory loc...
     * @param string|null $addressLine2 The second line of a street address. This field can be used for additional address information, such as a suite or apartment number. This field will be returned if defined for an inventory location. Max length: 128
     * @param string|null $city The city in which the inventory location resides. This field is required for store and fulfillment center locations. For warehouse locations, this field is conditionally required as part of a city and stateOrProvince pai...
     * @param string|null $country The country in which the address resides, represented as two-letter ISO 3166 country code. For example, US represents the United States, and DE represents Germany. For implementation help, refer to eBay API documentation
     * @param string|null $county The county in which the address resides. This field is returned if defined for an inventory location.
     * @param string|null $postalCode The postal/zip code of the address. eBay uses postal codes to surface In-Store Pickup items within the vicinity of a buyer's location, and it also uses postal codes (origin and destination) to estimate shipping costs whe...
     * @param string|null $stateOrProvince The state/province in which the inventory location resides. This field is required for store and fulfillment center locations. For warehouse locations, this field is conditionally required as part of a city and stateOrPr...
     */
    public function __construct(
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?string $country = null,
        public ?string $county = null,
        public ?string $postalCode = null,
        public ?string $stateOrProvince = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            addressLine1: isset($data['addressLine1']) ? (string) $data['addressLine1'] : null,
            addressLine2: isset($data['addressLine2']) ? (string) $data['addressLine2'] : null,
            city: isset($data['city']) ? (string) $data['city'] : null,
            country: isset($data['country']) ? (string) $data['country'] : null,
            county: isset($data['county']) ? (string) $data['county'] : null,
            postalCode: isset($data['postalCode']) ? (string) $data['postalCode'] : null,
            stateOrProvince: isset($data['stateOrProvince']) ? (string) $data['stateOrProvince'] : null,
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
        if ($this->addressLine1 !== null) {
            $data['addressLine1'] = $this->addressLine1;
        }
        if ($this->addressLine2 !== null) {
            $data['addressLine2'] = $this->addressLine2;
        }
        if ($this->city !== null) {
            $data['city'] = $this->city;
        }
        if ($this->country !== null) {
            $data['country'] = $this->country;
        }
        if ($this->county !== null) {
            $data['county'] = $this->county;
        }
        if ($this->postalCode !== null) {
            $data['postalCode'] = $this->postalCode;
        }
        if ($this->stateOrProvince !== null) {
            $data['stateOrProvince'] = $this->stateOrProvince;
        }

        return $data;
    }
}
