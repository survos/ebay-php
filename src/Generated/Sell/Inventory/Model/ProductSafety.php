<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to define the pictograms and statement containers, and the optional component field, that provide product safety and compliance related information.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ProductSafety
{
    /**
     * @param string|null $component This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. Note...
     * @param list<string>|null $pictograms An array of comma-separated string values used to provide product safety pictogram(s) for the listing. If your product shows universal product safety or compliance symbols, please select the values corresponding to the p...
     * @param list<string>|null $statements An array of comma-separated string values used to provide product safety statement(s) for the listing. If your product shows universal product safety or compliance warnings, please select the values corresponding to the...
     */
    public function __construct(
        public ?string $component = null,
        public ?array $pictograms = null,
        public ?array $statements = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            component: isset($data['component']) ? (string) $data['component'] : null,
            pictograms: isset($data['pictograms']) ? (array) $data['pictograms'] : null,
            statements: isset($data['statements']) ? (array) $data['statements'] : null,
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
        if ($this->component !== null) {
            $data['component'] = $this->component;
        }
        if ($this->pictograms !== null) {
            $data['pictograms'] = $this->pictograms;
        }
        if ($this->statements !== null) {
            $data['statements'] = $this->statements;
        }

        return $data;
    }
}
