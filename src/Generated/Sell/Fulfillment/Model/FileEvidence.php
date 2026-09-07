<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used to store the unique identifier of an evidence file. Evidence files are used by seller to contest a payment dispute.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class FileEvidence
{
    /**
     * @param string|null $fileId This field is used to identify the evidence file to be uploaded to the evidence set. This file is created with the uploadEvidenceFile method and can be retrieved using the getPaymentDisputes method.
     */
    public function __construct(
        public ?string $fileId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fileId: isset($data['fileId']) ? (string) $data['fileId'] : null,
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
        if ($this->fileId !== null) {
            $data['fileId'] = $this->fileId;
        }

        return $data;
    }
}
