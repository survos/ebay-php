<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base request payload of the getListingFees call.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OfferKeysWithId
{
    /**
     * @param list<OfferKeyWithId>|null $offers This container is used to identify one or more (up to 250) unpublished offers for which expected listing fees will be retrieved. The user passes one or more offerId values (maximum of 250) in to this container to identif...
     */
    public function __construct(
        public ?array $offers = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            offers: isset($data['offers']) && is_array($data['offers'])
                ? array_values(array_map(static fn (array $i): OfferKeyWithId => OfferKeyWithId::fromArray($i), $data['offers']))
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
        if ($this->offers !== null) {
            $data['offers'] = array_map(static fn (OfferKeyWithId $i): array => $i->toArray(), $this->offers);
        }

        return $data;
    }
}
