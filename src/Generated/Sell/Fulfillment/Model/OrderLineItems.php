<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the lineItems array that is used to identify one or more line items in the order with the payment dispute.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OrderLineItems
{
    /**
     * @param string|null $itemId The unique identifier of the eBay listing associated with the order.
     * @param string|null $lineItemId The unique identifier of the line item within the order.
     */
    public function __construct(
        public ?string $itemId = null,
        public ?string $lineItemId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            itemId: isset($data['itemId']) ? (string) $data['itemId'] : null,
            lineItemId: isset($data['lineItemId']) ? (string) $data['lineItemId'] : null,
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
        if ($this->itemId !== null) {
            $data['itemId'] = $this->itemId;
        }
        if ($this->lineItemId !== null) {
            $data['lineItemId'] = $this->lineItemId;
        }

        return $data;
    }
}
