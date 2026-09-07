<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This root container defines a seller's fulfillment policy for a specific marketplace and category group. This type is used when creating or updating a fulfillment business policy.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class FulfillmentPolicyRequest
{
    /**
     * @param list<CategoryType>|null $categoryTypes This container is used to specify whether the fulfillment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
     * @param string|null $description A seller-defined description of the fulfillment policy. This description is only for the seller's use, and is not exposed on any eBay pages. Max length: 250
     * @param bool|null $freightShipping This field is included and set to true if freight shipping is available for the item. Freight shipping can be used for large items over 150 lbs. Default: false
     * @param bool|null $globalShipping Note: This field is only applicable for the eBay United Kingdom marketplace (EBAY_GB). This field is included and set to true if the seller wants to use the Global Shipping Program for international shipments. See the Gl...
     * @param TimeDuration|null $handlingTime This container is used to specify the maximum number of business days the seller commits to for preparing and shipping an order after receiving a cleared payment for the order. This time does not include the transit time...
     * @param bool|null $localPickup This field should be included and set to true if local pickup is one of the fulfillment options available to the buyer. It is possible for the seller to make local pickup and some shipping service options available to th...
     * @param string|null $marketplaceId The ID of the eBay marketplace to which this fulfillment policy applies. For implementation help, refer to eBay API documentation
     * @param string|null $name A seller-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     * @param bool|null $pickupDropOff This field should be included and set to true if the seller offers the "Click and Collect" feature for an item. To enable "Click and Collect" on a listing, a seller must be eligible for Click and Collect. Currently, Clic...
     * @param list<ShippingOption>|null $shippingOptions This array is used to provide detailed information on the domestic and international shipping options available for the policy. A separate ShippingOption object is required for domestic shipping service options and for i...
     * @param RegionSet|null $shipToLocations This container consists of the regionIncluded and regionExcluded arrays, which are used to define the geographical regions/countries/states or provinces/domestic regions that a seller does and does not ship to for the as...
     */
    public function __construct(
        public ?array $categoryTypes = null,
        public ?string $description = null,
        public ?bool $freightShipping = null,
        public ?bool $globalShipping = null,
        public ?TimeDuration $handlingTime = null,
        public ?bool $localPickup = null,
        public ?string $marketplaceId = null,
        public ?string $name = null,
        public ?bool $pickupDropOff = null,
        public ?array $shippingOptions = null,
        public ?RegionSet $shipToLocations = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryTypes: isset($data['categoryTypes']) && is_array($data['categoryTypes'])
                ? array_values(array_map(static fn (array $i): CategoryType => CategoryType::fromArray($i), $data['categoryTypes']))
                : null,
            description: isset($data['description']) ? (string) $data['description'] : null,
            freightShipping: isset($data['freightShipping']) ? (bool) $data['freightShipping'] : null,
            globalShipping: isset($data['globalShipping']) ? (bool) $data['globalShipping'] : null,
            handlingTime: isset($data['handlingTime']) && is_array($data['handlingTime']) ? TimeDuration::fromArray($data['handlingTime']) : null,
            localPickup: isset($data['localPickup']) ? (bool) $data['localPickup'] : null,
            marketplaceId: isset($data['marketplaceId']) ? (string) $data['marketplaceId'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
            pickupDropOff: isset($data['pickupDropOff']) ? (bool) $data['pickupDropOff'] : null,
            shippingOptions: isset($data['shippingOptions']) && is_array($data['shippingOptions'])
                ? array_values(array_map(static fn (array $i): ShippingOption => ShippingOption::fromArray($i), $data['shippingOptions']))
                : null,
            shipToLocations: isset($data['shipToLocations']) && is_array($data['shipToLocations']) ? RegionSet::fromArray($data['shipToLocations']) : null,
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
        if ($this->categoryTypes !== null) {
            $data['categoryTypes'] = array_map(static fn (CategoryType $i): array => $i->toArray(), $this->categoryTypes);
        }
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->freightShipping !== null) {
            $data['freightShipping'] = $this->freightShipping;
        }
        if ($this->globalShipping !== null) {
            $data['globalShipping'] = $this->globalShipping;
        }
        if ($this->handlingTime !== null) {
            $data['handlingTime'] = $this->handlingTime->toArray();
        }
        if ($this->localPickup !== null) {
            $data['localPickup'] = $this->localPickup;
        }
        if ($this->marketplaceId !== null) {
            $data['marketplaceId'] = $this->marketplaceId;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->pickupDropOff !== null) {
            $data['pickupDropOff'] = $this->pickupDropOff;
        }
        if ($this->shippingOptions !== null) {
            $data['shippingOptions'] = array_map(static fn (ShippingOption $i): array => $i->toArray(), $this->shippingOptions);
        }
        if ($this->shipToLocations !== null) {
            $data['shipToLocations'] = $this->shipToLocations->toArray();
        }

        return $data;
    }
}
