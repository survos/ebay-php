<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the request fields used in the getMultiCompatibilityPropertyValues method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class MultiCompatibilityPropertyValuesRequest
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which to retrieve property values. Use the getAutomotivePartsCompatibilityPolicies method to retrieve a list of categories that support parts compatibility.
     * @param list<PropertyFilterInner>|null $propertyFilters This array can be used to specify the compatibility properties used to limit the result set. Only values associated with the specified name-value pairs will be returned in the response. For example, if the propertyName i...
     * @param list<string>|null $propertyNames This comma-delimited array specifies the names of the properties for which to retrieve associated property values. For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will v...
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?array $propertyFilters = null,
        public ?array $propertyNames = null,
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
            propertyNames: isset($data['propertyNames']) ? (array) $data['propertyNames'] : null,
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
        if ($this->propertyNames !== null) {
            $data['propertyNames'] = $this->propertyNames;
        }

        return $data;
    }
}
