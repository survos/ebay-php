<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about the eBay programs under which a line item was listed and sold.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LineItemProperties
{
    /**
     * @param bool|null $buyerProtection A value of true indicates that the line item is covered by eBay's Buyer Protection program.
     * @param bool|null $fromBestOffer This field is only returned if true and indicates that the purchase occurred by the buyer and seller mutually agreeing on a Best Offer amount. The Best Offer feature can be set up for any listing type, but if this featur...
     * @param bool|null $soldViaAdCampaign This field is only returned if true and indicates that the line item was sold as a result of a seller's ad campaign.
     */
    public function __construct(
        public ?bool $buyerProtection = null,
        public ?bool $fromBestOffer = null,
        public ?bool $soldViaAdCampaign = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            buyerProtection: isset($data['buyerProtection']) ? (bool) $data['buyerProtection'] : null,
            fromBestOffer: isset($data['fromBestOffer']) ? (bool) $data['fromBestOffer'] : null,
            soldViaAdCampaign: isset($data['soldViaAdCampaign']) ? (bool) $data['soldViaAdCampaign'] : null,
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
        if ($this->buyerProtection !== null) {
            $data['buyerProtection'] = $this->buyerProtection;
        }
        if ($this->fromBestOffer !== null) {
            $data['fromBestOffer'] = $this->fromBestOffer;
        }
        if ($this->soldViaAdCampaign !== null) {
            $data['soldViaAdCampaign'] = $this->soldViaAdCampaign;
        }

        return $data;
    }
}
