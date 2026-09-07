<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to identify business policies including payment, return, and fulfillment policies, as well as to identify custom policies. These policies are, or will be, associated with the listing. Every published offer must have a payment, return, and fulfillment business policy associated with it. Additionally, depending on the country/countries in which sellers are offering products and/or...
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ListingPolicies
{
    /**
     * @param BestOffer|null $bestOfferTerms This container is used if the seller would like to support the Best Offer feature on their listing. To enable the Best Offer feature, the seller will have to set the bestOfferEnabled field to true, and the seller also ha...
     * @param bool|null $eBayPlusIfEligible This field is included in an offer and set to true if a Top-Rated seller is opted in to the eBay Plus program. With the eBay Plus program, qualified sellers must commit to next-day delivery of the item, and the buyers mu...
     * @param string|null $fulfillmentPolicyId This unique identifier indicates the fulfillment business policy that will be used once an offer is published and converted to an eBay listing. This fulfillment business policy will set all fulfillment-related settings f...
     * @param string|null $paymentPolicyId This unique identifier indicates the payment business policy that will be used once an offer is published and converted to an eBay listing. This payment business policy will set all payment-related settings for the eBay...
     * @param list<string>|null $productCompliancePolicyIds This field contains the array of unique identifiers indicating the seller-created global product compliance policies that will be used once an offer is published and converted to a listing. Product compliance policies pr...
     * @param RegionalProductCompliancePolicies|null $regionalProductCompliancePolicies A comma-delimited list of unique identifiers indicating the seller-created country-specific product compliance policies that that will be used once an offer is published and converted to a listing. Product compliance pol...
     * @param RegionalTakeBackPolicies|null $regionalTakeBackPolicies The list of unique identifiers indicating the seller-created country-specific take-back policies that will be used once an offer is published and converted to a listing. The law in some countries may require sellers to t...
     * @param string|null $returnPolicyId This unique identifier indicates the return business policy that will be used once an offer is published and converted to an eBay listing. This return business policy will set all return policy settings for the eBay list...
     * @param list<ShippingCostOverride>|null $shippingCostOverrides This container is used if the seller wishes to override the shipping costs or surcharge for one or more domestic or international shipping service options defined in the fulfillment listing policy. To override the costs...
     * @param string|null $takeBackPolicyId This unique identifier indicates the seller-created global take-back policy that will be used once an offer is published and converted to a listing. One (1) global take-back policy may be specified per offer. Note: For c...
     */
    public function __construct(
        public ?BestOffer $bestOfferTerms = null,
        public ?bool $eBayPlusIfEligible = null,
        public ?string $fulfillmentPolicyId = null,
        public ?string $paymentPolicyId = null,
        public ?array $productCompliancePolicyIds = null,
        public ?RegionalProductCompliancePolicies $regionalProductCompliancePolicies = null,
        public ?RegionalTakeBackPolicies $regionalTakeBackPolicies = null,
        public ?string $returnPolicyId = null,
        public ?array $shippingCostOverrides = null,
        public ?string $takeBackPolicyId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            bestOfferTerms: isset($data['bestOfferTerms']) && is_array($data['bestOfferTerms']) ? BestOffer::fromArray($data['bestOfferTerms']) : null,
            eBayPlusIfEligible: isset($data['eBayPlusIfEligible']) ? (bool) $data['eBayPlusIfEligible'] : null,
            fulfillmentPolicyId: isset($data['fulfillmentPolicyId']) ? (string) $data['fulfillmentPolicyId'] : null,
            paymentPolicyId: isset($data['paymentPolicyId']) ? (string) $data['paymentPolicyId'] : null,
            productCompliancePolicyIds: isset($data['productCompliancePolicyIds']) ? (array) $data['productCompliancePolicyIds'] : null,
            regionalProductCompliancePolicies: isset($data['regionalProductCompliancePolicies']) && is_array($data['regionalProductCompliancePolicies']) ? RegionalProductCompliancePolicies::fromArray($data['regionalProductCompliancePolicies']) : null,
            regionalTakeBackPolicies: isset($data['regionalTakeBackPolicies']) && is_array($data['regionalTakeBackPolicies']) ? RegionalTakeBackPolicies::fromArray($data['regionalTakeBackPolicies']) : null,
            returnPolicyId: isset($data['returnPolicyId']) ? (string) $data['returnPolicyId'] : null,
            shippingCostOverrides: isset($data['shippingCostOverrides']) && is_array($data['shippingCostOverrides'])
                ? array_values(array_map(static fn (array $i): ShippingCostOverride => ShippingCostOverride::fromArray($i), $data['shippingCostOverrides']))
                : null,
            takeBackPolicyId: isset($data['takeBackPolicyId']) ? (string) $data['takeBackPolicyId'] : null,
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
        if ($this->bestOfferTerms !== null) {
            $data['bestOfferTerms'] = $this->bestOfferTerms->toArray();
        }
        if ($this->eBayPlusIfEligible !== null) {
            $data['eBayPlusIfEligible'] = $this->eBayPlusIfEligible;
        }
        if ($this->fulfillmentPolicyId !== null) {
            $data['fulfillmentPolicyId'] = $this->fulfillmentPolicyId;
        }
        if ($this->paymentPolicyId !== null) {
            $data['paymentPolicyId'] = $this->paymentPolicyId;
        }
        if ($this->productCompliancePolicyIds !== null) {
            $data['productCompliancePolicyIds'] = $this->productCompliancePolicyIds;
        }
        if ($this->regionalProductCompliancePolicies !== null) {
            $data['regionalProductCompliancePolicies'] = $this->regionalProductCompliancePolicies->toArray();
        }
        if ($this->regionalTakeBackPolicies !== null) {
            $data['regionalTakeBackPolicies'] = $this->regionalTakeBackPolicies->toArray();
        }
        if ($this->returnPolicyId !== null) {
            $data['returnPolicyId'] = $this->returnPolicyId;
        }
        if ($this->shippingCostOverrides !== null) {
            $data['shippingCostOverrides'] = array_map(static fn (ShippingCostOverride $i): array => $i->toArray(), $this->shippingCostOverrides);
        }
        if ($this->takeBackPolicyId !== null) {
            $data['takeBackPolicyId'] = $this->takeBackPolicyId;
        }

        return $data;
    }
}
