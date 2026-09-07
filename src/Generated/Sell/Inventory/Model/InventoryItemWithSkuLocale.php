<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to define/modify each inventory item record that is being created and/or updated with the bulkCreateOrReplaceInventoryItem method. Up to 25 inventory item records can be created and/or updated with one call.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryItemWithSkuLocale
{
    /**
     * @param Availability|null $availability This container is used to specify the quantity of the inventory item that are available for purchase. Availability data must also be passed if an inventory item is being updated and availability data already exists for t...
     * @param string|null $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the getIte...
     * @param string|null $conditionDescription This string field is used by the seller to more clearly describe the condition of a used inventory item, or an inventory item whose condition value is not NEW, LIKE_NEW, NEW_OTHER, or NEW_WITH_DEFECTS. The conditionDescr...
     * @param list<ConditionDescriptor>|null $conditionDescriptors This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inp...
     * @param string|null $locale This request parameter sets the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to eBay API documentation
     * @param PackageWeightAndSize|null $packageWeightAndSize This container is used if the seller is offering one or more calculated shipping options for the inventory item, or if the seller is offering flat-rate shipping but is including a shipping surcharge based on the item's w...
     * @param Product|null $product This container is used to define the product details, such as product title, product description, product identifiers (eBay Product ID, GTIN, or Brand/MPN pair), product aspects/item specifics, and product images. Note t...
     * @param string|null $sku This is the seller-defined SKU value of the product that will be listed on the eBay site (specified in the marketplaceId field). Only one offer (in unpublished or published state) may exist for each sku/marketplaceId/for...
     */
    public function __construct(
        public ?Availability $availability = null,
        public ?string $condition = null,
        public ?string $conditionDescription = null,
        public ?array $conditionDescriptors = null,
        public ?string $locale = null,
        public ?PackageWeightAndSize $packageWeightAndSize = null,
        public ?Product $product = null,
        public ?string $sku = null,
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
            locale: isset($data['locale']) ? (string) $data['locale'] : null,
            packageWeightAndSize: isset($data['packageWeightAndSize']) && is_array($data['packageWeightAndSize']) ? PackageWeightAndSize::fromArray($data['packageWeightAndSize']) : null,
            product: isset($data['product']) && is_array($data['product']) ? Product::fromArray($data['product']) : null,
            sku: isset($data['sku']) ? (string) $data['sku'] : null,
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
        if ($this->locale !== null) {
            $data['locale'] = $this->locale;
        }
        if ($this->packageWeightAndSize !== null) {
            $data['packageWeightAndSize'] = $this->packageWeightAndSize->toArray();
        }
        if ($this->product !== null) {
            $data['product'] = $this->product->toArray();
        }
        if ($this->sku !== null) {
            $data['sku'] = $this->sku;
        }

        return $data;
    }
}
