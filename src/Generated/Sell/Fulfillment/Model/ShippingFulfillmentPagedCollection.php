<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the specifications for the entire collection of shipping fulfillments that are associated with the order specified by a getShippingFulfillments call. The fulfillments container returns an array of all the fulfillments in the collection.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingFulfillmentPagedCollection
{
    /**
     * @param list<ShippingFulfillment>|null $fulfillments This array contains one or more fulfillments required for the order that was specified in method endpoint.
     * @param int|null $total The total number of fulfillments in the specified order. Note: If no fulfillments are found for the order, this field is returned with a value of 0.
     * @param list<Error>|null $warnings This array is only returned if one or more errors or warnings occur with the call request.
     */
    public function __construct(
        public ?array $fulfillments = null,
        public ?int $total = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fulfillments: isset($data['fulfillments']) && is_array($data['fulfillments'])
                ? array_values(array_map(static fn (array $i): ShippingFulfillment => ShippingFulfillment::fromArray($i), $data['fulfillments']))
                : null,
            total: isset($data['total']) ? (int) $data['total'] : null,
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
        if ($this->fulfillments !== null) {
            $data['fulfillments'] = array_map(static fn (ShippingFulfillment $i): array => $i->toArray(), $this->fulfillments);
        }
        if ($this->total !== null) {
            $data['total'] = $this->total;
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
