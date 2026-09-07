<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to enable the use of a sales-tax table, to pass in a tax exception category code, or to specify a VAT percentage. Note: Sales-tax tables are available only for the US and Canada marketplaces.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Tax
{
    /**
     * @param bool|null $applyTax When set to true, the seller's account-level sales-tax table will be used to calculate sales tax for an order. Note: Sales-tax tables are available only for the US and Canada marketplaces. Important! In the US, eBay now...
     * @param string|null $thirdPartyTaxCategory The tax exception category code. If this field is used, sales tax will also apply to a service/fee, and not just the item price. This is to be used only by sellers who have opted into sales tax being calculated by a sale...
     * @param float|null $vatPercentage This value is the Value Add Tax (VAT) rate for the item, if any. When a VAT percentage is specified, the item's VAT information appears on the listing's View Item page. In addition, the seller can choose to print an invo...
     */
    public function __construct(
        public ?bool $applyTax = null,
        public ?string $thirdPartyTaxCategory = null,
        public ?float $vatPercentage = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            applyTax: isset($data['applyTax']) ? (bool) $data['applyTax'] : null,
            thirdPartyTaxCategory: isset($data['thirdPartyTaxCategory']) ? (string) $data['thirdPartyTaxCategory'] : null,
            vatPercentage: isset($data['vatPercentage']) ? (float) $data['vatPercentage'] : null,
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
        if ($this->applyTax !== null) {
            $data['applyTax'] = $this->applyTax;
        }
        if ($this->thirdPartyTaxCategory !== null) {
            $data['thirdPartyTaxCategory'] = $this->thirdPartyTaxCategory;
        }
        if ($this->vatPercentage !== null) {
            $data['vatPercentage'] = $this->vatPercentage;
        }

        return $data;
    }
}
