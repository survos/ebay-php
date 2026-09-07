<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the response payload of the addEvidence method. Its only field is an unique identifier of an evidence set.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AddEvidencePaymentDisputeResponse
{
    /**
     * @param string|null $evidenceId The value returned in this field is the unique identifier of the newly-created evidence set. Upon a successful call, this value is automatically genererated. This new evidence set for the payment dispute includes the evi...
     */
    public function __construct(
        public ?string $evidenceId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            evidenceId: isset($data['evidenceId']) ? (string) $data['evidenceId'] : null,
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

        return $data;
    }
}
