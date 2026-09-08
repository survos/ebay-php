<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to define the product details, such as a title, a product description, product aspects/item specifics, and links to images for the product. Optionally, in a createOrReplaceInventoryItem call, a seller can pass in an eBay Product Identifier (ePID) or a Global Trade Item Number (GTIN) value, such as an EAN, an ISBN, a UPC, to identify a product to be matched with a product in the e...
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Product
{
    /**
     * @param array<string, list<string>>|null $aspects This is a collection of item specifics (aka product aspects) name-value pairs that provide more information about the product and might make it easier for buyers to find. To view required/recommended product aspects/item...
     * @param string|null $brand The brand of the product. This field is often paired with the mpn field to identify a specific product by Manufacturer Part Number. This field is conditionally required if the eBay category requires a Manufacturer Part N...
     * @param string|null $description The description of the product. The description of an existing inventory item can be added or modified with a createOrReplaceInventoryItem call. The description of an inventory item is automatically populated if the sell...
     * @param list<string>|null $ean The European Article Number/International Article Number (EAN) for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to fi...
     * @param string|null $epid The eBay Product Identifier (ePID) for the product. This field can be used to directly identify an eBay Catalog product. Based on its specified ePID value, eBay will search for the product in the eBay Catalog, and if a m...
     * @param list<string>|null $imageUrls An array of one or more links to images for the product. URLs must use the "HTTPS" protocol. Images can be self-hosted by the seller, or sellers can use the UploadSiteHostedPictures call of the Trading API to upload imag...
     * @param list<string>|null $isbn The International Standard Book Number (ISBN) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a produc...
     * @param string|null $mpn The Manufacturer Part Number (MPN) of a product. This field is paired with the brand field to identify a product. Some eBay categories require MPN values. The getItemAspectsForCategory method in the Taxonomy API can be u...
     * @param string|null $subtitle A subtitle is an optional listing feature that allows the seller to provide more information about the product, possibly including keywords that may assist with search results. An additional listing fee will be charged t...
     * @param string|null $title The title of an inventory item can be added or modified with a createOrReplaceInventoryItem call. Although not immediately required, a title will be needed before an offer with the inventory item is published. The title...
     * @param list<string>|null $upc The Universal Product Code (UPC) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in th...
     * @param list<string>|null $videoIds An array of one or more videoId values for the product. A video ID is a unique identifier that is automatically created by eBay when a seller successfully uploads a video to eBay using the uploadVideo method of the Media...
     */
    public function __construct(
        public ?array $aspects = null,
        public ?string $brand = null,
        public ?string $description = null,
        public ?array $ean = null,
        public ?string $epid = null,
        public ?array $imageUrls = null,
        public ?array $isbn = null,
        public ?string $mpn = null,
        public ?string $subtitle = null,
        public ?string $title = null,
        public ?array $upc = null,
        public ?array $videoIds = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            aspects: isset($data['aspects']) ? (array) $data['aspects'] : null,
            brand: isset($data['brand']) ? (string) $data['brand'] : null,
            description: isset($data['description']) ? (string) $data['description'] : null,
            ean: isset($data['ean']) ? (array) $data['ean'] : null,
            epid: isset($data['epid']) ? (string) $data['epid'] : null,
            imageUrls: isset($data['imageUrls']) ? (array) $data['imageUrls'] : null,
            isbn: isset($data['isbn']) ? (array) $data['isbn'] : null,
            mpn: isset($data['mpn']) ? (string) $data['mpn'] : null,
            subtitle: isset($data['subtitle']) ? (string) $data['subtitle'] : null,
            title: isset($data['title']) ? (string) $data['title'] : null,
            upc: isset($data['upc']) ? (array) $data['upc'] : null,
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
        if ($this->brand !== null) {
            $data['brand'] = $this->brand;
        }
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->ean !== null) {
            $data['ean'] = $this->ean;
        }
        if ($this->epid !== null) {
            $data['epid'] = $this->epid;
        }
        if ($this->imageUrls !== null) {
            $data['imageUrls'] = $this->imageUrls;
        }
        if ($this->isbn !== null) {
            $data['isbn'] = $this->isbn;
        }
        if ($this->mpn !== null) {
            $data['mpn'] = $this->mpn;
        }
        if ($this->subtitle !== null) {
            $data['subtitle'] = $this->subtitle;
        }
        if ($this->title !== null) {
            $data['title'] = $this->title;
        }
        if ($this->upc !== null) {
            $data['upc'] = $this->upc;
        }
        if ($this->videoIds !== null) {
            $data['videoIds'] = $this->videoIds;
        }

        return $data;
    }
}
