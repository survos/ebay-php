<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the request payload of the updateEvidence method. The updateEvidence method is used to update an existing evidence set against a payment dispute with one or more evidence files.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class UpdateEvidencePaymentDisputeRequest
{
    /**
     * @param string|null $evidenceId The unique identifier of the evidence set that is being updated with new evidence files. This ID is returned under the evidence array in the getPaymentDispute response.
     * @param string|null $evidenceType This field is used to indicate the type of evidence being provided through one or more evidence files. All evidence files (if more than one) should be associated with the evidence type passed in this field. See the Evide...
     * @param list<FileEvidence>|null $files This array is used to specify one or more evidence files that will be added to the evidence set associated with a payment dispute. At least one evidence file must be specified in the files array. The unique identifier of...
     * @param list<OrderLineItems>|null $lineItems This required array identifies the order line item(s) for which the evidence file(s) will be applicable. These values are returned under the evidenceRequests.lineItems array in the getPaymentDispute response. Note: Both...
     */
    public function __construct(
        public ?string $evidenceId = null,
        public ?string $evidenceType = null,
        public ?array $files = null,
        public ?array $lineItems = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            evidenceId: isset($data['evidenceId']) ? (string) $data['evidenceId'] : null,
            evidenceType: isset($data['evidenceType']) ? (string) $data['evidenceType'] : null,
            files: isset($data['files']) && is_array($data['files'])
                ? array_values(array_map(static fn (array $i): FileEvidence => FileEvidence::fromArray($i), $data['files']))
                : null,
            lineItems: isset($data['lineItems']) && is_array($data['lineItems'])
                ? array_values(array_map(static fn (array $i): OrderLineItems => OrderLineItems::fromArray($i), $data['lineItems']))
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
            $data['files'] = array_map(static fn (FileEvidence $i): array => $i->toArray(), $this->files);
        }
        if ($this->lineItems !== null) {
            $data['lineItems'] = array_map(static fn (OrderLineItems $i): array => $i->toArray(), $this->lineItems);
        }

        return $data;
    }
}
