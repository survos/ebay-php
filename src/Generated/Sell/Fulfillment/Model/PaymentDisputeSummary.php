<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by each payment dispute that is returned with the getPaymentDisputeSummaries method.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentDisputeSummary
{
    /**
     * @param SimpleAmount|null $amount This container shows the dollar value associated with the payment dispute in the currency used by the seller's marketplace. This container is returned for all payment disputes returned in the response.
     * @param string|null $buyerUsername This is the buyer's eBay user ID. This field is returned for all payment disputes returned in the response.
     * @param string|null $closedDate The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the CLOSED state. The timestamps returned here use the ISO-8601 24-hour date and...
     * @param string|null $openDate The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states. The timestamps returned here use the ISO-8601 24-hour date and time format,...
     * @param string|null $orderId This is the unique identifier of the order involved in the payment dispute.
     * @param string|null $paymentDisputeId This is the unique identifier of the payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. This identifier is passed in at the end of the getPaymentDispute...
     * @param string|null $paymentDisputeStatus The enumeration value in this field gives the current status of the payment dispute. For implementation help, refer to eBay API documentation
     * @param string|null $reason The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See DisputeReasonEnum type for a description of the supported reasons that buyers can give for initiating a payment disput...
     * @param string|null $respondByDate The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the ACTION_NEEDED state. For payment disputes that require action...
     */
    public function __construct(
        public ?SimpleAmount $amount = null,
        public ?string $buyerUsername = null,
        public ?string $closedDate = null,
        public ?string $openDate = null,
        public ?string $orderId = null,
        public ?string $paymentDisputeId = null,
        public ?string $paymentDisputeStatus = null,
        public ?string $reason = null,
        public ?string $respondByDate = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? SimpleAmount::fromArray($data['amount']) : null,
            buyerUsername: isset($data['buyerUsername']) ? (string) $data['buyerUsername'] : null,
            closedDate: isset($data['closedDate']) ? (string) $data['closedDate'] : null,
            openDate: isset($data['openDate']) ? (string) $data['openDate'] : null,
            orderId: isset($data['orderId']) ? (string) $data['orderId'] : null,
            paymentDisputeId: isset($data['paymentDisputeId']) ? (string) $data['paymentDisputeId'] : null,
            paymentDisputeStatus: isset($data['paymentDisputeStatus']) ? (string) $data['paymentDisputeStatus'] : null,
            reason: isset($data['reason']) ? (string) $data['reason'] : null,
            respondByDate: isset($data['respondByDate']) ? (string) $data['respondByDate'] : null,
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
        if ($this->buyerUsername !== null) {
            $data['buyerUsername'] = $this->buyerUsername;
        }
        if ($this->closedDate !== null) {
            $data['closedDate'] = $this->closedDate;
        }
        if ($this->openDate !== null) {
            $data['openDate'] = $this->openDate;
        }
        if ($this->orderId !== null) {
            $data['orderId'] = $this->orderId;
        }
        if ($this->paymentDisputeId !== null) {
            $data['paymentDisputeId'] = $this->paymentDisputeId;
        }
        if ($this->paymentDisputeStatus !== null) {
            $data['paymentDisputeStatus'] = $this->paymentDisputeStatus;
        }
        if ($this->reason !== null) {
            $data['reason'] = $this->reason;
        }
        if ($this->respondByDate !== null) {
            $data['respondByDate'] = $this->respondByDate;
        }

        return $data;
    }
}
