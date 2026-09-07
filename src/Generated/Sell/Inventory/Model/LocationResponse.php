<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base response payload for the getInventoryLocations call.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LocationResponse
{
    /**
     * @param string|null $href The URI of the current page of results from the result set.
     * @param int|null $limit The number of items returned on a single page from the result set.
     * @param string|null $next The URI for the following page of results. This value is returned only if there is an additional page of results to display from the result set. Max length: 2048
     * @param int|null $offset The number of results skipped in the result set before listing the first returned result. This value is set in the request with the offset query parameter. Note: The items in a paginated result set use a zero-based list...
     * @param string|null $prev The URI for the preceding page of results. This value is returned only if there is a previous page of results to display from the result set. Max length: 2048
     * @param int|null $total The total number of items retrieved in the result set. If no items are found, this field is returned with a value of 0.
     * @param list<InventoryLocationResponse>|null $locations An array of one or more of the merchant's inventory locations.
     */
    public function __construct(
        public ?string $href = null,
        public ?int $limit = null,
        public ?string $next = null,
        public ?int $offset = null,
        public ?string $prev = null,
        public ?int $total = null,
        public ?array $locations = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            href: isset($data['href']) ? (string) $data['href'] : null,
            limit: isset($data['limit']) ? (int) $data['limit'] : null,
            next: isset($data['next']) ? (string) $data['next'] : null,
            offset: isset($data['offset']) ? (int) $data['offset'] : null,
            prev: isset($data['prev']) ? (string) $data['prev'] : null,
            total: isset($data['total']) ? (int) $data['total'] : null,
            locations: isset($data['locations']) && is_array($data['locations'])
                ? array_values(array_map(static fn (array $i): InventoryLocationResponse => InventoryLocationResponse::fromArray($i), $data['locations']))
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
        if ($this->href !== null) {
            $data['href'] = $this->href;
        }
        if ($this->limit !== null) {
            $data['limit'] = $this->limit;
        }
        if ($this->next !== null) {
            $data['next'] = $this->next;
        }
        if ($this->offset !== null) {
            $data['offset'] = $this->offset;
        }
        if ($this->prev !== null) {
            $data['prev'] = $this->prev;
        }
        if ($this->total !== null) {
            $data['total'] = $this->total;
        }
        if ($this->locations !== null) {
            $data['locations'] = array_map(static fn (InventoryLocationResponse $i): array => $i->toArray(), $this->locations);
        }

        return $data;
    }
}
