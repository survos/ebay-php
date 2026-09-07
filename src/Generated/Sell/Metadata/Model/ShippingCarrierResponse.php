<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable shipping carrier metadata for returned for the marketplace.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingCarrierResponse
{
    /**
     * @param list<ShippingCarrier>|null $shippingCarriers A list of shipping carriers available for the marketplace.
     */
    public function __construct(
        public ?array $shippingCarriers = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            shippingCarriers: isset($data['shippingCarriers']) && is_array($data['shippingCarriers'])
                ? array_values(array_map(static fn (array $i): ShippingCarrier => ShippingCarrier::fromArray($i), $data['shippingCarriers']))
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
        if ($this->shippingCarriers !== null) {
            $data['shippingCarriers'] = array_map(static fn (ShippingCarrier $i): array => $i->toArray(), $this->shippingCarriers);
        }

        return $data;
    }
}
