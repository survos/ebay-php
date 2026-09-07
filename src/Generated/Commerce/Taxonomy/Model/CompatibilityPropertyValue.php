<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type is used by the compatibilityPropertyValues array that is returned in the getCompatibilityPropertyValues response. The compatibilityPropertyValues array contains all compatible vehicle property values that match the specified eBay marketplace, specified eBay category, and filters in the request. If the compatibility_property parameter value in the request is 'Trim', each value returned in...
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CompatibilityPropertyValue
{
    /**
     * @param string|null $value Each value field shows one applicable compatible vehicle property value. The values that are returned will depend on the specified eBay marketplace, specified eBay category, and filters in the request.
     */
    public function __construct(
        public ?string $value = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            value: isset($data['value']) ? (string) $data['value'] : null,
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
        if ($this->value !== null) {
            $data['value'] = $this->value;
        }

        return $data;
    }
}
