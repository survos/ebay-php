<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ListingStructurePolicy
{
    /**
     * @param string|null $categoryId The category ID to which the listing-structure policy applies.
     * @param string|null $categoryTreeId A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy informa...
     * @param bool|null $variationsSupported This flag denotes whether or not the associated category supports listings with item variations. If set to true, the category does support item variations.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?bool $variationsSupported = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            variationsSupported: isset($data['variationsSupported']) ? (bool) $data['variationsSupported'] : null,
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
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->variationsSupported !== null) {
            $data['variationsSupported'] = $this->variationsSupported;
        }

        return $data;
    }
}
