<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to indicate the status of each offer that the user attempted to publish. If an offer is successfully published, an eBay listing ID (also known as an Item ID) is returned. If there is an issue publishing the offer and creating the new eBay listing, the information about why the listing failed should be returned in the errors and/or warnings containers.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OfferResponseWithListingId
{
    /**
     * @param list<Error>|null $errors This container will be returned if there were one or more errors associated with publishing the offer.
     * @param string|null $listingId The unique identifier of the newly-created eBay listing. This field is only returned if the seller successfully published the offer and created the new eBay listing.
     * @param string|null $offerId The unique identifier of the offer that the seller published (or attempted to publish).
     * @param int|null $statusCode The HTTP status code returned in this field indicates the success or failure of publishing the offer specified in the offerId field. See the HTTP status codes table to see which each status code indicates.
     * @param list<Error>|null $warnings This container will be returned if there were one or more warnings associated with publishing the offer.
     */
    public function __construct(
        public ?array $errors = null,
        public ?string $listingId = null,
        public ?string $offerId = null,
        public ?int $statusCode = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            errors: isset($data['errors']) && is_array($data['errors'])
                ? array_values(array_map(static fn (array $i): Error => Error::fromArray($i), $data['errors']))
                : null,
            listingId: isset($data['listingId']) ? (string) $data['listingId'] : null,
            offerId: isset($data['offerId']) ? (string) $data['offerId'] : null,
            statusCode: isset($data['statusCode']) ? (int) $data['statusCode'] : null,
            warnings: isset($data['warnings']) && is_array($data['warnings'])
                ? array_values(array_map(static fn (array $i): Error => Error::fromArray($i), $data['warnings']))
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
        if ($this->errors !== null) {
            $data['errors'] = array_map(static fn (Error $i): array => $i->toArray(), $this->errors);
        }
        if ($this->listingId !== null) {
            $data['listingId'] = $this->listingId;
        }
        if ($this->offerId !== null) {
            $data['offerId'] = $this->offerId;
        }
        if ($this->statusCode !== null) {
            $data['statusCode'] = $this->statusCode;
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
