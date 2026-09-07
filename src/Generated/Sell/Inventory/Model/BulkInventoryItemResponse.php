<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base response of the bulkCreateOrReplaceInventoryItem method.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BulkInventoryItemResponse
{
    /**
     * @param list<InventoryItemResponse>|null $responses This is the base container of the bulkCreateOrReplaceInventoryItem response. The results of each attempted inventory item creation/update is captured under this container.
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
                ? array_values(array_map(static fn (array $i): InventoryItemResponse => InventoryItemResponse::fromArray($i), $data['responses']))
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
            $data['responses'] = array_map(static fn (InventoryItemResponse $i): array => $i->toArray(), $this->responses);
        }

        return $data;
    }
}
