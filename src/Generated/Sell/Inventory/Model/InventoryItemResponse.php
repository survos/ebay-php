<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the response of the bulkCreateOrReplaceInventoryItem method to indicate the success or failure of creating and/or updating each inventory item record. The sku value in this type identifies each inventory item record.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryItemResponse
{
    /**
     * @param list<Error>|null $errors This container will be returned if there were one or more errors associated with the creation or update to the inventory item record.
     * @param string|null $locale This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to eBay API documentation
     * @param string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     * @param int|null $statusCode The HTTP status code returned in this field indicates the success or failure of creating or updating the inventory item record for the inventory item indicated in the sku field. See the HTTP status codes table to see whi...
     * @param list<Error>|null $warnings This container will be returned if there were one or more warnings associated with the creation or update to the inventory item record.
     */
    public function __construct(
        public ?array $errors = null,
        public ?string $locale = null,
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
            locale: isset($data['locale']) ? (string) $data['locale'] : null,
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
        if ($this->locale !== null) {
            $data['locale'] = $this->locale;
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
