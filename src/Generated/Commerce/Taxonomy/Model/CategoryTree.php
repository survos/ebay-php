<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains information about all nodes of a specified eBay category tree.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CategoryTree
{
    /**
     * @param list<string>|null $applicableMarketplaceIds A list of one or more identifiers of the eBay marketplaces that use this category tree.
     * @param string|null $categoryTreeId The unique identifier of this eBay category tree.
     * @param string|null $categoryTreeVersion The version of this category tree. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
     * @param CategoryTreeNode|null $rootCategoryNode Contains details of all nodes of the category tree hierarchy, starting with the root node and down to the leaf nodes. This is a recursive structure. Note: The root node of a full default category tree includes the catego...
     */
    public function __construct(
        public ?array $applicableMarketplaceIds = null,
        public ?string $categoryTreeId = null,
        public ?string $categoryTreeVersion = null,
        public ?CategoryTreeNode $rootCategoryNode = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            applicableMarketplaceIds: isset($data['applicableMarketplaceIds']) ? (array) $data['applicableMarketplaceIds'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            categoryTreeVersion: isset($data['categoryTreeVersion']) ? (string) $data['categoryTreeVersion'] : null,
            rootCategoryNode: isset($data['rootCategoryNode']) && is_array($data['rootCategoryNode']) ? CategoryTreeNode::fromArray($data['rootCategoryNode']) : null,
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
        if ($this->applicableMarketplaceIds !== null) {
            $data['applicableMarketplaceIds'] = $this->applicableMarketplaceIds;
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->categoryTreeVersion !== null) {
            $data['categoryTreeVersion'] = $this->categoryTreeVersion;
        }
        if ($this->rootCategoryNode !== null) {
            $data['rootCategoryNode'] = $this->rootCategoryNode->toArray();
        }

        return $data;
    }
}
