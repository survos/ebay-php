<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains shipping information for a fulfillment, including the shipping carrier, the shipping service option, the shipment destination, and the Global Shipping Program reference ID.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingStep
{
    /**
     * @param string|null $shippingCarrierCode The unique identifier of the shipping carrier being used to ship the line item. Note: The Trading API's GeteBayDetails call can be used to retrieve the latest shipping carrier and shipping service option enumeration valu...
     * @param string|null $shippingServiceCode The unique identifier of the shipping service option being used to ship the line item. Note: Use the Trading API's GeteBayDetails call to retrieve the latest shipping carrier and shipping service option enumeration value...
     * @param ExtendedContact|null $shipTo This container consists of shipping and contact information about the individual or organization to whom the fulfillment package will be shipped. Note: When FulfillmentInstructionsType is FULFILLED_BY_EBAY, there will be...
     * @param string|null $shipToReferenceId This is the unique identifer of the Global Shipping Program (GSP) shipment. This field is only returned if the line item is being shipped via GSP (the value of the fulfillmentStartInstructions.ebaySupportedFulfillment fi...
     */
    public function __construct(
        public ?string $shippingCarrierCode = null,
        public ?string $shippingServiceCode = null,
        public ?ExtendedContact $shipTo = null,
        public ?string $shipToReferenceId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            shippingCarrierCode: isset($data['shippingCarrierCode']) ? (string) $data['shippingCarrierCode'] : null,
            shippingServiceCode: isset($data['shippingServiceCode']) ? (string) $data['shippingServiceCode'] : null,
            shipTo: isset($data['shipTo']) && is_array($data['shipTo']) ? ExtendedContact::fromArray($data['shipTo']) : null,
            shipToReferenceId: isset($data['shipToReferenceId']) ? (string) $data['shipToReferenceId'] : null,
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
        if ($this->shippingCarrierCode !== null) {
            $data['shippingCarrierCode'] = $this->shippingCarrierCode;
        }
        if ($this->shippingServiceCode !== null) {
            $data['shippingServiceCode'] = $this->shippingServiceCode;
        }
        if ($this->shipTo !== null) {
            $data['shipTo'] = $this->shipTo->toArray();
        }
        if ($this->shipToReferenceId !== null) {
            $data['shipToReferenceId'] = $this->shipToReferenceId;
        }

        return $data;
    }
}
