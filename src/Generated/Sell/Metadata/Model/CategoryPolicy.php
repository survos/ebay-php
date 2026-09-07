<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type contains applicable policy metadata for the leaf categories returned for the marketplace.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CategoryPolicy
{
    /**
     * @param bool|null $autoPayEnabled If this field is returned as true, the corresponding category supports immediate payment for listings. The immediate payment feature is applicable to fixed-price listings, to auction listings with the 'Buy It Now' option...
     * @param bool|null $b2bVatEnabled If this field is returned as true, the corresponding category supports business-to-business (B2B) VAT listings. If this field is not present, the category does not have B2B VAT listings. This feature is applicable to the...
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which metadata is being returned.
     * @param string|null $categoryTreeId The unique identifier of the category tree.
     * @param string|null $eanSupport This enumerated value indicates whether or not European Article Numbers (EANs) are supported/required when listing products in the category. For implementation help, refer to eBay API documentation
     * @param bool|null $expired If this field is returned as true, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. You can use the getExpiredCategories method (of the Taxonomy API...
     * @param bool|null $intangibleEnabled If this field is returned as true, the category supports the listing of intangible goods or services.
     * @param string|null $isbnSupport This enumerated value indicates whether or not International Standard Book Numbers (ISBNs) are supported/required when listing products in the specified category. For implementation help, refer to eBay API documentation
     * @param bool|null $lsd If this field (Lot Size Disabled) is returned as true, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one...
     * @param float|null $minimumReservePrice Indicates the Minimum Reserve Price for an auction listing in this category. If there is no Minimum Reserve Price, a value of 0.0 is returned in this field.
     * @param bool|null $orpa This field (Override Reserve Price Allowed) is returned as true if the eBay marketplace's default policy is to allow reserve prices for auction listings, but the corresponding category does not allow a reserve price. Not...
     * @param bool|null $orra If this field (Override Reduce Reserve Allowed) is returned as true, the seller can reduce or remove a reserve price that had already been reduced for an active auction listing.
     * @param list<string>|null $paymentMethods An array that indicates the acceptable offline payment methods that can be used when listing an item for sale in the corresponding category.
     * @param bool|null $reduceReserveAllowed If this field (Reduce Reserve Allowed) is true, the corresponding leaf category allows the seller to reduce an item's reserve price. If false, this field is not returned in the response and the corresponding leaf categor...
     * @param bool|null $reservePriceAllowed This field indicates whether reserve prices are allowed for auction listings in this category. This field returns as true when the category supports reserve prices, or false if the eBay marketplace does not permit reserv...
     * @param string|null $upcSupport This enumerated value indicates whether or not the category on the specified eBay site supports the use of Universal Product Codes (UPCs) to help create a listing. For implementation help, refer to eBay API documentation
     * @param bool|null $valueCategory When returned as true, this boolean indicates that the leaf category for the specified site is designated by eBay as a value category. Value categories can be used as a secondary category for a listing at no extra charge...
     * @param bool|null $virtual If this field is returned as true, the corresponding category is an eBay virtual category, a category in which items may not be listed.This field is only returned when true (not returned when false).
     */
    public function __construct(
        public ?bool $autoPayEnabled = null,
        public ?bool $b2bVatEnabled = null,
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?string $eanSupport = null,
        public ?bool $expired = null,
        public ?bool $intangibleEnabled = null,
        public ?string $isbnSupport = null,
        public ?bool $lsd = null,
        public ?float $minimumReservePrice = null,
        public ?bool $orpa = null,
        public ?bool $orra = null,
        public ?array $paymentMethods = null,
        public ?bool $reduceReserveAllowed = null,
        public ?bool $reservePriceAllowed = null,
        public ?string $upcSupport = null,
        public ?bool $valueCategory = null,
        public ?bool $virtual = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            autoPayEnabled: isset($data['autoPayEnabled']) ? (bool) $data['autoPayEnabled'] : null,
            b2bVatEnabled: isset($data['b2bVatEnabled']) ? (bool) $data['b2bVatEnabled'] : null,
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            eanSupport: isset($data['eanSupport']) ? (string) $data['eanSupport'] : null,
            expired: isset($data['expired']) ? (bool) $data['expired'] : null,
            intangibleEnabled: isset($data['intangibleEnabled']) ? (bool) $data['intangibleEnabled'] : null,
            isbnSupport: isset($data['isbnSupport']) ? (string) $data['isbnSupport'] : null,
            lsd: isset($data['lsd']) ? (bool) $data['lsd'] : null,
            minimumReservePrice: isset($data['minimumReservePrice']) ? (float) $data['minimumReservePrice'] : null,
            orpa: isset($data['orpa']) ? (bool) $data['orpa'] : null,
            orra: isset($data['orra']) ? (bool) $data['orra'] : null,
            paymentMethods: isset($data['paymentMethods']) ? (array) $data['paymentMethods'] : null,
            reduceReserveAllowed: isset($data['reduceReserveAllowed']) ? (bool) $data['reduceReserveAllowed'] : null,
            reservePriceAllowed: isset($data['reservePriceAllowed']) ? (bool) $data['reservePriceAllowed'] : null,
            upcSupport: isset($data['upcSupport']) ? (string) $data['upcSupport'] : null,
            valueCategory: isset($data['valueCategory']) ? (bool) $data['valueCategory'] : null,
            virtual: isset($data['virtual']) ? (bool) $data['virtual'] : null,
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
        if ($this->autoPayEnabled !== null) {
            $data['autoPayEnabled'] = $this->autoPayEnabled;
        }
        if ($this->b2bVatEnabled !== null) {
            $data['b2bVatEnabled'] = $this->b2bVatEnabled;
        }
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->eanSupport !== null) {
            $data['eanSupport'] = $this->eanSupport;
        }
        if ($this->expired !== null) {
            $data['expired'] = $this->expired;
        }
        if ($this->intangibleEnabled !== null) {
            $data['intangibleEnabled'] = $this->intangibleEnabled;
        }
        if ($this->isbnSupport !== null) {
            $data['isbnSupport'] = $this->isbnSupport;
        }
        if ($this->lsd !== null) {
            $data['lsd'] = $this->lsd;
        }
        if ($this->minimumReservePrice !== null) {
            $data['minimumReservePrice'] = $this->minimumReservePrice;
        }
        if ($this->orpa !== null) {
            $data['orpa'] = $this->orpa;
        }
        if ($this->orra !== null) {
            $data['orra'] = $this->orra;
        }
        if ($this->paymentMethods !== null) {
            $data['paymentMethods'] = $this->paymentMethods;
        }
        if ($this->reduceReserveAllowed !== null) {
            $data['reduceReserveAllowed'] = $this->reduceReserveAllowed;
        }
        if ($this->reservePriceAllowed !== null) {
            $data['reservePriceAllowed'] = $this->reservePriceAllowed;
        }
        if ($this->upcSupport !== null) {
            $data['upcSupport'] = $this->upcSupport;
        }
        if ($this->valueCategory !== null) {
            $data['valueCategory'] = $this->valueCategory;
        }
        if ($this->virtual !== null) {
            $data['virtual'] = $this->virtual;
        }

        return $data;
    }
}
