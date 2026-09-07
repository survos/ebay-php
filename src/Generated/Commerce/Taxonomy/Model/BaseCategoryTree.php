<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains identifying information for the category tree associated with a particular eBay marketplace.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BaseCategoryTree
{
    /**
     * @param string|null $categoryTreeId The unique identifier of the eBay category tree for the specified marketplace.
     * @param string|null $categoryTreeVersion The version of the category tree identified by categoryTreeId. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
     */
    public function __construct(
        public ?string $categoryTreeId = null,
        public ?string $categoryTreeVersion = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            categoryTreeVersion: isset($data['categoryTreeVersion']) ? (string) $data['categoryTreeVersion'] : null,
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
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->categoryTreeVersion !== null) {
            $data['categoryTreeVersion'] = $this->categoryTreeVersion;
        }

        return $data;
    }
}
