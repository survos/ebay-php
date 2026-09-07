<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class GetCategoriesAspectResponse
{
    /**
     * @param string|null $categoryTreeId The unique identifier of the eBay category tree being requested.
     * @param string|null $categoryTreeVersion The version of the category tree that is returned in the categoryTreeId field.
     * @param list<CategoryAspect>|null $categoryAspects An array of aspects that are appropriate or necessary for accurately describing items in a particular leaf category.
     */
    public function __construct(
        public ?string $categoryTreeId = null,
        public ?string $categoryTreeVersion = null,
        public ?array $categoryAspects = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            categoryTreeVersion: isset($data['categoryTreeVersion']) ? (string) $data['categoryTreeVersion'] : null,
            categoryAspects: isset($data['categoryAspects']) && is_array($data['categoryAspects'])
                ? array_values(array_map(static fn (array $i): CategoryAspect => CategoryAspect::fromArray($i), $data['categoryAspects']))
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
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->categoryTreeVersion !== null) {
            $data['categoryTreeVersion'] = $this->categoryTreeVersion;
        }
        if ($this->categoryAspects !== null) {
            $data['categoryAspects'] = array_map(static fn (CategoryAspect $i): array => $i->toArray(), $this->categoryAspects);
        }

        return $data;
    }
}
