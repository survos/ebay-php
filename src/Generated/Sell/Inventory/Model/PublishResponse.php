<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base response payload of the publishOffer and publishOfferByInventoryItemGroup calls.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PublishResponse
{
    /**
     * @param string|null $listingId The unique identifier of the newly created eBay listing. This field is returned if the single offer (if publishOffer call was used) or group of offers in an inventory item group (if publishOfferByInventoryItemGroup call...
     * @param list<Error>|null $warnings This container will contain an array of errors and/or warnings if any occur when a publishOffer or publishOfferByInventoryItemGroup call is made.
     */
    public function __construct(
        public ?string $listingId = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            listingId: isset($data['listingId']) ? (string) $data['listingId'] : null,
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
        if ($this->listingId !== null) {
            $data['listingId'] = $this->listingId;
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
