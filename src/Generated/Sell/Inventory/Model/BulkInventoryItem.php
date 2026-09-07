<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * The base request of the bulkCreateOrReplaceInventoryItem method.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BulkInventoryItem
{
    /**
     * @param list<InventoryItemWithSkuLocale>|null $requests The details of each inventory item that is being created or updated is passed in under this container. Up to 25 inventory item records can be created and/or updated with one bulkCreateOrReplaceInventoryItem call.
     */
    public function __construct(
        public ?array $requests = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            requests: isset($data['requests']) && is_array($data['requests'])
                ? array_values(array_map(static fn (array $i): InventoryItemWithSkuLocale => InventoryItemWithSkuLocale::fromArray($i), $data['requests']))
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
        if ($this->requests !== null) {
            $data['requests'] = array_map(static fn (InventoryItemWithSkuLocale $i): array => $i->toArray(), $this->requests);
        }

        return $data;
    }
}
