<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ItemConditionPolicy
{
    /**
     * @param string|null $categoryId The category ID to which the item-condition policy applies.
     * @param string|null $categoryTreeId A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy informa...
     * @param bool|null $itemConditionRequired This flag denotes whether or not you must list the item condition in a listing for the specified category. If set to true, you must specify an item condition for the associated category.
     * @param list<ItemCondition>|null $itemConditions The item-condition values allowed in the category. Note: The ‘Seller Refurbished’ item condition (condition ID 2500) has been replaced by the 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished'...
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?bool $itemConditionRequired = null,
        public ?array $itemConditions = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            itemConditionRequired: isset($data['itemConditionRequired']) ? (bool) $data['itemConditionRequired'] : null,
            itemConditions: isset($data['itemConditions']) && is_array($data['itemConditions'])
                ? array_values(array_map(static fn (array $i): ItemCondition => ItemCondition::fromArray($i), $data['itemConditions']))
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
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->itemConditionRequired !== null) {
            $data['itemConditionRequired'] = $this->itemConditionRequired;
        }
        if ($this->itemConditions !== null) {
            $data['itemConditions'] = array_map(static fn (ItemCondition $i): array => $i->toArray(), $this->itemConditions);
        }

        return $data;
    }
}
