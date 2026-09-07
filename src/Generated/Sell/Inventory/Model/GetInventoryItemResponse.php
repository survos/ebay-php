<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the response of the bulkGetInventoryItem method to give the status of each inventory item record that the user tried to retrieve.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class GetInventoryItemResponse
{
    /**
     * @param list<Error>|null $errors This container will be returned if there were one or more errors associated with retrieving the inventory item record.
     * @param InventoryItemWithSkuLocaleGroupKeys|null $inventoryItem This container consists of detailed information on the inventory item specified in the sku field.
     * @param string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     * @param int|null $statusCode The HTTP status code returned in this field indicates the success or failure of retrieving the inventory item record for the inventory item specified in the sku field. See the HTTP status codes table to see which each st...
     * @param list<Error>|null $warnings This container will be returned if there were one or more warnings associated with retrieving the inventory item record.
     */
    public function __construct(
        public ?array $errors = null,
        public ?InventoryItemWithSkuLocaleGroupKeys $inventoryItem = null,
        public ?string $sku = null,
        public ?int $statusCode = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            errors: isset($data['errors']) && is_array($data['errors'])
                ? array_values(array_map(static fn (array $i): Error => Error::fromArray($i), $data['errors']))
                : null,
            inventoryItem: isset($data['inventoryItem']) && is_array($data['inventoryItem']) ? InventoryItemWithSkuLocaleGroupKeys::fromArray($data['inventoryItem']) : null,
            sku: isset($data['sku']) ? (string) $data['sku'] : null,
            statusCode: isset($data['statusCode']) ? (int) $data['statusCode'] : null,
            warnings: isset($data['warnings']) && is_array($data['warnings'])
                ? array_values(array_map(static fn (array $i): Error => Error::fromArray($i), $data['warnings']))
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
        if ($this->errors !== null) {
            $data['errors'] = array_map(static fn (Error $i): array => $i->toArray(), $this->errors);
        }
        if ($this->inventoryItem !== null) {
            $data['inventoryItem'] = $this->inventoryItem->toArray();
        }
        if ($this->sku !== null) {
            $data['sku'] = $this->sku;
        }
        if ($this->statusCode !== null) {
            $data['statusCode'] = $this->statusCode;
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
