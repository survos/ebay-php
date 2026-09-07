<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about the management of the shipping for the order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class EbayShipping
{
    /**
     * @param string|null $shippingLabelProvidedBy This field contains the shipping label provider. If EBAY, this order is managed by eBay shipping and a free shipping label by eBay is downloadable by the seller via the eBay website.
     */
    public function __construct(
        public ?string $shippingLabelProvidedBy = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            shippingLabelProvidedBy: isset($data['shippingLabelProvidedBy']) ? (string) $data['shippingLabelProvidedBy'] : null,
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
        if ($this->shippingLabelProvidedBy !== null) {
            $data['shippingLabelProvidedBy'] = $this->shippingLabelProvidedBy;
        }

        return $data;
    }
}
