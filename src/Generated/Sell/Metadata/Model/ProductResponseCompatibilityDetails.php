<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the compatibility details for a product.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ProductResponseCompatibilityDetails
{
    /**
     * @param list<PropertyFilterInner>|null $noteDetails This array returns additional comments about the corresponding product in the form of name-value pairs.
     * @param list<PropertyValues>|null $productDetails This array returns details about the product in the form of name-value pairs.
     */
    public function __construct(
        public ?array $noteDetails = null,
        public ?array $productDetails = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            noteDetails: isset($data['noteDetails']) && is_array($data['noteDetails'])
                ? array_values(array_map(static fn (array $i): PropertyFilterInner => PropertyFilterInner::fromArray($i), $data['noteDetails']))
                : null,
            productDetails: isset($data['productDetails']) && is_array($data['productDetails'])
                ? array_values(array_map(static fn (array $i): PropertyValues => PropertyValues::fromArray($i), $data['productDetails']))
                : null,
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
        if ($this->noteDetails !== null) {
            $data['noteDetails'] = array_map(static fn (PropertyFilterInner $i): array => $i->toArray(), $this->noteDetails);
        }
        if ($this->productDetails !== null) {
            $data['productDetails'] = array_map(static fn (PropertyValues $i): array => $i->toArray(), $this->productDetails);
        }

        return $data;
    }
}
