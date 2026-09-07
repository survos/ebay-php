<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the createOrReplaceProductCompatibility call to associate compatible vehicles to an inventory item. This type is also the base response of the getProductCompatibility call.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Compatibility
{
    /**
     * @param list<CompatibleProduct>|null $compatibleProducts This container consists of an array of motor vehicles (make, model, year, trim, engine) that are compatible with the motor vehicle part or accessory specified by the sku value.
     * @param string|null $sku The seller-defined SKU value of the inventory item that will be associated with the compatible vehicles. Note: This field is not applicable to the createOrReplaceProductCompatibility method, as the SKU value for the inve...
     */
    public function __construct(
        public ?array $compatibleProducts = null,
        public ?string $sku = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            compatibleProducts: isset($data['compatibleProducts']) && is_array($data['compatibleProducts'])
                ? array_values(array_map(static fn (array $i): CompatibleProduct => CompatibleProduct::fromArray($i), $data['compatibleProducts']))
                : null,
            sku: isset($data['sku']) ? (string) $data['sku'] : null,
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
        if ($this->compatibleProducts !== null) {
            $data['compatibleProducts'] = array_map(static fn (CompatibleProduct $i): array => $i->toArray(), $this->compatibleProducts);
        }
        if ($this->sku !== null) {
            $data['sku'] = $this->sku;
        }

        return $data;
    }
}
