<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains refund information for a line item.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LineItemRefund
{
    /**
     * @param Amount|null $amount This field shows the refund amount for a line item. This field is only returned if the buyer is due a refund for the line item. Note: The refund amount shown is the seller's net amount received from the sale/transaction....
     * @param string|null $refundDate The date and time that the refund was issued for the line item. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the refund has been is...
     * @param string|null $refundId Unique identifier of a refund that was initiated for an order's line item through the issueRefund method. If the issueRefund method was used to issue a refund at the order level, this identifier is returned at the order...
     * @param string|null $refundReferenceId This field is reserved for internal or future use.
     */
    public function __construct(
        public ?Amount $amount = null,
        public ?string $refundDate = null,
        public ?string $refundId = null,
        public ?string $refundReferenceId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? Amount::fromArray($data['amount']) : null,
            refundDate: isset($data['refundDate']) ? (string) $data['refundDate'] : null,
            refundId: isset($data['refundId']) ? (string) $data['refundId'] : null,
            refundReferenceId: isset($data['refundReferenceId']) ? (string) $data['refundReferenceId'] : null,
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
        if ($this->amount !== null) {
            $data['amount'] = $this->amount->toArray();
        }
        if ($this->refundDate !== null) {
            $data['refundDate'] = $this->refundDate;
        }
        if ($this->refundId !== null) {
            $data['refundId'] = $this->refundId;
        }
        if ($this->refundReferenceId !== null) {
            $data['refundReferenceId'] = $this->refundReferenceId;
        }

        return $data;
    }
}
