<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used to display the charge type and the amount of the charge against the buyer.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Charge
{
    /**
     * @param Amount|null $amount This container shows the amount and currency of the charge.
     * @param string|null $chargeType This field shows the type of buyer charge Note: Currently, the only supported charge type is BUYER_PROTECTION. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?Amount $amount = null,
        public ?string $chargeType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? Amount::fromArray($data['amount']) : null,
            chargeType: isset($data['chargeType']) ? (string) $data['chargeType'] : null,
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
        if ($this->chargeType !== null) {
            $data['chargeType'] = $this->chargeType;
        }

        return $data;
    }
}
