<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * A complex type that is populated with a response containing a return policies.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SetReturnPolicyResponse
{
    /**
     * @param list<CategoryType>|null $categoryTypes This field always returns ALL_EXCLUDING_MOTORS_VEHICLES for return business policies, since return business policies are not applicable to motor vehicle listings.
     * @param string|null $description A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages. This field is returned if set for the policy. Max length: 250
     * @param bool|null $extendedHolidayReturnsOffered Important! This field is deprecated, since eBay no longer supports extended holiday returns. This field should no longer be returned.
     * @param InternationalReturnOverrideType|null $internationalOverride This container is used by the seller to specify a separate international return policy, and will only be returned if the seller has set a separate return policy for international orders. If a separate international retur...
     * @param string|null $marketplaceId The ID of the eBay marketplace to which this return business policy applies. For implementation help, refer to eBay API documentation
     * @param string|null $name A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     * @param string|null $refundMethod If a seller indicates that they will accept buyer returns, this value will be MONEY_BACK. For implementation help, refer to eBay API documentation
     * @param string|null $restockingFeePercentage Important! This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns.
     * @param string|null $returnInstructions This text-based field provides more details on seller-specified return instructions. Important! This field is no longer supported on many eBay marketplaces. To see if a marketplace and eBay category does support this fie...
     * @param string|null $returnMethod This field will be returned if the seller is willing and able to offer a replacement item as an alternative to 'Money Back'. For implementation help, refer to eBay API documentation
     * @param TimeDuration|null $returnPeriod This container specifies the amount of days that the buyer has to return the item after receiving it. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. This container...
     * @param string|null $returnPolicyId A unique eBay-assigned ID for a return business policy. This ID is generated when the policy is created.
     * @param bool|null $returnsAccepted If set to true, the seller accepts returns. If set to false, this field indicates that the seller does not accept returns.
     * @param string|null $returnShippingCostPayer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either BUYER or SELLER. Note: Eligible Parts & Accessories (P&A) listings require sellers to offer b...
     * @param list<Error>|null $warnings An array of one or more errors or warnings that were generated during the processing of the request. If there were no issues with the request, this array will return empty.
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
        public ?array $warnings = null,
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
            warnings: isset($data['warnings']) && is_array($data['warnings'])
                ? array_values(array_map(static fn (array $i): Error => Error::fromArray($i), $data['warnings']))
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
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
