<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains information about one of the ancestors of a suggested category. An ordered list of these references describes the path from the suggested category to the root of the category tree it belongs to.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AncestorReference
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay ancestor category. Note: The root node of a full default category tree includes the categoryId field, but its value should not be relied upon. It provides no useful information for appli...
     * @param string|null $categoryName The name of the ancestor category identified by categoryId.
     * @param string|null $categorySubtreeNodeHref The href portion of the getCategorySubtree call that retrieves the subtree below the ancestor category node.
     * @param int|null $categoryTreeNodeLevel The absolute level of the ancestor category node in the hierarchy of its category tree. Note: The root node of any full category tree is always at level 0.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryName = null,
        public ?string $categorySubtreeNodeHref = null,
        public ?int $categoryTreeNodeLevel = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryName: isset($data['categoryName']) ? (string) $data['categoryName'] : null,
            categorySubtreeNodeHref: isset($data['categorySubtreeNodeHref']) ? (string) $data['categorySubtreeNodeHref'] : null,
            categoryTreeNodeLevel: isset($data['categoryTreeNodeLevel']) ? (int) $data['categoryTreeNodeLevel'] : null,
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
        if ($this->categoryName !== null) {
            $data['categoryName'] = $this->categoryName;
        }
        if ($this->categorySubtreeNodeHref !== null) {
            $data['categorySubtreeNodeHref'] = $this->categorySubtreeNodeHref;
        }
        if ($this->categoryTreeNodeLevel !== null) {
            $data['categoryTreeNodeLevel'] = $this->categoryTreeNodeLevel;
        }

        return $data;
    }
}
