<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about the type and amount of tax that eBay will collect and remit to the state, province, country, or other taxing authority in the buyer's location, as required by that taxing authority. 'Collect and Remit' tax includes:US state-mandated sales taxFederal and Provincial Sales Tax in Canada'Goods and Services' tax in Canada, Australia, and New ZealandVAT collected for...
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class EbayCollectAndRemitTax
{
    /**
     * @param Amount|null $amount The monetary amount of the 'Collect and Remit' tax. This currently includes: US state-mandated sales taxFederal and Provincial Sales Tax in Canada'Goods and Services' tax in Canada, Australia, New Zealand, and JerseyVAT...
     * @param EbayTaxReference|null $ebayReference This container field describes the line-item level VAT tax details.
     * @param string|null $taxType The type of tax and fees that eBay will collect and remit to the taxing or fee authority. See the TaxTypeEnum type definition for more information about each tax or fee type. For implementation help, refer to eBay API do...
     * @param string|null $collectionMethod This field indicates the collection method used to collect the 'Collect and Remit' tax for the order. This field is always returned for orders subject to 'Collect and Remit' tax, and its value is always NET. Note: Althou...
     */
    public function __construct(
        public ?Amount $amount = null,
        public ?EbayTaxReference $ebayReference = null,
        public ?string $taxType = null,
        public ?string $collectionMethod = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? Amount::fromArray($data['amount']) : null,
            ebayReference: isset($data['ebayReference']) && is_array($data['ebayReference']) ? EbayTaxReference::fromArray($data['ebayReference']) : null,
            taxType: isset($data['taxType']) ? (string) $data['taxType'] : null,
            collectionMethod: isset($data['collectionMethod']) ? (string) $data['collectionMethod'] : null,
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
        if ($this->amount !== null) {
            $data['amount'] = $this->amount->toArray();
        }
        if ($this->ebayReference !== null) {
            $data['ebayReference'] = $this->ebayReference->toArray();
        }
        if ($this->taxType !== null) {
            $data['taxType'] = $this->taxType;
        }
        if ($this->collectionMethod !== null) {
            $data['collectionMethod'] = $this->collectionMethod;
        }

        return $data;
    }
}
