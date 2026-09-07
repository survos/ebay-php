<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the response fields for the getProductCompatibilities method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ProductResponse
{
    /**
     * @param list<ProductResponseCompatibilityDetails>|null $compatibilityDetails This container provides compatibility details for the specified product.
     * @param Pagination|null $pagination This container returns the pagination settings for the result set.
     */
    public function __construct(
        public ?array $compatibilityDetails = null,
        public ?Pagination $pagination = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            compatibilityDetails: isset($data['compatibilityDetails']) && is_array($data['compatibilityDetails'])
                ? array_values(array_map(static fn (array $i): ProductResponseCompatibilityDetails => ProductResponseCompatibilityDetails::fromArray($i), $data['compatibilityDetails']))
                : null,
            pagination: isset($data['pagination']) && is_array($data['pagination']) ? Pagination::fromArray($data['pagination']) : null,
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
        if ($this->compatibilityDetails !== null) {
            $data['compatibilityDetails'] = array_map(static fn (ProductResponseCompatibilityDetails $i): array => $i->toArray(), $this->compatibilityDetails);
        }
        if ($this->pagination !== null) {
            $data['pagination'] = $this->pagination->toArray();
        }

        return $data;
    }
}
