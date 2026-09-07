<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the booleans used to determine if a product is excluded from eBay selling and/or review.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class DisabledProductFilter
{
    /**
     * @param bool|null $excludeForEbayReviews Specifies whether to filter out products excluded for eBay reviews. If set to true, items excluded from eBay reviews are not returned.
     * @param bool|null $excludeForEbaySelling Specifies whether to filter out products excluded for eBay selling. If set to true, items excluded from eBay selling are not returned.
     */
    public function __construct(
        public ?bool $excludeForEbayReviews = null,
        public ?bool $excludeForEbaySelling = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            excludeForEbayReviews: isset($data['excludeForEbayReviews']) ? (bool) $data['excludeForEbayReviews'] : null,
            excludeForEbaySelling: isset($data['excludeForEbaySelling']) ? (bool) $data['excludeForEbaySelling'] : null,
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
        if ($this->excludeForEbayReviews !== null) {
            $data['excludeForEbayReviews'] = $this->excludeForEbayReviews;
        }
        if ($this->excludeForEbaySelling !== null) {
            $data['excludeForEbaySelling'] = $this->excludeForEbaySelling;
        }

        return $data;
    }
}
