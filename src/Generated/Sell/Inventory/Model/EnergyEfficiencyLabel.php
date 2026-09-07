<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type provides information about the energy efficiency for certain durable goods. Important! When providing energy efficiency information on an appliance or smartphones and tablets listing, the energy efficiency rating and range of the item must be specified through the the aspects field when creating the inventory item record. Use the getItemAspectsForCategory method of the Taxonomy API to re...
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class EnergyEfficiencyLabel
{
    /**
     * @param string|null $imageDescription A brief verbal summary of the information included on the Energy Efficiency Label for an item. For example, On a scale of A to G the rating is E.
     * @param string|null $imageURL The URL to the Energy Efficiency Label image that is applicable to an item.
     * @param string|null $productInformationSheet The URL to the Product Information Sheet that provides complete manufacturer-provided efficiency information about an item.
     */
    public function __construct(
        public ?string $imageDescription = null,
        public ?string $imageURL = null,
        public ?string $productInformationSheet = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            imageDescription: isset($data['imageDescription']) ? (string) $data['imageDescription'] : null,
            imageURL: isset($data['imageURL']) ? (string) $data['imageURL'] : null,
            productInformationSheet: isset($data['productInformationSheet']) ? (string) $data['productInformationSheet'] : null,
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
        if ($this->imageDescription !== null) {
            $data['imageDescription'] = $this->imageDescription;
        }
        if ($this->imageURL !== null) {
            $data['imageURL'] = $this->imageURL;
        }
        if ($this->productInformationSheet !== null) {
            $data['productInformationSheet'] = $this->productInformationSheet;
        }

        return $data;
    }
}
