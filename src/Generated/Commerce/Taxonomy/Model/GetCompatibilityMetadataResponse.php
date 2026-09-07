<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type is used by the base response of the getCompatibilityProperties method.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class GetCompatibilityMetadataResponse
{
    /**
     * @param list<CompatibilityProperty>|null $compatibilityProperties This container consists of an array of all compatible vehicle properties applicable to the specified eBay marketplace and eBay category ID.
     */
    public function __construct(
        public ?array $compatibilityProperties = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            compatibilityProperties: isset($data['compatibilityProperties']) && is_array($data['compatibilityProperties'])
                ? array_values(array_map(static fn (array $i): CompatibilityProperty => CompatibilityProperty::fromArray($i), $data['compatibilityProperties']))
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
        if ($this->compatibilityProperties !== null) {
            $data['compatibilityProperties'] = array_map(static fn (CompatibilityProperty $i): array => $i->toArray(), $this->compatibilityProperties);
        }

        return $data;
    }
}
