<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the response fields used in the getCompatibilityPropertyValues method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PropertyValuesResponse
{
    /**
     * @param string|null $metadataVersion The version number of the metadata. This version is upticked whenever there are compatibility name changes for the specified marketplace.
     * @param string|null $propertyName The name of the property specified in the request.
     * @param list<string>|null $propertyValues This array specifies the property values associated with the specified propertyName, in the specified category.
     */
    public function __construct(
        public ?string $metadataVersion = null,
        public ?string $propertyName = null,
        public ?array $propertyValues = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            metadataVersion: isset($data['metadataVersion']) ? (string) $data['metadataVersion'] : null,
            propertyName: isset($data['propertyName']) ? (string) $data['propertyName'] : null,
            propertyValues: isset($data['propertyValues']) ? (array) $data['propertyValues'] : null,
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
        if ($this->metadataVersion !== null) {
            $data['metadataVersion'] = $this->metadataVersion;
        }
        if ($this->propertyName !== null) {
            $data['propertyName'] = $this->propertyName;
        }
        if ($this->propertyValues !== null) {
            $data['propertyValues'] = $this->propertyValues;
        }

        return $data;
    }
}
