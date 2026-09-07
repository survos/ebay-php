<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * Type used by the sellingLimit container, a container that lists the monthly cap for the quantity of items sold and total sales amount allowed for the seller's account.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SellingLimit
{
    /**
     * @param Amount|null $amount This container shows the monthly cap for total sales amount allowed for the seller's account. This container may not be returned if a seller does not have a monthly cap for total sales amount.
     * @param int|null $quantity This field shows the monthly cap for total quantity sold allowed for the seller's account. This field may not be returned if a seller does not have a monthly cap for total quantity sold.
     */
    public function __construct(
        public ?Amount $amount = null,
        public ?int $quantity = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? Amount::fromArray($data['amount']) : null,
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
        if ($this->amount !== null) {
            $data['amount'] = $this->amount->toArray();
        }
        if ($this->quantity !== null) {
            $data['quantity'] = $this->quantity;
        }

        return $data;
    }
}
