<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify/indicate the motor vehicles that are compatible with the corresponding inventory item.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CompatibleProduct
{
    /**
     * @param list<NameValueList>|null $compatibilityProperties This container consists of an array of motor vehicles that are compatible with the motor vehicle part or accessory specified by the SKU value in the call URI. Each motor vehicle is defined through a separate set of name/...
     * @param string|null $notes This field is used by the seller to input any notes pertaining to the compatible vehicle list being defined. The seller might use this field to specify the placement of the part on a vehicle or other applicable informati...
     * @param ProductFamilyProperties|null $productFamilyProperties Important! The productFamilyProperties container is deprecated and should no longer be used. The compatibilityProperties container should be used instead.
     * @param ProductIdentifier|null $productIdentifier This container is used in a createOrReplaceProductCompatibility call to identify a motor vehicle that is compatible with the inventory item. The user specifies either an eBay Product ID (ePID) or K-Type value to identify...
     */
    public function __construct(
        public ?array $compatibilityProperties = null,
        public ?string $notes = null,
        public ?ProductFamilyProperties $productFamilyProperties = null,
        public ?ProductIdentifier $productIdentifier = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            compatibilityProperties: isset($data['compatibilityProperties']) && is_array($data['compatibilityProperties'])
                ? array_values(array_map(static fn (array $i): NameValueList => NameValueList::fromArray($i), $data['compatibilityProperties']))
                : null,
            notes: isset($data['notes']) ? (string) $data['notes'] : null,
            productFamilyProperties: isset($data['productFamilyProperties']) && is_array($data['productFamilyProperties']) ? ProductFamilyProperties::fromArray($data['productFamilyProperties']) : null,
            productIdentifier: isset($data['productIdentifier']) && is_array($data['productIdentifier']) ? ProductIdentifier::fromArray($data['productIdentifier']) : null,
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
        if ($this->compatibilityProperties !== null) {
            $data['compatibilityProperties'] = array_map(static fn (NameValueList $i): array => $i->toArray(), $this->compatibilityProperties);
        }
        if ($this->notes !== null) {
            $data['notes'] = $this->notes;
        }
        if ($this->productFamilyProperties !== null) {
            $data['productFamilyProperties'] = $this->productFamilyProperties->toArray();
        }
        if ($this->productIdentifier !== null) {
            $data['productIdentifier'] = $this->productIdentifier->toArray();
        }

        return $data;
    }
}
