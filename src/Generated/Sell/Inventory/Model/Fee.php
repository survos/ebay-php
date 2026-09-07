<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to express expected listing fees that the seller may incur for one or more unpublished offers, as well as any eBay-related promotional discounts being applied toward a specific fee. These fees are the expected cumulative fees per eBay marketplace (which is indicated in the marketplaceId field).
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Fee
{
    /**
     * @param Amount|null $amount This dollar value in this container is the actual dollar value of the listing fee type specified in the feeType field.
     * @param string|null $feeType The value returned in this field indicates the type of listing fee that the seller may incur if one or more unpublished offers (offers are specified in the call request) are published on the marketplace specified in the...
     * @param Amount|null $promotionalDiscount The dollar value in this container indicates any eBay promotional discount applied toward the listing fee type specified in the feeType field. If there was no discount applied toward the fee, this container is still retu...
     */
    public function __construct(
        public ?Amount $amount = null,
        public ?string $feeType = null,
        public ?Amount $promotionalDiscount = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? Amount::fromArray($data['amount']) : null,
            feeType: isset($data['feeType']) ? (string) $data['feeType'] : null,
            promotionalDiscount: isset($data['promotionalDiscount']) && is_array($data['promotionalDiscount']) ? Amount::fromArray($data['promotionalDiscount']) : null,
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
        if ($this->feeType !== null) {
            $data['feeType'] = $this->feeType;
        }
        if ($this->promotionalDiscount !== null) {
            $data['promotionalDiscount'] = $this->promotionalDiscount->toArray();
        }

        return $data;
    }
}
