<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify the listing price for the product and settings for the Minimum Advertised Price and Strikethrough Pricing features. The price field must be supplied before an offer is published, but a seller may create an offer without supplying a price initially. The Minimum Advertised Price feature is only available on the US site. Strikethrough Pricing is available on the US, eBay...
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PricingSummary
{
    /**
     * @param Amount|null $auctionReservePrice This field indicates the lowest price at which the seller is willing to sell an item through an auction listing. Note that setting a Reserve Price will incur a listing fee of $5 or 7.5% of the Reserve Price, whichever is...
     * @param Amount|null $auctionStartPrice This field indicates the minimum bidding price for the auction. The bidding starts at this price. Note: If the auctionReservePrice is also specified, the value of auctionStartPrice must be lower than the value of auction...
     * @param Amount|null $minimumAdvertisedPrice This container is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. Minimum Advertised Price (MAP) is an agreement between suppliers (or manufacturers (OEM)) and the retailers (sellers) stip...
     * @param string|null $originallySoldForRetailPriceOn This field is needed if the Strikethrough Pricing (STP) feature will be used in the offer. This field indicates that the product was sold for the price in the originalRetailPrice field on an eBay site, or sold for that p...
     * @param Amount|null $originalRetailPrice This container is needed if the Strikethrough Pricing (STP) feature will be used in the offer. The dollar value passed into this field indicates the original retail price set by the manufacturer (OEM). eBay does not main...
     * @param Amount|null $price This is the listing price of the product. A listing price must be specified before publishing an offer, but it is possible to create an offer without a price. For published offers, this container will always be returned,...
     * @param string|null $pricingVisibility This field is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. This field is only applicable if an eligible US seller is using the Minimum Advertised Price (MAP) feature and a minimumAdvert...
     */
    public function __construct(
        public ?Amount $auctionReservePrice = null,
        public ?Amount $auctionStartPrice = null,
        public ?Amount $minimumAdvertisedPrice = null,
        public ?string $originallySoldForRetailPriceOn = null,
        public ?Amount $originalRetailPrice = null,
        public ?Amount $price = null,
        public ?string $pricingVisibility = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            auctionReservePrice: isset($data['auctionReservePrice']) && is_array($data['auctionReservePrice']) ? Amount::fromArray($data['auctionReservePrice']) : null,
            auctionStartPrice: isset($data['auctionStartPrice']) && is_array($data['auctionStartPrice']) ? Amount::fromArray($data['auctionStartPrice']) : null,
            minimumAdvertisedPrice: isset($data['minimumAdvertisedPrice']) && is_array($data['minimumAdvertisedPrice']) ? Amount::fromArray($data['minimumAdvertisedPrice']) : null,
            originallySoldForRetailPriceOn: isset($data['originallySoldForRetailPriceOn']) ? (string) $data['originallySoldForRetailPriceOn'] : null,
            originalRetailPrice: isset($data['originalRetailPrice']) && is_array($data['originalRetailPrice']) ? Amount::fromArray($data['originalRetailPrice']) : null,
            price: isset($data['price']) && is_array($data['price']) ? Amount::fromArray($data['price']) : null,
            pricingVisibility: isset($data['pricingVisibility']) ? (string) $data['pricingVisibility'] : null,
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
        if ($this->auctionReservePrice !== null) {
            $data['auctionReservePrice'] = $this->auctionReservePrice->toArray();
        }
        if ($this->auctionStartPrice !== null) {
            $data['auctionStartPrice'] = $this->auctionStartPrice->toArray();
        }
        if ($this->minimumAdvertisedPrice !== null) {
            $data['minimumAdvertisedPrice'] = $this->minimumAdvertisedPrice->toArray();
        }
        if ($this->originallySoldForRetailPriceOn !== null) {
            $data['originallySoldForRetailPriceOn'] = $this->originallySoldForRetailPriceOn;
        }
        if ($this->originalRetailPrice !== null) {
            $data['originalRetailPrice'] = $this->originalRetailPrice->toArray();
        }
        if ($this->price !== null) {
            $data['price'] = $this->price->toArray();
        }
        if ($this->pricingVisibility !== null) {
            $data['pricingVisibility'] = $this->pricingVisibility;
        }

        return $data;
    }
}
