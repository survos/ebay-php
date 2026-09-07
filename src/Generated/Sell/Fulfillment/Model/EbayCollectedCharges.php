<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the breakdown of costs that are collected by eBay from the buyer.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class EbayCollectedCharges
{
    /**
     * @param Amount|null $ebayShipping This container consists of costs related to eBay Shipping collected by eBay from the buyer of this order.
     * @param list<Charge>|null $charges This array shows any charges that eBay collects from the buyer. Note: Currently, the only supported charge type is BUYER_PROTECTION.
     */
    public function __construct(
        public ?Amount $ebayShipping = null,
        public ?array $charges = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            ebayShipping: isset($data['ebayShipping']) && is_array($data['ebayShipping']) ? Amount::fromArray($data['ebayShipping']) : null,
            charges: isset($data['charges']) && is_array($data['charges'])
                ? array_values(array_map(static fn (array $i): Charge => Charge::fromArray($i), $data['charges']))
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
        if ($this->ebayShipping !== null) {
            $data['ebayShipping'] = $this->ebayShipping->toArray();
        }
        if ($this->charges !== null) {
            $data['charges'] = array_map(static fn (Charge $i): array => $i->toArray(), $this->charges);
        }

        return $data;
    }
}
