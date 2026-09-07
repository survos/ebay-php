<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains data on a line item that is related to, but not a part of the order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LinkedOrderLineItem
{
    /**
     * @param list<NameValuePair>|null $lineItemAspects This array contains the complete set of items aspects for the linked line item. For example: "lineItemAspects": [ { "name": "Tire Type", "value": "All Season" }, ... { "name": "Car Type", "value": "Performance" } ]Note:...
     * @param string|null $lineItemId The unique identifier of the linked order line item.
     * @param string|null $maxEstimatedDeliveryDate The end of the date range in which the linked line item is expected to be delivered to the shipping address.
     * @param string|null $minEstimatedDeliveryDate The beginning of the date range in which the linked line item is expected to be delivered to the shipping address.
     * @param string|null $orderId The unique identifier of the order to which the linked line item belongs.
     * @param string|null $sellerId The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
     * @param list<TrackingInfo>|null $shipments An array containing any shipment tracking information available for the linked line item.
     * @param string|null $title The listing title of the linked line item. Note: The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.
     */
    public function __construct(
        public ?array $lineItemAspects = null,
        public ?string $lineItemId = null,
        public ?string $maxEstimatedDeliveryDate = null,
        public ?string $minEstimatedDeliveryDate = null,
        public ?string $orderId = null,
        public ?string $sellerId = null,
        public ?array $shipments = null,
        public ?string $title = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            lineItemAspects: isset($data['lineItemAspects']) && is_array($data['lineItemAspects'])
                ? array_values(array_map(static fn (array $i): NameValuePair => NameValuePair::fromArray($i), $data['lineItemAspects']))
                : null,
            lineItemId: isset($data['lineItemId']) ? (string) $data['lineItemId'] : null,
            maxEstimatedDeliveryDate: isset($data['maxEstimatedDeliveryDate']) ? (string) $data['maxEstimatedDeliveryDate'] : null,
            minEstimatedDeliveryDate: isset($data['minEstimatedDeliveryDate']) ? (string) $data['minEstimatedDeliveryDate'] : null,
            orderId: isset($data['orderId']) ? (string) $data['orderId'] : null,
            sellerId: isset($data['sellerId']) ? (string) $data['sellerId'] : null,
            shipments: isset($data['shipments']) && is_array($data['shipments'])
                ? array_values(array_map(static fn (array $i): TrackingInfo => TrackingInfo::fromArray($i), $data['shipments']))
                : null,
            title: isset($data['title']) ? (string) $data['title'] : null,
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
        if ($this->lineItemAspects !== null) {
            $data['lineItemAspects'] = array_map(static fn (NameValuePair $i): array => $i->toArray(), $this->lineItemAspects);
        }
        if ($this->lineItemId !== null) {
            $data['lineItemId'] = $this->lineItemId;
        }
        if ($this->maxEstimatedDeliveryDate !== null) {
            $data['maxEstimatedDeliveryDate'] = $this->maxEstimatedDeliveryDate;
        }
        if ($this->minEstimatedDeliveryDate !== null) {
            $data['minEstimatedDeliveryDate'] = $this->minEstimatedDeliveryDate;
        }
        if ($this->orderId !== null) {
            $data['orderId'] = $this->orderId;
        }
        if ($this->sellerId !== null) {
            $data['sellerId'] = $this->sellerId;
        }
        if ($this->shipments !== null) {
            $data['shipments'] = array_map(static fn (TrackingInfo $i): array => $i->toArray(), $this->shipments);
        }
        if ($this->title !== null) {
            $data['title'] = $this->title;
        }

        return $data;
    }
}
