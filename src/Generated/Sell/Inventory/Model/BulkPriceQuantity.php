<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base request payload of the bulkUpdatePriceQuantity call. The bulkUpdatePriceQuantity call allows the seller to update the total 'ship-to-home' quantity of one or more inventory items (up to 25) and/or to update the price and/or quantity of one or more specific published offers.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BulkPriceQuantity
{
    /**
     * @param list<PriceQuantity>|null $requests This container is used by the seller to update the total 'ship-to-home' quantity of one or more inventory items (up to 25) and/or to update the price and/or quantity of one or more specific published offers.
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
                ? array_values(array_map(static fn (array $i): PriceQuantity => PriceQuantity::fromArray($i), $data['requests']))
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
            $data['requests'] = array_map(static fn (PriceQuantity $i): array => $i->toArray(), $this->requests);
        }

        return $data;
    }
}
