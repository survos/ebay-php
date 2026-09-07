<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * The base type used by the request payload of the issueRefund method.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class IssueRefundRequest
{
    /**
     * @param string|null $reasonForRefund The enumeration value passed into this field indicates the reason for the refund. One of the defined enumeration values in the ReasonForRefundEnum type must be used. This field is required, and it is highly recommended t...
     * @param string|null $comment This free-text field allows the seller to clarify why the refund is being issued to the buyer. Max Length: 100
     * @param list<RefundItem>|null $refundItems The refundItems array is only required if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the orderLevelRefundAmount container to...
     * @param SimpleAmount|null $orderLevelRefundAmount This container is used to specify the amount of the refund for the entire order. If a seller wants to issue a refund for an individual line item within a multiple line item order, the seller would use the refundItems arr...
     */
    public function __construct(
        public ?string $reasonForRefund = null,
        public ?string $comment = null,
        public ?array $refundItems = null,
        public ?SimpleAmount $orderLevelRefundAmount = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            reasonForRefund: isset($data['reasonForRefund']) ? (string) $data['reasonForRefund'] : null,
            comment: isset($data['comment']) ? (string) $data['comment'] : null,
            refundItems: isset($data['refundItems']) && is_array($data['refundItems'])
                ? array_values(array_map(static fn (array $i): RefundItem => RefundItem::fromArray($i), $data['refundItems']))
                : null,
            orderLevelRefundAmount: isset($data['orderLevelRefundAmount']) && is_array($data['orderLevelRefundAmount']) ? SimpleAmount::fromArray($data['orderLevelRefundAmount']) : null,
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
        if ($this->reasonForRefund !== null) {
            $data['reasonForRefund'] = $this->reasonForRefund;
        }
        if ($this->comment !== null) {
            $data['comment'] = $this->comment;
        }
        if ($this->refundItems !== null) {
            $data['refundItems'] = array_map(static fn (RefundItem $i): array => $i->toArray(), $this->refundItems);
        }
        if ($this->orderLevelRefundAmount !== null) {
            $data['orderLevelRefundAmount'] = $this->orderLevelRefundAmount->toArray();
        }

        return $data;
    }
}
