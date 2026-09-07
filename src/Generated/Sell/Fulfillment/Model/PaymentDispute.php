<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the base response of the getPaymentDispute method. The getPaymentDispute method retrieves detailed information on a specific payment dispute.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentDispute
{
    /**
     * @param SimpleAmount|null $amount This container shows the dollar value associated with the payment dispute in the currency used by the seller's marketplace.
     * @param list<string>|null $availableChoices The value(s) returned in this array indicate the choices that the seller has when responding to the payment dispute. Once the seller has responded to the payment dispute, this field will no longer be shown, and instead,...
     * @param InfoFromBuyer|null $buyerProvided This container is returned if the buyer is returning one or more line items in an order that is associated with the payment dispute, and that buyer has provided return shipping tracking information and/or a note about th...
     * @param string|null $buyerUsername This is the eBay user ID of the buyer that initiated the payment dispute.
     * @param string|null $closedDate The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the CLOSED state. The timestamps returned here use the ISO-8601 24-hour date and...
     * @param list<DisputeEvidence>|null $evidence This container shows any evidence that has been provided by the seller to contest the payment dispute. Evidence may include shipment tracking information, proof of authentication documentation, image(s) to proof that an...
     * @param list<EvidenceRequest>|null $evidenceRequests This container is returned if one or more evidence documents are being requested from the seller.
     * @param list<OrderLineItems>|null $lineItems This array is used to identify one or more order line items associated with the payment dispute. There will always be at least one itemId/lineItemId pair returned in this array.
     * @param list<MonetaryTransaction>|null $monetaryTransactions This array provide details about one or more monetary transactions that occur as part of a payment dispute. This array is only returned once one or more monetary transacations occur with a payment dispute.
     * @param string|null $note This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth. This field is limited to 1000 characters.
     * @param string|null $openDate The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states. The timestamps returned here use the ISO-8601 24-hour date and time format,...
     * @param string|null $orderId This is the unique identifier of the order involved in the payment dispute.
     * @param string|null $paymentDisputeId This is the unique identifier of the payment dispute. This is the same identifier that is passed in to the call URI. This identifier is automatically created by eBay once the payment dispute comes into the eBay system.
     * @param string|null $paymentDisputeStatus The enumeration value in this field gives the current status of the payment dispute. The status of a payment dispute partially determines other fields that are returned in the response. For implementation help, refer to...
     * @param string|null $reason The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See DisputeReasonEnum type for a description of the supported reasons that buyers can give for initiating a payment disput...
     * @param PaymentDisputeOutcomeDetail|null $resolution This container gives details about a payment dispute that has been resolved. This container is only returned for resolved/closed payment disputes.
     * @param string|null $respondByDate The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the ACTION_NEEDED state. For payment disputes that currently requ...
     * @param ReturnAddress|null $returnAddress This container gives the address where the order will be returned to. This container is returned if the seller is accepting the payment dispute and will issue a refund to the buyer once the item is returned to this addre...
     * @param int|null $revision This integer value indicates the revision number of the payment dispute. Each time an action is taken against a payment dispute, this integer value increases by 1.
     * @param string|null $sellerResponse The enumeration value returned in this field indicates how the seller has responded to the payment dispute. The seller has the option of accepting the payment dispute and agreeing to issue a refund, accepting the payment...
     */
    public function __construct(
        public ?SimpleAmount $amount = null,
        public ?array $availableChoices = null,
        public ?InfoFromBuyer $buyerProvided = null,
        public ?string $buyerUsername = null,
        public ?string $closedDate = null,
        public ?array $evidence = null,
        public ?array $evidenceRequests = null,
        public ?array $lineItems = null,
        public ?array $monetaryTransactions = null,
        public ?string $note = null,
        public ?string $openDate = null,
        public ?string $orderId = null,
        public ?string $paymentDisputeId = null,
        public ?string $paymentDisputeStatus = null,
        public ?string $reason = null,
        public ?PaymentDisputeOutcomeDetail $resolution = null,
        public ?string $respondByDate = null,
        public ?ReturnAddress $returnAddress = null,
        public ?int $revision = null,
        public ?string $sellerResponse = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? SimpleAmount::fromArray($data['amount']) : null,
            availableChoices: isset($data['availableChoices']) ? (array) $data['availableChoices'] : null,
            buyerProvided: isset($data['buyerProvided']) && is_array($data['buyerProvided']) ? InfoFromBuyer::fromArray($data['buyerProvided']) : null,
            buyerUsername: isset($data['buyerUsername']) ? (string) $data['buyerUsername'] : null,
            closedDate: isset($data['closedDate']) ? (string) $data['closedDate'] : null,
            evidence: isset($data['evidence']) && is_array($data['evidence'])
                ? array_values(array_map(static fn (array $i): DisputeEvidence => DisputeEvidence::fromArray($i), $data['evidence']))
                : null,
            evidenceRequests: isset($data['evidenceRequests']) && is_array($data['evidenceRequests'])
                ? array_values(array_map(static fn (array $i): EvidenceRequest => EvidenceRequest::fromArray($i), $data['evidenceRequests']))
                : null,
            lineItems: isset($data['lineItems']) && is_array($data['lineItems'])
                ? array_values(array_map(static fn (array $i): OrderLineItems => OrderLineItems::fromArray($i), $data['lineItems']))
                : null,
            monetaryTransactions: isset($data['monetaryTransactions']) && is_array($data['monetaryTransactions'])
                ? array_values(array_map(static fn (array $i): MonetaryTransaction => MonetaryTransaction::fromArray($i), $data['monetaryTransactions']))
                : null,
            note: isset($data['note']) ? (string) $data['note'] : null,
            openDate: isset($data['openDate']) ? (string) $data['openDate'] : null,
            orderId: isset($data['orderId']) ? (string) $data['orderId'] : null,
            paymentDisputeId: isset($data['paymentDisputeId']) ? (string) $data['paymentDisputeId'] : null,
            paymentDisputeStatus: isset($data['paymentDisputeStatus']) ? (string) $data['paymentDisputeStatus'] : null,
            reason: isset($data['reason']) ? (string) $data['reason'] : null,
            resolution: isset($data['resolution']) && is_array($data['resolution']) ? PaymentDisputeOutcomeDetail::fromArray($data['resolution']) : null,
            respondByDate: isset($data['respondByDate']) ? (string) $data['respondByDate'] : null,
            returnAddress: isset($data['returnAddress']) && is_array($data['returnAddress']) ? ReturnAddress::fromArray($data['returnAddress']) : null,
            revision: isset($data['revision']) ? (int) $data['revision'] : null,
            sellerResponse: isset($data['sellerResponse']) ? (string) $data['sellerResponse'] : null,
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
        if ($this->availableChoices !== null) {
            $data['availableChoices'] = $this->availableChoices;
        }
        if ($this->buyerProvided !== null) {
            $data['buyerProvided'] = $this->buyerProvided->toArray();
        }
        if ($this->buyerUsername !== null) {
            $data['buyerUsername'] = $this->buyerUsername;
        }
        if ($this->closedDate !== null) {
            $data['closedDate'] = $this->closedDate;
        }
        if ($this->evidence !== null) {
            $data['evidence'] = array_map(static fn (DisputeEvidence $i): array => $i->toArray(), $this->evidence);
        }
        if ($this->evidenceRequests !== null) {
            $data['evidenceRequests'] = array_map(static fn (EvidenceRequest $i): array => $i->toArray(), $this->evidenceRequests);
        }
        if ($this->lineItems !== null) {
            $data['lineItems'] = array_map(static fn (OrderLineItems $i): array => $i->toArray(), $this->lineItems);
        }
        if ($this->monetaryTransactions !== null) {
            $data['monetaryTransactions'] = array_map(static fn (MonetaryTransaction $i): array => $i->toArray(), $this->monetaryTransactions);
        }
        if ($this->note !== null) {
            $data['note'] = $this->note;
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
        if ($this->resolution !== null) {
            $data['resolution'] = $this->resolution->toArray();
        }
        if ($this->respondByDate !== null) {
            $data['respondByDate'] = $this->respondByDate;
        }
        if ($this->returnAddress !== null) {
            $data['returnAddress'] = $this->returnAddress->toArray();
        }
        if ($this->revision !== null) {
            $data['revision'] = $this->revision;
        }
        if ($this->sellerResponse !== null) {
            $data['sellerResponse'] = $this->sellerResponse;
        }

        return $data;
    }
}
