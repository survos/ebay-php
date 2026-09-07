<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about a sales promotion that is applied to a line item.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AppliedPromotion
{
    /**
     * @param string|null $description A description of the applied sales promotion.
     * @param Amount|null $discountAmount The monetary amount of the sales promotion.
     * @param string|null $promotionId An eBay-generated unique identifier of the sales promotion. Multiple types of sales promotions are available to eBay Store owners, including order size/volume discounts, shipping discounts, special coupons, and price mar...
     */
    public function __construct(
        public ?string $description = null,
        public ?Amount $discountAmount = null,
        public ?string $promotionId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            description: isset($data['description']) ? (string) $data['description'] : null,
            discountAmount: isset($data['discountAmount']) && is_array($data['discountAmount']) ? Amount::fromArray($data['discountAmount']) : null,
            promotionId: isset($data['promotionId']) ? (string) $data['promotionId'] : null,
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
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->discountAmount !== null) {
            $data['discountAmount'] = $this->discountAmount->toArray();
        }
        if ($this->promotionId !== null) {
            $data['promotionId'] = $this->promotionId;
        }

        return $data;
    }
}
