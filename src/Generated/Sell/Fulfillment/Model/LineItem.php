<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the details of each line item in an order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LineItem
{
    /**
     * @param list<AppliedPromotion>|null $appliedPromotions This array contains information about one or more sales promotions or discounts applied to the line item. It is always returned, but will be returned as an empty array if no special sales promotions or discounts apply to...
     * @param list<Property>|null $compatibilityProperties This array is only returned for a Parts & Accessory item, and identifies the buyer's motor vehicle that is compatible with the part or accessory.
     * @param DeliveryCost|null $deliveryCost This container consists of a breakdown of all costs associated with the fulfillment of the line item.
     * @param Amount|null $discountedLineItemCost The cost of the line item after applying any discounts. This container is only returned if the order line item was discounted through a promotion.
     * @param list<EbayCollectAndRemitTax>|null $ebayCollectAndRemitTaxes This container will be returned if the order line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf. 'Collect and Remit' tax includes:US st...
     * @param EbayCollectedCharges|null $ebayCollectedCharges This container consists of a breakdown of costs that are collected by eBay from the buyer for this order. Note: Currently, this container is returned only if eBay is directly charging the buyer for eBay shipping.
     * @param GiftDetails|null $giftDetails This container consists of information that is needed by the seller to send a digital gift card to the buyer, or recipient of the digital gift card. This container is only returned and applicable for digital gift card li...
     * @param ItemLocation|null $itemLocation This container field describes the physical location of the order line item. Note: If the item is shipped from a fulfillment center location through the Multi-Warehouse Program, this container will return the location de...
     * @param string|null $legacyItemId The eBay-generated legacy listing item ID of the listing. Note that the unique identifier of a listing in REST-based APIs is called the listingId instead.
     * @param string|null $legacyVariationId The unique identifier of a single variation within a multiple-variation listing. This field is only returned if the line item purchased was from a multiple-variation listing.
     * @param Amount|null $lineItemCost The selling price of the line item before applying any discounts. The value of this field is calculated by multiplying the single unit price by the number of units purchased (value of the quantity field).
     * @param LineItemFulfillmentInstructions|null $lineItemFulfillmentInstructions This container consists of information related to shipping dates and expectations, including the 'ship-by date' and expected delivery windows that are based on the seller's stated handling time and the shipping service o...
     * @param string|null $lineItemFulfillmentStatus This enumeration value indicates the current fulfillment status of the line item. For implementation help, refer to eBay API documentation
     * @param string|null $lineItemId This is the unique identifier of an eBay order line item. This field is created as soon as there is a commitment to buy from the seller.
     * @param list<LinkedOrderLineItem>|null $linkedOrderLineItems An array of one or more line items related to the corresponding order, but not a part of that order. Details include the order ID, line item ID, and title of the linked line item, the seller of that item, item specifics,...
     * @param string|null $listingMarketplaceId The unique identifier of the eBay marketplace where the line item was listed. For implementation help, refer to eBay API documentation
     * @param LineItemProperties|null $properties Contains information about the eBay programs, if any, under which the line item was listed.
     * @param string|null $purchaseMarketplaceId The unique identifier of the eBay marketplace where the line item was listed. Often, the listingMarketplaceId and the purchaseMarketplaceId identifier are the same, but there are occasions when an item will surface on mu...
     * @param int|null $quantity The number of units of the line item in the order. These are represented as a group by a single lineItemId.
     * @param list<LineItemRefund>|null $refunds This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be sh...
     * @param string|null $sku Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller's eBay inventory. SKUs are optional when listing in the legacy/Trading API system, but SKUs are required when listing it...
     * @param string|null $soldFormat The eBay listing type of the line item. The most common listing types are AUCTION and FIXED_PRICE. For implementation help, refer to eBay API documentation
     * @param list<Tax>|null $taxes Contains a list of taxes applied to the line item, if any. This array is always returned, but will be returned as empty if no taxes are applicable to the line item.
     * @param string|null $title The title of the listing. Note: The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.
     * @param Amount|null $total This is the total price that the buyer must pay for the line item after all costs (item cost, delivery cost, taxes,) are added, minus any discounts and/or promotions. Note: For orders that are subject to 'eBay Collect an...
     * @param list<NameValuePair>|null $variationAspects An array of aspect name-value pairs that identifies the specific variation of a multi-variation listing. This array can contain multiple name-value pairs, such as color:blue and size:large, and will only be returned for...
     */
    public function __construct(
        public ?array $appliedPromotions = null,
        public ?array $compatibilityProperties = null,
        public ?DeliveryCost $deliveryCost = null,
        public ?Amount $discountedLineItemCost = null,
        public ?array $ebayCollectAndRemitTaxes = null,
        public ?EbayCollectedCharges $ebayCollectedCharges = null,
        public ?GiftDetails $giftDetails = null,
        public ?ItemLocation $itemLocation = null,
        public ?string $legacyItemId = null,
        public ?string $legacyVariationId = null,
        public ?Amount $lineItemCost = null,
        public ?LineItemFulfillmentInstructions $lineItemFulfillmentInstructions = null,
        public ?string $lineItemFulfillmentStatus = null,
        public ?string $lineItemId = null,
        public ?array $linkedOrderLineItems = null,
        public ?string $listingMarketplaceId = null,
        public ?LineItemProperties $properties = null,
        public ?string $purchaseMarketplaceId = null,
        public ?int $quantity = null,
        public ?array $refunds = null,
        public ?string $sku = null,
        public ?string $soldFormat = null,
        public ?array $taxes = null,
        public ?string $title = null,
        public ?Amount $total = null,
        public ?array $variationAspects = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            appliedPromotions: isset($data['appliedPromotions']) && is_array($data['appliedPromotions'])
                ? array_values(array_map(static fn (array $i): AppliedPromotion => AppliedPromotion::fromArray($i), $data['appliedPromotions']))
                : null,
            compatibilityProperties: isset($data['compatibilityProperties']) && is_array($data['compatibilityProperties'])
                ? array_values(array_map(static fn (array $i): Property => Property::fromArray($i), $data['compatibilityProperties']))
                : null,
            deliveryCost: isset($data['deliveryCost']) && is_array($data['deliveryCost']) ? DeliveryCost::fromArray($data['deliveryCost']) : null,
            discountedLineItemCost: isset($data['discountedLineItemCost']) && is_array($data['discountedLineItemCost']) ? Amount::fromArray($data['discountedLineItemCost']) : null,
            ebayCollectAndRemitTaxes: isset($data['ebayCollectAndRemitTaxes']) && is_array($data['ebayCollectAndRemitTaxes'])
                ? array_values(array_map(static fn (array $i): EbayCollectAndRemitTax => EbayCollectAndRemitTax::fromArray($i), $data['ebayCollectAndRemitTaxes']))
                : null,
            ebayCollectedCharges: isset($data['ebayCollectedCharges']) && is_array($data['ebayCollectedCharges']) ? EbayCollectedCharges::fromArray($data['ebayCollectedCharges']) : null,
            giftDetails: isset($data['giftDetails']) && is_array($data['giftDetails']) ? GiftDetails::fromArray($data['giftDetails']) : null,
            itemLocation: isset($data['itemLocation']) && is_array($data['itemLocation']) ? ItemLocation::fromArray($data['itemLocation']) : null,
            legacyItemId: isset($data['legacyItemId']) ? (string) $data['legacyItemId'] : null,
            legacyVariationId: isset($data['legacyVariationId']) ? (string) $data['legacyVariationId'] : null,
            lineItemCost: isset($data['lineItemCost']) && is_array($data['lineItemCost']) ? Amount::fromArray($data['lineItemCost']) : null,
            lineItemFulfillmentInstructions: isset($data['lineItemFulfillmentInstructions']) && is_array($data['lineItemFulfillmentInstructions']) ? LineItemFulfillmentInstructions::fromArray($data['lineItemFulfillmentInstructions']) : null,
            lineItemFulfillmentStatus: isset($data['lineItemFulfillmentStatus']) ? (string) $data['lineItemFulfillmentStatus'] : null,
            lineItemId: isset($data['lineItemId']) ? (string) $data['lineItemId'] : null,
            linkedOrderLineItems: isset($data['linkedOrderLineItems']) && is_array($data['linkedOrderLineItems'])
                ? array_values(array_map(static fn (array $i): LinkedOrderLineItem => LinkedOrderLineItem::fromArray($i), $data['linkedOrderLineItems']))
                : null,
            listingMarketplaceId: isset($data['listingMarketplaceId']) ? (string) $data['listingMarketplaceId'] : null,
            properties: isset($data['properties']) && is_array($data['properties']) ? LineItemProperties::fromArray($data['properties']) : null,
            purchaseMarketplaceId: isset($data['purchaseMarketplaceId']) ? (string) $data['purchaseMarketplaceId'] : null,
            quantity: isset($data['quantity']) ? (int) $data['quantity'] : null,
            refunds: isset($data['refunds']) && is_array($data['refunds'])
                ? array_values(array_map(static fn (array $i): LineItemRefund => LineItemRefund::fromArray($i), $data['refunds']))
                : null,
            sku: isset($data['sku']) ? (string) $data['sku'] : null,
            soldFormat: isset($data['soldFormat']) ? (string) $data['soldFormat'] : null,
            taxes: isset($data['taxes']) && is_array($data['taxes'])
                ? array_values(array_map(static fn (array $i): Tax => Tax::fromArray($i), $data['taxes']))
                : null,
            title: isset($data['title']) ? (string) $data['title'] : null,
            total: isset($data['total']) && is_array($data['total']) ? Amount::fromArray($data['total']) : null,
            variationAspects: isset($data['variationAspects']) && is_array($data['variationAspects'])
                ? array_values(array_map(static fn (array $i): NameValuePair => NameValuePair::fromArray($i), $data['variationAspects']))
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
        if ($this->appliedPromotions !== null) {
            $data['appliedPromotions'] = array_map(static fn (AppliedPromotion $i): array => $i->toArray(), $this->appliedPromotions);
        }
        if ($this->compatibilityProperties !== null) {
            $data['compatibilityProperties'] = array_map(static fn (Property $i): array => $i->toArray(), $this->compatibilityProperties);
        }
        if ($this->deliveryCost !== null) {
            $data['deliveryCost'] = $this->deliveryCost->toArray();
        }
        if ($this->discountedLineItemCost !== null) {
            $data['discountedLineItemCost'] = $this->discountedLineItemCost->toArray();
        }
        if ($this->ebayCollectAndRemitTaxes !== null) {
            $data['ebayCollectAndRemitTaxes'] = array_map(static fn (EbayCollectAndRemitTax $i): array => $i->toArray(), $this->ebayCollectAndRemitTaxes);
        }
        if ($this->ebayCollectedCharges !== null) {
            $data['ebayCollectedCharges'] = $this->ebayCollectedCharges->toArray();
        }
        if ($this->giftDetails !== null) {
            $data['giftDetails'] = $this->giftDetails->toArray();
        }
        if ($this->itemLocation !== null) {
            $data['itemLocation'] = $this->itemLocation->toArray();
        }
        if ($this->legacyItemId !== null) {
            $data['legacyItemId'] = $this->legacyItemId;
        }
        if ($this->legacyVariationId !== null) {
            $data['legacyVariationId'] = $this->legacyVariationId;
        }
        if ($this->lineItemCost !== null) {
            $data['lineItemCost'] = $this->lineItemCost->toArray();
        }
        if ($this->lineItemFulfillmentInstructions !== null) {
            $data['lineItemFulfillmentInstructions'] = $this->lineItemFulfillmentInstructions->toArray();
        }
        if ($this->lineItemFulfillmentStatus !== null) {
            $data['lineItemFulfillmentStatus'] = $this->lineItemFulfillmentStatus;
        }
        if ($this->lineItemId !== null) {
            $data['lineItemId'] = $this->lineItemId;
        }
        if ($this->linkedOrderLineItems !== null) {
            $data['linkedOrderLineItems'] = array_map(static fn (LinkedOrderLineItem $i): array => $i->toArray(), $this->linkedOrderLineItems);
        }
        if ($this->listingMarketplaceId !== null) {
            $data['listingMarketplaceId'] = $this->listingMarketplaceId;
        }
        if ($this->properties !== null) {
            $data['properties'] = $this->properties->toArray();
        }
        if ($this->purchaseMarketplaceId !== null) {
            $data['purchaseMarketplaceId'] = $this->purchaseMarketplaceId;
        }
        if ($this->quantity !== null) {
            $data['quantity'] = $this->quantity;
        }
        if ($this->refunds !== null) {
            $data['refunds'] = array_map(static fn (LineItemRefund $i): array => $i->toArray(), $this->refunds);
        }
        if ($this->sku !== null) {
            $data['sku'] = $this->sku;
        }
        if ($this->soldFormat !== null) {
            $data['soldFormat'] = $this->soldFormat;
        }
        if ($this->taxes !== null) {
            $data['taxes'] = array_map(static fn (Tax $i): array => $i->toArray(), $this->taxes);
        }
        if ($this->title !== null) {
            $data['title'] = $this->title;
        }
        if ($this->total !== null) {
            $data['total'] = $this->total->toArray();
        }
        if ($this->variationAspects !== null) {
            $data['variationAspects'] = array_map(static fn (NameValuePair $i): array => $i->toArray(), $this->variationAspects);
        }

        return $data;
    }
}
