<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by base request of the acceptPaymentDispute method.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AcceptPaymentDisputeRequest
{
    /**
     * @param ReturnAddress|null $returnAddress This container is used if the seller wishes to provide a return address to the buyer. This container should be used if the seller is requesting that the buyer return the item.
     * @param int|null $revision This integer value indicates the revision number of the payment dispute. This field is required. The current revision number for a payment dispute can be retrieved with the getPaymentDispute method. Each time an action i...
     */
    public function __construct(
        public ?ReturnAddress $returnAddress = null,
        public ?int $revision = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
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
        if ($this->returnAddress !== null) {
            $data['returnAddress'] = $this->returnAddress->toArray();
        }
        if ($this->revision !== null) {
            $data['revision'] = $this->revision;
        }

        return $data;
    }
}
