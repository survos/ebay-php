<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type provides an array of one or more regulatory documents associated with a listing for Regulatory Compliance.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Document
{
    /**
     * @param string|null $documentId The unique identifier of a regulatory document associated with the listing. This value can be found in the response of the createDocument method of the Media API.
     */
    public function __construct(
        public ?string $documentId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            documentId: isset($data['documentId']) ? (string) $data['documentId'] : null,
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
        if ($this->documentId !== null) {
            $data['documentId'] = $this->documentId;
        }

        return $data;
    }
}
