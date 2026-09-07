<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the compatible property names and values associated with the product.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CompatibilityDetails
{
    /**
     * @param string|null $propertyName The name of the property being described.
     * @param string|null $propertyValue The value for the property specified in the propertyName field.
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
