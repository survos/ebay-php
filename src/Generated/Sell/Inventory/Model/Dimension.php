<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify the dimensions (and the unit used to measure those dimensions) of a shipping package. The dimensions container is conditionally required if the seller will be offering calculated shipping rates to determine shipping cost. See the Calculated shipping help page for more information on calculated shipping.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Dimension
{
    /**
     * @param float|null $height The actual height (in the measurement unit specified in the unit field) of the shipping package. All fields of the dimensions container are required if package dimensions are specified. If a shipping package measured 21....
     * @param float|null $length The actual length (in the measurement unit specified in the unit field) of the shipping package. All fields of the dimensions container are required if package dimensions are specified. If a shipping package measured 21....
     * @param string|null $unit The unit of measurement used to specify the dimensions of a shipping package. All fields of the dimensions container are required if package dimensions are specified. If the English system of measurement is being used, t...
     * @param float|null $width The actual width (in the measurement unit specified in the unit field) of the shipping package. All fields of the dimensions container are required if package dimensions are specified. If a shipping package measured 21.5...
     */
    public function __construct(
        public ?float $height = null,
        public ?float $length = null,
        public ?string $unit = null,
        public ?float $width = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            height: isset($data['height']) ? (float) $data['height'] : null,
            length: isset($data['length']) ? (float) $data['length'] : null,
            unit: isset($data['unit']) ? (string) $data['unit'] : null,
            width: isset($data['width']) ? (float) $data['width'] : null,
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
        if ($this->height !== null) {
            $data['height'] = $this->height;
        }
        if ($this->length !== null) {
            $data['length'] = $this->length;
        }
        if ($this->unit !== null) {
            $data['unit'] = $this->unit;
        }
        if ($this->width !== null) {
            $data['width'] = $this->width;
        }

        return $data;
    }
}
