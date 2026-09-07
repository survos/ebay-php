<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata;

use Survos\Ebay\Http\EbayTransportInterface;
use Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * Metadata API.
 *
 * Generated from eBay's OpenAPI contract. Do not edit.
 * Authentication, sandbox selection and error mapping live behind the transport.
 */
final readonly class MetadataApi
{
    public const string BASE_PATH = '/sell/metadata/v1';

    public function __construct(
        private EbayTransportInterface $transport,
    ) {
    }

    /**
     * This method returns the eBay policies that define how to list automotive parts compatibility items in the categories of the specified marketplace. By default, this method returns all categories that support parts compatibility. You can limit the size of the re...
     *
     * @param string|null $filter This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply categor...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. Note: Only the following eBay marketplaces sup...
     * @param string|null $accept_Encoding This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to gzip. For more in...
     */
    public function getAutomotivePartsCompatibilityPolicies(string $marketplace_id, ?string $filter = null, ?string $accept_Encoding = null): Model\AutomotivePartsCompatibilityPolicyResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_automotive_parts_compatibility_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];
        if ($accept_Encoding !== null) {
            $headers['Accept-Encoding'] = (string) $accept_Encoding;
        }

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\AutomotivePartsCompatibilityPolicyResponse::fromArray($response);
    }

    /**
     * This method returns eBay category policy metadata for all leaf categories on the specified marketplace.By default, this method returns metadata on all leaf categories. You can limit the size of the result set by using the filter query parameter to specify only...
     *
     * @param string|null $filter This query parameter limits the response by only returning metadata for the specified leaf categories. Supply the categoryId for one or more...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     */
    public function getCategoryPolicies(string $marketplace_id, ?string $filter = null): Model\CategoryPolicyResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_category_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\CategoryPolicyResponse::fromArray($response);
    }

    /**
     * This method returns eBay classified ad policy metadata for all leaf categories on the specified marketplace.By default, this method returns metadata on all leaf categories. You can limit the size of the result set by using the filter query parameter to specify...
     *
     * @param string|null $filter This query parameter limits the response by only returning metadata for the specified leaf categories. Supply the categoryId for one or more...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See MarketplaceIdEnum for a list of supported...
     */
    public function getClassifiedAdPolicies(string $marketplace_id, ?string $filter = null): Model\ClassifiedAdPolicyResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_classified_ad_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ClassifiedAdPolicyResponse::fromArray($response);
    }

    /**
     * This method returns the default currency used by the eBay marketplace specified in the request. This is the currency that the seller should use when providing price data for this marketplace through listing APIs.
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which currency information is retrieved. See the MarketplaceIdEnum type for a list of...
     */
    public function getCurrencies(string $marketplace_id): Model\GetCurrenciesResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_currencies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\GetCurrenciesResponse::fromArray($response);
    }

    /**
     * This method returns the Extended Producer Responsibility policies for one, multiple, or all eBay categories in an eBay marketplace. The identifier of the eBay marketplace is passed in as a path parameter, and unless one or more eBay category IDs are passed in...
     *
     * @param string|null $filter A query parameter that can be used to limit the response by returning policy information for only the selected sections of the category tree...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information shall be retrieved. See HTTP Request Headers for a list of s...
     * @param string|null $accept_Encoding This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to gzip. For more in...
     */
    public function getExtendedProducerResponsibilityPolicies(string $marketplace_id, ?string $filter = null, ?string $accept_Encoding = null): Model\ExtendedProducerResponsibilityPolicyResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_extended_producer_responsibility_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];
        if ($accept_Encoding !== null) {
            $headers['Accept-Encoding'] = (string) $accept_Encoding;
        }

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ExtendedProducerResponsibilityPolicyResponse::fromArray($response);
    }

    /**
     * This method returns hazardous materials label information for the specified eBay marketplace. The information includes IDs, descriptions, and URLs (as applicable) for the available signal words, statements, and pictograms. The returned statements are localized...
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which hazardous materials label information shall be retrieved. See HTTP Request Head...
     */
    public function getHazardousMaterialsLabels(string $marketplace_id): Model\HazardousMaterialDetailsResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_hazardous_materials_labels', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\HazardousMaterialDetailsResponse::fromArray($response);
    }

    /**
     * This method returns item condition metadata on one, multiple, or all eBay categories on an eBay marketplace. This metadata consists of the different item conditions (with IDs) that an eBay category supports, and a boolean to indicate if an eBay category requir...
     *
     * @param string|null $filter This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply categor...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     * @param string|null $accept_Encoding This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to gzip. For more in...
     */
    public function getItemConditionPolicies(string $marketplace_id, ?string $filter = null, ?string $accept_Encoding = null): Model\ItemConditionPolicyResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_item_condition_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];
        if ($accept_Encoding !== null) {
            $headers['Accept-Encoding'] = (string) $accept_Encoding;
        }

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ItemConditionPolicyResponse::fromArray($response);
    }

    /**
     * This method returns the eBay policies that define the allowed listing structures for the categories of a specific marketplace. The listing-structure policies currently pertain to whether or not you can list items with variations. By default, this method return...
     *
     * @param string|null $filter This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply categor...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     * @param string|null $accept_Encoding This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to gzip. For more in...
     */
    public function getListingStructurePolicies(string $marketplace_id, ?string $filter = null, ?string $accept_Encoding = null): Model\ListingStructurePolicyResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_listing_structure_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];
        if ($accept_Encoding !== null) {
            $headers['Accept-Encoding'] = (string) $accept_Encoding;
        }

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ListingStructurePolicyResponse::fromArray($response);
    }

    /**
     * This method returns eBay listing type policy metadata for all leaf categories on the specified marketplace. By default, this method returns metadata on all leaf categories. You can limit the size of the result set by using the filter query parameter to specify...
     *
     * @param string|null $filter This query parameter limits the response by only returning metadata for the specified leaf categories. Supply the categoryId for one or more...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     */
    public function getListingTypePolicies(string $marketplace_id, ?string $filter = null): Model\ListingTypePoliciesResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_listing_type_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ListingTypePoliciesResponse::fromArray($response);
    }

    /**
     * This method returns eBay Motors policy metadata for all leaf categories on the specified marketplace. By default, this method returns metadata on all leaf categories. You can limit the size of the result set by using the filter query parameter to specify only...
     *
     * @param string|null $filter This query parameter limits the response by only returning metadata for the specified leaf categories. Supply the categoryId for one or more...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     */
    public function getMotorsListingPolicies(string $marketplace_id, ?string $filter = null): Model\MotorsListingPoliciesResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_motors_listing_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\MotorsListingPoliciesResponse::fromArray($response);
    }

    /**
     * This method returns the eBay policies that define the supported negotiated price features (like "best offer") for the categories of a specific marketplace. By default, this method returns the entire category tree for the specified marketplace. You can limit th...
     *
     * @param string|null $filter This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply categor...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     * @param string|null $accept_Encoding This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to gzip. For more in...
     */
    public function getNegotiatedPricePolicies(string $marketplace_id, ?string $filter = null, ?string $accept_Encoding = null): Model\NegotiatedPricePolicyResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_negotiated_price_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];
        if ($accept_Encoding !== null) {
            $headers['Accept-Encoding'] = (string) $accept_Encoding;
        }

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\NegotiatedPricePolicyResponse::fromArray($response);
    }

    /**
     * This method returns product safety label information for the specified eBay marketplace. The information includes IDs, descriptions, and URLs (as applicable) for the available statements and pictograms. The returned statements are localized for the default lan...
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     */
    public function getProductSafetyLabels(string $marketplace_id): Model\ProductSafetyLabelsResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_product_safety_labels', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ProductSafetyLabelsResponse::fromArray($response);
    }

    /**
     * This method returns regulatory policies for one, multiple, or all eBay categories in an eBay marketplace. The identifier of the eBay marketplace is passed in as a path parameter, and unless one or more eBay category IDs are passed in through the filter query p...
     *
     * @param string|null $filter A query parameter that can be used to limit the response by returning policy information for only the selected sections of the category tree...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information shall be retrieved. See HTTP Request Headers for a list of s...
     */
    public function getRegulatoryPolicies(string $marketplace_id, ?string $filter = null): Model\RegulatoryPolicyResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_regulatory_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\RegulatoryPolicyResponse::fromArray($response);
    }

    /**
     * This method returns the eBay policies that define whether or not you must include a return policy for the items you list in the categories of a specific marketplace, plus the guidelines for creating domestic and international return policies in the different e...
     *
     * @param string|null $filter This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply categor...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     * @param string|null $accept_Encoding This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to gzip. For more in...
     */
    public function getReturnPolicies(string $marketplace_id, ?string $filter = null, ?string $accept_Encoding = null): Model\ReturnPolicyResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_return_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];
        if ($accept_Encoding !== null) {
            $headers['Accept-Encoding'] = (string) $accept_Encoding;
        }

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ReturnPolicyResponse::fromArray($response);
    }

    /**
     * This method returns eBay shipping policy metadata for all leaf categories on the specified marketplace.By default, this method returns metadata on all leaf categories. You can limit the size of the result set by using the filter query parameter to specify only...
     *
     * @param string|null $filter This query parameter limits the response by only returning metadata for the specified leaf categories. Supply the categoryId for one or more...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     */
    public function getShippingPolicies(string $marketplace_id, ?string $filter = null): Model\ShippingPoliciesResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_shipping_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ShippingPoliciesResponse::fromArray($response);
    }

    /**
     * This method returns eBay international site visibility policy metadata for all leaf categories on the specified marketplace.By default, this method returns metadata on all leaf categories. You can limit the size of the result set by using the filter query para...
     *
     * @param string|null $filter This query parameter limits the response by only returning metadata for the specified leaf categories. Supply the categoryId for one or more...
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved. See HTTP Request Headers for a list of support...
     */
    public function getSiteVisibilityPolicies(string $marketplace_id, ?string $filter = null): Model\SiteVisibilityPoliciesResponse
    {
        $path = strtr('/marketplace/{marketplace_id}/get_site_visibility_policies', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\SiteVisibilityPoliciesResponse::fromArray($response);
    }

    /**
     * This method is used to retrieve all compatible application name-value pairs for a part based on the provided specification(s). The part's relevant dimensions and/or characteristics can be provided through the specifications container. For example, when retriev...
     *
     * @param string $x_EBAY_C_MARKETPLACE_ID This header identifies the seller's eBay marketplace. See Metadata API requirements and restrictions for supported values.
     */
    public function getCompatibilitiesBySpecification(Model\SpecificationRequest $body, ?string $x_EBAY_C_MARKETPLACE_ID = null): Model\SpecificationResponse
    {
        $path = '/compatibilities/get_compatibilities_by_specification';
        $query = [];
        $headers = [];
        if ($x_EBAY_C_MARKETPLACE_ID !== null) {
            $headers['X-EBAY-C-MARKETPLACE-ID'] = (string) $x_EBAY_C_MARKETPLACE_ID;
        }

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\SpecificationResponse::fromArray($response);
    }

    /**
     * This method is used to retrieve product compatibility property names for the specified compatibility-enabled category. Compatibility property names can be used alongside the corresponding compatibility property value (retrieved using the getCompatibilityProper...
     *
     * @param string $x_EBAY_C_MARKETPLACE_ID This header identifies the seller's eBay marketplace. See Metadata API requirements and restrictions for supported values.
     */
    public function getCompatibilityPropertyNames(Model\PropertyNamesRequest $body, ?string $x_EBAY_C_MARKETPLACE_ID = null): Model\PropertyNamesResponse
    {
        $path = '/compatibilities/get_compatibility_property_names';
        $query = [];
        $headers = [];
        if ($x_EBAY_C_MARKETPLACE_ID !== null) {
            $headers['X-EBAY-C-MARKETPLACE-ID'] = (string) $x_EBAY_C_MARKETPLACE_ID;
        }

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\PropertyNamesResponse::fromArray($response);
    }

    /**
     * This method is used to retrieve product compatibility property values associated with a single property name, in the specified category. Compatibility property values can be used alongside the corresponding compatibility property name (retrieved using the getC...
     *
     * @param string $x_EBAY_C_MARKETPLACE_ID This header identifies the seller's eBay marketplace. See Metadata API requirements and restrictions for supported values.
     */
    public function getCompatibilityPropertyValues(Model\PropertyValuesRequest $body, ?string $x_EBAY_C_MARKETPLACE_ID = null): Model\PropertyValuesResponse
    {
        $path = '/compatibilities/get_compatibility_property_values';
        $query = [];
        $headers = [];
        if ($x_EBAY_C_MARKETPLACE_ID !== null) {
            $headers['X-EBAY-C-MARKETPLACE-ID'] = (string) $x_EBAY_C_MARKETPLACE_ID;
        }

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\PropertyValuesResponse::fromArray($response);
    }

    /**
     * This method is used to retrieve product compatibility property values associated with multiple property names, in the specified category. Compatibility property values can be used alongside the corresponding compatibility property name (retrieved using the get...
     *
     * @param string $x_EBAY_C_MARKETPLACE_ID This header identifies the seller's eBay marketplace. See Metadata API requirements and restrictions for supported values.
     */
    public function getMultiCompatibilityPropertyValues(Model\MultiCompatibilityPropertyValuesRequest $body, ?string $x_EBAY_C_MARKETPLACE_ID = null): Model\MultiCompatibilityPropertyValuesResponse
    {
        $path = '/compatibilities/get_multi_compatibility_property_values';
        $query = [];
        $headers = [];
        if ($x_EBAY_C_MARKETPLACE_ID !== null) {
            $headers['X-EBAY-C-MARKETPLACE-ID'] = (string) $x_EBAY_C_MARKETPLACE_ID;
        }

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\MultiCompatibilityPropertyValuesResponse::fromArray($response);
    }

    /**
     * This method is used to retrieve all available item compatibility details for the specified product. Item compatibility details can be used to see the properties for which an item is compatible. For example, if you are searching for a part for a specific vehicl...
     *
     * @param string $x_EBAY_C_MARKETPLACE_ID This header identifies the seller's eBay marketplace. See Metadata API requirements and restrictions for supported values.
     */
    public function getProductCompatibilities(Model\ProductRequest $body, ?string $x_EBAY_C_MARKETPLACE_ID = null): Model\ProductResponse
    {
        $path = '/compatibilities/get_product_compatibilities';
        $query = [];
        $headers = [];
        if ($x_EBAY_C_MARKETPLACE_ID !== null) {
            $headers['X-EBAY-C-MARKETPLACE-ID'] = (string) $x_EBAY_C_MARKETPLACE_ID;
        }

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\ProductResponse::fromArray($response);
    }

    /**
     * This method retrieves a list of locations that the seller can use as excluded shipping locations within their listings or in their fulfillment business policies for the specified marketplace. These are locations that a seller designates as areas where they wil...
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which excluded shipping locations information is retrieved. See MarketplaceIdEnum for...
     */
    public function getExcludeShippingLocations(string $marketplace_id): Model\ShippingExcludeLocationResponse
    {
        $path = strtr('/shipping/marketplace/{marketplace_id}/get_exclude_shipping_locations', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ShippingExcludeLocationResponse::fromArray($response);
    }

    /**
     * This method retrieves a list of supported handling times for the specified marketplace. The handling time returned specifies the maximum number of business days the eBay site allows for shipping an item to domestic buyers after receiving a cleared payment. Han...
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which handling times information is retrieved. See MarketplaceIdEnum for supported eB...
     */
    public function getHandlingTimes(string $marketplace_id): Model\ShippingHandlingTimeResponse
    {
        $path = strtr('/shipping/marketplace/{marketplace_id}/get_handling_times', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ShippingHandlingTimeResponse::fromArray($response);
    }

    /**
     * This method retrieves a list of supported shipping carriers for the specified marketplace. It provides essential information for sellers to understand which shipping carriers are available for use when listing items on that eBay marketplace. Knowing the suppor...
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which shipping carriers information is retrieved. See MarketplaceIdEnum for supported...
     */
    public function getShippingCarriers(string $marketplace_id): Model\ShippingCarrierResponse
    {
        $path = strtr('/shipping/marketplace/{marketplace_id}/get_shipping_carriers', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ShippingCarrierResponse::fromArray($response);
    }

    /**
     * This method retrieves a list of supported shipping locations for the specified marketplace. It provides sellers with information on where they can ship their items. Sellers can use this information to configure their shipping settings. Tip: Use the getExcludeS...
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which shipping locations information is retrieved. See MarketplaceIdEnum for supporte...
     */
    public function getShippingLocations(string $marketplace_id): Model\ShippingLocationResponse
    {
        $path = strtr('/shipping/marketplace/{marketplace_id}/get_shipping_locations', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ShippingLocationResponse::fromArray($response);
    }

    /**
     * This method retrieves a list of shipping services supported for the specified marketplace, including valid shipping services, shipping times, and package constraints such as size and weight.Manage shipping services using business policies through the fulfillme...
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which shipping services information is retrieved. See MarketplaceIdEnum for supported...
     */
    public function getShippingServices(string $marketplace_id): Model\ShippingServiceResponse
    {
        $path = strtr('/shipping/marketplace/{marketplace_id}/get_shipping_services', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ShippingServiceResponse::fromArray($response);
    }

    /**
     * This method retrieves all sales-tax jurisdictions for the country specified in the countryCode path parameter. Countries with valid sales-tax jurisdictions are Canada and the US. The response from this call tells you the jurisdictions for which a seller can co...
     *
     * @param string $countryCode This path parameter specifies the two-letter ISO 3166 country code for the country whose jurisdictions you want to retrieve. Note: Sales-tax...
     */
    public function getSalesTaxJurisdictions(string $countryCode): Model\SalesTaxJurisdictions
    {
        $path = strtr('/country/{countryCode}/sales_tax_jurisdiction', [
            '{countryCode}' => rawurlencode($countryCode),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\SalesTaxJurisdictions::fromArray($response);
    }
}
