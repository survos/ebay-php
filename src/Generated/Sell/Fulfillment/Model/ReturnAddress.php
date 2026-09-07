<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the payment dispute methods, and is relevant if the buyer will be returning the item to the seller.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ReturnAddress
{
    /**
     * @param string|null $addressLine1 The first line of the street address.
     * @param string|null $addressLine2 The second line of the street address. This line is not always necessarily, but is often used for apartment number or suite number, or other relevant information that can not fit on the first line.
     * @param string|null $city The city of the return address.
     * @param string|null $country The country's two-letter, ISO 3166-1 country code. See the enumeration type for a country's value. For implementation help, refer to eBay API documentation
     * @param string|null $county The county of the return address. Counties are not applicable to all countries.
     * @param string|null $fullName The full name of return address owner.
     * @param string|null $postalCode The postal code of the return address.
     * @param Phone|null $primaryPhone This container shows the seller's primary phone number associated with the return address.
     * @param string|null $stateOrProvince The state or province of the return address.
     */
    public function __construct(
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?string $country = null,
        public ?string $county = null,
        public ?string $fullName = null,
        public ?string $postalCode = null,
        public ?Phone $primaryPhone = null,
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
            fullName: isset($data['fullName']) ? (string) $data['fullName'] : null,
            postalCode: isset($data['postalCode']) ? (string) $data['postalCode'] : null,
            primaryPhone: isset($data['primaryPhone']) && is_array($data['primaryPhone']) ? Phone::fromArray($data['primaryPhone']) : null,
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
        if ($this->fullName !== null) {
            $data['fullName'] = $this->fullName;
        }
        if ($this->postalCode !== null) {
            $data['postalCode'] = $this->postalCode;
        }
        if ($this->primaryPhone !== null) {
            $data['primaryPhone'] = $this->primaryPhone->toArray();
        }
        if ($this->stateOrProvince !== null) {
            $data['stateOrProvince'] = $this->stateOrProvince;
        }

        return $data;
    }
}
