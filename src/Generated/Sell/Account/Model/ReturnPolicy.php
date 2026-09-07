<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the returnPolicy response container, a container which defines a seller's return business policy for a specific marketplace.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ReturnPolicy
{
    /**
     * @param list<CategoryType>|null $categoryTypes This container indicates which category group that the return policy applies to. Note: Return business policies are not applicable to motor vehicle listings, so the categoryTypes.name value will always be ALL_EXCLUDING_M...
     * @param string|null $description A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages. Max length: 250
     * @param bool|null $extendedHolidayReturnsOffered Important! This field is deprecated, since eBay no longer supports extended holiday returns. Any value supplied in this field is neither read nor returned.
     * @param InternationalReturnOverrideType|null $internationalOverride This container shows the seller's international return policy settings. This container is only returned if the seller has set a separate international return policy for the business policy. International return policies...
     * @param string|null $marketplaceId The ID of the eBay marketplace to which this return business policy applies. For implementation help, refer to eBay API documentation
     * @param string|null $name A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     * @param string|null $refundMethod This field indicates the refund method offered by the seller. Its value will be MONEY_BACK unless the seller is enabled for Buy online, Pickup in Store or Click and Collect, and then it might be MERCHANDISE_CREDIT. Getti...
     * @param string|null $restockingFeePercentage Important! This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns. If this field is included, it is ignored and it is no longer returned.
     * @param string|null $returnInstructions This text-based field provides more details on seller-specified return instructions. This field is only returned if set for the return business policy. Important! This field is no longer supported on many eBay marketplac...
     * @param string|null $returnMethod This field is only returned if the seller is willing to offer a replacement item as an alternative to 'Money Back'. For implementation help, refer to eBay API documentation
     * @param TimeDuration|null $returnPeriod This container indicates the number of calendar days that the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most categories support 3...
     * @param string|null $returnPolicyId A unique eBay-assigned ID for a return business policy. This ID is generated when the policy is created.
     * @param bool|null $returnsAccepted If this field is returned as true, the seller accepts returns. If set to false, the seller does not accept returns. Note: Top-Rated sellers must accept item returns and the handlingTime should be set to zero days or one...
     * @param string|null $returnShippingCostPayer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either BUYER or SELLER. Depending on the return policy and specifics of the return, either the buyer...
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
        public ?string $returnPolicyId = null,
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
            returnPolicyId: isset($data['returnPolicyId']) ? (string) $data['returnPolicyId'] : null,
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
        if ($this->returnPolicyId !== null) {
            $data['returnPolicyId'] = $this->returnPolicyId;
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
