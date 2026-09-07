<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used to provide details about an order line item being managed through eBay International Shipping.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class EbayInternationalShipping
{
    /**
     * @param string|null $returnsManagedBy The value returned in this field indicates the party that is responsible for managing returns of the order line item. Valid value: EBAY
     */
    public function __construct(
        public ?string $returnsManagedBy = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            returnsManagedBy: isset($data['returnsManagedBy']) ? (string) $data['returnsManagedBy'] : null,
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
        if ($this->returnsManagedBy !== null) {
            $data['returnsManagedBy'] = $this->returnsManagedBy;
        }

        return $data;
    }
}
