<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify the details of a motor vehicle that is compatible with the inventory item specified through the SKU value in the call URI.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ProductFamilyProperties
{
    /**
     * @param string|null $engine Important! The productFamilyProperties container is no longer supported.
     * @param string|null $make Important! The productFamilyProperties container is no longer supported.
     * @param string|null $model Important! The productFamilyProperties container is no longer supported.
     * @param string|null $trim Important! The productFamilyProperties container is no longer supported.
     * @param string|null $year Important! The productFamilyProperties container is no longer supported.
     */
    public function __construct(
        public ?string $engine = null,
        public ?string $make = null,
        public ?string $model = null,
        public ?string $trim = null,
        public ?string $year = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            engine: isset($data['engine']) ? (string) $data['engine'] : null,
            make: isset($data['make']) ? (string) $data['make'] : null,
            model: isset($data['model']) ? (string) $data['model'] : null,
            trim: isset($data['trim']) ? (string) $data['trim'] : null,
            year: isset($data['year']) ? (string) $data['year'] : null,
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
        if ($this->engine !== null) {
            $data['engine'] = $this->engine;
        }
        if ($this->make !== null) {
            $data['make'] = $this->make;
        }
        if ($this->model !== null) {
            $data['model'] = $this->model;
        }
        if ($this->trim !== null) {
            $data['trim'] = $this->trim;
        }
        if ($this->year !== null) {
            $data['year'] = $this->year;
        }

        return $data;
    }
}
