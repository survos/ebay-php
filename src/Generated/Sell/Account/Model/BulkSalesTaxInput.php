<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BulkSalesTaxInput
{
    /**
     * @param list<SalesTaxInput>|null $salesTaxInputList The array of sales-tax table entries to be created or updated.
     */
    public function __construct(
        public ?array $salesTaxInputList = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            salesTaxInputList: isset($data['salesTaxInputList']) && is_array($data['salesTaxInputList'])
                ? array_values(array_map(static fn (array $i): SalesTaxInput => SalesTaxInput::fromArray($i), $data['salesTaxInputList']))
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
        if ($this->salesTaxInputList !== null) {
            $data['salesTaxInputList'] = array_map(static fn (SalesTaxInput $i): array => $i->toArray(), $this->salesTaxInputList);
        }

        return $data;
    }
}
