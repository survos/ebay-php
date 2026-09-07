<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used to provide details about the seller payments for an order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Payment
{
    /**
     * @param Amount|null $amount The amount that seller receives for the order via the payment method mentioned in Payment.paymentMethod. Note: For orders that are subject to 'eBay Collect and Remit' tax, which includes US state-mandated sales tax, Fede...
     * @param string|null $paymentDate The date and time that the payment was received by the seller. This field will not be returned if buyer has yet to pay for the order. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Tim...
     * @param list<PaymentHold>|null $paymentHolds This container is only returned if eBay is temporarily holding the seller's funds for the order. If a payment hold has been placed on the order, this container includes the reason for the payment hold, the expected relea...
     * @param string|null $paymentMethod The payment method used to pay for the order. See the PaymentMethodTypeEnum type for more information on the payment methods. For implementation help, refer to eBay API documentation
     * @param string|null $paymentReferenceId This field is only returned if payment has been made by the buyer, and the paymentMethod is ESCROW. This field contains a special ID for ESCROW.
     * @param string|null $paymentStatus The enumeration value returned in this field indicates the status of the payment for the order. See the PaymentStatusEnum type definition for more information on the possible payment states. For implementation help, refe...
     */
    public function __construct(
        public ?Amount $amount = null,
        public ?string $paymentDate = null,
        public ?array $paymentHolds = null,
        public ?string $paymentMethod = null,
        public ?string $paymentReferenceId = null,
        public ?string $paymentStatus = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? Amount::fromArray($data['amount']) : null,
            paymentDate: isset($data['paymentDate']) ? (string) $data['paymentDate'] : null,
            paymentHolds: isset($data['paymentHolds']) && is_array($data['paymentHolds'])
                ? array_values(array_map(static fn (array $i): PaymentHold => PaymentHold::fromArray($i), $data['paymentHolds']))
                : null,
            paymentMethod: isset($data['paymentMethod']) ? (string) $data['paymentMethod'] : null,
            paymentReferenceId: isset($data['paymentReferenceId']) ? (string) $data['paymentReferenceId'] : null,
            paymentStatus: isset($data['paymentStatus']) ? (string) $data['paymentStatus'] : null,
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
        if ($this->paymentDate !== null) {
            $data['paymentDate'] = $this->paymentDate;
        }
        if ($this->paymentHolds !== null) {
            $data['paymentHolds'] = array_map(static fn (PaymentHold $i): array => $i->toArray(), $this->paymentHolds);
        }
        if ($this->paymentMethod !== null) {
            $data['paymentMethod'] = $this->paymentMethod;
        }
        if ($this->paymentReferenceId !== null) {
            $data['paymentReferenceId'] = $this->paymentReferenceId;
        }
        if ($this->paymentStatus !== null) {
            $data['paymentStatus'] = $this->paymentStatus;
        }

        return $data;
    }
}
