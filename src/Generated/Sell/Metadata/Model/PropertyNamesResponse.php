<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the fields returned in the getCompatibilityPropertyNames method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PropertyNamesResponse
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay category specified in the request.
     * @param list<PropertyNamesResponseProperties>|null $properties This array contains all of the properties for the specified category.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?array $properties = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            properties: isset($data['properties']) && is_array($data['properties'])
                ? array_values(array_map(static fn (array $i): PropertyNamesResponseProperties => PropertyNamesResponseProperties::fromArray($i), $data['properties']))
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
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->properties !== null) {
            $data['properties'] = array_map(static fn (PropertyNamesResponseProperties $i): array => $i->toArray(), $this->properties);
        }

        return $data;
    }
}
