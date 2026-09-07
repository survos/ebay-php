<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the bulkCreateOffer response to show the status of each offer that the seller attempted to create with the bulkCreateOffer method. For each offer that is created successfully, the returned statusCode value should be 200, and a unique offerId should be created for each offer. If any issues occur with the creation of any offers, errors and/or warnings containers will be returned...
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OfferSkuResponse
{
    /**
     * @param list<Error>|null $errors This container will be returned at the offer level, and will contain one or more errors if any occurred with the attempted creation of the corresponding offer.
     * @param string|null $format This enumeration value indicates the listing format of the offer. For implementation help, refer to eBay API documentation
     * @param string|null $marketplaceId This enumeration value is the unique identifier of the eBay marketplace for which the offer will be made available. This enumeration value should be the same for all offers since the bulkCreateOffer method can only be us...
     * @param string|null $offerId The unique identifier of the newly-created offer. This identifier should be automatically created by eBay if the creation of the offer was successful. It is not returned if the creation of the offer was not successful. I...
     * @param string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The sku value is required for each product offer that the seller is trying to create, and it is always returned to identified the product that is associa...
     * @param int|null $statusCode The integer value returned in this field is the http status code. If an offer is created successfully, the value returned in this field should be 200. A user can view the HTTP status codes section for information on othe...
     * @param list<Error>|null $warnings This container will be returned at the offer level, and will contain one or more warnings if any occurred with the attempted creation of the corresponding offer. Note that it is possible that an offer can be created succ...
     */
    public function __construct(
        public ?array $errors = null,
        public ?string $format = null,
        public ?string $marketplaceId = null,
        public ?string $offerId = null,
        public ?string $sku = null,
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
            format: isset($data['format']) ? (string) $data['format'] : null,
            marketplaceId: isset($data['marketplaceId']) ? (string) $data['marketplaceId'] : null,
            offerId: isset($data['offerId']) ? (string) $data['offerId'] : null,
            sku: isset($data['sku']) ? (string) $data['sku'] : null,
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
        if ($this->format !== null) {
            $data['format'] = $this->format;
        }
        if ($this->marketplaceId !== null) {
            $data['marketplaceId'] = $this->marketplaceId;
        }
        if ($this->offerId !== null) {
            $data['offerId'] = $this->offerId;
        }
        if ($this->sku !== null) {
            $data['sku'] = $this->sku;
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
