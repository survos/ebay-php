<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * The base response type of the getCompatibilityPropertyValues method.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class GetCompatibilityPropertyValuesResponse
{
    /**
     * @param list<CompatibilityPropertyValue>|null $compatibilityPropertyValues This array contains all compatible vehicle property values that match the specified eBay marketplace, specified eBay category, and filters in the request. If the compatibility_property parameter value in the request is '...
     */
    public function __construct(
        public ?array $compatibilityPropertyValues = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            compatibilityPropertyValues: isset($data['compatibilityPropertyValues']) && is_array($data['compatibilityPropertyValues'])
                ? array_values(array_map(static fn (array $i): CompatibilityPropertyValue => CompatibilityPropertyValue::fromArray($i), $data['compatibilityPropertyValues']))
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
        if ($this->compatibilityPropertyValues !== null) {
            $data['compatibilityPropertyValues'] = array_map(static fn (CompatibilityPropertyValue $i): array => $i->toArray(), $this->compatibilityPropertyValues);
        }

        return $data;
    }
}
