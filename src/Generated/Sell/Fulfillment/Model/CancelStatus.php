<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about any requests that have been made to cancel an order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CancelStatus
{
    /**
     * @param string|null $cancelledDate The date and time the order was cancelled, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-...
     * @param list<CancelRequest>|null $cancelRequests This array contains details of one or more buyer requests to cancel the order. For the getOrders call: This array is returned but is always empty. For the getOrder call: This array is returned fully populated with inform...
     * @param string|null $cancelState The state of the order with regard to cancellation. This field is always returned, and if there are no cancellation requests, a value of NONE_REQUESTED is returned. For implementation help, refer to eBay API documentatio...
     */
    public function __construct(
        public ?string $cancelledDate = null,
        public ?array $cancelRequests = null,
        public ?string $cancelState = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            cancelledDate: isset($data['cancelledDate']) ? (string) $data['cancelledDate'] : null,
            cancelRequests: isset($data['cancelRequests']) && is_array($data['cancelRequests'])
                ? array_values(array_map(static fn (array $i): CancelRequest => CancelRequest::fromArray($i), $data['cancelRequests']))
                : null,
            cancelState: isset($data['cancelState']) ? (string) $data['cancelState'] : null,
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
        if ($this->cancelledDate !== null) {
            $data['cancelledDate'] = $this->cancelledDate;
        }
        if ($this->cancelRequests !== null) {
            $data['cancelRequests'] = array_map(static fn (CancelRequest $i): array => $i->toArray(), $this->cancelRequests);
        }
        if ($this->cancelState !== null) {
            $data['cancelState'] = $this->cancelState;
        }

        return $data;
    }
}
