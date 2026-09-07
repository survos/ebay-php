<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the shippingOptions array, which is used to provide detailed information on the domestic and international shipping options available for the policy. A separate ShippingOption object covers domestic shipping service options and international shipping service options (if the seller ships to international locations).
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingOption
{
    /**
     * @param string|null $costType This field defines whether the shipping cost model is FLAT_RATE (the same rate for all buyers, or buyers within a region if shipping rate tables are used) or CALCULATED (the shipping rate varies by the ship-to location a...
     * @param Amount|null $insuranceFee This field has been deprecated. Shipping insurance is offered only via a shipping carrier's shipping services and is no longer available via eBay shipping policies.
     * @param bool|null $insuranceOffered This field has been deprecated. Shipping insurance is offered only via a shipping carrier's shipping services and is no longer available via eBay shipping policies.
     * @param string|null $optionType This field is used to indicate if the corresponding shipping service options (under shippingServices array) are domestic or international shipping service options. This field is conditionally required if any shipping ser...
     * @param Amount|null $packageHandlingCost This container is used if the seller adds handling charges to domestic and/or international shipments. Sellers can not specify any domestic handling charges if they offered 'free shipping' in the policy. This container w...
     * @param string|null $rateTableId This field is used if the seller wants to associate a domestic or international shipping rate table to the fulfillment business policy. The getRateTables method can be used to retrieve shipping rate table IDs. With domes...
     * @param string|null $shippingDiscountProfileId This field is the unique identifier of a seller's domestic or international shipping discount profile. If a buyer satisfies the requirements of the discount rule, this buyer will receive a shipping discount for the order...
     * @param bool|null $shippingPromotionOffered This boolean indicates whether or not the seller has set up a promotional shipping discount that will be available to buyers who satisfy the requirements of the shipping discount rule. The seller can create and manage sh...
     * @param list<ShippingService>|null $shippingServices This array consists of the domestic or international shipping services options that are defined for the policy. The shipping service options defined under this array should match what is set in the corresponding shipping...
     */
    public function __construct(
        public ?string $costType = null,
        public ?Amount $insuranceFee = null,
        public ?bool $insuranceOffered = null,
        public ?string $optionType = null,
        public ?Amount $packageHandlingCost = null,
        public ?string $rateTableId = null,
        public ?string $shippingDiscountProfileId = null,
        public ?bool $shippingPromotionOffered = null,
        public ?array $shippingServices = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            costType: isset($data['costType']) ? (string) $data['costType'] : null,
            insuranceFee: isset($data['insuranceFee']) && is_array($data['insuranceFee']) ? Amount::fromArray($data['insuranceFee']) : null,
            insuranceOffered: isset($data['insuranceOffered']) ? (bool) $data['insuranceOffered'] : null,
            optionType: isset($data['optionType']) ? (string) $data['optionType'] : null,
            packageHandlingCost: isset($data['packageHandlingCost']) && is_array($data['packageHandlingCost']) ? Amount::fromArray($data['packageHandlingCost']) : null,
            rateTableId: isset($data['rateTableId']) ? (string) $data['rateTableId'] : null,
            shippingDiscountProfileId: isset($data['shippingDiscountProfileId']) ? (string) $data['shippingDiscountProfileId'] : null,
            shippingPromotionOffered: isset($data['shippingPromotionOffered']) ? (bool) $data['shippingPromotionOffered'] : null,
            shippingServices: isset($data['shippingServices']) && is_array($data['shippingServices'])
                ? array_values(array_map(static fn (array $i): ShippingService => ShippingService::fromArray($i), $data['shippingServices']))
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
        if ($this->costType !== null) {
            $data['costType'] = $this->costType;
        }
        if ($this->insuranceFee !== null) {
            $data['insuranceFee'] = $this->insuranceFee->toArray();
        }
        if ($this->insuranceOffered !== null) {
            $data['insuranceOffered'] = $this->insuranceOffered;
        }
        if ($this->optionType !== null) {
            $data['optionType'] = $this->optionType;
        }
        if ($this->packageHandlingCost !== null) {
            $data['packageHandlingCost'] = $this->packageHandlingCost->toArray();
        }
        if ($this->rateTableId !== null) {
            $data['rateTableId'] = $this->rateTableId;
        }
        if ($this->shippingDiscountProfileId !== null) {
            $data['shippingDiscountProfileId'] = $this->shippingDiscountProfileId;
        }
        if ($this->shippingPromotionOffered !== null) {
            $data['shippingPromotionOffered'] = $this->shippingPromotionOffered;
        }
        if ($this->shippingServices !== null) {
            $data['shippingServices'] = array_map(static fn (ShippingService $i): array => $i->toArray(), $this->shippingServices);
        }

        return $data;
    }
}
