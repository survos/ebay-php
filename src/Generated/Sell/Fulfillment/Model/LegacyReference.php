<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * Type defining the legacyReference container. This container is needed if the seller is issuing a refund for an individual order line item, and wishes to use an item ID and transaction ID to identify the order line item.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LegacyReference
{
    /**
     * @param string|null $legacyItemId The unique identifier of a listing. This value can be found in the Transaction container in the response of the getOrder call of the Trading API. Note: Both legacyItemId and legacyTransactionId are needed to identify an...
     * @param string|null $legacyTransactionId The unique identifier of a sale/transaction in legacy/Trading API format. A 'transaction ID' is created once a buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning bidder. This value can be fo...
     */
    public function __construct(
        public ?string $legacyItemId = null,
        public ?string $legacyTransactionId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            legacyItemId: isset($data['legacyItemId']) ? (string) $data['legacyItemId'] : null,
            legacyTransactionId: isset($data['legacyTransactionId']) ? (string) $data['legacyTransactionId'] : null,
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
        if ($this->legacyItemId !== null) {
            $data['legacyItemId'] = $this->legacyItemId;
        }
        if ($this->legacyTransactionId !== null) {
            $data['legacyTransactionId'] = $this->legacyTransactionId;
        }

        return $data;
    }
}
