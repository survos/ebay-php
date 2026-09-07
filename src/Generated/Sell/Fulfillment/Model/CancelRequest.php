<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about a buyer request to cancel an order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CancelRequest
{
    /**
     * @param string|null $cancelCompletedDate The date and time that the order cancellation was completed, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the cancel...
     * @param string|null $cancelInitiator This string value indicates the party who made the initial cancellation request. Typically, either the 'Buyer' or 'Seller'. If a cancellation request has been made, this field should be returned.
     * @param string|null $cancelReason The reason why the cancelInitiator initiated the cancellation request. Cancellation reasons for a buyer might include 'order placed by mistake' or 'order won't arrive in time'. For a seller, a typical cancellation reason...
     * @param string|null $cancelRequestedDate The date and time that the order cancellation was requested. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is returned for each cancellation request. Form...
     * @param string|null $cancelRequestId The unique identifier of the order cancellation request. This field is returned for each cancellation request.
     * @param string|null $cancelRequestState The current stage or condition of the cancellation request. This field is returned for each cancellation request. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?string $cancelCompletedDate = null,
        public ?string $cancelInitiator = null,
        public ?string $cancelReason = null,
        public ?string $cancelRequestedDate = null,
        public ?string $cancelRequestId = null,
        public ?string $cancelRequestState = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            cancelCompletedDate: isset($data['cancelCompletedDate']) ? (string) $data['cancelCompletedDate'] : null,
            cancelInitiator: isset($data['cancelInitiator']) ? (string) $data['cancelInitiator'] : null,
            cancelReason: isset($data['cancelReason']) ? (string) $data['cancelReason'] : null,
            cancelRequestedDate: isset($data['cancelRequestedDate']) ? (string) $data['cancelRequestedDate'] : null,
            cancelRequestId: isset($data['cancelRequestId']) ? (string) $data['cancelRequestId'] : null,
            cancelRequestState: isset($data['cancelRequestState']) ? (string) $data['cancelRequestState'] : null,
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
        if ($this->cancelCompletedDate !== null) {
            $data['cancelCompletedDate'] = $this->cancelCompletedDate;
        }
        if ($this->cancelInitiator !== null) {
            $data['cancelInitiator'] = $this->cancelInitiator;
        }
        if ($this->cancelReason !== null) {
            $data['cancelReason'] = $this->cancelReason;
        }
        if ($this->cancelRequestedDate !== null) {
            $data['cancelRequestedDate'] = $this->cancelRequestedDate;
        }
        if ($this->cancelRequestId !== null) {
            $data['cancelRequestId'] = $this->cancelRequestId;
        }
        if ($this->cancelRequestState !== null) {
            $data['cancelRequestState'] = $this->cancelRequestState;
        }

        return $data;
    }
}
