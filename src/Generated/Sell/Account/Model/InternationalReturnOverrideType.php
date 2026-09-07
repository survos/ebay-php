<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type defines the fields for a seller's international return policy. Sellers have the ability to set separate domestic and international return policies, but if an international return policy is not set, the same return policy settings specified for the domestic return policy are also used for returns for international buyers.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InternationalReturnOverrideType
{
    /**
     * @param string|null $returnMethod This field sets/indicates if the seller offers replacement items to the buyer in the case of an international return. The buyer must be willing to accept a replacement item; otherwise, the seller will need to issue a ref...
     * @param TimeDuration|null $returnPeriod This container indicates the number of calendar days that the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. You must set the value to...
     * @param bool|null $returnsAccepted If set to true, the seller accepts international returns. If set to false, the seller does not accept international returns. This field is conditionally required if the seller chooses to have a separate international ret...
     * @param string|null $returnShippingCostPayer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either BUYER or SELLER. Depending on the return policy and specifics of the return, either the buyer...
     */
    public function __construct(
        public ?string $returnMethod = null,
        public ?TimeDuration $returnPeriod = null,
        public ?bool $returnsAccepted = null,
        public ?string $returnShippingCostPayer = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            returnMethod: isset($data['returnMethod']) ? (string) $data['returnMethod'] : null,
            returnPeriod: isset($data['returnPeriod']) && is_array($data['returnPeriod']) ? TimeDuration::fromArray($data['returnPeriod']) : null,
            returnsAccepted: isset($data['returnsAccepted']) ? (bool) $data['returnsAccepted'] : null,
            returnShippingCostPayer: isset($data['returnShippingCostPayer']) ? (string) $data['returnShippingCostPayer'] : null,
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
        if ($this->returnMethod !== null) {
            $data['returnMethod'] = $this->returnMethod;
        }
        if ($this->returnPeriod !== null) {
            $data['returnPeriod'] = $this->returnPeriod->toArray();
        }
        if ($this->returnsAccepted !== null) {
            $data['returnsAccepted'] = $this->returnsAccepted;
        }
        if ($this->returnShippingCostPayer !== null) {
            $data['returnShippingCostPayer'] = $this->returnShippingCostPayer;
        }

        return $data;
    }
}
