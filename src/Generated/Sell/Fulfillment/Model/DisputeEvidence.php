<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the evidence array that is returned in the getPaymentDispute response if one or more evidential documents are associated with the payment dispute.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class DisputeEvidence
{
    /**
     * @param string|null $evidenceId Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set.
     * @param string|null $evidenceType This enumeration value shows the type of evidential file provided. For implementation help, refer to eBay API documentation
     * @param list<FileInfo>|null $files This array shows the name, ID, file type, and upload date for each provided file.
     * @param list<OrderLineItems>|null $lineItems This array shows one or more order line items associated with the evidential document that has been provided.
     * @param string|null $providedDate The timestamp in this field shows the date/time when the seller provided a requested evidential document to eBay. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Univ...
     * @param string|null $requestDate The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. The timestamps returned here use the ISO-8601 24-hour date and time format, an...
     * @param string|null $respondByDate The timestamp in this field shows the date/time when the seller was expected to provide a requested evidential document to eBay. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zo...
     * @param list<TrackingInfo>|null $shipmentTracking This array shows the shipping carrier and shipment tracking number associated with each shipment package of the order. This array is returned under the evidence container if the seller has provided shipment tracking info...
     */
    public function __construct(
        public ?string $evidenceId = null,
        public ?string $evidenceType = null,
        public ?array $files = null,
        public ?array $lineItems = null,
        public ?string $providedDate = null,
        public ?string $requestDate = null,
        public ?string $respondByDate = null,
        public ?array $shipmentTracking = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            evidenceId: isset($data['evidenceId']) ? (string) $data['evidenceId'] : null,
            evidenceType: isset($data['evidenceType']) ? (string) $data['evidenceType'] : null,
            files: isset($data['files']) && is_array($data['files'])
                ? array_values(array_map(static fn (array $i): FileInfo => FileInfo::fromArray($i), $data['files']))
                : null,
            lineItems: isset($data['lineItems']) && is_array($data['lineItems'])
                ? array_values(array_map(static fn (array $i): OrderLineItems => OrderLineItems::fromArray($i), $data['lineItems']))
                : null,
            providedDate: isset($data['providedDate']) ? (string) $data['providedDate'] : null,
            requestDate: isset($data['requestDate']) ? (string) $data['requestDate'] : null,
            respondByDate: isset($data['respondByDate']) ? (string) $data['respondByDate'] : null,
            shipmentTracking: isset($data['shipmentTracking']) && is_array($data['shipmentTracking'])
                ? array_values(array_map(static fn (array $i): TrackingInfo => TrackingInfo::fromArray($i), $data['shipmentTracking']))
                : null,
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
        if ($this->files !== null) {
            $data['files'] = array_map(static fn (FileInfo $i): array => $i->toArray(), $this->files);
        }
        if ($this->lineItems !== null) {
            $data['lineItems'] = array_map(static fn (OrderLineItems $i): array => $i->toArray(), $this->lineItems);
        }
        if ($this->providedDate !== null) {
            $data['providedDate'] = $this->providedDate;
        }
        if ($this->requestDate !== null) {
            $data['requestDate'] = $this->requestDate;
        }
        if ($this->respondByDate !== null) {
            $data['respondByDate'] = $this->respondByDate;
        }
        if ($this->shipmentTracking !== null) {
            $data['shipmentTracking'] = array_map(static fn (TrackingInfo $i): array => $i->toArray(), $this->shipmentTracking);
        }

        return $data;
    }
}
