<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains a breakdown of all costs associated with the fulfillment of a line item.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class DeliveryCost
{
    /**
     * @param Amount|null $discountAmount The amount of any shipping discount that has been applied to the line item. This container is returned only if a shipping discount applies to the line item.
     * @param Amount|null $handlingCost The amount of any handing cost that has been applied to the line item. This container is returned only if a handling cost applies to the line item.
     * @param Amount|null $importCharges The amount of any import charges applied to international shipping of the line item. This container is only returned if import charges apply to the line item.
     * @param Amount|null $shippingCost The total cost of shipping all units of the line item. This container is always returned even when the shipping cost is free, in which case the value field will show 0.0 (dollars).
     * @param Amount|null $shippingIntermediationFee This field shows the fee due to eBay's international shipping provider for a line item that is being shipped through the Global Shipping Program. This container is only returned for line items being shipped international...
     */
    public function __construct(
        public ?Amount $discountAmount = null,
        public ?Amount $handlingCost = null,
        public ?Amount $importCharges = null,
        public ?Amount $shippingCost = null,
        public ?Amount $shippingIntermediationFee = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            discountAmount: isset($data['discountAmount']) && is_array($data['discountAmount']) ? Amount::fromArray($data['discountAmount']) : null,
            handlingCost: isset($data['handlingCost']) && is_array($data['handlingCost']) ? Amount::fromArray($data['handlingCost']) : null,
            importCharges: isset($data['importCharges']) && is_array($data['importCharges']) ? Amount::fromArray($data['importCharges']) : null,
            shippingCost: isset($data['shippingCost']) && is_array($data['shippingCost']) ? Amount::fromArray($data['shippingCost']) : null,
            shippingIntermediationFee: isset($data['shippingIntermediationFee']) && is_array($data['shippingIntermediationFee']) ? Amount::fromArray($data['shippingIntermediationFee']) : null,
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
        if ($this->discountAmount !== null) {
            $data['discountAmount'] = $this->discountAmount->toArray();
        }
        if ($this->handlingCost !== null) {
            $data['handlingCost'] = $this->handlingCost->toArray();
        }
        if ($this->importCharges !== null) {
            $data['importCharges'] = $this->importCharges->toArray();
        }
        if ($this->shippingCost !== null) {
            $data['shippingCost'] = $this->shippingCost->toArray();
        }
        if ($this->shippingIntermediationFee !== null) {
            $data['shippingIntermediationFee'] = $this->shippingIntermediationFee->toArray();
        }

        return $data;
    }
}
