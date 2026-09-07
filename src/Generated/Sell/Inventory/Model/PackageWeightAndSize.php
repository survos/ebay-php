<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to indicate the package type, weight, and dimensions of the shipping package. Package weight and dimensions are required when calculated shipping rates are used, and weight alone is required when flat-rate shipping is used, but with a weight surcharge. See the Calculated shipping help page for more information on calculated shipping.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PackageWeightAndSize
{
    /**
     * @param Dimension|null $dimensions This container is used to indicate the length, width, and height of the shipping package that will be used to ship the inventory item. The dimensions of a shipping package are needed when calculated shipping is used. Thi...
     * @param string|null $packageType This enumeration value indicates the type of shipping package used to ship the inventory item. The supported values for this field can be found in the PackageTypeEnum type. This field will be returned if the package type...
     * @param bool|null $shippingIrregular A value of true indicates that the package is irregular and cannot go through the stamping machine at the shipping service office. This field applies to calculated shipping only. Irregular packages require special or fra...
     * @param Weight|null $weight This container is used to specify the weight of the shipping package that will be used to ship the inventory item. The weight of a shipping package are needed when calculated shipping is used, or if flat-rate shipping ra...
     */
    public function __construct(
        public ?Dimension $dimensions = null,
        public ?string $packageType = null,
        public ?bool $shippingIrregular = null,
        public ?Weight $weight = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            dimensions: isset($data['dimensions']) && is_array($data['dimensions']) ? Dimension::fromArray($data['dimensions']) : null,
            packageType: isset($data['packageType']) ? (string) $data['packageType'] : null,
            shippingIrregular: isset($data['shippingIrregular']) ? (bool) $data['shippingIrregular'] : null,
            weight: isset($data['weight']) && is_array($data['weight']) ? Weight::fromArray($data['weight']) : null,
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
        if ($this->dimensions !== null) {
            $data['dimensions'] = $this->dimensions->toArray();
        }
        if ($this->packageType !== null) {
            $data['packageType'] = $this->packageType;
        }
        if ($this->shippingIrregular !== null) {
            $data['shippingIrregular'] = $this->shippingIrregular;
        }
        if ($this->weight !== null) {
            $data['weight'] = $this->weight->toArray();
        }

        return $data;
    }
}
