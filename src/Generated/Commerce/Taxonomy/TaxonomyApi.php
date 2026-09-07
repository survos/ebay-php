<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy;

use Survos\Ebay\Http\EbayTransportInterface;
use Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * Taxonomy API.
 *
 * Generated from eBay's OpenAPI contract. Do not edit.
 * Authentication, sandbox selection and error mapping live behind the transport.
 */
final readonly class TaxonomyApi
{
    public const string BASE_PATH = '/commerce/taxonomy/v1';

    public function __construct(
        private EbayTransportInterface $transport,
    ) {
    }

    /**
     * This method returns a complete list of aspects for all of the leaf categories that belong to an eBay marketplace. The eBay marketplace is specified through the category_tree_id URI parameter. Note: A successful call returns a payload as a gzipped JSON file sen...
     *
     * @param string $category_tree_id The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the getDefaultCategoryT...
     */
    public function fetchItemAspects(string $category_tree_id): Model\GetCategoriesAspectResponse
    {
        $path = strtr(self::BASE_PATH . '/category_tree/{category_tree_id}/fetch_item_aspects', [
            '{category_tree_id}' => rawurlencode($category_tree_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\GetCategoriesAspectResponse::fromArray($response);
    }

    /**
     * A given eBay marketplace might use multiple category trees, but one of those trees is considered to be the default for that marketplace. This call retrieves a reference to the default category tree associated with the specified eBay marketplace ID. The respons...
     *
     * @param string $marketplace_id The unique identifier of the eBay marketplace for which the category tree ID is requested. For a list of supported marketplace IDs, see Mark...
     */
    public function getDefaultCategoryTreeId(?string $marketplace_id = null): Model\BaseCategoryTree
    {
        $path = self::BASE_PATH . '/get_default_category_tree_id';
        $query = [];
        if ($marketplace_id !== null) {
            $query['marketplace_id'] = $marketplace_id;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\BaseCategoryTree::fromArray($response);
    }

    /**
     * This method retrieves the complete category tree that is identified by the category_tree_id parameter. The value of category_tree_id was returned by the getDefaultCategoryTreeId method in the categoryTreeId field. The response contains details of all nodes of...
     *
     * @param string $category_tree_id The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the getDefaultCategoryT...
     * @param string|null $accept_Encoding This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to gzip. For more in...
     */
    public function getCategoryTree(string $category_tree_id, ?string $accept_Encoding = null): Model\CategoryTree
    {
        $path = strtr(self::BASE_PATH . '/category_tree/{category_tree_id}', [
            '{category_tree_id}' => rawurlencode($category_tree_id),
        ]);
        $query = [];
        $headers = [];
        if ($accept_Encoding !== null) {
            $headers['Accept-Encoding'] = (string) $accept_Encoding;
        }

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\CategoryTree::fromArray($response);
    }

    /**
     * This call retrieves the details of all nodes of the category tree hierarchy (the subtree) below a specified category of a category tree. You identify the tree using the category_tree_id parameter, which was returned by the getDefaultCategoryTreeId call in the...
     *
     * @param string $category_id The unique identifier of the category at the top of the subtree being requested. Metadata on this category and all its descendant categories...
     * @param string $category_tree_id The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the getDefaultCategoryT...
     * @param string|null $accept_Encoding This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to gzip. For more in...
     */
    public function getCategorySubtree(string $category_tree_id, ?string $category_id = null, ?string $accept_Encoding = null): Model\CategorySubtree
    {
        $path = strtr(self::BASE_PATH . '/category_tree/{category_tree_id}/get_category_subtree', [
            '{category_tree_id}' => rawurlencode($category_tree_id),
        ]);
        $query = [];
        if ($category_id !== null) {
            $query['category_id'] = $category_id;
        }
        $headers = [];
        if ($accept_Encoding !== null) {
            $headers['Accept-Encoding'] = (string) $accept_Encoding;
        }

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\CategorySubtree::fromArray($response);
    }

    /**
     * This call returns an array of category tree leaf nodes in the specified category tree that are considered by eBay to most closely correspond to the query string q. Returned with each suggested node is a localized name for that category (based on the Accept-Lan...
     *
     * @param string $category_tree_id The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the getDefaultCategoryT...
     * @param string $q A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combina...
     */
    public function getCategorySuggestions(string $category_tree_id, ?string $q = null): Model\CategorySuggestionResponse
    {
        $path = strtr(self::BASE_PATH . '/category_tree/{category_tree_id}/get_category_suggestions', [
            '{category_tree_id}' => rawurlencode($category_tree_id),
        ]);
        $query = [];
        if ($q !== null) {
            $query['q'] = $q;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\CategorySuggestionResponse::fromArray($response);
    }

    /**
     * This call returns a list of aspects that are appropriate or necessary for accurately describing items in the specified leaf category. Each aspect identifies an item attribute (for example, color,) for which the seller will be required or encouraged to provide...
     *
     * @param string $category_id The unique identifier of the leaf category for which aspects are being requested. Note: If the category_id submitted does not identify a lea...
     * @param string $category_tree_id The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the getDefaultCategoryT...
     */
    public function getItemAspectsForCategory(string $category_tree_id, ?string $category_id = null): Model\AspectMetadata
    {
        $path = strtr(self::BASE_PATH . '/category_tree/{category_tree_id}/get_item_aspects_for_category', [
            '{category_tree_id}' => rawurlencode($category_tree_id),
        ]);
        $query = [];
        if ($category_id !== null) {
            $query['category_id'] = $category_id;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\AspectMetadata::fromArray($response);
    }

    /**
     * This call retrieves the compatible vehicle aspects that are used to define a motor vehicle that is compatible with a motor vehicle part or accessory. The values that are retrieved here might include motor vehicle aspects such as 'Make', 'Model', 'Year', 'Engin...
     *
     * @param string $category_tree_id This is the unique identifier of category tree. The following is the list of category_tree_id values and the eBay marketplaces that they rep...
     * @param string $category_id The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the categ...
     */
    public function getCompatibilityProperties(string $category_tree_id, ?string $category_id = null): Model\GetCompatibilityMetadataResponse
    {
        $path = strtr(self::BASE_PATH . '/category_tree/{category_tree_id}/get_compatibility_properties', [
            '{category_tree_id}' => rawurlencode($category_tree_id),
        ]);
        $query = [];
        if ($category_id !== null) {
            $query['category_id'] = $category_id;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\GetCompatibilityMetadataResponse::fromArray($response);
    }

    /**
     * This call retrieves applicable compatible vehicle property values based on the specified eBay marketplace, specified eBay category, and filters used in the request. Compatible vehicle properties are returned in the compatibilityProperties.name field of a getCo...
     *
     * @param string $category_tree_id This is the unique identifier of the category tree. The following is the list of category_tree_id values and the eBay marketplaces that they...
     * @param string $compatibility_property One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified in this required filter. Compati...
     * @param string $category_id The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the categ...
     * @param string|null $filter One or more compatible vehicle property name/value pairs are passed in through this query parameter. The compatible vehicle property name an...
     */
    public function getCompatibilityPropertyValues(string $category_tree_id, ?string $compatibility_property = null, ?string $category_id = null, ?string $filter = null): Model\GetCompatibilityPropertyValuesResponse
    {
        $path = strtr(self::BASE_PATH . '/category_tree/{category_tree_id}/get_compatibility_property_values', [
            '{category_tree_id}' => rawurlencode($category_tree_id),
        ]);
        $query = [];
        if ($compatibility_property !== null) {
            $query['compatibility_property'] = $compatibility_property;
        }
        if ($category_id !== null) {
            $query['category_id'] = $category_id;
        }
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\GetCompatibilityPropertyValuesResponse::fromArray($response);
    }

    /**
     * This method retrieves the mappings of expired leaf categories in the specified category tree to their corresponding active leaf categories. Note that in some cases, several expired categories are mapped to a single active category. Note: This method only retur...
     *
     * @param string $category_tree_id The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the getDefaultCategoryT...
     */
    public function getExpiredCategories(string $category_tree_id): Model\ExpiredCategories
    {
        $path = strtr(self::BASE_PATH . '/category_tree/{category_tree_id}/get_expired_categories', [
            '{category_tree_id}' => rawurlencode($category_tree_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ExpiredCategories::fromArray($response);
    }
}
