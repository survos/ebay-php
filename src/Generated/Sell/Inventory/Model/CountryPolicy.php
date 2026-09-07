<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type specifies custom product compliance and/or take-back policies that apply to a specified country.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CountryPolicy
{
    /**
     * @param string|null $country The two-letter ISO 3166-1 country code identifying the country to which the policy or policies specified in the corresponding policyIds array will apply. For implementation help, refer to eBay API documentation
     * @param list<string>|null $policyIds An array of custom policy identifiers that apply to the country specified by listingPolicies.regionalTakeBackPolicies.countryPolicies.country. Product compliance and take-back policy information may be returned using the...
     */
    public function __construct(
        public ?string $country = null,
        public ?array $policyIds = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            country: isset($data['country']) ? (string) $data['country'] : null,
            policyIds: isset($data['policyIds']) ? (array) $data['policyIds'] : null,
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
        if ($this->country !== null) {
            $data['country'] = $this->country;
        }
        if ($this->policyIds !== null) {
            $data['policyIds'] = $this->policyIds;
        }

        return $data;
    }
}
