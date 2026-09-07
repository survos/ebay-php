<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base response payload of getInventoryItems call.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryItems
{
    /**
     * @param string|null $href This is the URL to the current page of inventory items.
     * @param list<InventoryItemWithSkuLocaleGroupid>|null $inventoryItems This container is an array of one or more inventory items, with detailed information on each inventory item.
     * @param int|null $limit This integer value is the number of inventory items that will be displayed on each results page.
     * @param string|null $next This is the URL to the next page of inventory items. This field will only be returned if there are additional inventory items to view.
     * @param string|null $prev This is the URL to the previous page of inventory items. This field will only be returned if there are previous inventory items to view.
     * @param int|null $size This integer value indicates the total number of pages of results that are available. This number will depend on the total number of inventory items available for viewing, and on the limit value.
     * @param int|null $total This integer value is the total number of inventory items that exist for the seller's account. Based on this number and on the limit value, the seller may have to toggle through multiple pages to view all inventory items...
     */
    public function __construct(
        public ?string $href = null,
        public ?array $inventoryItems = null,
        public ?int $limit = null,
        public ?string $next = null,
        public ?string $prev = null,
        public ?int $size = null,
        public ?int $total = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            href: isset($data['href']) ? (string) $data['href'] : null,
            inventoryItems: isset($data['inventoryItems']) && is_array($data['inventoryItems'])
                ? array_values(array_map(static fn (array $i): InventoryItemWithSkuLocaleGroupid => InventoryItemWithSkuLocaleGroupid::fromArray($i), $data['inventoryItems']))
                : null,
            limit: isset($data['limit']) ? (int) $data['limit'] : null,
            next: isset($data['next']) ? (string) $data['next'] : null,
            prev: isset($data['prev']) ? (string) $data['prev'] : null,
            size: isset($data['size']) ? (int) $data['size'] : null,
            total: isset($data['total']) ? (int) $data['total'] : null,
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
        if ($this->href !== null) {
            $data['href'] = $this->href;
        }
        if ($this->inventoryItems !== null) {
            $data['inventoryItems'] = array_map(static fn (InventoryItemWithSkuLocaleGroupid $i): array => $i->toArray(), $this->inventoryItems);
        }
        if ($this->limit !== null) {
            $data['limit'] = $this->limit;
        }
        if ($this->next !== null) {
            $data['next'] = $this->next;
        }
        if ($this->prev !== null) {
            $data['prev'] = $this->prev;
        }
        if ($this->size !== null) {
            $data['size'] = $this->size;
        }
        if ($this->total !== null) {
            $data['total'] = $this->total;
        }

        return $data;
    }
}
