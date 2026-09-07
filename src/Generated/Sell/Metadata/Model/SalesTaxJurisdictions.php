<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This complex type contains a list of sales-tax jurisdictions.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SalesTaxJurisdictions
{
    /**
     * @param list<SalesTaxJurisdiction>|null $salesTaxJurisdictions A list of sales-tax jurisdictions.
     */
    public function __construct(
        public ?array $salesTaxJurisdictions = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            salesTaxJurisdictions: isset($data['salesTaxJurisdictions']) && is_array($data['salesTaxJurisdictions'])
                ? array_values(array_map(static fn (array $i): SalesTaxJurisdiction => SalesTaxJurisdiction::fromArray($i), $data['salesTaxJurisdictions']))
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
        if ($this->salesTaxJurisdictions !== null) {
            $data['salesTaxJurisdictions'] = array_map(static fn (SalesTaxJurisdiction $i): array => $i->toArray(), $this->salesTaxJurisdictions);
        }

        return $data;
    }
}
