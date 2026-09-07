<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type is used to provide the sort order of compatibility properties returned in the response.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SortOrderInner
{
    /**
     * @param SortOrderProperties|null $sortOrder This container is used to define the property to be used in the sorting.
     * @param string|null $sortPriority The priority of the specified sort order provided. For example, when a property is assigned Sort1, its values are sorted first. Values for the property assigned Sort2 are sorted second, and so on. Valid values:Sort1Sort2...
     */
    public function __construct(
        public ?SortOrderProperties $sortOrder = null,
        public ?string $sortPriority = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            sortOrder: isset($data['sortOrder']) && is_array($data['sortOrder']) ? SortOrderProperties::fromArray($data['sortOrder']) : null,
            sortPriority: isset($data['sortPriority']) ? (string) $data['sortPriority'] : null,
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
        if ($this->sortOrder !== null) {
            $data['sortOrder'] = $this->sortOrder->toArray();
        }
        if ($this->sortPriority !== null) {
            $data['sortPriority'] = $this->sortPriority;
        }

        return $data;
    }
}
