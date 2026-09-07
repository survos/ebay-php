<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides fields that contains applicable Classified Ad policy metadata for the leaf categories returned for the marketplace.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ClassifiedAdPolicy
{
    /**
     * @param string|null $adFormatEnabled This enumerated value indicates the type or status of available Classified Ad formats for this category. For implementation help, refer to eBay API documentation
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which metadata is being returned.
     * @param string|null $categoryTreeId The unique identifier of the category tree.
     * @param bool|null $classifiedAdAutoAcceptEnabled Indicates whether the category supports the Best Offer Automatic Accept feature for Classified Ad listings.
     * @param bool|null $classifiedAdAutoDeclineEnabled Indicates whether the category supports the Best Offer Automatic Reject feature for Classified Ad listings.
     * @param string|null $classifiedAdBestOfferEnabled This enumerated value indicates if Best Offer is enabled, disabled, or required for Classified Ad listings in this category. For implementation help, refer to eBay API documentation
     * @param bool|null $classifiedAdCompanyNameEnabled Indicates whether this category supports including a company name in the seller's contact information. This element is for For Sale By Owner listings.
     * @param bool|null $classifiedAdContactByAddressEnabled Indicates whether this category supports including an address in the seller's contact information. This element is for For Sale By Owner listings.
     * @param bool|null $classifiedAdContactByEmailEnabled Indicates whether most categories support including an email address in the seller's contact information.
     * @param bool|null $classifiedAdContactByPhoneEnabled Indicates whether most categories support including a phone number in the seller's contact information.
     * @param bool|null $classifiedAdCounterOfferEnabled Indicates whether counter offers are allowed on Best offers for the category.
     * @param string|null $classifiedAdPaymentMethodEnabled This enumerated value indicates support for the payment method being displayed to the user for the category. Even if enabled, checkout may or may not be enabled. For implementation help, refer to eBay API documentation
     * @param int|null $classifiedAdPhoneCount Indicates how many contact phone numbers can be specified in contact information for the category. This element is for For Sale By Owner listings.
     * @param bool|null $classifiedAdShippingMethodEnabled Indicates if shipping methods can be specified and displayed in the View Item page for the category.
     * @param int|null $classifiedAdStreetCount Indicates how many street addresses can be specified in contact information for the category. This element is for For Sale By Owner listings.
     * @param bool|null $sellerContactDetailsEnabled Indicates whether this category supports seller-level contact information for Classified Ad listings.
     */
    public function __construct(
        public ?string $adFormatEnabled = null,
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?bool $classifiedAdAutoAcceptEnabled = null,
        public ?bool $classifiedAdAutoDeclineEnabled = null,
        public ?string $classifiedAdBestOfferEnabled = null,
        public ?bool $classifiedAdCompanyNameEnabled = null,
        public ?bool $classifiedAdContactByAddressEnabled = null,
        public ?bool $classifiedAdContactByEmailEnabled = null,
        public ?bool $classifiedAdContactByPhoneEnabled = null,
        public ?bool $classifiedAdCounterOfferEnabled = null,
        public ?string $classifiedAdPaymentMethodEnabled = null,
        public ?int $classifiedAdPhoneCount = null,
        public ?bool $classifiedAdShippingMethodEnabled = null,
        public ?int $classifiedAdStreetCount = null,
        public ?bool $sellerContactDetailsEnabled = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            adFormatEnabled: isset($data['adFormatEnabled']) ? (string) $data['adFormatEnabled'] : null,
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            classifiedAdAutoAcceptEnabled: isset($data['classifiedAdAutoAcceptEnabled']) ? (bool) $data['classifiedAdAutoAcceptEnabled'] : null,
            classifiedAdAutoDeclineEnabled: isset($data['classifiedAdAutoDeclineEnabled']) ? (bool) $data['classifiedAdAutoDeclineEnabled'] : null,
            classifiedAdBestOfferEnabled: isset($data['classifiedAdBestOfferEnabled']) ? (string) $data['classifiedAdBestOfferEnabled'] : null,
            classifiedAdCompanyNameEnabled: isset($data['classifiedAdCompanyNameEnabled']) ? (bool) $data['classifiedAdCompanyNameEnabled'] : null,
            classifiedAdContactByAddressEnabled: isset($data['classifiedAdContactByAddressEnabled']) ? (bool) $data['classifiedAdContactByAddressEnabled'] : null,
            classifiedAdContactByEmailEnabled: isset($data['classifiedAdContactByEmailEnabled']) ? (bool) $data['classifiedAdContactByEmailEnabled'] : null,
            classifiedAdContactByPhoneEnabled: isset($data['classifiedAdContactByPhoneEnabled']) ? (bool) $data['classifiedAdContactByPhoneEnabled'] : null,
            classifiedAdCounterOfferEnabled: isset($data['classifiedAdCounterOfferEnabled']) ? (bool) $data['classifiedAdCounterOfferEnabled'] : null,
            classifiedAdPaymentMethodEnabled: isset($data['classifiedAdPaymentMethodEnabled']) ? (string) $data['classifiedAdPaymentMethodEnabled'] : null,
            classifiedAdPhoneCount: isset($data['classifiedAdPhoneCount']) ? (int) $data['classifiedAdPhoneCount'] : null,
            classifiedAdShippingMethodEnabled: isset($data['classifiedAdShippingMethodEnabled']) ? (bool) $data['classifiedAdShippingMethodEnabled'] : null,
            classifiedAdStreetCount: isset($data['classifiedAdStreetCount']) ? (int) $data['classifiedAdStreetCount'] : null,
            sellerContactDetailsEnabled: isset($data['sellerContactDetailsEnabled']) ? (bool) $data['sellerContactDetailsEnabled'] : null,
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
        if ($this->adFormatEnabled !== null) {
            $data['adFormatEnabled'] = $this->adFormatEnabled;
        }
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->classifiedAdAutoAcceptEnabled !== null) {
            $data['classifiedAdAutoAcceptEnabled'] = $this->classifiedAdAutoAcceptEnabled;
        }
        if ($this->classifiedAdAutoDeclineEnabled !== null) {
            $data['classifiedAdAutoDeclineEnabled'] = $this->classifiedAdAutoDeclineEnabled;
        }
        if ($this->classifiedAdBestOfferEnabled !== null) {
            $data['classifiedAdBestOfferEnabled'] = $this->classifiedAdBestOfferEnabled;
        }
        if ($this->classifiedAdCompanyNameEnabled !== null) {
            $data['classifiedAdCompanyNameEnabled'] = $this->classifiedAdCompanyNameEnabled;
        }
        if ($this->classifiedAdContactByAddressEnabled !== null) {
            $data['classifiedAdContactByAddressEnabled'] = $this->classifiedAdContactByAddressEnabled;
        }
        if ($this->classifiedAdContactByEmailEnabled !== null) {
            $data['classifiedAdContactByEmailEnabled'] = $this->classifiedAdContactByEmailEnabled;
        }
        if ($this->classifiedAdContactByPhoneEnabled !== null) {
            $data['classifiedAdContactByPhoneEnabled'] = $this->classifiedAdContactByPhoneEnabled;
        }
        if ($this->classifiedAdCounterOfferEnabled !== null) {
            $data['classifiedAdCounterOfferEnabled'] = $this->classifiedAdCounterOfferEnabled;
        }
        if ($this->classifiedAdPaymentMethodEnabled !== null) {
            $data['classifiedAdPaymentMethodEnabled'] = $this->classifiedAdPaymentMethodEnabled;
        }
        if ($this->classifiedAdPhoneCount !== null) {
            $data['classifiedAdPhoneCount'] = $this->classifiedAdPhoneCount;
        }
        if ($this->classifiedAdShippingMethodEnabled !== null) {
            $data['classifiedAdShippingMethodEnabled'] = $this->classifiedAdShippingMethodEnabled;
        }
        if ($this->classifiedAdStreetCount !== null) {
            $data['classifiedAdStreetCount'] = $this->classifiedAdStreetCount;
        }
        if ($this->sellerContactDetailsEnabled !== null) {
            $data['sellerContactDetailsEnabled'] = $this->sellerContactDetailsEnabled;
        }

        return $data;
    }
}
