<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This container is used by the seller to provide hazardous material information for the listing. The statements element is required to complete the hazmat section of a listing. The following elements are optional:pictogramssignalWordcomponent
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Hazmat
{
    /**
     * @param string|null $component This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern. Max length: 120
     * @param list<string>|null $pictograms An array of comma-separated string values listing applicable pictogram code(s) for Hazard Pictogram(s). If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pict...
     * @param string|null $signalWord This field sets the signal word for hazardous materials in the listing. If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's S...
     * @param list<string>|null $statements An array of comma-separated string values specifying applicable statement code(s) for hazard statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding...
     */
    public function __construct(
        public ?string $component = null,
        public ?array $pictograms = null,
        public ?string $signalWord = null,
        public ?array $statements = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            component: isset($data['component']) ? (string) $data['component'] : null,
            pictograms: isset($data['pictograms']) ? (array) $data['pictograms'] : null,
            signalWord: isset($data['signalWord']) ? (string) $data['signalWord'] : null,
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
        if ($this->signalWord !== null) {
            $data['signalWord'] = $this->signalWord;
        }
        if ($this->statements !== null) {
            $data['statements'] = $this->statements;
        }

        return $data;
    }
}
