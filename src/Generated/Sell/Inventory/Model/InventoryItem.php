<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to provide detailed information about an inventory item.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryItem
{
    /**
     * @param Availability|null $availability This container is used to specify the quantity of the inventory item that are available for purchase. This container is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes req...
     * @param string|null $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the getIte...
     * @param string|null $conditionDescription This string field is used by the seller to more clearly describe the condition of a used inventory item, or an inventory item whose condition value is not NEW, LIKE_NEW, NEW_OTHER, or NEW_WITH_DEFECTS. The conditionDescr...
     * @param list<ConditionDescriptor>|null $conditionDescriptors This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inp...
     * @param PackageWeightAndSize|null $packageWeightAndSize This container is used if the seller is offering one or more calculated shipping options for the inventory item, or if the seller is offering flat-rate shipping but is including a shipping surcharge based on the item's w...
     * @param Product|null $product This container is used to define the product details, such as product title, product description, product identifiers (eBay Product ID, GTIN, or Brand/MPN pair), product aspects/item specifics, and product images. Note t...
     */
    public function __construct(
        public ?Availability $availability = null,
        public ?string $condition = null,
        public ?string $conditionDescription = null,
        public ?array $conditionDescriptors = null,
        public ?PackageWeightAndSize $packageWeightAndSize = null,
        public ?Product $product = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            availability: isset($data['availability']) && is_array($data['availability']) ? Availability::fromArray($data['availability']) : null,
            condition: isset($data['condition']) ? (string) $data['condition'] : null,
            conditionDescription: isset($data['conditionDescription']) ? (string) $data['conditionDescription'] : null,
            conditionDescriptors: isset($data['conditionDescriptors']) && is_array($data['conditionDescriptors'])
                ? array_values(array_map(static fn (array $i): ConditionDescriptor => ConditionDescriptor::fromArray($i), $data['conditionDescriptors']))
                : null,
            packageWeightAndSize: isset($data['packageWeightAndSize']) && is_array($data['packageWeightAndSize']) ? PackageWeightAndSize::fromArray($data['packageWeightAndSize']) : null,
            product: isset($data['product']) && is_array($data['product']) ? Product::fromArray($data['product']) : null,
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
        if ($this->availability !== null) {
            $data['availability'] = $this->availability->toArray();
        }
        if ($this->condition !== null) {
            $data['condition'] = $this->condition;
        }
        if ($this->conditionDescription !== null) {
            $data['conditionDescription'] = $this->conditionDescription;
        }
        if ($this->conditionDescriptors !== null) {
            $data['conditionDescriptors'] = array_map(static fn (ConditionDescriptor $i): array => $i->toArray(), $this->conditionDescriptors);
        }
        if ($this->packageWeightAndSize !== null) {
            $data['packageWeightAndSize'] = $this->packageWeightAndSize->toArray();
        }
        if ($this->product !== null) {
            $data['product'] = $this->product->toArray();
        }

        return $data;
    }
}
