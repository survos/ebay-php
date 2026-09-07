<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the details of a geographical address.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Address
{
    /**
     * @param string|null $addressLine1 The first line of the street address. Note: addressLine1 will not be returned for any order that is more than 90 days old.
     * @param string|null $addressLine2 The second line of the street address. This field can be used for additional address information, such as a suite or apartment number. This field will be returned if defined for the shipping address. Note: addressLine2 w...
     * @param string|null $city The city of the shipping destination.
     * @param string|null $countryCode The country of the shipping destination, represented as a two-letter ISO 3166-1 alpha-2 country code. For example, US represents the United States, and DE represents Germany. For implementation help, refer to eBay API do...
     * @param string|null $county The county of the shipping destination. Counties typically, but not always, contain multiple cities or towns. This field is returned if known/available.
     * @param string|null $postalCode The postal code of the shipping destination. Usually referred to as Zip codes in the US. Most countries have postal codes, but not all. The postal code will be returned if applicable.
     * @param string|null $stateOrProvince The state or province of the shipping destination. Most countries have states or provinces, but not all. The state or province will be returned if applicable.
     */
    public function __construct(
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?string $countryCode = null,
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
            countryCode: isset($data['countryCode']) ? (string) $data['countryCode'] : null,
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
        if ($this->countryCode !== null) {
            $data['countryCode'] = $this->countryCode;
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
