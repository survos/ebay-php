<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the complete details of an existing fulfillment for an order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingFulfillment
{
    /**
     * @param string|null $fulfillmentId The unique identifier of the fulfillment; for example, 9405509699937003457459. This eBay-generated value is created with a successful createShippingFulfillment call.
     * @param list<LineItemReference>|null $lineItems This array contains a list of one or more line items (and purchased quantity) to which the fulfillment applies.
     * @param string|null $shipmentTrackingNumber The tracking number provided by the shipping carrier for the package shipped in this fulfillment. This field is returned if available.
     * @param string|null $shippedDate The date and time that the fulfillment package was shipped. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field should only be returned if the package has been...
     * @param string|null $shippingCarrierCode The eBay code identifying the shipping carrier for this fulfillment. This field is returned if available. Note: The Trading API's ShippingCarrierCodeType enumeration type contains the most current list of eBay shipping c...
     */
    public function __construct(
        public ?string $fulfillmentId = null,
        public ?array $lineItems = null,
        public ?string $shipmentTrackingNumber = null,
        public ?string $shippedDate = null,
        public ?string $shippingCarrierCode = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fulfillmentId: isset($data['fulfillmentId']) ? (string) $data['fulfillmentId'] : null,
            lineItems: isset($data['lineItems']) && is_array($data['lineItems'])
                ? array_values(array_map(static fn (array $i): LineItemReference => LineItemReference::fromArray($i), $data['lineItems']))
                : null,
            shipmentTrackingNumber: isset($data['shipmentTrackingNumber']) ? (string) $data['shipmentTrackingNumber'] : null,
            shippedDate: isset($data['shippedDate']) ? (string) $data['shippedDate'] : null,
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
        if ($this->fulfillmentId !== null) {
            $data['fulfillmentId'] = $this->fulfillmentId;
        }
        if ($this->lineItems !== null) {
            $data['lineItems'] = array_map(static fn (LineItemReference $i): array => $i->toArray(), $this->lineItems);
        }
        if ($this->shipmentTrackingNumber !== null) {
            $data['shipmentTrackingNumber'] = $this->shipmentTrackingNumber;
        }
        if ($this->shippedDate !== null) {
            $data['shippedDate'] = $this->shippedDate;
        }
        if ($this->shippingCarrierCode !== null) {
            $data['shippingCarrierCode'] = $this->shippingCarrierCode;
        }

        return $data;
    }
}
