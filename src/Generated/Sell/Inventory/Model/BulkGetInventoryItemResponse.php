<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base response of the bulkGetInventoryItem method.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BulkGetInventoryItemResponse
{
    /**
     * @param list<GetInventoryItemResponse>|null $responses This is the base container of the bulkGetInventoryItem response. The results of each attempted inventory item retrieval is captured under this container.
     */
    public function __construct(
        public ?array $responses = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            responses: isset($data['responses']) && is_array($data['responses'])
                ? array_values(array_map(static fn (array $i): GetInventoryItemResponse => GetInventoryItemResponse::fromArray($i), $data['responses']))
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
        if ($this->responses !== null) {
            $data['responses'] = array_map(static fn (GetInventoryItemResponse $i): array => $i->toArray(), $this->responses);
        }

        return $data;
    }
}
