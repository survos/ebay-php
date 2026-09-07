<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class MotorsListingPolicy
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which metadata is being returned.
     * @param string|null $categoryTreeId The unique identifier of the category tree.
     * @param bool|null $depositSupported This field is returned as true if the corresponding category supports the use of a deposit/down payment on a motor vehicle listing. In an AddItem call, the seller can configure a down payment for a motor vehicle listing...
     * @param string|null $ebayMotorsProAdFormatEnabled Indicates whether or not eBay Motors Pro sellers can use classified ads in this category to sell their vehicles. This element is applicable for eBay Motors Pro users. For implementation help, refer to eBay API documentat...
     * @param bool|null $ebayMotorsProAutoAcceptEnabled Indicates whether or not the category supports the Best Offer Auto Accept feature for eBay Motors Pro listings. This element is for eBay Motors Pro users.
     * @param bool|null $ebayMotorsProAutoDeclineEnabled Indicates whether or not the category allows auto-decline for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
     * @param string|null $ebayMotorsProBestOfferEnabled This enumerated value indicates whether or not Best Offer features are supported for eBay Motors Classified Ad listings in this category. This element is for eBay Motors Pro users. For implementation help, refer to eBay...
     * @param bool|null $ebayMotorsProCompanyNameEnabled Indicates whether this category supports including the company name in the seller's contact information. This element is for eBay Motors Pro users.
     * @param bool|null $ebayMotorsProContactByAddressEnabled Indicates whether this category supports including the address in the seller's contact information. This element is for eBay Motors Pro users.
     * @param bool|null $ebayMotorsProContactByEmailEnabled Indicates whether this category supports including an email address in the seller's contact information. This element is for eBay Motors Pro users.
     * @param bool|null $ebayMotorsProContactByPhoneEnabled Indicates whether this category supports including the telephone in the seller's contact information. This element is for eBay Motors Pro users.
     * @param bool|null $ebayMotorsProCounterOfferEnabled Indicates whether counter offers are allowed on Best Offers for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     * @param string|null $ebayMotorsProPaymentMethodCheckOutEnabled This enumerated value indicates whether this category supports that the payment method should be displayed to the user for this category in an eBay Motors Classified Ad listing. Even if enabled, checkout may or may not b...
     * @param int|null $ebayMotorsProPhoneCount Indicates the number of phone numbers that can be included through contact information for this category. This element is for eBay Motors Pro users.
     * @param bool|null $ebayMotorsProSellerContactDetailsEnabled Indicates whether this category allows seller-level contact information for eBay Motors Classified Ad listings. A value of true means seller-level contact information is available for Classified Ad listings. This element...
     * @param bool|null $ebayMotorsProShippingMethodEnabled Indicates if shipping options should be displayed to the user for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     * @param int|null $ebayMotorsProStreetCount This field indicates the number of street addresses allowed in contact information for this category. This element is for eBay Motors Pro users.
     * @param bool|null $epidSupported If returned as true, this indicates the category supports the use of an eBay Product ID (e.g. ePID) to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be u...
     * @param bool|null $kTypeSupported This field indicates whether or not the category supports the use of a K type to identify the cars and trucks compatible with a motor vehicle part or accessory. Only the AU, DE, ES, FR, IT, and UK marketplaces support th...
     * @param list<LocalListingDistance>|null $localListingDistances This array shows the supported distances (in miles) for different types of Local Market subscription types in this category. Motor vehicle listings will be shown to buyers located within these proximities of the vehicle'...
     * @param string|null $localMarketAdFormatEnabled Specifies whether this category supports Motor Local Market Classified Ad listings. For implementation help, refer to eBay API documentation
     * @param bool|null $localMarketAutoAcceptEnabled Specifies whether this category supports auto-accept for Best Offers for Motors Local Market Classified Ads.
     * @param bool|null $localMarketAutoDeclineEnabled Specifies whether this category supports auto-decline for Best Offers for Motors Local Market Classified Ads.
     * @param string|null $localMarketBestOfferEnabled Indicates if Best Offer is enabled/required for Motors Local Market Classified Ad listings in this category. For implementation help, refer to eBay API documentation
     * @param bool|null $localMarketCompanyNameEnabled Indicates whether the category supports the seller's company name being specified when using Motors Local Market classified ads.
     * @param bool|null $localMarketContactByAddressEnabled Indicates whether this category supports including the address in the seller's contact information.
     * @param bool|null $localMarketContactByEmailEnabled Indicates whether the category supports including an email address in the seller's contact information.
     * @param bool|null $localMarketContactByPhoneEnabled Indicates whether this category supports including the telephone in the seller's contact information.
     * @param bool|null $localMarketCounterOfferEnabled Indicates whether counter offers are allowed on Best Offers for this category for Motors Local Market Classified Ad listings.
     * @param bool|null $localMarketNonSubscription Indicates whether the category supports a seller creating a Motors Local Market listing without a subscription. This feature is only available to licensed vehicle dealers.
     * @param string|null $localMarketPaymentMethodCheckOutEnabled Indicates if the payment method should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled. For implementation help, refer to eB...
     * @param int|null $localMarketPhoneCount Indicates the number of phone numbers that can be included through contact information for this category.
     * @param bool|null $localMarketPremiumSubscription Indicates whether the category supports the Premium level subscription Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     * @param bool|null $localMarketRegularSubscription Indicates whether the category supports the Regular level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     * @param bool|null $localMarketSellerContactDetailsEnabled Specifies the whether this category allows seller-level contact information for Motors Local Market Classified Ad listings.
     * @param bool|null $localMarketShippingMethodEnabled Indicates if shipping methods should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled.
     * @param bool|null $localMarketSpecialitySubscription Indicates whether the category supports the Speciality level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     * @param int|null $localMarketStreetCount Indicates which address option is enabled for the seller's contact information.
     * @param int|null $maxGranularFitmentCount Indicates the maximum number of compatible applications allowed per item when adding or revising items with compatibilities provided at the most detailed granularity. For example, in Car and Truck Parts on the US site, t...
     * @param int|null $maxItemCompatibility Indicates the maximum number of compatible applications allowed per item when adding or revising items. This is relevant for specifying parts compatibility by application manually only. See Specify parts compatibility ma...
     * @param int|null $minItemCompatibility Indicates the minimum number of required compatible applications for listing items. A value of 0 indicates it is not mandatory to specify parts compatibilities when listing.
     * @param string|null $nonSubscription The value in this field indicates whether the category supports Motors Local Market listings if the seller does not have a vehicle subscription. For implementation help, refer to eBay API documentation
     * @param string|null $premiumSubscription The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Premium vehicle subscription. For implementation help, refer to eBay API documentation
     * @param string|null $regularSubscription The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Regular vehicle subscription. For implementation help, refer to eBay API documentation
     * @param bool|null $sellerProvidedTitleSupported This field is returned as true if the corresponding category supports the use of a seller-provided title for a motor vehicle listing on the US or Canada Motors marketplaces. A seller-provided title is a descriptive title...
     * @param string|null $specialitySubscription The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Specialty vehicle subscription. For implementation help, refer to eBay API documentation
     * @param bool|null $vinSupported Indicates if Vehicle Identification Number is supported.
     * @param bool|null $vrmSupported Indicates if Vehicle Registration Mark is supported.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?bool $depositSupported = null,
        public ?string $ebayMotorsProAdFormatEnabled = null,
        public ?bool $ebayMotorsProAutoAcceptEnabled = null,
        public ?bool $ebayMotorsProAutoDeclineEnabled = null,
        public ?string $ebayMotorsProBestOfferEnabled = null,
        public ?bool $ebayMotorsProCompanyNameEnabled = null,
        public ?bool $ebayMotorsProContactByAddressEnabled = null,
        public ?bool $ebayMotorsProContactByEmailEnabled = null,
        public ?bool $ebayMotorsProContactByPhoneEnabled = null,
        public ?bool $ebayMotorsProCounterOfferEnabled = null,
        public ?string $ebayMotorsProPaymentMethodCheckOutEnabled = null,
        public ?int $ebayMotorsProPhoneCount = null,
        public ?bool $ebayMotorsProSellerContactDetailsEnabled = null,
        public ?bool $ebayMotorsProShippingMethodEnabled = null,
        public ?int $ebayMotorsProStreetCount = null,
        public ?bool $epidSupported = null,
        public ?bool $kTypeSupported = null,
        public ?array $localListingDistances = null,
        public ?string $localMarketAdFormatEnabled = null,
        public ?bool $localMarketAutoAcceptEnabled = null,
        public ?bool $localMarketAutoDeclineEnabled = null,
        public ?string $localMarketBestOfferEnabled = null,
        public ?bool $localMarketCompanyNameEnabled = null,
        public ?bool $localMarketContactByAddressEnabled = null,
        public ?bool $localMarketContactByEmailEnabled = null,
        public ?bool $localMarketContactByPhoneEnabled = null,
        public ?bool $localMarketCounterOfferEnabled = null,
        public ?bool $localMarketNonSubscription = null,
        public ?string $localMarketPaymentMethodCheckOutEnabled = null,
        public ?int $localMarketPhoneCount = null,
        public ?bool $localMarketPremiumSubscription = null,
        public ?bool $localMarketRegularSubscription = null,
        public ?bool $localMarketSellerContactDetailsEnabled = null,
        public ?bool $localMarketShippingMethodEnabled = null,
        public ?bool $localMarketSpecialitySubscription = null,
        public ?int $localMarketStreetCount = null,
        public ?int $maxGranularFitmentCount = null,
        public ?int $maxItemCompatibility = null,
        public ?int $minItemCompatibility = null,
        public ?string $nonSubscription = null,
        public ?string $premiumSubscription = null,
        public ?string $regularSubscription = null,
        public ?bool $sellerProvidedTitleSupported = null,
        public ?string $specialitySubscription = null,
        public ?bool $vinSupported = null,
        public ?bool $vrmSupported = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            depositSupported: isset($data['depositSupported']) ? (bool) $data['depositSupported'] : null,
            ebayMotorsProAdFormatEnabled: isset($data['ebayMotorsProAdFormatEnabled']) ? (string) $data['ebayMotorsProAdFormatEnabled'] : null,
            ebayMotorsProAutoAcceptEnabled: isset($data['ebayMotorsProAutoAcceptEnabled']) ? (bool) $data['ebayMotorsProAutoAcceptEnabled'] : null,
            ebayMotorsProAutoDeclineEnabled: isset($data['ebayMotorsProAutoDeclineEnabled']) ? (bool) $data['ebayMotorsProAutoDeclineEnabled'] : null,
            ebayMotorsProBestOfferEnabled: isset($data['ebayMotorsProBestOfferEnabled']) ? (string) $data['ebayMotorsProBestOfferEnabled'] : null,
            ebayMotorsProCompanyNameEnabled: isset($data['ebayMotorsProCompanyNameEnabled']) ? (bool) $data['ebayMotorsProCompanyNameEnabled'] : null,
            ebayMotorsProContactByAddressEnabled: isset($data['ebayMotorsProContactByAddressEnabled']) ? (bool) $data['ebayMotorsProContactByAddressEnabled'] : null,
            ebayMotorsProContactByEmailEnabled: isset($data['ebayMotorsProContactByEmailEnabled']) ? (bool) $data['ebayMotorsProContactByEmailEnabled'] : null,
            ebayMotorsProContactByPhoneEnabled: isset($data['ebayMotorsProContactByPhoneEnabled']) ? (bool) $data['ebayMotorsProContactByPhoneEnabled'] : null,
            ebayMotorsProCounterOfferEnabled: isset($data['ebayMotorsProCounterOfferEnabled']) ? (bool) $data['ebayMotorsProCounterOfferEnabled'] : null,
            ebayMotorsProPaymentMethodCheckOutEnabled: isset($data['ebayMotorsProPaymentMethodCheckOutEnabled']) ? (string) $data['ebayMotorsProPaymentMethodCheckOutEnabled'] : null,
            ebayMotorsProPhoneCount: isset($data['ebayMotorsProPhoneCount']) ? (int) $data['ebayMotorsProPhoneCount'] : null,
            ebayMotorsProSellerContactDetailsEnabled: isset($data['ebayMotorsProSellerContactDetailsEnabled']) ? (bool) $data['ebayMotorsProSellerContactDetailsEnabled'] : null,
            ebayMotorsProShippingMethodEnabled: isset($data['ebayMotorsProShippingMethodEnabled']) ? (bool) $data['ebayMotorsProShippingMethodEnabled'] : null,
            ebayMotorsProStreetCount: isset($data['ebayMotorsProStreetCount']) ? (int) $data['ebayMotorsProStreetCount'] : null,
            epidSupported: isset($data['epidSupported']) ? (bool) $data['epidSupported'] : null,
            kTypeSupported: isset($data['kTypeSupported']) ? (bool) $data['kTypeSupported'] : null,
            localListingDistances: isset($data['localListingDistances']) && is_array($data['localListingDistances'])
                ? array_values(array_map(static fn (array $i): LocalListingDistance => LocalListingDistance::fromArray($i), $data['localListingDistances']))
                : null,
            localMarketAdFormatEnabled: isset($data['localMarketAdFormatEnabled']) ? (string) $data['localMarketAdFormatEnabled'] : null,
            localMarketAutoAcceptEnabled: isset($data['localMarketAutoAcceptEnabled']) ? (bool) $data['localMarketAutoAcceptEnabled'] : null,
            localMarketAutoDeclineEnabled: isset($data['localMarketAutoDeclineEnabled']) ? (bool) $data['localMarketAutoDeclineEnabled'] : null,
            localMarketBestOfferEnabled: isset($data['localMarketBestOfferEnabled']) ? (string) $data['localMarketBestOfferEnabled'] : null,
            localMarketCompanyNameEnabled: isset($data['localMarketCompanyNameEnabled']) ? (bool) $data['localMarketCompanyNameEnabled'] : null,
            localMarketContactByAddressEnabled: isset($data['localMarketContactByAddressEnabled']) ? (bool) $data['localMarketContactByAddressEnabled'] : null,
            localMarketContactByEmailEnabled: isset($data['localMarketContactByEmailEnabled']) ? (bool) $data['localMarketContactByEmailEnabled'] : null,
            localMarketContactByPhoneEnabled: isset($data['localMarketContactByPhoneEnabled']) ? (bool) $data['localMarketContactByPhoneEnabled'] : null,
            localMarketCounterOfferEnabled: isset($data['localMarketCounterOfferEnabled']) ? (bool) $data['localMarketCounterOfferEnabled'] : null,
            localMarketNonSubscription: isset($data['localMarketNonSubscription']) ? (bool) $data['localMarketNonSubscription'] : null,
            localMarketPaymentMethodCheckOutEnabled: isset($data['localMarketPaymentMethodCheckOutEnabled']) ? (string) $data['localMarketPaymentMethodCheckOutEnabled'] : null,
            localMarketPhoneCount: isset($data['localMarketPhoneCount']) ? (int) $data['localMarketPhoneCount'] : null,
            localMarketPremiumSubscription: isset($data['localMarketPremiumSubscription']) ? (bool) $data['localMarketPremiumSubscription'] : null,
            localMarketRegularSubscription: isset($data['localMarketRegularSubscription']) ? (bool) $data['localMarketRegularSubscription'] : null,
            localMarketSellerContactDetailsEnabled: isset($data['localMarketSellerContactDetailsEnabled']) ? (bool) $data['localMarketSellerContactDetailsEnabled'] : null,
            localMarketShippingMethodEnabled: isset($data['localMarketShippingMethodEnabled']) ? (bool) $data['localMarketShippingMethodEnabled'] : null,
            localMarketSpecialitySubscription: isset($data['localMarketSpecialitySubscription']) ? (bool) $data['localMarketSpecialitySubscription'] : null,
            localMarketStreetCount: isset($data['localMarketStreetCount']) ? (int) $data['localMarketStreetCount'] : null,
            maxGranularFitmentCount: isset($data['maxGranularFitmentCount']) ? (int) $data['maxGranularFitmentCount'] : null,
            maxItemCompatibility: isset($data['maxItemCompatibility']) ? (int) $data['maxItemCompatibility'] : null,
            minItemCompatibility: isset($data['minItemCompatibility']) ? (int) $data['minItemCompatibility'] : null,
            nonSubscription: isset($data['nonSubscription']) ? (string) $data['nonSubscription'] : null,
            premiumSubscription: isset($data['premiumSubscription']) ? (string) $data['premiumSubscription'] : null,
            regularSubscription: isset($data['regularSubscription']) ? (string) $data['regularSubscription'] : null,
            sellerProvidedTitleSupported: isset($data['sellerProvidedTitleSupported']) ? (bool) $data['sellerProvidedTitleSupported'] : null,
            specialitySubscription: isset($data['specialitySubscription']) ? (string) $data['specialitySubscription'] : null,
            vinSupported: isset($data['vinSupported']) ? (bool) $data['vinSupported'] : null,
            vrmSupported: isset($data['vrmSupported']) ? (bool) $data['vrmSupported'] : null,
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
        if ($this->depositSupported !== null) {
            $data['depositSupported'] = $this->depositSupported;
        }
        if ($this->ebayMotorsProAdFormatEnabled !== null) {
            $data['ebayMotorsProAdFormatEnabled'] = $this->ebayMotorsProAdFormatEnabled;
        }
        if ($this->ebayMotorsProAutoAcceptEnabled !== null) {
            $data['ebayMotorsProAutoAcceptEnabled'] = $this->ebayMotorsProAutoAcceptEnabled;
        }
        if ($this->ebayMotorsProAutoDeclineEnabled !== null) {
            $data['ebayMotorsProAutoDeclineEnabled'] = $this->ebayMotorsProAutoDeclineEnabled;
        }
        if ($this->ebayMotorsProBestOfferEnabled !== null) {
            $data['ebayMotorsProBestOfferEnabled'] = $this->ebayMotorsProBestOfferEnabled;
        }
        if ($this->ebayMotorsProCompanyNameEnabled !== null) {
            $data['ebayMotorsProCompanyNameEnabled'] = $this->ebayMotorsProCompanyNameEnabled;
        }
        if ($this->ebayMotorsProContactByAddressEnabled !== null) {
            $data['ebayMotorsProContactByAddressEnabled'] = $this->ebayMotorsProContactByAddressEnabled;
        }
        if ($this->ebayMotorsProContactByEmailEnabled !== null) {
            $data['ebayMotorsProContactByEmailEnabled'] = $this->ebayMotorsProContactByEmailEnabled;
        }
        if ($this->ebayMotorsProContactByPhoneEnabled !== null) {
            $data['ebayMotorsProContactByPhoneEnabled'] = $this->ebayMotorsProContactByPhoneEnabled;
        }
        if ($this->ebayMotorsProCounterOfferEnabled !== null) {
            $data['ebayMotorsProCounterOfferEnabled'] = $this->ebayMotorsProCounterOfferEnabled;
        }
        if ($this->ebayMotorsProPaymentMethodCheckOutEnabled !== null) {
            $data['ebayMotorsProPaymentMethodCheckOutEnabled'] = $this->ebayMotorsProPaymentMethodCheckOutEnabled;
        }
        if ($this->ebayMotorsProPhoneCount !== null) {
            $data['ebayMotorsProPhoneCount'] = $this->ebayMotorsProPhoneCount;
        }
        if ($this->ebayMotorsProSellerContactDetailsEnabled !== null) {
            $data['ebayMotorsProSellerContactDetailsEnabled'] = $this->ebayMotorsProSellerContactDetailsEnabled;
        }
        if ($this->ebayMotorsProShippingMethodEnabled !== null) {
            $data['ebayMotorsProShippingMethodEnabled'] = $this->ebayMotorsProShippingMethodEnabled;
        }
        if ($this->ebayMotorsProStreetCount !== null) {
            $data['ebayMotorsProStreetCount'] = $this->ebayMotorsProStreetCount;
        }
        if ($this->epidSupported !== null) {
            $data['epidSupported'] = $this->epidSupported;
        }
        if ($this->kTypeSupported !== null) {
            $data['kTypeSupported'] = $this->kTypeSupported;
        }
        if ($this->localListingDistances !== null) {
            $data['localListingDistances'] = array_map(static fn (LocalListingDistance $i): array => $i->toArray(), $this->localListingDistances);
        }
        if ($this->localMarketAdFormatEnabled !== null) {
            $data['localMarketAdFormatEnabled'] = $this->localMarketAdFormatEnabled;
        }
        if ($this->localMarketAutoAcceptEnabled !== null) {
            $data['localMarketAutoAcceptEnabled'] = $this->localMarketAutoAcceptEnabled;
        }
        if ($this->localMarketAutoDeclineEnabled !== null) {
            $data['localMarketAutoDeclineEnabled'] = $this->localMarketAutoDeclineEnabled;
        }
        if ($this->localMarketBestOfferEnabled !== null) {
            $data['localMarketBestOfferEnabled'] = $this->localMarketBestOfferEnabled;
        }
        if ($this->localMarketCompanyNameEnabled !== null) {
            $data['localMarketCompanyNameEnabled'] = $this->localMarketCompanyNameEnabled;
        }
        if ($this->localMarketContactByAddressEnabled !== null) {
            $data['localMarketContactByAddressEnabled'] = $this->localMarketContactByAddressEnabled;
        }
        if ($this->localMarketContactByEmailEnabled !== null) {
            $data['localMarketContactByEmailEnabled'] = $this->localMarketContactByEmailEnabled;
        }
        if ($this->localMarketContactByPhoneEnabled !== null) {
            $data['localMarketContactByPhoneEnabled'] = $this->localMarketContactByPhoneEnabled;
        }
        if ($this->localMarketCounterOfferEnabled !== null) {
            $data['localMarketCounterOfferEnabled'] = $this->localMarketCounterOfferEnabled;
        }
        if ($this->localMarketNonSubscription !== null) {
            $data['localMarketNonSubscription'] = $this->localMarketNonSubscription;
        }
        if ($this->localMarketPaymentMethodCheckOutEnabled !== null) {
            $data['localMarketPaymentMethodCheckOutEnabled'] = $this->localMarketPaymentMethodCheckOutEnabled;
        }
        if ($this->localMarketPhoneCount !== null) {
            $data['localMarketPhoneCount'] = $this->localMarketPhoneCount;
        }
        if ($this->localMarketPremiumSubscription !== null) {
            $data['localMarketPremiumSubscription'] = $this->localMarketPremiumSubscription;
        }
        if ($this->localMarketRegularSubscription !== null) {
            $data['localMarketRegularSubscription'] = $this->localMarketRegularSubscription;
        }
        if ($this->localMarketSellerContactDetailsEnabled !== null) {
            $data['localMarketSellerContactDetailsEnabled'] = $this->localMarketSellerContactDetailsEnabled;
        }
        if ($this->localMarketShippingMethodEnabled !== null) {
            $data['localMarketShippingMethodEnabled'] = $this->localMarketShippingMethodEnabled;
        }
        if ($this->localMarketSpecialitySubscription !== null) {
            $data['localMarketSpecialitySubscription'] = $this->localMarketSpecialitySubscription;
        }
        if ($this->localMarketStreetCount !== null) {
            $data['localMarketStreetCount'] = $this->localMarketStreetCount;
        }
        if ($this->maxGranularFitmentCount !== null) {
            $data['maxGranularFitmentCount'] = $this->maxGranularFitmentCount;
        }
        if ($this->maxItemCompatibility !== null) {
            $data['maxItemCompatibility'] = $this->maxItemCompatibility;
        }
        if ($this->minItemCompatibility !== null) {
            $data['minItemCompatibility'] = $this->minItemCompatibility;
        }
        if ($this->nonSubscription !== null) {
            $data['nonSubscription'] = $this->nonSubscription;
        }
        if ($this->premiumSubscription !== null) {
            $data['premiumSubscription'] = $this->premiumSubscription;
        }
        if ($this->regularSubscription !== null) {
            $data['regularSubscription'] = $this->regularSubscription;
        }
        if ($this->sellerProvidedTitleSupported !== null) {
            $data['sellerProvidedTitleSupported'] = $this->sellerProvidedTitleSupported;
        }
        if ($this->specialitySubscription !== null) {
            $data['specialitySubscription'] = $this->specialitySubscription;
        }
        if ($this->vinSupported !== null) {
            $data['vinSupported'] = $this->vinSupported;
        }
        if ($this->vrmSupported !== null) {
            $data['vrmSupported'] = $this->vrmSupported;
        }

        return $data;
    }
}
