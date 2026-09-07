<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the properties and dataset for a specified category.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PropertyNamesResponseProperties
{
    /**
     * @param string|null $dataset This field defines the types of properties are returned for the specified catalog-enabled category. Valid values:DisplayableProductDetails: Properties for use in a user interface to describe products.DisplayableSearchRes...
     * @param list<PropertyNamesResponsePropertyNames>|null $propertyNames This array specifies the names of the properties associated with the specified category in the specified marketplace. For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but wil...
     */
    public function __construct(
        public ?string $dataset = null,
        public ?array $propertyNames = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            dataset: isset($data['dataset']) ? (string) $data['dataset'] : null,
            propertyNames: isset($data['propertyNames']) && is_array($data['propertyNames'])
                ? array_values(array_map(static fn (array $i): PropertyNamesResponsePropertyNames => PropertyNamesResponsePropertyNames::fromArray($i), $data['propertyNames']))
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
        if ($this->dataset !== null) {
            $data['dataset'] = $this->dataset;
        }
        if ($this->propertyNames !== null) {
            $data['propertyNames'] = array_map(static fn (PropertyNamesResponsePropertyNames $i): array => $i->toArray(), $this->propertyNames);
        }

        return $data;
    }
}
