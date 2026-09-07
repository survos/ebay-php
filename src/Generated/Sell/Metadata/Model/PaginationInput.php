<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the fields used to control the pagination of the result set.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaginationInput
{
    /**
     * @param int|null $limit The max number of items, from the current result set, returned on a single page. Note: For getProductCompatibilities, the max value is 100. If no limit is specified, this field defaults to the max value.
     * @param int|null $offset The number of items that will be skipped in the result set before returning the first item in the paginated response. Combine offset with limit to control the items returned in the response. For example, if you supply an...
     */
    public function __construct(
        public ?int $limit = null,
        public ?int $offset = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            limit: isset($data['limit']) ? (int) $data['limit'] : null,
            offset: isset($data['offset']) ? (int) $data['offset'] : null,
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
        if ($this->limit !== null) {
            $data['limit'] = $this->limit;
        }
        if ($this->offset !== null) {
            $data['offset'] = $this->offset;
        }

        return $data;
    }
}
