<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the pagination settings for a result set.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Pagination
{
    /**
     * @param int|null $count The number of results showing on the current page of results.
     * @param int|null $limit The max number of entries that can be returned on a single page.
     * @param int|null $offset The number of items that will be skipped in the result set before returning the first item in the paginated response.
     * @param int|null $total The total number of results in a result set.
     */
    public function __construct(
        public ?int $count = null,
        public ?int $limit = null,
        public ?int $offset = null,
        public ?int $total = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            count: isset($data['count']) ? (int) $data['count'] : null,
            limit: isset($data['limit']) ? (int) $data['limit'] : null,
            offset: isset($data['offset']) ? (int) $data['offset'] : null,
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
        if ($this->count !== null) {
            $data['count'] = $this->count;
        }
        if ($this->limit !== null) {
            $data['limit'] = $this->limit;
        }
        if ($this->offset !== null) {
            $data['offset'] = $this->offset;
        }
        if ($this->total !== null) {
            $data['total'] = $this->total;
        }

        return $data;
    }
}
