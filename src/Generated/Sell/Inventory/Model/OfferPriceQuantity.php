<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the offers container in a Bulk Update Price and Quantity call to update the current price and/or quantity of one or more offers associated with a specific inventory item.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OfferPriceQuantity
{
    /**
     * @param int|null $availableQuantity This field is used if the seller wants to modify the current quantity of the inventory item that will be available for purchase in the offer (identified by the corresponding offerId value). This value represents the quan...
     * @param string|null $offerId This field is the unique identifier of the offer. If an offers container is used to update one or more offers associated to a specific inventory item, the offerId value is required in order to identify the offer to updat...
     * @param Amount|null $price This container is used if the seller wants to modify the current price of the inventory item. The dollar value set here will be the new price of the inventory item in the offer (identified by the corresponding offerId va...
     */
    public function __construct(
        public ?int $availableQuantity = null,
        public ?string $offerId = null,
        public ?Amount $price = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            availableQuantity: isset($data['availableQuantity']) ? (int) $data['availableQuantity'] : null,
            offerId: isset($data['offerId']) ? (string) $data['offerId'] : null,
            price: isset($data['price']) && is_array($data['price']) ? Amount::fromArray($data['price']) : null,
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
        if ($this->availableQuantity !== null) {
            $data['availableQuantity'] = $this->availableQuantity;
        }
        if ($this->offerId !== null) {
            $data['offerId'] = $this->offerId;
        }
        if ($this->price !== null) {
            $data['price'] = $this->price->toArray();
        }

        return $data;
    }
}
