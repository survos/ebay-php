<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This container is returned if the buyer is returning one or more line items in an order that is associated with the payment dispute, and that buyer has provided return shipping tracking information and/or a note about the return.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InfoFromBuyer
{
    /**
     * @param bool|null $contentOnHold When the value of this field is true it indicates that the buyer's note regarding the payment dispute (i.e., the buyerProvided.note field,) is on hold. When this is the case, the buyerProvided.note field will not be retu...
     * @param string|null $note This field shows any note that was left by the buyer in regard to the dispute.
     * @param list<TrackingInfo>|null $returnShipmentTracking This array shows shipment tracking information for one or more shipping packages being returned to the buyer after a payment dispute.
     */
    public function __construct(
        public ?bool $contentOnHold = null,
        public ?string $note = null,
        public ?array $returnShipmentTracking = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            contentOnHold: isset($data['contentOnHold']) ? (bool) $data['contentOnHold'] : null,
            note: isset($data['note']) ? (string) $data['note'] : null,
            returnShipmentTracking: isset($data['returnShipmentTracking']) && is_array($data['returnShipmentTracking'])
                ? array_values(array_map(static fn (array $i): TrackingInfo => TrackingInfo::fromArray($i), $data['returnShipmentTracking']))
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
        if ($this->contentOnHold !== null) {
            $data['contentOnHold'] = $this->contentOnHold;
        }
        if ($this->note !== null) {
            $data['note'] = $this->note;
        }
        if ($this->returnShipmentTracking !== null) {
            $data['returnShipmentTracking'] = array_map(static fn (TrackingInfo $i): array => $i->toArray(), $this->returnShipmentTracking);
        }

        return $data;
    }
}
