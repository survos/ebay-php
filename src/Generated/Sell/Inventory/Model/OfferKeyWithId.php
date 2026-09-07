<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the getListingFees call to indicate the unpublished offer(s) for which expected listing fees will be retrieved. The user passes in one or more offerId values (a maximum of 250). See the Standard selling fees help page for more information on listing fees.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OfferKeyWithId
{
    /**
     * @param string|null $offerId The unique identifier of an unpublished offer for which expected listing fees will be retrieved. One to 250 offerId values can be passed in to the offers container for one getListingFees call. Use the getOffers method to...
     */
    public function __construct(
        public ?string $offerId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            offerId: isset($data['offerId']) ? (string) $data['offerId'] : null,
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
        if ($this->offerId !== null) {
            $data['offerId'] = $this->offerId;
        }

        return $data;
    }
}
