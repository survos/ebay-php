<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the bestOfferTerms container, which is used if the seller would like to support the Best Offer feature on their listing.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BestOffer
{
    /**
     * @param Amount|null $autoAcceptPrice This is the price at which Best Offers are automatically accepted. If a buyer submits a Best Offer that is equal to or above this value, the offer is automatically accepted on behalf of the seller. This field is only app...
     * @param Amount|null $autoDeclinePrice This is the price at which Best Offers are automatically declined. If a buyer submits a Best Offer that is equal to or below this value, the offer is automatically declined on behalf of the seller. This field is only app...
     * @param bool|null $bestOfferEnabled This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. The seller includes...
     */
    public function __construct(
        public ?Amount $autoAcceptPrice = null,
        public ?Amount $autoDeclinePrice = null,
        public ?bool $bestOfferEnabled = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            autoAcceptPrice: isset($data['autoAcceptPrice']) && is_array($data['autoAcceptPrice']) ? Amount::fromArray($data['autoAcceptPrice']) : null,
            autoDeclinePrice: isset($data['autoDeclinePrice']) && is_array($data['autoDeclinePrice']) ? Amount::fromArray($data['autoDeclinePrice']) : null,
            bestOfferEnabled: isset($data['bestOfferEnabled']) ? (bool) $data['bestOfferEnabled'] : null,
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
        if ($this->autoAcceptPrice !== null) {
            $data['autoAcceptPrice'] = $this->autoAcceptPrice->toArray();
        }
        if ($this->autoDeclinePrice !== null) {
            $data['autoDeclinePrice'] = $this->autoDeclinePrice->toArray();
        }
        if ($this->bestOfferEnabled !== null) {
            $data['bestOfferEnabled'] = $this->bestOfferEnabled;
        }

        return $data;
    }
}
