<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type defines the expired category ID for the requested category tree, and the currently active category ID that has replaced it.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ExpiredCategory
{
    /**
     * @param string|null $fromCategoryId The unique identifier of the expired eBay leaf category.
     * @param string|null $toCategoryId The unique identifier of the currently active eBay leaf category that has replaced the expired leaf category. Note: More than one fromCategoryID value may map into the same toCategoryID value, as multiple eBay categories...
     */
    public function __construct(
        public ?string $fromCategoryId = null,
        public ?string $toCategoryId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fromCategoryId: isset($data['fromCategoryId']) ? (string) $data['fromCategoryId'] : null,
            toCategoryId: isset($data['toCategoryId']) ? (string) $data['toCategoryId'] : null,
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
        if ($this->fromCategoryId !== null) {
            $data['fromCategoryId'] = $this->fromCategoryId;
        }
        if ($this->toCategoryId !== null) {
            $data['toCategoryId'] = $this->toCategoryId;
        }

        return $data;
    }
}
