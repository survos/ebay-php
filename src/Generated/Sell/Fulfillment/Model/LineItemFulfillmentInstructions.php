<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the specifications for processing the fulfillment of a line item, including the handling window and the delivery window. These fields provide guidance for eBay Guaranteed Delivery as well as for non-guaranteed delivery.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LineItemFulfillmentInstructions
{
    /**
     * @param bool|null $guaranteedDelivery Although this field is still returned, it can be ignored since eBay Guaranteed Delivery is no longer a supported feature on any marketplace. This field may get removed from the schema in the future.
     * @param string|null $maxEstimatedDeliveryDate The estimated latest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options. The seller must pay extra...
     * @param string|null $minEstimatedDeliveryDate The estimated earliest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options. Note: This timestamp is...
     * @param string|null $shipByDate The latest date and time by which the seller should ship line item in order to meet the expected delivery window. This timestamp will be set by eBay based on time of purchase and the seller's stated handling time. The se...
     */
    public function __construct(
        public ?bool $guaranteedDelivery = null,
        public ?string $maxEstimatedDeliveryDate = null,
        public ?string $minEstimatedDeliveryDate = null,
        public ?string $shipByDate = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            guaranteedDelivery: isset($data['guaranteedDelivery']) ? (bool) $data['guaranteedDelivery'] : null,
            maxEstimatedDeliveryDate: isset($data['maxEstimatedDeliveryDate']) ? (string) $data['maxEstimatedDeliveryDate'] : null,
            minEstimatedDeliveryDate: isset($data['minEstimatedDeliveryDate']) ? (string) $data['minEstimatedDeliveryDate'] : null,
            shipByDate: isset($data['shipByDate']) ? (string) $data['shipByDate'] : null,
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
        if ($this->guaranteedDelivery !== null) {
            $data['guaranteedDelivery'] = $this->guaranteedDelivery;
        }
        if ($this->maxEstimatedDeliveryDate !== null) {
            $data['maxEstimatedDeliveryDate'] = $this->maxEstimatedDeliveryDate;
        }
        if ($this->minEstimatedDeliveryDate !== null) {
            $data['minEstimatedDeliveryDate'] = $this->minEstimatedDeliveryDate;
        }
        if ($this->shipByDate !== null) {
            $data['shipByDate'] = $this->shipByDate;
        }

        return $data;
    }
}
