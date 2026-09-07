<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the name-value pair associated with a property value.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PropertyValues
{
    /**
     * @param string|null $propertyName The name of the property. For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     * @param string|null $propertyValue The value for the property specified in the properyName field. For example, if the propertyName is make, then the propertyValue will be the specific make of the vehicle, such as Toyota.
     */
    public function __construct(
        public ?string $propertyName = null,
        public ?string $propertyValue = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            propertyName: isset($data['propertyName']) ? (string) $data['propertyName'] : null,
            propertyValue: isset($data['propertyValue']) ? (string) $data['propertyValue'] : null,
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
        if ($this->propertyName !== null) {
            $data['propertyName'] = $this->propertyName;
        }
        if ($this->propertyValue !== null) {
            $data['propertyValue'] = $this->propertyValue;
        }

        return $data;
    }
}
