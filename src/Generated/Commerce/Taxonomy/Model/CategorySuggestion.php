<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains information about a suggested category tree leaf node that corresponds to keywords provided in the request. It includes details about each of the category's ancestor nodes extending up to the root of the category tree.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CategorySuggestion
{
    /**
     * @param Category|null $category Contains details about the suggested category.
     * @param list<AncestorReference>|null $categoryTreeNodeAncestors An ordered list of category references that describes the location of the suggested category in the specified category tree. The list identifies the category's ancestry as a sequence of parent nodes, from the current nod...
     * @param int|null $categoryTreeNodeLevel The absolute level of the category tree node in the hierarchy of its category tree. Note: The root node of any full category tree is always at level 0.
     * @param string|null $relevancy This field is reserved for internal or future use.
     */
    public function __construct(
        public ?Category $category = null,
        public ?array $categoryTreeNodeAncestors = null,
        public ?int $categoryTreeNodeLevel = null,
        public ?string $relevancy = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            category: isset($data['category']) && is_array($data['category']) ? Category::fromArray($data['category']) : null,
            categoryTreeNodeAncestors: isset($data['categoryTreeNodeAncestors']) && is_array($data['categoryTreeNodeAncestors'])
                ? array_values(array_map(static fn (array $i): AncestorReference => AncestorReference::fromArray($i), $data['categoryTreeNodeAncestors']))
                : null,
            categoryTreeNodeLevel: isset($data['categoryTreeNodeLevel']) ? (int) $data['categoryTreeNodeLevel'] : null,
            relevancy: isset($data['relevancy']) ? (string) $data['relevancy'] : null,
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
        if ($this->categoryTreeNodeAncestors !== null) {
            $data['categoryTreeNodeAncestors'] = array_map(static fn (AncestorReference $i): array => $i->toArray(), $this->categoryTreeNodeAncestors);
        }
        if ($this->categoryTreeNodeLevel !== null) {
            $data['categoryTreeNodeLevel'] = $this->categoryTreeNodeLevel;
        }
        if ($this->relevancy !== null) {
            $data['relevancy'] = $this->relevancy;
        }

        return $data;
    }
}
