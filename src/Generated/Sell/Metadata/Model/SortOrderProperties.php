<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type is used to define the property to be used in sorting.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SortOrderProperties
{
    /**
     * @param string|null $order Defines the order of the sort. Valid values:AscendingDescending
     * @param string|null $propertyName The name of the searchable property to be used for sorting. For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category...
     */
    public function __construct(
        public ?string $order = null,
        public ?string $propertyName = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            order: isset($data['order']) ? (string) $data['order'] : null,
            propertyName: isset($data['propertyName']) ? (string) $data['propertyName'] : null,
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
        if ($this->order !== null) {
            $data['order'] = $this->order;
        }
        if ($this->propertyName !== null) {
            $data['propertyName'] = $this->propertyName;
        }

        return $data;
    }
}
