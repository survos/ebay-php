<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that defines the response fields for the getProductSafetyLabels method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ProductSafetyLabelsResponse
{
    /**
     * @param list<ProductSafetyLabelPictogram>|null $pictograms This array contains a list of pictograms of product safety labels for the specified marketplace.
     * @param list<ProductSafetyLabelStatement>|null $statements This array contains available product safety labels statements for the specified marketplace.
     */
    public function __construct(
        public ?array $pictograms = null,
        public ?array $statements = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            pictograms: isset($data['pictograms']) && is_array($data['pictograms'])
                ? array_values(array_map(static fn (array $i): ProductSafetyLabelPictogram => ProductSafetyLabelPictogram::fromArray($i), $data['pictograms']))
                : null,
            statements: isset($data['statements']) && is_array($data['statements'])
                ? array_values(array_map(static fn (array $i): ProductSafetyLabelStatement => ProductSafetyLabelStatement::fromArray($i), $data['statements']))
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
        if ($this->pictograms !== null) {
            $data['pictograms'] = array_map(static fn (ProductSafetyLabelPictogram $i): array => $i->toArray(), $this->pictograms);
        }
        if ($this->statements !== null) {
            $data['statements'] = array_map(static fn (ProductSafetyLabelStatement $i): array => $i->toArray(), $this->statements);
        }

        return $data;
    }
}
