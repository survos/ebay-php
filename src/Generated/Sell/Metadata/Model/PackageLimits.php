<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * The packageLimits field is used to specify the physical constraints and measurement units of packages, ensuring compliance with various shipping requirements.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PackageLimits
{
    /**
     * @param string|null $dimensionUnit Unit of dimensional measurement, for example INCH or CENTIMETER.
     * @param float|null $maxGirth The maximum girth allowed for a package shipped through the corresponding shipping service, as measured in units of dimensionUnit.
     * @param float|null $maxHeight The maximum height allowed for a package shipped through the corresponding shipping service, as measured in units of dimensionUnit.
     * @param float|null $maxLength The maximum length allowed for a package shipped through the corresponding shipping service, as measured in units of dimensionUnit.
     * @param float|null $maxWeight The maximum weight allowed for a package shipped through the corresponding shipping service, as measured in units of weightUnit.
     * @param float|null $maxWidth The maximum width allowed for a package shipped through the corresponding shipping service, as measured in units of dimensionUnit.
     * @param float|null $minGirth The minimum girth allowed for a package shipped through the corresponding shipping service, as measured in units of dimensionUnit.
     * @param float|null $minHeight The minimum height allowed for a package shipped through the corresponding shipping service, as measured in units of dimensionUnit.
     * @param float|null $minLength The minimum length allowed for a package shipped through the corresponding shipping service, as measured in units of dimensionUnit.
     * @param float|null $minWeight The minimum weight allowed for a package shipped through the corresponding shipping service, as measured in units of weightUnit.
     * @param float|null $minWidth The minimum width allowed for a package shipped through the corresponding shipping service, as measured in units of dimensionUnit.
     * @param string|null $weightUnit Unit of weight measurement, for example KILOGRAM or OUNCE.
     */
    public function __construct(
        public ?string $dimensionUnit = null,
        public ?float $maxGirth = null,
        public ?float $maxHeight = null,
        public ?float $maxLength = null,
        public ?float $maxWeight = null,
        public ?float $maxWidth = null,
        public ?float $minGirth = null,
        public ?float $minHeight = null,
        public ?float $minLength = null,
        public ?float $minWeight = null,
        public ?float $minWidth = null,
        public ?string $weightUnit = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            dimensionUnit: isset($data['dimensionUnit']) ? (string) $data['dimensionUnit'] : null,
            maxGirth: isset($data['maxGirth']) ? (float) $data['maxGirth'] : null,
            maxHeight: isset($data['maxHeight']) ? (float) $data['maxHeight'] : null,
            maxLength: isset($data['maxLength']) ? (float) $data['maxLength'] : null,
            maxWeight: isset($data['maxWeight']) ? (float) $data['maxWeight'] : null,
            maxWidth: isset($data['maxWidth']) ? (float) $data['maxWidth'] : null,
            minGirth: isset($data['minGirth']) ? (float) $data['minGirth'] : null,
            minHeight: isset($data['minHeight']) ? (float) $data['minHeight'] : null,
            minLength: isset($data['minLength']) ? (float) $data['minLength'] : null,
            minWeight: isset($data['minWeight']) ? (float) $data['minWeight'] : null,
            minWidth: isset($data['minWidth']) ? (float) $data['minWidth'] : null,
            weightUnit: isset($data['weightUnit']) ? (string) $data['weightUnit'] : null,
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
        if ($this->dimensionUnit !== null) {
            $data['dimensionUnit'] = $this->dimensionUnit;
        }
        if ($this->maxGirth !== null) {
            $data['maxGirth'] = $this->maxGirth;
        }
        if ($this->maxHeight !== null) {
            $data['maxHeight'] = $this->maxHeight;
        }
        if ($this->maxLength !== null) {
            $data['maxLength'] = $this->maxLength;
        }
        if ($this->maxWeight !== null) {
            $data['maxWeight'] = $this->maxWeight;
        }
        if ($this->maxWidth !== null) {
            $data['maxWidth'] = $this->maxWidth;
        }
        if ($this->minGirth !== null) {
            $data['minGirth'] = $this->minGirth;
        }
        if ($this->minHeight !== null) {
            $data['minHeight'] = $this->minHeight;
        }
        if ($this->minLength !== null) {
            $data['minLength'] = $this->minLength;
        }
        if ($this->minWeight !== null) {
            $data['minWeight'] = $this->minWeight;
        }
        if ($this->minWidth !== null) {
            $data['minWidth'] = $this->minWidth;
        }
        if ($this->weightUnit !== null) {
            $data['weightUnit'] = $this->weightUnit;
        }

        return $data;
    }
}
