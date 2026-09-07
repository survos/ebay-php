<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains information about all nodes of a category tree or subtree hierarchy, including and below the specified Category, down to the leaf nodes. It is a recursive structure.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CategoryTreeNode
{
    /**
     * @param Category|null $category Contains details about the current category tree node.
     * @param int|null $categoryTreeNodeLevel The absolute level of the current category tree node in the hierarchy of its category tree. Note: The root node of any full category tree is always at level 0.
     * @param list<CategoryTreeNode>|null $childCategoryTreeNodes An array of one or more category tree nodes that are the immediate children of the current category tree node, as well as their children, recursively down to the leaf nodes. Returned only if the current category tree nod...
     * @param bool|null $leafCategoryTreeNode A value of true indicates that the current category tree node is a leaf node (it has no child nodes). A value of false indicates that the current node has one or more child nodes, which are identified by the childCategor...
     * @param string|null $parentCategoryTreeNodeHref The href portion of the getCategorySubtree call that retrieves the subtree below the parent of this category tree node. Not returned if the current category tree node is the root node of its tree.
     */
    public function __construct(
        public ?Category $category = null,
        public ?int $categoryTreeNodeLevel = null,
        public ?array $childCategoryTreeNodes = null,
        public ?bool $leafCategoryTreeNode = null,
        public ?string $parentCategoryTreeNodeHref = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            category: isset($data['category']) && is_array($data['category']) ? Category::fromArray($data['category']) : null,
            categoryTreeNodeLevel: isset($data['categoryTreeNodeLevel']) ? (int) $data['categoryTreeNodeLevel'] : null,
            childCategoryTreeNodes: isset($data['childCategoryTreeNodes']) && is_array($data['childCategoryTreeNodes'])
                ? array_values(array_map(static fn (array $i): CategoryTreeNode => CategoryTreeNode::fromArray($i), $data['childCategoryTreeNodes']))
                : null,
            leafCategoryTreeNode: isset($data['leafCategoryTreeNode']) ? (bool) $data['leafCategoryTreeNode'] : null,
            parentCategoryTreeNodeHref: isset($data['parentCategoryTreeNodeHref']) ? (string) $data['parentCategoryTreeNodeHref'] : null,
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
        if ($this->categoryTreeNodeLevel !== null) {
            $data['categoryTreeNodeLevel'] = $this->categoryTreeNodeLevel;
        }
        if ($this->childCategoryTreeNodes !== null) {
            $data['childCategoryTreeNodes'] = array_map(static fn (CategoryTreeNode $i): array => $i->toArray(), $this->childCategoryTreeNodes);
        }
        if ($this->leafCategoryTreeNode !== null) {
            $data['leafCategoryTreeNode'] = $this->leafCategoryTreeNode;
        }
        if ($this->parentCategoryTreeNodeHref !== null) {
            $data['parentCategoryTreeNodeHref'] = $this->parentCategoryTreeNodeHref;
        }

        return $data;
    }
}
