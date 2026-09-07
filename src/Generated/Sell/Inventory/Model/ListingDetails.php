<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the listing container in the getOffer and getOffers calls to provide the eBay listing ID, the listing status, and quantity sold for the offer. The listing container is only returned for published offers, and is not returned for unpublished offers.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ListingDetails
{
    /**
     * @param string|null $listingId The unique identifier of the eBay listing that is associated with the published offer.
     * @param bool|null $listingOnHold Indicates if a listing is on hold due to an eBay policy violation. If a listing is put on hold, users are unable to view the listing details, the listing is hidden from search, and all attempted purchases, offers, and bi...
     * @param string|null $listingStatus The enumeration value returned in this field indicates the status of the listing that is associated with the published offer. For implementation help, refer to eBay API documentation
     * @param int|null $soldQuantity This integer value indicates the quantity of the product that has been sold for the published offer.
     */
    public function __construct(
        public ?string $listingId = null,
        public ?bool $listingOnHold = null,
        public ?string $listingStatus = null,
        public ?int $soldQuantity = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            listingId: isset($data['listingId']) ? (string) $data['listingId'] : null,
            listingOnHold: isset($data['listingOnHold']) ? (bool) $data['listingOnHold'] : null,
            listingStatus: isset($data['listingStatus']) ? (string) $data['listingStatus'] : null,
            soldQuantity: isset($data['soldQuantity']) ? (int) $data['soldQuantity'] : null,
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
        if ($this->listingId !== null) {
            $data['listingId'] = $this->listingId;
        }
        if ($this->listingOnHold !== null) {
            $data['listingOnHold'] = $this->listingOnHold;
        }
        if ($this->listingStatus !== null) {
            $data['listingStatus'] = $this->listingStatus;
        }
        if ($this->soldQuantity !== null) {
            $data['soldQuantity'] = $this->soldQuantity;
        }

        return $data;
    }
}
