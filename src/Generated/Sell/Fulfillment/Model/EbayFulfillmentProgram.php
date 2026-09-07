<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used to provide details about an order line item being fulfilled by eBay or an eBay fulfillment partner.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class EbayFulfillmentProgram
{
    /**
     * @param string|null $fulfilledBy The value returned in this field indicates the party that is handling fulfillment of the order line item. Valid value: EBAY
     */
    public function __construct(
        public ?string $fulfilledBy = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fulfilledBy: isset($data['fulfilledBy']) ? (string) $data['fulfilledBy'] : null,
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
        if ($this->fulfilledBy !== null) {
            $data['fulfilledBy'] = $this->fulfilledBy;
        }

        return $data;
    }
}
