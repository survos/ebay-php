<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type contains the policies governing the listing type by category.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ListingTypePolicy
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which metadata is being returned.
     * @param string|null $categoryTreeId The unique identifier of the category tree.
     * @param bool|null $digitalGoodDeliveryEnabled A true value in this field indicates that the leaf category supports the listing of items (such as gift cards) that can be delivered electronically via a download link or sent to a buyer's email address.
     * @param list<ListingDuration>|null $listingDurations An array of eBay listing types and the supported durations for the corresponding leaf category. If a specific eBay listing type does not appear for a leaf category, it indicates that the category does not support that li...
     * @param bool|null $pickupDropOffEnabled A true value in this field indicates that items listed in the category (specified in the listingTypePolicies.categoryId field) may be enabled with the 'Click and Collect' feature. With the 'Click and Collect' feature, a...
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?bool $digitalGoodDeliveryEnabled = null,
        public ?array $listingDurations = null,
        public ?bool $pickupDropOffEnabled = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            digitalGoodDeliveryEnabled: isset($data['digitalGoodDeliveryEnabled']) ? (bool) $data['digitalGoodDeliveryEnabled'] : null,
            listingDurations: isset($data['listingDurations']) && is_array($data['listingDurations'])
                ? array_values(array_map(static fn (array $i): ListingDuration => ListingDuration::fromArray($i), $data['listingDurations']))
                : null,
            pickupDropOffEnabled: isset($data['pickupDropOffEnabled']) ? (bool) $data['pickupDropOffEnabled'] : null,
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
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->digitalGoodDeliveryEnabled !== null) {
            $data['digitalGoodDeliveryEnabled'] = $this->digitalGoodDeliveryEnabled;
        }
        if ($this->listingDurations !== null) {
            $data['listingDurations'] = array_map(static fn (ListingDuration $i): array => $i->toArray(), $this->listingDurations);
        }
        if ($this->pickupDropOffEnabled !== null) {
            $data['pickupDropOffEnabled'] = $this->pickupDropOffEnabled;
        }

        return $data;
    }
}
