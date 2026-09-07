<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type identifies the line item and quantity of that line item that comprises one fulfillment, such as a shipping package.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LineItemReference
{
    /**
     * @param string|null $lineItemId This is the unique identifier of the eBay order line item that is part of the shipping fulfillment. Line item Ids can be found in the lineItems.lineItemId field of the getOrders response.
     * @param int|null $quantity This is the number of lineItems associated with the trackingNumber specified by the seller. This must be a whole number greater than zero (0). Default: 1
     */
    public function __construct(
        public ?string $lineItemId = null,
        public ?int $quantity = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            lineItemId: isset($data['lineItemId']) ? (string) $data['lineItemId'] : null,
            quantity: isset($data['quantity']) ? (int) $data['quantity'] : null,
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
        if ($this->lineItemId !== null) {
            $data['lineItemId'] = $this->lineItemId;
        }
        if ($this->quantity !== null) {
            $data['quantity'] = $this->quantity;
        }

        return $data;
    }
}
