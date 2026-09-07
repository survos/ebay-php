<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify the weight (and the unit used to measure that weight) of a shipping package. The weight container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost, or is using flat-rate costs, but charging a weight surcharge. See the Calculated shipping help page for more information on calculated shipping.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Weight
{
    /**
     * @param string|null $unit The unit of measurement used to specify the weight of a shipping package. Both the unit and value fields are required if the weight container is used. If the English system of measurement is being used, the applicable va...
     * @param float|null $value The actual weight (in the measurement unit specified in the unit field) of the shipping package. Both the unit and value fields are required if the weight container is used. If a shipping package weighed 20.5 ounces, the...
     */
    public function __construct(
        public ?string $unit = null,
        public ?float $value = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            unit: isset($data['unit']) ? (string) $data['unit'] : null,
            value: isset($data['value']) ? (float) $data['value'] : null,
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
        if ($this->unit !== null) {
            $data['unit'] = $this->unit;
        }
        if ($this->value !== null) {
            $data['value'] = $this->value;
        }

        return $data;
    }
}
