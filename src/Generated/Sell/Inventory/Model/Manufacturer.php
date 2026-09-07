<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type provides name and contact information about the manufacturer of the item.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Manufacturer
{
    /**
     * @param string|null $addressLine1 The first line of the product manufacturer's street address. Max length: 180 characters
     * @param string|null $addressLine2 The second line of the product manufacturer's street address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'. Max length: 180 characters
     * @param string|null $city The city of the product manufacturer's street address. Max length: 64 characters
     * @param string|null $companyName The company name of the product manufacturer. Max length: 100 characters
     * @param string|null $contactUrl The contact URL of the product manufacturer. Max length: 250 characters
     * @param string|null $country This defines the list of valid country codes, adapted from http://www.iso.org/iso/country_codes, ISO 3166-1 country code. List elements take the following form to identify a two-letter code with a short name in English,...
     * @param string|null $email The product manufacturer's business email address. Max length: 180 characters
     * @param string|null $phone The product manufacturer's business phone number. Max length: 64 characters
     * @param string|null $postalCode The postal code of the product manufacturer's street address. Max length: 9 characters
     * @param string|null $stateOrProvince The state or province of the product manufacturer's street address. Max length: 64 characters
     */
    public function __construct(
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?string $companyName = null,
        public ?string $contactUrl = null,
        public ?string $country = null,
        public ?string $email = null,
        public ?string $phone = null,
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
            companyName: isset($data['companyName']) ? (string) $data['companyName'] : null,
            contactUrl: isset($data['contactUrl']) ? (string) $data['contactUrl'] : null,
            country: isset($data['country']) ? (string) $data['country'] : null,
            email: isset($data['email']) ? (string) $data['email'] : null,
            phone: isset($data['phone']) ? (string) $data['phone'] : null,
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
        if ($this->companyName !== null) {
            $data['companyName'] = $this->companyName;
        }
        if ($this->contactUrl !== null) {
            $data['contactUrl'] = $this->contactUrl;
        }
        if ($this->country !== null) {
            $data['country'] = $this->country;
        }
        if ($this->email !== null) {
            $data['email'] = $this->email;
        }
        if ($this->phone !== null) {
            $data['phone'] = $this->phone;
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
