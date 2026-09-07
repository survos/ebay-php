<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type lists regional take-back policies to be used by an offer when it is published and converted to a listing.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class RegionalTakeBackPolicies
{
    /**
     * @param list<CountryPolicy>|null $countryPolicies The array of country-specific take-back policies to be used by an offer when it is published and converted to a listing.
     */
    public function __construct(
        public ?array $countryPolicies = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            countryPolicies: isset($data['countryPolicies']) && is_array($data['countryPolicies'])
                ? array_values(array_map(static fn (array $i): CountryPolicy => CountryPolicy::fromArray($i), $data['countryPolicies']))
                : null,
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
        if ($this->countryPolicies !== null) {
            $data['countryPolicies'] = array_map(static fn (CountryPolicy $i): array => $i->toArray(), $this->countryPolicies);
        }

        return $data;
    }
}
