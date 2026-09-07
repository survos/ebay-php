<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is the base response of the getRateTables method.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class RateTableResponse
{
    /**
     * @param list<RateTable>|null $rateTables An array of all shipping rate tables defined for a marketplace (or all marketplaces if no country_code query parameter is used). This array will be returned as empty if the seller has no defined shipping rate tables for...
     */
    public function __construct(
        public ?array $rateTables = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            rateTables: isset($data['rateTables']) && is_array($data['rateTables'])
                ? array_values(array_map(static fn (array $i): RateTable => RateTable::fromArray($i), $data['rateTables']))
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
        if ($this->rateTables !== null) {
            $data['rateTables'] = array_map(static fn (RateTable $i): array => $i->toArray(), $this->rateTables);
        }

        return $data;
    }
}
