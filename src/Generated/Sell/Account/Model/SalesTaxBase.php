<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the base request of the createOrReplaceSalesTax.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SalesTaxBase
{
    /**
     * @param string|null $salesTaxPercentage This field is used to set the sales tax rate for the tax jurisdiction set in the call URI. When applicable to an order, this sales tax rate will be applied to sales price. The shippingAndHandlingTaxed value will indicate...
     * @param bool|null $shippingAndHandlingTaxed This field is set to true if the seller wishes to apply sales tax to shipping and handling charges, and not just the total sales price of the order. Otherwise, this field's value should be set to false.
     */
    public function __construct(
        public ?string $salesTaxPercentage = null,
        public ?bool $shippingAndHandlingTaxed = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
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
        if ($this->salesTaxPercentage !== null) {
            $data['salesTaxPercentage'] = $this->salesTaxPercentage;
        }
        if ($this->shippingAndHandlingTaxed !== null) {
            $data['shippingAndHandlingTaxed'] = $this->shippingAndHandlingTaxed;
        }

        return $data;
    }
}
