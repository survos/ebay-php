<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SalesTaxInput
{
    /**
     * @param string|null $countryCode This parameter specifies the two-letter ISO 3166 code of the country for which a sales-tax table entry is to be created or updated. Note: Sales-tax tables are available only for the US and Canada marketplaces. Therefore,...
     * @param string|null $salesTaxJurisdictionId This parameter specifies the ID of the tax jurisdiction for which a sales-tax table entry is to be created or updated. Valid jurisdiction IDs can be retrieved using the getSalesTaxJurisdiction method of the Metadata API....
     * @param string|null $salesTaxPercentage This parameter specifies the sales tax rate for the specified salesTaxJurisdictionId. When applicable to an order, this sales tax rate will be applied to the sales price. The shippingAndHandlingTaxed value indicates whet...
     * @param bool|null $shippingAndHandlingTaxed This parameter is set to true if the seller wishes to apply sales tax to shipping and handling charges and not just the total sales price of an order. Otherwise, this parameter's value should be set to false.
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
