<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used for seller provided shipment tracking information.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class TrackingInfo
{
    /**
     * @param string|null $shipmentTrackingNumber This string value represents the shipment tracking number of the package.
     * @param string|null $shippingCarrierCode This string value represents the shipping carrier used to ship the package.
     */
    public function __construct(
        public ?string $shipmentTrackingNumber = null,
        public ?string $shippingCarrierCode = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            shipmentTrackingNumber: isset($data['shipmentTrackingNumber']) ? (string) $data['shipmentTrackingNumber'] : null,
            shippingCarrierCode: isset($data['shippingCarrierCode']) ? (string) $data['shippingCarrierCode'] : null,
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
        if ($this->shipmentTrackingNumber !== null) {
            $data['shipmentTrackingNumber'] = $this->shipmentTrackingNumber;
        }
        if ($this->shippingCarrierCode !== null) {
            $data['shippingCarrierCode'] = $this->shippingCarrierCode;
        }

        return $data;
    }
}
