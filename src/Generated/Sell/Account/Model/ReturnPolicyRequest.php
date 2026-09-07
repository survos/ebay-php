<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This root container defines a seller's return business policy for a specific marketplace and category group. This type is used when creating or updating a return business policy.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ReturnPolicyRequest
{
    /**
     * @param list<CategoryType>|null $categoryTypes This container indicates which category group that the return policy applies to. Note: Return business policies are not applicable to motor vehicle listings, so the categoryTypes.name value must be set to ALL_EXCLUDING_M...
     * @param string|null $description A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages. Max length: 250
     * @param bool|null $extendedHolidayReturnsOffered Important! This field is deprecated, since eBay no longer supports extended holiday returns. Any value supplied in this field is neither read nor returned.
     * @param InternationalReturnOverrideType|null $internationalOverride This container is used by the seller to specify a separate international return policy. If a separate international return policy is not defined by a seller, all of the domestic return policy settings will also apply to...
     * @param string|null $marketplaceId The ID of the eBay marketplace to which this return business policy applies. For implementation help, refer to eBay API documentation
     * @param string|null $name A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     * @param string|null $refundMethod This field sets the refund method to use for returned items. Its value defaults to MONEY_BACK if omitted, so this field is only needed for Buy online, Pickup in Store or Click and Collect items where the seller is willin...
     * @param string|null $restockingFeePercentage Important! This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns. If this field is included, it is ignored.
     * @param string|null $returnInstructions This text-based field provides more details on seller-specified return instructions. Important! This field is no longer supported on many eBay marketplaces. To see if a marketplace and eBay category does support this fie...
     * @param string|null $returnMethod This field can be used if the seller is willing and able to offer a replacement item as an alternative to 'Money Back'. For implementation help, refer to eBay API documentation
     * @param TimeDuration|null $returnPeriod This container is used to specify the number of days that the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. You must set the value to...
     * @param bool|null $returnsAccepted If set to true, the seller accepts returns. If set to false, the seller does not accept returns. Note:Top-Rated sellers must accept item returns and the handlingTime should be set to zero days or one day for a listing to...
     * @param string|null $returnShippingCostPayer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either BUYER or SELLER. Note: Eligible Parts & Accessories (P&A) listings require sellers to offer b...
     */
    public function __construct(
        public ?array $categoryTypes = null,
        public ?string $description = null,
        public ?bool $extendedHolidayReturnsOffered = null,
        public ?InternationalReturnOverrideType $internationalOverride = null,
        public ?string $marketplaceId = null,
        public ?string $name = null,
        public ?string $refundMethod = null,
        public ?string $restockingFeePercentage = null,
        public ?string $returnInstructions = null,
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
            categoryTypes: isset($data['categoryTypes']) && is_array($data['categoryTypes'])
                ? array_values(array_map(static fn (array $i): CategoryType => CategoryType::fromArray($i), $data['categoryTypes']))
                : null,
            description: isset($data['description']) ? (string) $data['description'] : null,
            extendedHolidayReturnsOffered: isset($data['extendedHolidayReturnsOffered']) ? (bool) $data['extendedHolidayReturnsOffered'] : null,
            internationalOverride: isset($data['internationalOverride']) && is_array($data['internationalOverride']) ? InternationalReturnOverrideType::fromArray($data['internationalOverride']) : null,
            marketplaceId: isset($data['marketplaceId']) ? (string) $data['marketplaceId'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
            refundMethod: isset($data['refundMethod']) ? (string) $data['refundMethod'] : null,
            restockingFeePercentage: isset($data['restockingFeePercentage']) ? (string) $data['restockingFeePercentage'] : null,
            returnInstructions: isset($data['returnInstructions']) ? (string) $data['returnInstructions'] : null,
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
        if ($this->categoryTypes !== null) {
            $data['categoryTypes'] = array_map(static fn (CategoryType $i): array => $i->toArray(), $this->categoryTypes);
        }
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->extendedHolidayReturnsOffered !== null) {
            $data['extendedHolidayReturnsOffered'] = $this->extendedHolidayReturnsOffered;
        }
        if ($this->internationalOverride !== null) {
            $data['internationalOverride'] = $this->internationalOverride->toArray();
        }
        if ($this->marketplaceId !== null) {
            $data['marketplaceId'] = $this->marketplaceId;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->refundMethod !== null) {
            $data['refundMethod'] = $this->refundMethod;
        }
        if ($this->restockingFeePercentage !== null) {
            $data['restockingFeePercentage'] = $this->restockingFeePercentage;
        }
        if ($this->returnInstructions !== null) {
            $data['returnInstructions'] = $this->returnInstructions;
        }
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
