<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the shippingServices array, an array that provides details about every domestic and international shipping service option that is defined for the policy.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingService
{
    /**
     * @param Amount|null $additionalShippingCost This container is used by the seller to cover the use case when a single buyer purchases multiple quantities of the same line item. This cost cannot exceed the corresponding shippingCost value. A seller will generally se...
     * @param bool|null $buyerResponsibleForPickup This field should be included and set to true for a motor vehicle listing if it will be the buyer's responsibility to pick up the purchased motor vehicle after full payment is made. This field is only applicable to motor...
     * @param bool|null $buyerResponsibleForShipping This field should be included and set to true for a motor vehicle listing if it will be the buyer's responsibility to arrange for shipment of a motor vehicle. This field is only applicable to motor vehicle listings. In t...
     * @param bool|null $freeShipping This field is included and set to true if the seller offers a free domestic shipping option to the buyer. This field can only be included and set to true for the first domestic shipping service option specified in the sh...
     * @param string|null $shippingCarrierCode This field sets/indicates the shipping carrier, such as USPS, FedEx, or UPS. Although this field uses the string type, the seller must pass in a pre-defined enumeration value here. For a full list of shipping carrier enu...
     * @param Amount|null $shippingCost This container is used to set the shipping cost to ship one item using the corresponding shipping service option. This container is conditionally required if the seller is using flat-rate shipping and is not using a dome...
     * @param string|null $shippingServiceCode This field sets/indicates the domestic or international shipping service option, such as USPSPriority, FedEx2Day, or UPS3rdDay. Although this field uses the string type, the seller must pass in a pre-defined enumeration...
     * @param RegionSet|null $shipToLocations This container is used to set the ship-to locations applicable to the corresponding shipping service option. Although the regionExcluded container is defined for RegionSet type and could technically be used here, it is r...
     * @param int|null $sortOrder The integer value set in this field controls the order of the corresponding domestic or international shipping service option in the View Item and Checkout pages. If the sortOrder field is not supplied, the order of dome...
     * @param Amount|null $surcharge Note: DO NOT USE THIS FIELD. Shipping surcharges for domestic shipping service options can no longer be set with fulfillment business policies, except through shipping rate tables. To do this, a seller would set up a sur...
     */
    public function __construct(
        public ?Amount $additionalShippingCost = null,
        public ?bool $buyerResponsibleForPickup = null,
        public ?bool $buyerResponsibleForShipping = null,
        public ?bool $freeShipping = null,
        public ?string $shippingCarrierCode = null,
        public ?Amount $shippingCost = null,
        public ?string $shippingServiceCode = null,
        public ?RegionSet $shipToLocations = null,
        public ?int $sortOrder = null,
        public ?Amount $surcharge = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            additionalShippingCost: isset($data['additionalShippingCost']) && is_array($data['additionalShippingCost']) ? Amount::fromArray($data['additionalShippingCost']) : null,
            buyerResponsibleForPickup: isset($data['buyerResponsibleForPickup']) ? (bool) $data['buyerResponsibleForPickup'] : null,
            buyerResponsibleForShipping: isset($data['buyerResponsibleForShipping']) ? (bool) $data['buyerResponsibleForShipping'] : null,
            freeShipping: isset($data['freeShipping']) ? (bool) $data['freeShipping'] : null,
            shippingCarrierCode: isset($data['shippingCarrierCode']) ? (string) $data['shippingCarrierCode'] : null,
            shippingCost: isset($data['shippingCost']) && is_array($data['shippingCost']) ? Amount::fromArray($data['shippingCost']) : null,
            shippingServiceCode: isset($data['shippingServiceCode']) ? (string) $data['shippingServiceCode'] : null,
            shipToLocations: isset($data['shipToLocations']) && is_array($data['shipToLocations']) ? RegionSet::fromArray($data['shipToLocations']) : null,
            sortOrder: isset($data['sortOrder']) ? (int) $data['sortOrder'] : null,
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
        if ($this->buyerResponsibleForPickup !== null) {
            $data['buyerResponsibleForPickup'] = $this->buyerResponsibleForPickup;
        }
        if ($this->buyerResponsibleForShipping !== null) {
            $data['buyerResponsibleForShipping'] = $this->buyerResponsibleForShipping;
        }
        if ($this->freeShipping !== null) {
            $data['freeShipping'] = $this->freeShipping;
        }
        if ($this->shippingCarrierCode !== null) {
            $data['shippingCarrierCode'] = $this->shippingCarrierCode;
        }
        if ($this->shippingCost !== null) {
            $data['shippingCost'] = $this->shippingCost->toArray();
        }
        if ($this->shippingServiceCode !== null) {
            $data['shippingServiceCode'] = $this->shippingServiceCode;
        }
        if ($this->shipToLocations !== null) {
            $data['shipToLocations'] = $this->shipToLocations->toArray();
        }
        if ($this->sortOrder !== null) {
            $data['sortOrder'] = $this->sortOrder;
        }
        if ($this->surcharge !== null) {
            $data['surcharge'] = $this->surcharge->toArray();
        }

        return $data;
    }
}
