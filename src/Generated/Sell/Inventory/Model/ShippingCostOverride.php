<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used if the seller wants to override the shipping costs or surcharge associated with a specific domestic or international shipping service option defined in the fulfillment listing policy that is being applied toward the offer. The shipping-related costs that can be overridden include the shipping cost to ship one item, the shipping cost to ship each additional item (if multiple quant...
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingCostOverride
{
    /**
     * @param Amount|null $additionalShippingCost The dollar value passed into this field will override the additional shipping cost that is currently set for the applicable shipping service option. The "Additional shipping cost" is the cost to ship each additional iden...
     * @param int|null $priority The integer value input into this field, along with the shippingServiceType value, sets which domestic or international shipping service option in the fulfillment policy will be modified with updated shipping costs. Spec...
     * @param Amount|null $shippingCost The dollar value passed into this field will override the shipping cost that is currently set for the applicable shipping service option. This value will be the cost to ship one item to the buyer using the corresponding...
     * @param string|null $shippingServiceType This enumerated value indicates whether the shipping service specified in the priority field is a domestic or an international shipping service option. To override the shipping costs for a specific domestic shipping serv...
     * @param Amount|null $surcharge Note: DO NOT USE THIS FIELD. Shipping surcharges for shipping service options can no longer be set with fulfillment business policies. To set a shipping surcharge for a shipping service option, only the Shipping rate tab...
     */
    public function __construct(
        public ?Amount $additionalShippingCost = null,
        public ?int $priority = null,
        public ?Amount $shippingCost = null,
        public ?string $shippingServiceType = null,
        public ?Amount $surcharge = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            additionalShippingCost: isset($data['additionalShippingCost']) && is_array($data['additionalShippingCost']) ? Amount::fromArray($data['additionalShippingCost']) : null,
            priority: isset($data['priority']) ? (int) $data['priority'] : null,
            shippingCost: isset($data['shippingCost']) && is_array($data['shippingCost']) ? Amount::fromArray($data['shippingCost']) : null,
            shippingServiceType: isset($data['shippingServiceType']) ? (string) $data['shippingServiceType'] : null,
            surcharge: isset($data['surcharge']) && is_array($data['surcharge']) ? Amount::fromArray($data['surcharge']) : null,
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
        if ($this->additionalShippingCost !== null) {
            $data['additionalShippingCost'] = $this->additionalShippingCost->toArray();
        }
        if ($this->priority !== null) {
            $data['priority'] = $this->priority;
        }
        if ($this->shippingCost !== null) {
            $data['shippingCost'] = $this->shippingCost->toArray();
        }
        if ($this->shippingServiceType !== null) {
            $data['shippingServiceType'] = $this->shippingServiceType;
        }
        if ($this->surcharge !== null) {
            $data['surcharge'] = $this->surcharge->toArray();
        }

        return $data;
    }
}
