<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the supported product identifiers.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ProductIdentifier
{
    /**
     * @param string|null $ean The EAN of the item, if applicable. EAN is the European Article Number, a barcode standard for retail product labeling primarily used outside of North America.
     * @param string|null $epid The ePID (eBay Product Identifier) of the item, if applicable. ePID is a unique identifier used by eBay to track products in its catalog. Use the getProduct method of the Catalog API to retrieve the ePID of an item.
     * @param string|null $isbn The ISBN of the item, if applicable. ISBN is the International Standard Book Number, a unique identifier for books.
     * @param string|null $productId The product ID of the item, if applicable. The product ID is a general term for a unique identifier assigned to a product.
     * @param string|null $upc The UPC of the item, if applicable. UPC stands for Universal Product Code, a unique identifier for products, primarily in North America.
     */
    public function __construct(
        public ?string $ean = null,
        public ?string $epid = null,
        public ?string $isbn = null,
        public ?string $productId = null,
        public ?string $upc = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            ean: isset($data['ean']) ? (string) $data['ean'] : null,
            epid: isset($data['epid']) ? (string) $data['epid'] : null,
            isbn: isset($data['isbn']) ? (string) $data['isbn'] : null,
            productId: isset($data['productId']) ? (string) $data['productId'] : null,
            upc: isset($data['upc']) ? (string) $data['upc'] : null,
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
        if ($this->ean !== null) {
            $data['ean'] = $this->ean;
        }
        if ($this->epid !== null) {
            $data['epid'] = $this->epid;
        }
        if ($this->isbn !== null) {
            $data['isbn'] = $this->isbn;
        }
        if ($this->productId !== null) {
            $data['productId'] = $this->productId;
        }
        if ($this->upc !== null) {
            $data['upc'] = $this->upc;
        }

        return $data;
    }
}
