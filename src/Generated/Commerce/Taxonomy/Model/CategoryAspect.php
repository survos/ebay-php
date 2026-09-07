<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CategoryAspect
{
    /**
     * @param Category|null $category The details that are appropriate or necessary to accurately define the category.
     * @param list<Aspect>|null $aspects A list of aspect metadata that is used to describe the items in a particular leaf category.
     */
    public function __construct(
        public ?Category $category = null,
        public ?array $aspects = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            category: isset($data['category']) && is_array($data['category']) ? Category::fromArray($data['category']) : null,
            aspects: isset($data['aspects']) && is_array($data['aspects'])
                ? array_values(array_map(static fn (array $i): Aspect => Aspect::fromArray($i), $data['aspects']))
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
        if ($this->category !== null) {
            $data['category'] = $this->category->toArray();
        }
        if ($this->aspects !== null) {
            $data['aspects'] = array_map(static fn (Aspect $i): array => $i->toArray(), $this->aspects);
        }

        return $data;
    }
}
