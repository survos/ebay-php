<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account;

use Survos\Ebay\Http\EbayTransportInterface;
use Survos\Ebay\Generated\Sell\Account\Model;

/**
 * Account v1 API.
 *
 * Generated from eBay's OpenAPI contract. Do not edit.
 * Authentication, sandbox selection and error mapping live behind the transport.
 */
final readonly class AccountApi
{
    public const string BASE_PATH = '/sell/account/v1';

    public function __construct(
        private EbayTransportInterface $transport,
    ) {
    }

    /**
     * This method retrieves the list of custom policies defined for a seller's account. To limit the returned custom policies, specify the policy_types query parameter.
     *
     * @param string|null $policy_types This query parameter specifies the type of custom policies to be returned. Multiple policy types may be requested in a single call by provid...
     */
    public function getCustomPolicies(?string $policy_types = null): Model\CustomPolicyResponse
    {
        $path = '/custom_policy/';
        $query = [];
        if ($policy_types !== null) {
            $query['policy_types'] = $policy_types;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\CustomPolicyResponse::fromArray($response);
    }

    /**
     * This method creates a new custom policy that specifies the seller's terms for complying with local governmental regulations. Each Custom Policy targets a policyType. Multiple policies may be created as using the following custom policy types:PRODUCT_COMPLIANCE...
     *
     * @return array<string, mixed>
     */
    public function createCustomPolicy(Model\CustomPolicyCreateRequest $body): array
    {
        $path = '/custom_policy/';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This method retrieves the custom policy specified by the custom_policy_id path parameter.
     *
     * @param string $custom_policy_id This path parameter is the unique identifier of the custom policy to retrieve. This ID can be retrieved for a custom policy by using the get...
     */
    public function getCustomPolicy(string $custom_policy_id): Model\CustomPolicy
    {
        $path = strtr('/custom_policy/{custom_policy_id}', [
            '{custom_policy_id}' => rawurlencode($custom_policy_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\CustomPolicy::fromArray($response);
    }

    /**
     * This method updates an existing custom policy specified by the custom_policy_id path parameter. Since this method overwrites the policy's name, label, and description fields, always include the complete and current text of all three policy fields in the reques...
     *
     * @param string $custom_policy_id This path parameter is the unique identifier of the custom policy to update. Note: A list of custom policies defined for a seller's account...
     *
     * @return array<string, mixed>
     */
    public function updateCustomPolicy(string $custom_policy_id, Model\CustomPolicyRequest $body): array
    {
        $path = strtr('/custom_policy/{custom_policy_id}', [
            '{custom_policy_id}' => rawurlencode($custom_policy_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This method creates a new fulfillment policy for an eBay marketplace where the policy encapsulates seller's terms for fulfilling item purchases. Fulfillment policies include the shipment options that the seller offers to buyers. A successful request returns th...
     */
    public function createFulfillmentPolicy(Model\FulfillmentPolicyRequest $body): Model\SetFulfillmentPolicyResponse
    {
        $path = '/fulfillment_policy/';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\SetFulfillmentPolicyResponse::fromArray($response);
    }

    /**
     * This method retrieves the complete details of a fulfillment policy. Supply the ID of the policy you want to retrieve using the fulfillmentPolicyId path parameter.
     *
     * @param string $fulfillmentPolicyId This path parameter specifies the ID of the fulfillment policy you want to retrieve. This ID can be retrieved for a fulfillment policy by us...
     */
    public function getFulfillmentPolicy(string $fulfillmentPolicyId): Model\FulfillmentPolicy
    {
        $path = strtr('/fulfillment_policy/{fulfillmentPolicyId}', [
            '{fulfillmentPolicyId}' => rawurlencode($fulfillmentPolicyId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\FulfillmentPolicy::fromArray($response);
    }

    /**
     * This method updates an existing fulfillment policy. Specify the policy you want to update using the fulfillment_policy_id path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new...
     *
     * @param string $fulfillmentPolicyId This path parameter specifies the ID of the fulfillment policy you want to update. This ID can be retrieved for a specific fulfillment polic...
     */
    public function updateFulfillmentPolicy(string $fulfillmentPolicyId, Model\FulfillmentPolicyRequest $body): Model\SetFulfillmentPolicyResponse
    {
        $path = strtr('/fulfillment_policy/{fulfillmentPolicyId}', [
            '{fulfillmentPolicyId}' => rawurlencode($fulfillmentPolicyId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return Model\SetFulfillmentPolicyResponse::fromArray($response);
    }

    /**
     * This method deletes a fulfillment policy. Supply the ID of the policy you want to delete in the fulfillmentPolicyId path parameter.
     *
     * @param string $fulfillmentPolicyId This path parameter specifies the ID of the fulfillment policy to delete. This ID can be retrieved for a fulfillment policy by using the get...
     *
     * @return array<string, mixed>
     */
    public function deleteFulfillmentPolicy(string $fulfillmentPolicyId): array
    {
        $path = strtr('/fulfillment_policy/{fulfillmentPolicyId}', [
            '{fulfillmentPolicyId}' => rawurlencode($fulfillmentPolicyId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This method retrieves all the fulfillment policies configured for the marketplace you specify using the marketplace_id query parameter.
     *
     * @param string $marketplace_id This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documen...
     */
    public function getFulfillmentPolicies(?string $marketplace_id = null): Model\FulfillmentPolicyResponse
    {
        $path = '/fulfillment_policy';
        $query = [];
        if ($marketplace_id !== null) {
            $query['marketplace_id'] = $marketplace_id;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\FulfillmentPolicyResponse::fromArray($response);
    }

    /**
     * This method retrieves the details for a specific fulfillment policy. In the request, supply both the policy name and its associated marketplace_id as query parameters.
     *
     * @param string $marketplace_id This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documenta...
     * @param string $name This query parameter specifies the seller-defined name of the fulfillment policy you want to retrieve. This value can be retrieved for a ful...
     */
    public function getFulfillmentPolicyByName(?string $marketplace_id = null, ?string $name = null): Model\FulfillmentPolicy
    {
        $path = '/fulfillment_policy/get_by_policy_name';
        $query = [];
        if ($marketplace_id !== null) {
            $query['marketplace_id'] = $marketplace_id;
        }
        if ($name !== null) {
            $query['name'] = $name;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\FulfillmentPolicy::fromArray($response);
    }

    /**
     * This method retrieves all the payment business policies configured for the marketplace you specify using the marketplace_id query parameter.
     *
     * @param string $marketplace_id This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documen...
     */
    public function getPaymentPolicies(?string $marketplace_id = null): Model\PaymentPolicyResponse
    {
        $path = '/payment_policy';
        $query = [];
        if ($marketplace_id !== null) {
            $query['marketplace_id'] = $marketplace_id;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\PaymentPolicyResponse::fromArray($response);
    }

    /**
     * This method creates a new payment policy where the policy encapsulates seller's terms for order payments. A successful request returns the getPaymentPolicy URI to the new policy in the Location response header and the ID for the new policy is returned in the r...
     */
    public function createPaymentPolicy(Model\PaymentPolicyRequest $body): Model\SetPaymentPolicyResponse
    {
        $path = '/payment_policy';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\SetPaymentPolicyResponse::fromArray($response);
    }

    /**
     * This method retrieves the complete details of a payment policy. Supply the ID of the policy you want to retrieve using the paymentPolicyId path parameter.
     *
     * @param string $payment_policy_id This path parameter specifies the ID of the payment policy you want to retrieve. This ID can be retrieved for a payment policy by using the...
     */
    public function getPaymentPolicy(string $payment_policy_id): Model\PaymentPolicy
    {
        $path = strtr('/payment_policy/{payment_policy_id}', [
            '{payment_policy_id}' => rawurlencode($payment_policy_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\PaymentPolicy::fromArray($response);
    }

    /**
     * This method updates an existing payment policy. Specify the policy you want to update using the payment_policy_id path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details...
     *
     * @param string $payment_policy_id This path parameter specifies the ID of the payment policy you want to update. This ID can be retrieved for a payment policy by using the ge...
     */
    public function updatePaymentPolicy(string $payment_policy_id, Model\PaymentPolicyRequest $body): Model\SetPaymentPolicyResponse
    {
        $path = strtr('/payment_policy/{payment_policy_id}', [
            '{payment_policy_id}' => rawurlencode($payment_policy_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return Model\SetPaymentPolicyResponse::fromArray($response);
    }

    /**
     * This method deletes a payment policy. Supply the ID of the policy you want to delete in the paymentPolicyId path parameter.
     *
     * @param string $payment_policy_id This path parameter specifies the unique identifier of the payment policy you want to delete. This ID can be retrieved for a payment policy...
     *
     * @return array<string, mixed>
     */
    public function deletePaymentPolicy(string $payment_policy_id): array
    {
        $path = strtr('/payment_policy/{payment_policy_id}', [
            '{payment_policy_id}' => rawurlencode($payment_policy_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This method retrieves the details of a specific payment policy. Supply both the policy name and its associated marketplace_id in the request query parameters.
     *
     * @param string $marketplace_id This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documenta...
     * @param string $name This query parameter specifies the seller-defined name of the payment policy you want to retrieve. This value can be retrieved for a payment...
     */
    public function getPaymentPolicyByName(?string $marketplace_id = null, ?string $name = null): Model\PaymentPolicy
    {
        $path = '/payment_policy/get_by_policy_name';
        $query = [];
        if ($marketplace_id !== null) {
            $query['marketplace_id'] = $marketplace_id;
        }
        if ($name !== null) {
            $query['name'] = $name;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\PaymentPolicy::fromArray($response);
    }

    /**
     * Note: This method is no longer applicable, as all seller accounts globally have been enabled for the new eBay payment and checkout flow. This method returns whether or not the user is opted-in to the specified payments program. Sellers opt-in to payments progr...
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller's status.
     * @param string $payments_program_type This path parameter specifies the payments program whose status is returned by the call.
     */
    public function getPaymentsProgram(string $marketplace_id, string $payments_program_type): Model\PaymentsProgramResponse
    {
        $path = strtr('/payments_program/{marketplace_id}/{payments_program_type}', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
            '{payments_program_type}' => rawurlencode($payments_program_type),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\PaymentsProgramResponse::fromArray($response);
    }

    /**
     * Note: This method is no longer applicable, as all seller accounts globally have been enabled for the new eBay payment and checkout flow. This method retrieves a seller's onboarding status for a payments program for a specified marketplace. The overall onboardi...
     *
     * @param string $marketplace_id The eBay marketplace ID associated with the onboarding status to retrieve.
     * @param string $payments_program_type The type of payments program whose status is returned by the method.
     */
    public function getPaymentsProgramOnboarding(string $marketplace_id, string $payments_program_type): Model\PaymentsProgramOnboardingResponse
    {
        $path = strtr('/payments_program/{marketplace_id}/{payments_program_type}/onboarding', [
            '{marketplace_id}' => rawurlencode($marketplace_id),
            '{payments_program_type}' => rawurlencode($payments_program_type),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\PaymentsProgramOnboardingResponse::fromArray($response);
    }

    /**
     * This method retrieves the seller's current set of privileges, including whether or not the seller's eBay registration has been completed, as well as the details of their site-wide sellingLimit (the amount and quantity they can sell on a given day).
     */
    public function getPrivileges(): Model\SellingPrivileges
    {
        $path = '/privilege';
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\SellingPrivileges::fromArray($response);
    }

    /**
     * This method gets a list of the seller programs that the seller has opted-in to.
     */
    public function getOptedInPrograms(): Model\Programs
    {
        $path = '/program/get_opted_in_programs';
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\Programs::fromArray($response);
    }

    /**
     * This method opts the seller in to an eBay seller program. Refer to the Account API overview for information about available eBay seller programs. Note: It can take up to 24-hours for eBay to process your request to opt-in to a Seller Program. Use the getOptedI...
     *
     * @return array<string, mixed>
     */
    public function optInToProgram(Model\Program $body): array
    {
        $path = '/program/opt_in';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This method opts the seller out of a seller program in which they are currently opted in to. A seller can retrieve a list of the seller programs they are opted-in to using the getOptedInPrograms method.
     *
     * @return array<string, mixed>
     */
    public function optOutOfProgram(Model\Program $body): array
    {
        $path = '/program/opt_out';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This method retrieves a seller's shipping rate tables for the country specified in the country_code query parameter. If you call this method without specifying a country code, the call returns all of the seller's shipping rate tables. The method's response inc...
     *
     * @param string|null $country_code This query parameter specifies the two-letter ISO 3166 code of country for which you want shipping rate table information. If you do not spe...
     */
    public function getRateTables(?string $country_code = null): Model\RateTableResponse
    {
        $path = '/rate_table';
        $query = [];
        if ($country_code !== null) {
            $query['country_code'] = $country_code;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\RateTableResponse::fromArray($response);
    }

    /**
     * This method retrieves all the return policies configured for the marketplace you specify using the marketplace_id query parameter.
     *
     * @param string $marketplace_id This query parameter specifies the ID of the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay A...
     */
    public function getReturnPolicies(?string $marketplace_id = null): Model\ReturnPolicyResponse
    {
        $path = '/return_policy';
        $query = [];
        if ($marketplace_id !== null) {
            $query['marketplace_id'] = $marketplace_id;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ReturnPolicyResponse::fromArray($response);
    }

    /**
     * This method creates a new return policy where the policy encapsulates seller's terms for returning items. Each policy targets a specific marketplace, and you can create multiple policies for each marketplace. Return policies are not applicable to motor-vehicle...
     */
    public function createReturnPolicy(Model\ReturnPolicyRequest $body): Model\SetReturnPolicyResponse
    {
        $path = '/return_policy';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\SetReturnPolicyResponse::fromArray($response);
    }

    /**
     * This method retrieves the complete details of the return policy specified by the returnPolicyId path parameter.
     *
     * @param string $return_policy_id This path parameter specifies the unique identifier of the return policy you want to retrieve. This ID can be retrieved for a return policy...
     */
    public function getReturnPolicy(string $return_policy_id): Model\ReturnPolicy
    {
        $path = strtr('/return_policy/{return_policy_id}', [
            '{return_policy_id}' => rawurlencode($return_policy_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ReturnPolicy::fromArray($response);
    }

    /**
     * This method updates an existing return policy. Specify the policy you want to update using the return_policy_id path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details sp...
     *
     * @param string $return_policy_id This path parameter specifies the ID of the return policy you want to update. This ID can be retrieved for a return policy by using the getR...
     */
    public function updateReturnPolicy(string $return_policy_id, Model\ReturnPolicyRequest $body): Model\SetReturnPolicyResponse
    {
        $path = strtr('/return_policy/{return_policy_id}', [
            '{return_policy_id}' => rawurlencode($return_policy_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return Model\SetReturnPolicyResponse::fromArray($response);
    }

    /**
     * This method deletes a return policy. Supply the ID of the policy you want to delete in the returnPolicyId path parameter.
     *
     * @param string $return_policy_id This path parameter specifies the unique identifier of the return policy you want to delete. This ID can be retrieved for a return policy by...
     *
     * @return array<string, mixed>
     */
    public function deleteReturnPolicy(string $return_policy_id): array
    {
        $path = strtr('/return_policy/{return_policy_id}', [
            '{return_policy_id}' => rawurlencode($return_policy_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This method retrieves the details of a specific return policy. Supply both the policy name and its associated marketplace_id in the request query parameters.
     *
     * @param string $marketplace_id This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API...
     * @param string $name This query parameter specifies the seller-defined name of the return policy you want to retrieve. This value can be retrieved for a return p...
     */
    public function getReturnPolicyByName(?string $marketplace_id = null, ?string $name = null): Model\ReturnPolicy
    {
        $path = '/return_policy/get_by_policy_name';
        $query = [];
        if ($marketplace_id !== null) {
            $query['marketplace_id'] = $marketplace_id;
        }
        if ($name !== null) {
            $query['name'] = $name;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ReturnPolicy::fromArray($response);
    }

    /**
     * This method creates or updates multiple sales-tax table entries. Sales-tax tables can be set up for countries that support different tax jurisdictions. Note: Sales-tax tables are only available for the US (EBAY_US) and Canada (EBAY_CA) marketplaces. Each sales...
     */
    public function bulkCreateOrReplaceSalesTax(Model\BulkSalesTaxInput $body): Model\UpdatedSalesTaxResponse
    {
        $path = '/bulk_create_or_replace_sales_tax';
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\UpdatedSalesTaxResponse::fromArray($response);
    }

    /**
     * This call retrieves the current sales-tax table entry for a specific tax jurisdiction. Specify the jurisdiction to retrieve using the countryCode and jurisdictionId path parameters. All four response fields will be returned if a sales-tax entry exists for the...
     *
     * @param string $countryCode This path parameter specifies the two-letter ISO 3166 code for the country whose sales tax table you want to retrieve. Note: Sales-tax table...
     * @param string $jurisdictionId This path parameter specifies the ID of the sales tax jurisdiction for the tax table entry to be retrieved. Valid jurisdiction IDs can be re...
     */
    public function getSalesTax(string $countryCode, string $jurisdictionId): Model\SalesTax
    {
        $path = strtr('/sales_tax/{countryCode}/{jurisdictionId}', [
            '{countryCode}' => rawurlencode($countryCode),
            '{jurisdictionId}' => rawurlencode($jurisdictionId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\SalesTax::fromArray($response);
    }

    /**
     * This method creates or updates a sales-tax table entry for a jurisdiction. Specify the tax table entry you want to configure using the two path parameters: countryCode and jurisdictionId. A tax table entry for a jurisdiction is comprised of two fields: one for...
     *
     * @param string $countryCode This path parameter specifies the two-letter ISO 3166 code for the country for which you want to create a sales tax table entry. Note: Sales...
     * @param string $jurisdictionId This path parameter specifies the ID of the tax jurisdiction for the table entry to be created. Valid jurisdiction IDs can be retrieved usin...
     *
     * @return array<string, mixed>
     */
    public function createOrReplaceSalesTax(string $countryCode, string $jurisdictionId, Model\SalesTaxBase $body): array
    {
        $path = strtr('/sales_tax/{countryCode}/{jurisdictionId}', [
            '{countryCode}' => rawurlencode($countryCode),
            '{jurisdictionId}' => rawurlencode($jurisdictionId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('PUT', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This call deletes a sales-tax table entry for a jurisdiction. Specify the jurisdiction to delete using the countryCode and jurisdictionId path parameters. Note: Sales-tax tables are only available for the US (EBAY_US) and Canada (EBAY_CA) marketplaces.
     *
     * @param string $countryCode This path parameter specifies the two-letter ISO 3166 code for the country whose sales tax table entry you want to delete. Note: Sales-tax t...
     * @param string $jurisdictionId This path parameter specifies the ID of the sales tax jurisdiction whose table entry you want to delete. Valid jurisdiction IDs can be retri...
     *
     * @return array<string, mixed>
     */
    public function deleteSalesTax(string $countryCode, string $jurisdictionId): array
    {
        $path = strtr('/sales_tax/{countryCode}/{jurisdictionId}', [
            '{countryCode}' => rawurlencode($countryCode),
            '{jurisdictionId}' => rawurlencode($jurisdictionId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('DELETE', $path, $query, null, $headers);
        return $response;
    }

    /**
     * Use this call to retrieve all sales tax table entries that the seller has defined for a specific country. All four response fields will be returned for each tax jurisdiction that matches the search criteria. If no sales tax rates are defined for the specified,...
     *
     * @param string $country_code This path parameter specifies the two-letter ISO 3166 code for the country whose tax table you want to retrieve. Note: Sales-tax tables are...
     */
    public function getSalesTaxes(?string $country_code = null): Model\SalesTaxes
    {
        $path = '/sales_tax';
        $query = [];
        if ($country_code !== null) {
            $query['country_code'] = $country_code;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\SalesTaxes::fromArray($response);
    }

    /**
     * This method retrieves a list of subscriptions associated with the seller account.
     *
     * @param string|null $limit This field is for future use.
     * @param string|null $continuation_token This field is for future use.
     */
    public function getSubscription(?string $limit = null, ?string $continuation_token = null): Model\SubscriptionResponse
    {
        $path = '/subscription';
        $query = [];
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($continuation_token !== null) {
            $query['continuation_token'] = $continuation_token;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\SubscriptionResponse::fromArray($response);
    }

    /**
     * Note: This method was originally created to see which onboarding requirements were still pending for sellers being onboarded for eBay managed payments, but now that all seller accounts are onboarded globally, this method should now just return an empty payload...
     */
    public function getKYC(): Model\KycResponse
    {
        $path = '/kyc';
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\KycResponse::fromArray($response);
    }

    /**
     * This method allows developers to check the seller eligibility status for eBay advertising programs.
     *
     * @param string|null $program_types A comma-separated list of eBay advertising programs for which eligibility status will be returned. See the AdvertisingProgramEnum type for a...
     * @param string $x_EBAY_C_MARKETPLACE_ID The unique identifier of the eBay marketplace for which the seller eligibility status shall be checked. This header is required or the call...
     */
    public function getAdvertisingEligibility(?string $program_types = null, ?string $x_EBAY_C_MARKETPLACE_ID = null): Model\SellerEligibilityMultiProgramResponse
    {
        $path = '/advertising_eligibility';
        $query = [];
        if ($program_types !== null) {
            $query['program_types'] = $program_types;
        }
        $headers = [];
        if ($x_EBAY_C_MARKETPLACE_ID !== null) {
            $headers['X-EBAY-C-MARKETPLACE-ID'] = (string) $x_EBAY_C_MARKETPLACE_ID;
        }

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\SellerEligibilityMultiProgramResponse::fromArray($response);
    }
}
