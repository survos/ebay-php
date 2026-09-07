<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the details of an order, including information about the buyer, order history, shipping fulfillments, line items, costs, payments, and order fulfillment status.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Order
{
    /**
     * @param Buyer|null $buyer This container consists of information about the order's buyer. At this time, only the buyer's eBay user ID is returned, but it's possible that more buyer information can be added to this container in the future.
     * @param string|null $buyerCheckoutNotes This field contains any comments that the buyer left for the seller about the order during checkout process. This field is only returned if a buyer left comments at checkout time.
     * @param CancelStatus|null $cancelStatus This container consists of order cancellation information if a cancel request has been made. This container is always returned, and if no cancel request has been made, the cancelState field is returned with a value of NO...
     * @param string|null $creationDate The date and time that the order was created. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:...
     * @param bool|null $ebayCollectAndRemitTax This field is only returned if true, and indicates that eBay will collect tax (US state-mandated sales tax, Federal and Provincial Sales Tax in Canada, 'Goods and Services' tax in Canada, Australia, and New Zealand, and...
     * @param list<string>|null $fulfillmentHrefs This array contains a list of one or more getShippingFulfillment call URIs that can be used to retrieve shipping fulfillments that have been set up for the order.
     * @param list<FulfillmentStartInstruction>|null $fulfillmentStartInstructions This container consists of a set of specifications for fulfilling the order, including the type of fulfillment, shipping carrier and service, shipping address, and estimated delivery window. These instructions are derive...
     * @param string|null $lastModifiedDate The date and time that the order was last modified. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T...
     * @param list<LineItem>|null $lineItems This array contains the details for all line items that comprise the order.
     * @param string|null $orderFulfillmentStatus The degree to which fulfillment of the order is complete. See the OrderFulfillmentStatus type definition for more information about each possible fulfillment state. For implementation help, refer to eBay API documentatio...
     * @param string|null $orderId The unique identifier of the order. This field is always returned.
     * @param string|null $orderPaymentStatus The enumeration value returned in this field indicates the current payment status of an order, or in case of a refund request, the current status of the refund. See the OrderPaymentStatusEnum type definition for more inf...
     * @param PaymentSummary|null $paymentSummary This container consists of detailed payment information for the order, including buyer payment for the order, refund information (if applicable), and seller payment holds (if applicable).
     * @param PricingSummary|null $pricingSummary This container consists of a summary of cumulative costs and charges for all line items of an order, including item price, price adjustments, sales taxes, delivery costs, and order discounts.
     * @param Program|null $program This container is returned for orders that are eligible for eBay's Authenticity Guarantee service. The seller ships Authenticity Guarantee service items to the authentication partner instead of the buyer. The authenticat...
     * @param string|null $salesRecordReference An eBay-generated identifier that is used to identify and manage orders through the Selling Manager and Selling Manager Pro tools. This order identifier can also be found on the Orders grid page and in the Sales Record p...
     * @param string|null $sellerId The unique eBay user ID of the seller who sold the order.
     * @param Amount|null $totalFeeBasisAmount This is the cumulative base amount used to calculate the final value fees for each order. The final value fees are deducted from the seller payout associated with the order. Final value fees are calculated as a percentag...
     * @param Amount|null $totalMarketplaceFee This is the cumulative fees accrued for the order and deducted from the seller payout.
     */
    public function __construct(
        public ?Buyer $buyer = null,
        public ?string $buyerCheckoutNotes = null,
        public ?CancelStatus $cancelStatus = null,
        public ?string $creationDate = null,
        public ?bool $ebayCollectAndRemitTax = null,
        public ?array $fulfillmentHrefs = null,
        public ?array $fulfillmentStartInstructions = null,
        public ?string $lastModifiedDate = null,
        public ?array $lineItems = null,
        public ?string $orderFulfillmentStatus = null,
        public ?string $orderId = null,
        public ?string $orderPaymentStatus = null,
        public ?PaymentSummary $paymentSummary = null,
        public ?PricingSummary $pricingSummary = null,
        public ?Program $program = null,
        public ?string $salesRecordReference = null,
        public ?string $sellerId = null,
        public ?Amount $totalFeeBasisAmount = null,
        public ?Amount $totalMarketplaceFee = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            buyer: isset($data['buyer']) && is_array($data['buyer']) ? Buyer::fromArray($data['buyer']) : null,
            buyerCheckoutNotes: isset($data['buyerCheckoutNotes']) ? (string) $data['buyerCheckoutNotes'] : null,
            cancelStatus: isset($data['cancelStatus']) && is_array($data['cancelStatus']) ? CancelStatus::fromArray($data['cancelStatus']) : null,
            creationDate: isset($data['creationDate']) ? (string) $data['creationDate'] : null,
            ebayCollectAndRemitTax: isset($data['ebayCollectAndRemitTax']) ? (bool) $data['ebayCollectAndRemitTax'] : null,
            fulfillmentHrefs: isset($data['fulfillmentHrefs']) ? (array) $data['fulfillmentHrefs'] : null,
            fulfillmentStartInstructions: isset($data['fulfillmentStartInstructions']) && is_array($data['fulfillmentStartInstructions'])
                ? array_values(array_map(static fn (array $i): FulfillmentStartInstruction => FulfillmentStartInstruction::fromArray($i), $data['fulfillmentStartInstructions']))
                : null,
            lastModifiedDate: isset($data['lastModifiedDate']) ? (string) $data['lastModifiedDate'] : null,
            lineItems: isset($data['lineItems']) && is_array($data['lineItems'])
                ? array_values(array_map(static fn (array $i): LineItem => LineItem::fromArray($i), $data['lineItems']))
                : null,
            orderFulfillmentStatus: isset($data['orderFulfillmentStatus']) ? (string) $data['orderFulfillmentStatus'] : null,
            orderId: isset($data['orderId']) ? (string) $data['orderId'] : null,
            orderPaymentStatus: isset($data['orderPaymentStatus']) ? (string) $data['orderPaymentStatus'] : null,
            paymentSummary: isset($data['paymentSummary']) && is_array($data['paymentSummary']) ? PaymentSummary::fromArray($data['paymentSummary']) : null,
            pricingSummary: isset($data['pricingSummary']) && is_array($data['pricingSummary']) ? PricingSummary::fromArray($data['pricingSummary']) : null,
            program: isset($data['program']) && is_array($data['program']) ? Program::fromArray($data['program']) : null,
            salesRecordReference: isset($data['salesRecordReference']) ? (string) $data['salesRecordReference'] : null,
            sellerId: isset($data['sellerId']) ? (string) $data['sellerId'] : null,
            totalFeeBasisAmount: isset($data['totalFeeBasisAmount']) && is_array($data['totalFeeBasisAmount']) ? Amount::fromArray($data['totalFeeBasisAmount']) : null,
            totalMarketplaceFee: isset($data['totalMarketplaceFee']) && is_array($data['totalMarketplaceFee']) ? Amount::fromArray($data['totalMarketplaceFee']) : null,
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
        if ($this->buyer !== null) {
            $data['buyer'] = $this->buyer->toArray();
        }
        if ($this->buyerCheckoutNotes !== null) {
            $data['buyerCheckoutNotes'] = $this->buyerCheckoutNotes;
        }
        if ($this->cancelStatus !== null) {
            $data['cancelStatus'] = $this->cancelStatus->toArray();
        }
        if ($this->creationDate !== null) {
            $data['creationDate'] = $this->creationDate;
        }
        if ($this->ebayCollectAndRemitTax !== null) {
            $data['ebayCollectAndRemitTax'] = $this->ebayCollectAndRemitTax;
        }
        if ($this->fulfillmentHrefs !== null) {
            $data['fulfillmentHrefs'] = $this->fulfillmentHrefs;
        }
        if ($this->fulfillmentStartInstructions !== null) {
            $data['fulfillmentStartInstructions'] = array_map(static fn (FulfillmentStartInstruction $i): array => $i->toArray(), $this->fulfillmentStartInstructions);
        }
        if ($this->lastModifiedDate !== null) {
            $data['lastModifiedDate'] = $this->lastModifiedDate;
        }
        if ($this->lineItems !== null) {
            $data['lineItems'] = array_map(static fn (LineItem $i): array => $i->toArray(), $this->lineItems);
        }
        if ($this->orderFulfillmentStatus !== null) {
            $data['orderFulfillmentStatus'] = $this->orderFulfillmentStatus;
        }
        if ($this->orderId !== null) {
            $data['orderId'] = $this->orderId;
        }
        if ($this->orderPaymentStatus !== null) {
            $data['orderPaymentStatus'] = $this->orderPaymentStatus;
        }
        if ($this->paymentSummary !== null) {
            $data['paymentSummary'] = $this->paymentSummary->toArray();
        }
        if ($this->pricingSummary !== null) {
            $data['pricingSummary'] = $this->pricingSummary->toArray();
        }
        if ($this->program !== null) {
            $data['program'] = $this->program->toArray();
        }
        if ($this->salesRecordReference !== null) {
            $data['salesRecordReference'] = $this->salesRecordReference;
        }
        if ($this->sellerId !== null) {
            $data['sellerId'] = $this->sellerId;
        }
        if ($this->totalFeeBasisAmount !== null) {
            $data['totalFeeBasisAmount'] = $this->totalFeeBasisAmount->toArray();
        }
        if ($this->totalMarketplaceFee !== null) {
            $data['totalMarketplaceFee'] = $this->totalMarketplaceFee->toArray();
        }

        return $data;
    }
}
