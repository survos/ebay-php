<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used to return the list of new and updated sales-tax table entries.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class UpdatedSalesTaxResponse
{
    /**
     * @param list<UpdatedSalesTaxEntry>|null $updatedSalesTaxEntries The array of new and updated sales-tax table entries.
     */
    public function __construct(
        public ?array $updatedSalesTaxEntries = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            updatedSalesTaxEntries: isset($data['updatedSalesTaxEntries']) && is_array($data['updatedSalesTaxEntries'])
                ? array_values(array_map(static fn (array $i): UpdatedSalesTaxEntry => UpdatedSalesTaxEntry::fromArray($i), $data['updatedSalesTaxEntries']))
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
        if ($this->updatedSalesTaxEntries !== null) {
            $data['updatedSalesTaxEntries'] = array_map(static fn (UpdatedSalesTaxEntry $i): array => $i->toArray(), $this->updatedSalesTaxEntries);
        }

        return $data;
    }
}
