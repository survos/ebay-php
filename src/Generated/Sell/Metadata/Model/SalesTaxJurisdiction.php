<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A unique ID for a sales tax jurisdiction.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SalesTaxJurisdiction
{
    /**
     * @param string|null $salesTaxJurisdictionId The unique ID for a sales-tax jurisdiction. Important! When countryCode is set to US, IDs for all 50 states, Washington, DC, and all US territories will be returned. However, the only salesTaxJurisdictionId values curren...
     */
    public function __construct(
        public ?string $salesTaxJurisdictionId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            salesTaxJurisdictionId: isset($data['salesTaxJurisdictionId']) ? (string) $data['salesTaxJurisdictionId'] : null,
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
        if ($this->salesTaxJurisdictionId !== null) {
            $data['salesTaxJurisdictionId'] = $this->salesTaxJurisdictionId;
        }

        return $data;
    }
}
