<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the request payload of the contestPaymentDispute method.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ContestPaymentDisputeRequest
{
    /**
     * @param string|null $note This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth. Max Length: 1000 characters.
     * @param ReturnAddress|null $returnAddress This container is needed if the seller is requesting that the buyer return the item. If this container is used, all relevant fields must be included, including fullName and primaryPhone. Note: If the Dispute Reason is SI...
     * @param int|null $revision This integer value indicates the revision number of the payment dispute. This field is required. The current revision number for a payment dispute can be retrieved with the getPaymentDispute method. Each time an action i...
     */
    public function __construct(
        public ?string $note = null,
        public ?ReturnAddress $returnAddress = null,
        public ?int $revision = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            note: isset($data['note']) ? (string) $data['note'] : null,
            returnAddress: isset($data['returnAddress']) && is_array($data['returnAddress']) ? ReturnAddress::fromArray($data['returnAddress']) : null,
            revision: isset($data['revision']) ? (int) $data['revision'] : null,
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
        if ($this->note !== null) {
            $data['note'] = $this->note;
        }
        if ($this->returnAddress !== null) {
            $data['returnAddress'] = $this->returnAddress->toArray();
        }
        if ($this->revision !== null) {
            $data['revision'] = $this->revision;
        }

        return $data;
    }
}
