<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable shipping carrier metadata for the marketplace.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingCarrier
{
    /**
     * @param string|null $description The localized description of the shipping carrier, such as UPS, FedEx, and USPS.
     * @param string|null $shippingCarrier An enumerated value describing the shipping carrier returned, for example, UPS, FedEx, and USPS. These values are needed when providing shipment tracking information for each specific shipping carrier.
     */
    public function __construct(
        public ?string $description = null,
        public ?string $shippingCarrier = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            description: isset($data['description']) ? (string) $data['description'] : null,
            shippingCarrier: isset($data['shippingCarrier']) ? (string) $data['shippingCarrier'] : null,
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
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->shippingCarrier !== null) {
            $data['shippingCarrier'] = $this->shippingCarrier;
        }

        return $data;
    }
}
