<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the orderLevelRefundAmount container to specify the amount of the refund for the entire order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class RefundItem
{
    /**
     * @param SimpleAmount|null $refundAmount This container is used to specify the amount of the refund for the corresponding order line item. If a seller wants to issue a refund for an entire order, the seller would use the orderLevelRefundAmount container instead...
     * @param string|null $lineItemId The unique identifier of an order line item. This identifier is created once a buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning bidder. Either this field or the legacyReference container i...
     * @param LegacyReference|null $legacyReference This container is needed if the seller is issuing a refund for an individual order line item, and wishes to use an item ID/transaction ID pair to identify the order line item. Either this container or the lineItemId fiel...
     */
    public function __construct(
        public ?SimpleAmount $refundAmount = null,
        public ?string $lineItemId = null,
        public ?LegacyReference $legacyReference = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            refundAmount: isset($data['refundAmount']) && is_array($data['refundAmount']) ? SimpleAmount::fromArray($data['refundAmount']) : null,
            lineItemId: isset($data['lineItemId']) ? (string) $data['lineItemId'] : null,
            legacyReference: isset($data['legacyReference']) && is_array($data['legacyReference']) ? LegacyReference::fromArray($data['legacyReference']) : null,
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
        if ($this->refundAmount !== null) {
            $data['refundAmount'] = $this->refundAmount->toArray();
        }
        if ($this->lineItemId !== null) {
            $data['lineItemId'] = $this->lineItemId;
        }
        if ($this->legacyReference !== null) {
            $data['legacyReference'] = $this->legacyReference->toArray();
        }

        return $data;
    }
}
