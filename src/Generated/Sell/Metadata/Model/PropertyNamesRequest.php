<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the request fields for the getCompatibilityPropertyNames method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PropertyNamesRequest
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which to retrieve compatibility property names. This category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compa...
     * @param list<string>|null $dataset This array defines the properties that will be returned for the compatibility-enabled category. For example, if you specify Searchable, the compatibility details will contain properties that can be used to search for pro...
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?array $dataset = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            dataset: isset($data['dataset']) ? (array) $data['dataset'] : null,
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
        if ($this->dataset !== null) {
            $data['dataset'] = $this->dataset;
        }

        return $data;
    }
}
