<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the evidenceRequests array that is returned in the getPaymentDispute response if one or more evidential documents are being requested to help resolve the payment dispute.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class EvidenceRequest
{
    /**
     * @param string|null $evidenceId Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set.
     * @param string|null $evidenceType This enumeration value shows the type of evidential document provided. For implementation help, refer to eBay API documentation
     * @param list<OrderLineItems>|null $lineItems This array shows one or more order line items associated with the evidential document that has been provided.
     * @param string|null $requestDate The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. The timestamps returned here use the ISO-8601 24-hour date and time format, an...
     * @param string|null $respondByDate The timestamp in this field shows the date/time when the seller is expected to provide a requested evidential document to eBay. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zon...
     */
    public function __construct(
        public ?string $evidenceId = null,
        public ?string $evidenceType = null,
        public ?array $lineItems = null,
        public ?string $requestDate = null,
        public ?string $respondByDate = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            evidenceId: isset($data['evidenceId']) ? (string) $data['evidenceId'] : null,
            evidenceType: isset($data['evidenceType']) ? (string) $data['evidenceType'] : null,
            lineItems: isset($data['lineItems']) && is_array($data['lineItems'])
                ? array_values(array_map(static fn (array $i): OrderLineItems => OrderLineItems::fromArray($i), $data['lineItems']))
                : null,
            requestDate: isset($data['requestDate']) ? (string) $data['requestDate'] : null,
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
        if ($this->evidenceId !== null) {
            $data['evidenceId'] = $this->evidenceId;
        }
        if ($this->evidenceType !== null) {
            $data['evidenceType'] = $this->evidenceType;
        }
        if ($this->lineItems !== null) {
            $data['lineItems'] = array_map(static fn (OrderLineItems $i): array => $i->toArray(), $this->lineItems);
        }
        if ($this->requestDate !== null) {
            $data['requestDate'] = $this->requestDate;
        }
        if ($this->respondByDate !== null) {
            $data['respondByDate'] = $this->respondByDate;
        }

        return $data;
    }
}
