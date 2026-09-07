<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base request of the bulkCreateOffer method, which is used to create up to 25 new offers.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BulkEbayOfferDetailsWithKeys
{
    /**
     * @param list<EbayOfferDetailsWithKeys>|null $requests The details of each offer that is being created is passed in under this container. Up to 25 offers can be created with one bulkCreateOffer call.
     */
    public function __construct(
        public ?array $requests = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            requests: isset($data['requests']) && is_array($data['requests'])
                ? array_values(array_map(static fn (array $i): EbayOfferDetailsWithKeys => EbayOfferDetailsWithKeys::fromArray($i), $data['requests']))
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
        if ($this->requests !== null) {
            $data['requests'] = array_map(static fn (EbayOfferDetailsWithKeys $i): array => $i->toArray(), $this->requests);
        }

        return $data;
    }
}
