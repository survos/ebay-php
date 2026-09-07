<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to update the total "ship-to-home" quantity for one or more inventory items and/or to update the price and/or quantity of one or more specific offers associated with one or more inventory items.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PriceQuantity
{
    /**
     * @param list<OfferPriceQuantity>|null $offers This container is needed if the seller is updating the price and/or quantity of one or more published offers, and a successful call will actually update the active eBay listing with the revised price and/or available qua...
     * @param ShipToLocationAvailability|null $shipToLocationAvailability This container is needed if the seller is updating the total 'ship-to-home' quantity for the corresponding inventory item (specified in the sku field). A successful call will update the inventory item record associated w...
     * @param string|null $sku This is the seller-defined SKU value of the inventory item whose total 'ship-to-home' quantity will be updated. This field is only required when the seller is updating the total quantity of an inventory item using the sh...
     */
    public function __construct(
        public ?array $offers = null,
        public ?ShipToLocationAvailability $shipToLocationAvailability = null,
        public ?string $sku = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            offers: isset($data['offers']) && is_array($data['offers'])
                ? array_values(array_map(static fn (array $i): OfferPriceQuantity => OfferPriceQuantity::fromArray($i), $data['offers']))
                : null,
            shipToLocationAvailability: isset($data['shipToLocationAvailability']) && is_array($data['shipToLocationAvailability']) ? ShipToLocationAvailability::fromArray($data['shipToLocationAvailability']) : null,
            sku: isset($data['sku']) ? (string) $data['sku'] : null,
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
            $data['offers'] = array_map(static fn (OfferPriceQuantity $i): array => $i->toArray(), $this->offers);
        }
        if ($this->shipToLocationAvailability !== null) {
            $data['shipToLocationAvailability'] = $this->shipToLocationAvailability->toArray();
        }
        if ($this->sku !== null) {
            $data['sku'] = $this->sku;
        }

        return $data;
    }
}
