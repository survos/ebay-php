<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base request payload of the createOrReplaceInventoryItemGroup call and the base response payload of the getInventoryItemGroup call.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class InventoryItemGroup
{
    /**
     * @param string|null $aspects This is a collection of item specifics (aka product aspects) name-value pairs that are shared by all product variations within the inventory item group. Common aspects for the inventory item group are not immediately req...
     * @param string|null $description The description of the inventory item group. This description should fully describe the product and the variations of the product that are available in the inventory item group, since this description will ultimately bec...
     * @param list<string>|null $imageUrls An array of one or more links to images for the inventory item group. URLs must use the "HTTPS" protocol. Images can be self-hosted by the seller, or sellers can use the UploadSiteHostedPictures call of the Trading API t...
     * @param string|null $inventoryItemGroupKey This is the unique identifier of the inventory item group. This identifier is created by the seller when an inventory item group is created. Note: This field is only applicable to the getInventoryItemGroup call and not t...
     * @param string|null $subtitle A subtitle is an optional listing feature that allows the seller to provide more information about the product, possibly including keywords that may assist with search results. An additional listing fee will be charged t...
     * @param string|null $title The title of the inventory item group. This title will ultimately become the listing title once the first offer of the group is published. This field is not initially required when first creating an inventory item group,...
     * @param list<string>|null $variantSKUs This required container is used to assign individual inventory items to the inventory item group. Multiple SKU values are passed in to this container. If updating an existing inventory item group, the seller should make...
     * @param VariesBy|null $variesBy This container is used to specify product aspects for which variations within an inventory item group vary, and a complete list of all those variances. For example, t-shirts in an inventory item group may be available in...
     * @param list<string>|null $videoIds An array of one or more videoId values for the inventory item group. A video ID is a unique identifier that is automatically created by eBay when a seller successfully uploads a video to eBay using the uploadVideo method...
     */
    public function __construct(
        public ?string $aspects = null,
        public ?string $description = null,
        public ?array $imageUrls = null,
        public ?string $inventoryItemGroupKey = null,
        public ?string $subtitle = null,
        public ?string $title = null,
        public ?array $variantSKUs = null,
        public ?VariesBy $variesBy = null,
        public ?array $videoIds = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            aspects: isset($data['aspects']) ? (string) $data['aspects'] : null,
            description: isset($data['description']) ? (string) $data['description'] : null,
            imageUrls: isset($data['imageUrls']) ? (array) $data['imageUrls'] : null,
            inventoryItemGroupKey: isset($data['inventoryItemGroupKey']) ? (string) $data['inventoryItemGroupKey'] : null,
            subtitle: isset($data['subtitle']) ? (string) $data['subtitle'] : null,
            title: isset($data['title']) ? (string) $data['title'] : null,
            variantSKUs: isset($data['variantSKUs']) ? (array) $data['variantSKUs'] : null,
            variesBy: isset($data['variesBy']) && is_array($data['variesBy']) ? VariesBy::fromArray($data['variesBy']) : null,
            videoIds: isset($data['videoIds']) ? (array) $data['videoIds'] : null,
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
        if ($this->aspects !== null) {
            $data['aspects'] = $this->aspects;
        }
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->imageUrls !== null) {
            $data['imageUrls'] = $this->imageUrls;
        }
        if ($this->inventoryItemGroupKey !== null) {
            $data['inventoryItemGroupKey'] = $this->inventoryItemGroupKey;
        }
        if ($this->subtitle !== null) {
            $data['subtitle'] = $this->subtitle;
        }
        if ($this->title !== null) {
            $data['title'] = $this->title;
        }
        if ($this->variantSKUs !== null) {
            $data['variantSKUs'] = $this->variantSKUs;
        }
        if ($this->variesBy !== null) {
            $data['variesBy'] = $this->variesBy->toArray();
        }
        if ($this->videoIds !== null) {
            $data['videoIds'] = $this->videoIds;
        }

        return $data;
    }
}
