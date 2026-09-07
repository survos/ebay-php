<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the response fields for the getMultiCompatibilityPropertyValues method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class MultiCompatibilityPropertyValuesResponse
{
    /**
     * @param list<Compatibility>|null $compatibilities This container defines the compatibility details associated with the specified property name value(s).
     * @param string|null $metadataVersion The version number of the metadata. This version is upticked whenever there are compatibility name changes for the specified marketplace.
     */
    public function __construct(
        public ?array $compatibilities = null,
        public ?string $metadataVersion = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            compatibilities: isset($data['compatibilities']) && is_array($data['compatibilities'])
                ? array_values(array_map(static fn (array $i): Compatibility => Compatibility::fromArray($i), $data['compatibilities']))
                : null,
            metadataVersion: isset($data['metadataVersion']) ? (string) $data['metadataVersion'] : null,
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
        if ($this->compatibilities !== null) {
            $data['compatibilities'] = array_map(static fn (Compatibility $i): array => $i->toArray(), $this->compatibilities);
        }
        if ($this->metadataVersion !== null) {
            $data['metadataVersion'] = $this->metadataVersion;
        }

        return $data;
    }
}
