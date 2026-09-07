<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used to provide the status and outcome of an order line item going through the Authenticity Guarantee verification process.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PostSaleAuthenticationProgram
{
    /**
     * @param string|null $outcomeReason This field indicates the result of the authenticity verification inspection on an order line item. This field is not returned when the status value of the order line item is PENDING or PASSED. The possible values returne...
     * @param string|null $status The value in this field indicates whether the order line item has passed or failed the authenticity verification inspection, or if the inspection and/or results are still pending. The possible values returned here are PE...
     */
    public function __construct(
        public ?string $outcomeReason = null,
        public ?string $status = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            outcomeReason: isset($data['outcomeReason']) ? (string) $data['outcomeReason'] : null,
            status: isset($data['status']) ? (string) $data['status'] : null,
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
        if ($this->outcomeReason !== null) {
            $data['outcomeReason'] = $this->outcomeReason;
        }
        if ($this->status !== null) {
            $data['status'] = $this->status;
        }

        return $data;
    }
}
