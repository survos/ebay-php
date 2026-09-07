<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the root response of the getSalesTaxes method.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SalesTaxes
{
    /**
     * @param list<SalesTax>|null $salesTaxes An array of one or more sales-tax rate entries for a specified country. If no sales-tax rate entries are set up, no response payload is returned, but an HTTP status code of 204 No Content is returned.
     */
    public function __construct(
        public ?array $salesTaxes = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            salesTaxes: isset($data['salesTaxes']) && is_array($data['salesTaxes'])
                ? array_values(array_map(static fn (array $i): SalesTax => SalesTax::fromArray($i), $data['salesTaxes']))
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
        if ($this->salesTaxes !== null) {
            $data['salesTaxes'] = array_map(static fn (SalesTax $i): array => $i->toArray(), $this->salesTaxes);
        }

        return $data;
    }
}
