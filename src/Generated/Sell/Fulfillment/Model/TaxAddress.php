<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This container consists of address information that can be used by sellers for tax purpose.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class TaxAddress
{
    /**
     * @param string|null $city The city name that can be used by sellers for tax purpose.
     * @param string|null $countryCode The country code that can be used by sellers for tax purpose, represented as a two-letter ISO 3166-1 alpha-2 country code. For example, US represents the United States, and DE represents Germany. For implementation help,...
     * @param string|null $postalCode The postal code that can be used by sellers for tax purpose. Usually referred to as Zip codes in the US.
     * @param string|null $stateOrProvince The state name that can be used by sellers for tax purpose.
     */
    public function __construct(
        public ?string $city = null,
        public ?string $countryCode = null,
        public ?string $postalCode = null,
        public ?string $stateOrProvince = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            city: isset($data['city']) ? (string) $data['city'] : null,
            countryCode: isset($data['countryCode']) ? (string) $data['countryCode'] : null,
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
        if ($this->city !== null) {
            $data['city'] = $this->city;
        }
        if ($this->countryCode !== null) {
            $data['countryCode'] = $this->countryCode;
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
