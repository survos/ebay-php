<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the request fields used in the getCompatibilityPropertyValues method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PropertyValuesRequest
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which to retrieve compatibility property values. This category must be a valid eBay category on the specified eBay marketplace, and the category must support parts comp...
     * @param list<PropertyFilterInner>|null $propertyFilters This array can be used to specify the compatibility properties used limit the result set. Only values associated with the specified name-value pairs will be returned in the response. For example, if the propertyName is s...
     * @param string|null $propertyName This field specifies the name of the property for which to retrieve associated property values. For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eB...
     * @param string|null $sortOrder This field specifies the sort order for the property values in the result set. Valid values:AscendingDescendingNote: If no search order is specified, values are sorted in ascending order.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?array $propertyFilters = null,
        public ?string $propertyName = null,
        public ?string $sortOrder = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            propertyFilters: isset($data['propertyFilters']) && is_array($data['propertyFilters'])
                ? array_values(array_map(static fn (array $i): PropertyFilterInner => PropertyFilterInner::fromArray($i), $data['propertyFilters']))
                : null,
            propertyName: isset($data['propertyName']) ? (string) $data['propertyName'] : null,
            sortOrder: isset($data['sortOrder']) ? (string) $data['sortOrder'] : null,
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
        if ($this->propertyFilters !== null) {
            $data['propertyFilters'] = array_map(static fn (PropertyFilterInner $i): array => $i->toArray(), $this->propertyFilters);
        }
        if ($this->propertyName !== null) {
            $data['propertyName'] = $this->propertyName;
        }
        if ($this->sortOrder !== null) {
            $data['sortOrder'] = $this->sortOrder;
        }

        return $data;
    }
}
