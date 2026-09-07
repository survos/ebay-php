<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This is the base type of the issueRefund response payload. As long as the issueRefund method does not trigger an error, a response payload will be returned.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Refund
{
    /**
     * @param string|null $refundId The unique identifier of the order refund. This value is returned unless the refund operation fails (refundStatus value shows FAILED). This identifier can be used to track the status of the refund through a getOrder or g...
     * @param string|null $refundStatus The value returned in this field indicates the success or failure of the refund operation. A successful issueRefund operation should result in a value of PENDING. A failed issueRefund operation should result in a value o...
     */
    public function __construct(
        public ?string $refundId = null,
        public ?string $refundStatus = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            refundId: isset($data['refundId']) ? (string) $data['refundId'] : null,
            refundStatus: isset($data['refundStatus']) ? (string) $data['refundStatus'] : null,
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
        if ($this->refundId !== null) {
            $data['refundId'] = $this->refundId;
        }
        if ($this->refundStatus !== null) {
            $data['refundStatus'] = $this->refundStatus;
        }

        return $data;
    }
}
