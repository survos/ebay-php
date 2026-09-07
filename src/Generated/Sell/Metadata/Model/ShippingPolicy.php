<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingPolicy
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which metadata is being returned.
     * @param string|null $categoryTreeId The unique identifier of the category tree.
     * @param bool|null $globalShippingEnabled Indicates if the Global Shipping Program (GSP) is supported for the category. Note: GSP is only supported by the eBay UK marketplace (EBAY_GB).
     * @param Amount|null $group1MaxFlatShippingCost Returns the applicable max cap per shipping cost for shipping service group1.
     * @param Amount|null $group2MaxFlatShippingCost Returns the applicable max cap per shipping cost for shipping service group2.
     * @param Amount|null $group3MaxFlatShippingCost Returns the applicable max cap per shipping cost for shipping service group3.
     * @param bool|null $handlingTimeEnabled Indicates if a seller's stated handling time is enabled for a category. A handling time is generally needed for items that are shipped to the buyer, but not necessarily applicable to freight shipping or local pickup.
     * @param Amount|null $maxFlatShippingCost The maximum cost the seller can charge for the first domestic flat-rate shipping service. Mutually exclusive with the GroupNMaxFlatShippingCost elements.
     * @param bool|null $shippingTermsRequired Indicates whether the category requires sellers to specify shipping details at listing time.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?bool $globalShippingEnabled = null,
        public ?Amount $group1MaxFlatShippingCost = null,
        public ?Amount $group2MaxFlatShippingCost = null,
        public ?Amount $group3MaxFlatShippingCost = null,
        public ?bool $handlingTimeEnabled = null,
        public ?Amount $maxFlatShippingCost = null,
        public ?bool $shippingTermsRequired = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            globalShippingEnabled: isset($data['globalShippingEnabled']) ? (bool) $data['globalShippingEnabled'] : null,
            group1MaxFlatShippingCost: isset($data['group1MaxFlatShippingCost']) && is_array($data['group1MaxFlatShippingCost']) ? Amount::fromArray($data['group1MaxFlatShippingCost']) : null,
            group2MaxFlatShippingCost: isset($data['group2MaxFlatShippingCost']) && is_array($data['group2MaxFlatShippingCost']) ? Amount::fromArray($data['group2MaxFlatShippingCost']) : null,
            group3MaxFlatShippingCost: isset($data['group3MaxFlatShippingCost']) && is_array($data['group3MaxFlatShippingCost']) ? Amount::fromArray($data['group3MaxFlatShippingCost']) : null,
            handlingTimeEnabled: isset($data['handlingTimeEnabled']) ? (bool) $data['handlingTimeEnabled'] : null,
            maxFlatShippingCost: isset($data['maxFlatShippingCost']) && is_array($data['maxFlatShippingCost']) ? Amount::fromArray($data['maxFlatShippingCost']) : null,
            shippingTermsRequired: isset($data['shippingTermsRequired']) ? (bool) $data['shippingTermsRequired'] : null,
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
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->globalShippingEnabled !== null) {
            $data['globalShippingEnabled'] = $this->globalShippingEnabled;
        }
        if ($this->group1MaxFlatShippingCost !== null) {
            $data['group1MaxFlatShippingCost'] = $this->group1MaxFlatShippingCost->toArray();
        }
        if ($this->group2MaxFlatShippingCost !== null) {
            $data['group2MaxFlatShippingCost'] = $this->group2MaxFlatShippingCost->toArray();
        }
        if ($this->group3MaxFlatShippingCost !== null) {
            $data['group3MaxFlatShippingCost'] = $this->group3MaxFlatShippingCost->toArray();
        }
        if ($this->handlingTimeEnabled !== null) {
            $data['handlingTimeEnabled'] = $this->handlingTimeEnabled;
        }
        if ($this->maxFlatShippingCost !== null) {
            $data['maxFlatShippingCost'] = $this->maxFlatShippingCost->toArray();
        }
        if ($this->shippingTermsRequired !== null) {
            $data['shippingTermsRequired'] = $this->shippingTermsRequired;
        }

        return $data;
    }
}
