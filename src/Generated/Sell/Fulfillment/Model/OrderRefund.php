<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about a refund issued for an order. This does not include line item level refunds.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OrderRefund
{
    /**
     * @param Amount|null $amount This field shows the refund amount for an order. This container is always returned for each refund. Note: The refund amount shown is the seller's net amount received from the sale/transaction. eBay-collected tax will not...
     * @param string|null $refundDate The date and time that the refund was issued. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the refund has been issued. Format: [YYY...
     * @param string|null $refundId Unique identifier of a refund that was initiated for an order through the issueRefund method. If the issueRefund method was used to issue one or more refunds at the line item level, these refund identifiers are returned...
     * @param string|null $refundReferenceId The eBay-generated unique identifier for the refund. This field is not returned until the refund has been issued.
     * @param string|null $refundStatus This enumeration value indicates the current status of the refund to the buyer. This container is always returned for each refund. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?Amount $amount = null,
        public ?string $refundDate = null,
        public ?string $refundId = null,
        public ?string $refundReferenceId = null,
        public ?string $refundStatus = null,
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
            refundStatus: isset($data['refundStatus']) ? (string) $data['refundStatus'] : null,
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
        if ($this->refundStatus !== null) {
            $data['refundStatus'] = $this->refundStatus;
        }

        return $data;
    }
}
