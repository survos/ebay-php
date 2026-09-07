<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about the various monetary exchanges that apply to the net balance due for the order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentSummary
{
    /**
     * @param list<Payment>|null $payments This array consists of payment information for the order, including payment status, payment method, payment amount, and payment date. This array is always returned, although some of the fields under this container will n...
     * @param list<OrderRefund>|null $refunds This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be sh...
     * @param Amount|null $totalDueSeller This is the total price that the seller receives for the entire order after all costs (item cost, delivery cost, taxes) are added for all line items, minus any discounts and/or promotions for any of the line items. Note...
     */
    public function __construct(
        public ?array $payments = null,
        public ?array $refunds = null,
        public ?Amount $totalDueSeller = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            payments: isset($data['payments']) && is_array($data['payments'])
                ? array_values(array_map(static fn (array $i): Payment => Payment::fromArray($i), $data['payments']))
                : null,
            refunds: isset($data['refunds']) && is_array($data['refunds'])
                ? array_values(array_map(static fn (array $i): OrderRefund => OrderRefund::fromArray($i), $data['refunds']))
                : null,
            totalDueSeller: isset($data['totalDueSeller']) && is_array($data['totalDueSeller']) ? Amount::fromArray($data['totalDueSeller']) : null,
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
        if ($this->payments !== null) {
            $data['payments'] = array_map(static fn (Payment $i): array => $i->toArray(), $this->payments);
        }
        if ($this->refunds !== null) {
            $data['refunds'] = array_map(static fn (OrderRefund $i): array => $i->toArray(), $this->refunds);
        }
        if ($this->totalDueSeller !== null) {
            $data['totalDueSeller'] = $this->totalDueSeller->toArray();
        }

        return $data;
    }
}
