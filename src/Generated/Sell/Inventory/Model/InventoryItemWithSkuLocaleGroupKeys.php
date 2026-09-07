<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to provide details about each retrieved inventory item record.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryItemWithSkuLocaleGroupKeys
{
    /**
     * @param AvailabilityWithAll|null $availability This container shows the quantity of the inventory item that is available for purchase if the item will be shipped to the buyer, and/or the quantity of the inventory item that is available for In-Store Pickup at one or m...
     * @param string|null $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. Since the condition of an inventory item must be specified before being published in an off...
     * @param string|null $conditionDescription This string field is used by the seller to more clearly describe the condition of used items, or items that are not 'Brand New', 'New with tags', or 'New in box'. The ConditionDescription field is available for all categ...
     * @param list<ConditionDescriptor>|null $conditionDescriptors This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inp...
     * @param list<string>|null $inventoryItemGroupKeys This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item's variation in a multiple-variation list...
     * @param string|null $locale This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to eBay API documentation
     * @param PackageWeightAndSize|null $packageWeightAndSize This container is used to specify the dimensions and weight of a shipping package.
     * @param Product|null $product This container is used in a createOrReplaceInventoryItem call to pass in a Global Trade Item Number (GTIN) or a Brand and Manufacturer Part Number (MPN) pair to identify a product to be matched with a product in the eBay...
     * @param string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     */
    public function __construct(
        public ?AvailabilityWithAll $availability = null,
        public ?string $condition = null,
        public ?string $conditionDescription = null,
        public ?array $conditionDescriptors = null,
        public ?array $inventoryItemGroupKeys = null,
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
            availability: isset($data['availability']) && is_array($data['availability']) ? AvailabilityWithAll::fromArray($data['availability']) : null,
            condition: isset($data['condition']) ? (string) $data['condition'] : null,
            conditionDescription: isset($data['conditionDescription']) ? (string) $data['conditionDescription'] : null,
            conditionDescriptors: isset($data['conditionDescriptors']) && is_array($data['conditionDescriptors'])
                ? array_values(array_map(static fn (array $i): ConditionDescriptor => ConditionDescriptor::fromArray($i), $data['conditionDescriptors']))
                : null,
            inventoryItemGroupKeys: isset($data['inventoryItemGroupKeys']) ? (array) $data['inventoryItemGroupKeys'] : null,
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
        if ($this->inventoryItemGroupKeys !== null) {
            $data['inventoryItemGroupKeys'] = $this->inventoryItemGroupKeys;
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
