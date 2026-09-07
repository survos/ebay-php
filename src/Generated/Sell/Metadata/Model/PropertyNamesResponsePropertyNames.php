<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the fields associated with a property name.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PropertyNamesResponsePropertyNames
{
    /**
     * @param string|null $propertyDisplayName The display name of a property. This is the localized name of the compatible property.
     * @param string|null $propertyName The canonical name of a property. This value is used as part of the name-value pairs used to specify compatibility.
     * @param PropertyNamesResponsePropertyNameMetadata|null $propertyNameMetadata The metadata for a property.
     */
    public function __construct(
        public ?string $propertyDisplayName = null,
        public ?string $propertyName = null,
        public ?PropertyNamesResponsePropertyNameMetadata $propertyNameMetadata = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            propertyDisplayName: isset($data['propertyDisplayName']) ? (string) $data['propertyDisplayName'] : null,
            propertyName: isset($data['propertyName']) ? (string) $data['propertyName'] : null,
            propertyNameMetadata: isset($data['propertyNameMetadata']) && is_array($data['propertyNameMetadata']) ? PropertyNamesResponsePropertyNameMetadata::fromArray($data['propertyNameMetadata']) : null,
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
        if ($this->propertyDisplayName !== null) {
            $data['propertyDisplayName'] = $this->propertyDisplayName;
        }
        if ($this->propertyName !== null) {
            $data['propertyName'] = $this->propertyName;
        }
        if ($this->propertyNameMetadata !== null) {
            $data['propertyNameMetadata'] = $this->propertyNameMetadata->toArray();
        }

        return $data;
    }
}
