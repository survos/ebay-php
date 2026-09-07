<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the details for creating a fulfillment for an order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingFulfillmentDetails
{
    /**
     * @param list<LineItemReference>|null $lineItems This array contains a list of or more line items and the quantity that will be shipped in the same package.
     * @param string|null $shippedDate This is the actual date and time that the fulfillment package was shipped. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. The seller should use the actual date/time t...
     * @param string|null $shippingCarrierCode The unique identifier of the shipping carrier being used to ship the line item(s). Technically, the shippingCarrierCode and trackingNumber fields are optional, but generally these fields will be provided if the shipping...
     * @param string|null $trackingNumber The tracking number provided by the shipping carrier for this fulfillment. The seller should be careful that this tracking number is accurate since the buyer will use this tracking number to track shipment, and eBay has...
     */
    public function __construct(
        public ?array $lineItems = null,
        public ?string $shippedDate = null,
        public ?string $shippingCarrierCode = null,
        public ?string $trackingNumber = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            lineItems: isset($data['lineItems']) && is_array($data['lineItems'])
                ? array_values(array_map(static fn (array $i): LineItemReference => LineItemReference::fromArray($i), $data['lineItems']))
                : null,
            shippedDate: isset($data['shippedDate']) ? (string) $data['shippedDate'] : null,
            shippingCarrierCode: isset($data['shippingCarrierCode']) ? (string) $data['shippingCarrierCode'] : null,
            trackingNumber: isset($data['trackingNumber']) ? (string) $data['trackingNumber'] : null,
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
        if ($this->lineItems !== null) {
            $data['lineItems'] = array_map(static fn (LineItemReference $i): array => $i->toArray(), $this->lineItems);
        }
        if ($this->shippedDate !== null) {
            $data['shippedDate'] = $this->shippedDate;
        }
        if ($this->shippingCarrierCode !== null) {
            $data['shippingCarrierCode'] = $this->shippingCarrierCode;
        }
        if ($this->trackingNumber !== null) {
            $data['trackingNumber'] = $this->trackingNumber;
        }

        return $data;
    }
}
