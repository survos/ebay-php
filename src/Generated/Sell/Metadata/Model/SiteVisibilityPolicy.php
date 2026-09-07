<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that contains eBay international cross border trade policy metadata fields.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SiteVisibilityPolicy
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which metadata is being returned.
     * @param string|null $categoryTreeId The unique identifier of the category tree.
     * @param bool|null $crossBorderTradeAustraliaEnabled If true, the category supports specifying that listings of a seller on the UK marketplace can pass in Australia as a value in a field to expose that item on the eBay Australia site (ebay.com.au). For more information, se...
     * @param bool|null $crossBorderTradeGBEnabled If true, the category supports specifying that listings of a seller on the US or Canada merketplaces can pass in UK as a value in a field to expose that item on the eBay UK (ebay.co.uk) and eBay IE (ebay.ie) sites. For m...
     * @param bool|null $crossBorderTradeNorthAmericaEnabled If true, the category supports specifying that listings of a seller on the US or Canada merketplaces can pass in North America as a value in a field to expose that item on the eBay US (ebay.com) and eBay Canada (ebay.ca)...
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?bool $crossBorderTradeAustraliaEnabled = null,
        public ?bool $crossBorderTradeGBEnabled = null,
        public ?bool $crossBorderTradeNorthAmericaEnabled = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            crossBorderTradeAustraliaEnabled: isset($data['crossBorderTradeAustraliaEnabled']) ? (bool) $data['crossBorderTradeAustraliaEnabled'] : null,
            crossBorderTradeGBEnabled: isset($data['crossBorderTradeGBEnabled']) ? (bool) $data['crossBorderTradeGBEnabled'] : null,
            crossBorderTradeNorthAmericaEnabled: isset($data['crossBorderTradeNorthAmericaEnabled']) ? (bool) $data['crossBorderTradeNorthAmericaEnabled'] : null,
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
        if ($this->crossBorderTradeAustraliaEnabled !== null) {
            $data['crossBorderTradeAustraliaEnabled'] = $this->crossBorderTradeAustraliaEnabled;
        }
        if ($this->crossBorderTradeGBEnabled !== null) {
            $data['crossBorderTradeGBEnabled'] = $this->crossBorderTradeGBEnabled;
        }
        if ($this->crossBorderTradeNorthAmericaEnabled !== null) {
            $data['crossBorderTradeNorthAmericaEnabled'] = $this->crossBorderTradeNorthAmericaEnabled;
        }

        return $data;
    }
}
