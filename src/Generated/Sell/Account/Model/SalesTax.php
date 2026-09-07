<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used to provide sales tax settings for a specific tax jurisdiction.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SalesTax
{
    /**
     * @param string|null $countryCode The country code enumeration value identifies the country to which this sales tax rate applies. Note: Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:USCA...
     * @param string|null $salesTaxJurisdictionId A unique ID that identifies the sales tax jurisdiction to which the sales tax rate applies. Note: When the returned countryCode is US, the only supported return values for salesTaxJurisdictionId are:AS (American Samoa)GU...
     * @param string|null $salesTaxPercentage The sales tax rate that will be applied to sales price. The shippingAndHandlingTaxed value will indicate whether or not sales tax is also applied to shipping and handling charges Although it is a string, a percentage val...
     * @param bool|null $shippingAndHandlingTaxed If returned as true, sales tax is also applied to shipping and handling charges, and not just the total sales price of the order.
     */
    public function __construct(
        public ?string $countryCode = null,
        public ?string $salesTaxJurisdictionId = null,
        public ?string $salesTaxPercentage = null,
        public ?bool $shippingAndHandlingTaxed = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            countryCode: isset($data['countryCode']) ? (string) $data['countryCode'] : null,
            salesTaxJurisdictionId: isset($data['salesTaxJurisdictionId']) ? (string) $data['salesTaxJurisdictionId'] : null,
            salesTaxPercentage: isset($data['salesTaxPercentage']) ? (string) $data['salesTaxPercentage'] : null,
            shippingAndHandlingTaxed: isset($data['shippingAndHandlingTaxed']) ? (bool) $data['shippingAndHandlingTaxed'] : null,
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
        if ($this->countryCode !== null) {
            $data['countryCode'] = $this->countryCode;
        }
        if ($this->salesTaxJurisdictionId !== null) {
            $data['salesTaxJurisdictionId'] = $this->salesTaxJurisdictionId;
        }
        if ($this->salesTaxPercentage !== null) {
            $data['salesTaxPercentage'] = $this->salesTaxPercentage;
        }
        if ($this->shippingAndHandlingTaxed !== null) {
            $data['shippingAndHandlingTaxed'] = $this->shippingAndHandlingTaxed;
        }

        return $data;
    }
}
