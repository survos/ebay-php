<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains a summary of cumulative costs and charges for all line items of an order, including item price, price adjustments, sales taxes, delivery costs, and order discounts.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PricingSummary
{
    /**
     * @param Amount|null $adjustment This container shows the total amount of any adjustments that were applied to the cost of the item(s) in the order. This amount does not include shipping, discounts, fixed fees, or taxes. This container is only returned...
     * @param Amount|null $deliveryCost This container shows the total cost of delivering the order to the buyer, before any shipping/delivery discount is applied.
     * @param Amount|null $deliveryDiscount This container shows the total amount of delivery discounts (including shipping discounts) that apply to the order. This should be a negative real number. This container is only returned if delivery discounts are being a...
     * @param Amount|null $fee This container shows the total amount of any special fees applied to the order, such as a tire recycling fee or an electronic waste fee. This container is returned if special fees are being applied to the order and if th...
     * @param Amount|null $priceDiscount This container shows the total amount of all item price discounts (including promotions) that apply to the order and reduce its cost to the buyer. This should be a negative real number. This container is only returned if...
     * @param Amount|null $priceSubtotal This container shows the cumulative costs of of all units of all line items in the order, before any discount is applied.
     * @param Amount|null $tax This container shows the total amount of tax for the order. To calculate the tax percentage rate, divide this value by the value of the total field. This container is only returned if any type of tax (sales tax, tax on s...
     * @param Amount|null $total The total cost of the order after adding all line item costs, delivery costs, sales tax, and special fees, and then subtracting all special discounts and price adjustments. Note: For orders that are subject to 'eBay Coll...
     */
    public function __construct(
        public ?Amount $adjustment = null,
        public ?Amount $deliveryCost = null,
        public ?Amount $deliveryDiscount = null,
        public ?Amount $fee = null,
        public ?Amount $priceDiscount = null,
        public ?Amount $priceSubtotal = null,
        public ?Amount $tax = null,
        public ?Amount $total = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            adjustment: isset($data['adjustment']) && is_array($data['adjustment']) ? Amount::fromArray($data['adjustment']) : null,
            deliveryCost: isset($data['deliveryCost']) && is_array($data['deliveryCost']) ? Amount::fromArray($data['deliveryCost']) : null,
            deliveryDiscount: isset($data['deliveryDiscount']) && is_array($data['deliveryDiscount']) ? Amount::fromArray($data['deliveryDiscount']) : null,
            fee: isset($data['fee']) && is_array($data['fee']) ? Amount::fromArray($data['fee']) : null,
            priceDiscount: isset($data['priceDiscount']) && is_array($data['priceDiscount']) ? Amount::fromArray($data['priceDiscount']) : null,
            priceSubtotal: isset($data['priceSubtotal']) && is_array($data['priceSubtotal']) ? Amount::fromArray($data['priceSubtotal']) : null,
            tax: isset($data['tax']) && is_array($data['tax']) ? Amount::fromArray($data['tax']) : null,
            total: isset($data['total']) && is_array($data['total']) ? Amount::fromArray($data['total']) : null,
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
        if ($this->adjustment !== null) {
            $data['adjustment'] = $this->adjustment->toArray();
        }
        if ($this->deliveryCost !== null) {
            $data['deliveryCost'] = $this->deliveryCost->toArray();
        }
        if ($this->deliveryDiscount !== null) {
            $data['deliveryDiscount'] = $this->deliveryDiscount->toArray();
        }
        if ($this->fee !== null) {
            $data['fee'] = $this->fee->toArray();
        }
        if ($this->priceDiscount !== null) {
            $data['priceDiscount'] = $this->priceDiscount->toArray();
        }
        if ($this->priceSubtotal !== null) {
            $data['priceSubtotal'] = $this->priceSubtotal->toArray();
        }
        if ($this->tax !== null) {
            $data['tax'] = $this->tax->toArray();
        }
        if ($this->total !== null) {
            $data['total'] = $this->total->toArray();
        }

        return $data;
    }
}
