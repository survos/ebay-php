<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains an array of suggested category tree nodes that are considered by eBay to most closely correspond to the keywords provided in a query string, from a specified category tree.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CategorySuggestionResponse
{
    /**
     * @param list<CategorySuggestion>|null $categorySuggestions Contains details about one or more suggested categories that correspond to the provided keywords. The array of suggested categories is sorted in order of eBay's confidence of the relevance of each category (the first cat...
     * @param string|null $categoryTreeId The unique identifier of the eBay category tree from which suggestions are returned.
     * @param string|null $categoryTreeVersion The version of the category tree identified by categoryTreeId. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
     */
    public function __construct(
        public ?array $categorySuggestions = null,
        public ?string $categoryTreeId = null,
        public ?string $categoryTreeVersion = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categorySuggestions: isset($data['categorySuggestions']) && is_array($data['categorySuggestions'])
                ? array_values(array_map(static fn (array $i): CategorySuggestion => CategorySuggestion::fromArray($i), $data['categorySuggestions']))
                : null,
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
        if ($this->categorySuggestions !== null) {
            $data['categorySuggestions'] = array_map(static fn (CategorySuggestion $i): array => $i->toArray(), $this->categorySuggestions);
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->categoryTreeVersion !== null) {
            $data['categoryTreeVersion'] = $this->categoryTreeVersion;
        }

        return $data;
    }
}
