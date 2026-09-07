<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains a set of specifications for processing a fulfillment of an order, including the type of fulfillment, shipping carrier and service, addressing details, and estimated delivery window. These instructions are derived from the buyer's and seller's eBay account preferences, the listing parameters, and the buyer's checkout selections. The seller can use them as a starting point for pac...
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class FulfillmentStartInstruction
{
    /**
     * @param AppointmentDetails|null $appointment This container provides information used by the installation provider concerning appointment details selected by the buyer.
     * @param bool|null $ebaySupportedFulfillment This field is only returned if its value is true and indicates that the fulfillment will be shipped via eBay's Global Shipping Program, eBay International Shipping, or the Authenticity Guarantee service program. For more...
     * @param Address|null $finalDestinationAddress This container is only returned if the value of ebaySupportedFulfillment field is true. This is the final destination address for a Global Shipping Program shipment or an eBay International Shipping shipment, which is us...
     * @param string|null $fulfillmentInstructionsType The enumeration value returned in this field indicates the method of fulfillment that will be used to deliver this set of line items (this package) to the buyer. This field will have a value of SHIP_TO if the ebaySupport...
     * @param string|null $maxEstimatedDeliveryDate This is the estimated latest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned ifthe value of the...
     * @param string|null $minEstimatedDeliveryDate This is the estimated earliest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if the value of...
     * @param PickupStep|null $pickupStep This container is only returned for In-Store Pickup orders, and it indicates the specific merchant's store where the buyer will pick up the order. The In-Store Pickup feature is supported in the US, Canada, UK, Germany,...
     * @param ShippingStep|null $shippingStep This container consists of shipping information for this fulfillment, including the shipping carrier, the shipping service option, and the shipment destination. This container is not returned if the value of the fulfillm...
     */
    public function __construct(
        public ?AppointmentDetails $appointment = null,
        public ?bool $ebaySupportedFulfillment = null,
        public ?Address $finalDestinationAddress = null,
        public ?string $fulfillmentInstructionsType = null,
        public ?string $maxEstimatedDeliveryDate = null,
        public ?string $minEstimatedDeliveryDate = null,
        public ?PickupStep $pickupStep = null,
        public ?ShippingStep $shippingStep = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            appointment: isset($data['appointment']) && is_array($data['appointment']) ? AppointmentDetails::fromArray($data['appointment']) : null,
            ebaySupportedFulfillment: isset($data['ebaySupportedFulfillment']) ? (bool) $data['ebaySupportedFulfillment'] : null,
            finalDestinationAddress: isset($data['finalDestinationAddress']) && is_array($data['finalDestinationAddress']) ? Address::fromArray($data['finalDestinationAddress']) : null,
            fulfillmentInstructionsType: isset($data['fulfillmentInstructionsType']) ? (string) $data['fulfillmentInstructionsType'] : null,
            maxEstimatedDeliveryDate: isset($data['maxEstimatedDeliveryDate']) ? (string) $data['maxEstimatedDeliveryDate'] : null,
            minEstimatedDeliveryDate: isset($data['minEstimatedDeliveryDate']) ? (string) $data['minEstimatedDeliveryDate'] : null,
            pickupStep: isset($data['pickupStep']) && is_array($data['pickupStep']) ? PickupStep::fromArray($data['pickupStep']) : null,
            shippingStep: isset($data['shippingStep']) && is_array($data['shippingStep']) ? ShippingStep::fromArray($data['shippingStep']) : null,
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
        if ($this->appointment !== null) {
            $data['appointment'] = $this->appointment->toArray();
        }
        if ($this->ebaySupportedFulfillment !== null) {
            $data['ebaySupportedFulfillment'] = $this->ebaySupportedFulfillment;
        }
        if ($this->finalDestinationAddress !== null) {
            $data['finalDestinationAddress'] = $this->finalDestinationAddress->toArray();
        }
        if ($this->fulfillmentInstructionsType !== null) {
            $data['fulfillmentInstructionsType'] = $this->fulfillmentInstructionsType;
        }
        if ($this->maxEstimatedDeliveryDate !== null) {
            $data['maxEstimatedDeliveryDate'] = $this->maxEstimatedDeliveryDate;
        }
        if ($this->minEstimatedDeliveryDate !== null) {
            $data['minEstimatedDeliveryDate'] = $this->minEstimatedDeliveryDate;
        }
        if ($this->pickupStep !== null) {
            $data['pickupStep'] = $this->pickupStep->toArray();
        }
        if ($this->shippingStep !== null) {
            $data['shippingStep'] = $this->shippingStep->toArray();
        }

        return $data;
    }
}
