<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is returned for order line items eligible for the Authenticity Guarantee service and/or for order line items fulfilled by the eBay Fulfillment program or eBay shipping.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Program
{
    /**
     * @param PostSaleAuthenticationProgram|null $authenticityVerification This field is returned when the third-party authenticator performs the authentication verification inspection on the order line item. Different values will be returned based on whether the item passed or failed the authe...
     * @param EbayShipping|null $ebayShipping This container is returned only if the order is an eBay shipping order. It consists of a field that indicates the provider of a shipping label for this order.
     * @param EbayVaultProgram|null $ebayVault This field provides information about the eBay vault program that has been selected for an order. This is returned only for those items that are eligible for the eBay Vault Program.
     * @param EbayInternationalShipping|null $ebayInternationalShipping This container is returned if the order is being fulfilled through eBay International Shipping.
     * @param EbayFulfillmentProgram|null $fulfillmentProgram This field provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     */
    public function __construct(
        public ?PostSaleAuthenticationProgram $authenticityVerification = null,
        public ?EbayShipping $ebayShipping = null,
        public ?EbayVaultProgram $ebayVault = null,
        public ?EbayInternationalShipping $ebayInternationalShipping = null,
        public ?EbayFulfillmentProgram $fulfillmentProgram = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            authenticityVerification: isset($data['authenticityVerification']) && is_array($data['authenticityVerification']) ? PostSaleAuthenticationProgram::fromArray($data['authenticityVerification']) : null,
            ebayShipping: isset($data['ebayShipping']) && is_array($data['ebayShipping']) ? EbayShipping::fromArray($data['ebayShipping']) : null,
            ebayVault: isset($data['ebayVault']) && is_array($data['ebayVault']) ? EbayVaultProgram::fromArray($data['ebayVault']) : null,
            ebayInternationalShipping: isset($data['ebayInternationalShipping']) && is_array($data['ebayInternationalShipping']) ? EbayInternationalShipping::fromArray($data['ebayInternationalShipping']) : null,
            fulfillmentProgram: isset($data['fulfillmentProgram']) && is_array($data['fulfillmentProgram']) ? EbayFulfillmentProgram::fromArray($data['fulfillmentProgram']) : null,
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
        if ($this->authenticityVerification !== null) {
            $data['authenticityVerification'] = $this->authenticityVerification->toArray();
        }
        if ($this->ebayShipping !== null) {
            $data['ebayShipping'] = $this->ebayShipping->toArray();
        }
        if ($this->ebayVault !== null) {
            $data['ebayVault'] = $this->ebayVault->toArray();
        }
        if ($this->ebayInternationalShipping !== null) {
            $data['ebayInternationalShipping'] = $this->ebayInternationalShipping->toArray();
        }
        if ($this->fulfillmentProgram !== null) {
            $data['fulfillmentProgram'] = $this->fulfillmentProgram->toArray();
        }

        return $data;
    }
}
