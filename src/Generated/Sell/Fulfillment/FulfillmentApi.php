<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment;

use Survos\Ebay\Http\EbayTransportInterface;
use Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * Fulfillment API.
 *
 * Generated from eBay's OpenAPI contract. Do not edit.
 * Authentication, sandbox selection and error mapping live behind the transport.
 */
final readonly class FulfillmentApi
{
    public const string BASE_PATH = '/sell/fulfillment/v1';

    public function __construct(
        private EbayTransportInterface $transport,
    ) {
    }

    /**
     * Use this call to retrieve the contents of an order based on its unique identifier, orderId. This value was returned in the getOrders call's orders.orderId field when you searched for orders by creation date, modification date, or fulfillment status. Include th...
     *
     * @param string|null $fieldGroups This parameter lets you control what is returned in the response. Note: The only presently supported value is TAX_BREAKDOWN. This field grou...
     * @param string $orderId This path parameter is used to specify the unique identifier of the order being retrieved. Use the getOrders method to retrieve order IDs. O...
     */
    public function getOrder(string $orderId, ?string $fieldGroups = null): Model\Order
    {
        $path = strtr(self::BASE_PATH . '/order/{orderId}', [
            '{orderId}' => rawurlencode($orderId),
        ]);
        $query = [];
        if ($fieldGroups !== null) {
            $query['fieldGroups'] = $fieldGroups;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\Order::fromArray($response);
    }

    /**
     * Use this method to search for and retrieve one or more orders based on their creation date, last modification date, or fulfillment status using the filter parameter. You can alternatively specify a list of orders using the orderIds parameter. Include the optio...
     *
     * @param string|null $fieldGroups This parameter lets you control what is returned in the response. Note: The only presently supported value is TAX_BREAKDOWN. This field grou...
     * @param string|null $filter One or more comma-separated criteria for narrowing down the collection of orders returned by this call. These criteria correspond to specifi...
     * @param string|null $limit The number of orders to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagina...
     * @param string|null $offset Specifies the number of orders to skip in the result set before returning the first order in the paginated response. Combine offset with the...
     * @param string|null $orderIds A comma-separated list of the unique identifiers of the orders to retrieve (maximum 50). If one or more order ID values are specified throug...
     */
    public function getOrders(?string $fieldGroups = null, ?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $orderIds = null): Model\OrderSearchPagedCollection
    {
        $path = self::BASE_PATH . '/order';
        $query = [];
        if ($fieldGroups !== null) {
            $query['fieldGroups'] = $fieldGroups;
        }
        if ($filter !== null) {
            $query['filter'] = $filter;
        }
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($offset !== null) {
            $query['offset'] = $offset;
        }
        if ($orderIds !== null) {
            $query['orderIds'] = $orderIds;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\OrderSearchPagedCollection::fromArray($response);
    }

    /**
     * Important! Due to EU & UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including issueRefund. Please refer to Digital Signatures for API...
     *
     * @param string $order_id This path parameter is used to specify the unique identifier of the order associated with a refund. Use the getOrders method to retrieve ord...
     */
    public function issueRefund(string $order_id, Model\IssueRefundRequest $body): Model\Refund
    {
        $path = strtr(self::BASE_PATH . '/order/{order_id}/issue_refund', [
            '{order_id}' => rawurlencode($order_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\Refund::fromArray($response);
    }

    /**
     * Use this call to retrieve the contents of all fulfillments currently defined for a specified order based on the order's unique identifier, orderId. This value is returned in the getOrders call's members.orderId field when you search for orders by creation date...
     *
     * @param string $orderId This path parameter is used to specify the unique identifier of the order associated with the shipping fulfillments being retrieved. Use the...
     */
    public function getShippingFulfillments(string $orderId): Model\ShippingFulfillmentPagedCollection
    {
        $path = strtr(self::BASE_PATH . '/order/{orderId}/shipping_fulfillment', [
            '{orderId}' => rawurlencode($orderId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ShippingFulfillmentPagedCollection::fromArray($response);
    }

    /**
     * When you group an order's line items into one or more packages, each package requires a corresponding plan for handling, addressing, and shipping; this is a shipping fulfillment. For each package, execute this call once to generate a shipping fulfillment assoc...
     *
     * @param string $orderId This path parameter is used to specify the unique identifier of the order associated with the shipping fulfillment being created. Use the ge...
     *
     * @return array<string, mixed>
     */
    public function createShippingFulfillment(string $orderId, Model\ShippingFulfillmentDetails $body): array
    {
        $path = strtr(self::BASE_PATH . '/order/{orderId}/shipping_fulfillment', [
            '{orderId}' => rawurlencode($orderId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * Use this call to retrieve the contents of a fulfillment based on its unique identifier, fulfillmentId (combined with the associated order's orderId). The fulfillmentId value was originally generated by the createShippingFulfillment call, and is returned by the...
     *
     * @param string $fulfillmentId This path parameter is used to specify the unique identifier of the shipping fulfillment being retrieved. Use the getShippingFulfillments me...
     * @param string $orderId This path parameter is used to specify the unique identifier of the order associated with the shipping fulfillment being retrieved. Use the...
     */
    public function getShippingFulfillment(string $fulfillmentId, string $orderId): Model\ShippingFulfillment
    {
        $path = strtr(self::BASE_PATH . '/order/{orderId}/shipping_fulfillment/{fulfillmentId}', [
            '{fulfillmentId}' => rawurlencode($fulfillmentId),
            '{orderId}' => rawurlencode($orderId),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\ShippingFulfillment::fromArray($response);
    }

    /**
     * This method retrieves detailed information on a specific payment dispute. The payment dispute identifier is passed in as path parameter at the end of the call URI. Below is a summary of the information that is retrieved:Current status of payment disputeAmount...
     *
     * @param string $payment_dispute_id This parameter is used to specify the unique identifier of the payment dispute being retrieved. Use the getPaymentDisputeSummaries method to...
     */
    public function getPaymentDispute(string $payment_dispute_id): Model\PaymentDispute
    {
        $path = strtr(self::BASE_PATH . '/payment_dispute/{payment_dispute_id}', [
            '{payment_dispute_id}' => rawurlencode($payment_dispute_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\PaymentDispute::fromArray($response);
    }

    /**
     * This call retrieves a specific evidence file for a payment dispute. The following three identifying parameters are needed in the call URI:payment_dispute_id: the identifier of the payment dispute. The identifier of each payment dispute is returned in the getPa...
     *
     * @param string $payment_dispute_id This path parameter is used to specify the unique identifier of the payment dispute associated with the evidence file being retrieved. Use t...
     * @param string $evidence_id This query parameter is used to specify the unique identifier of the evidential file set. The identifier of an evidential file set for a pay...
     * @param string $file_id This query parameter is used to specify the unique identifier of an evidential file. This file must belong to the evidential file set identi...
     *
     * @return array<string, mixed>
     */
    public function fetchEvidenceContent(string $payment_dispute_id, ?string $evidence_id = null, ?string $file_id = null): array
    {
        $path = strtr(self::BASE_PATH . '/payment_dispute/{payment_dispute_id}/fetch_evidence_content', [
            '{payment_dispute_id}' => rawurlencode($payment_dispute_id),
        ]);
        $query = [];
        if ($evidence_id !== null) {
            $query['evidence_id'] = $evidence_id;
        }
        if ($file_id !== null) {
            $query['file_id'] = $file_id;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return $response;
    }

    /**
     * This method retrieve a log of activity for a payment dispute. The identifier of the payment dispute is passed in as a path parameter. The output includes a timestamp for each action of the payment dispute, from creation to resolution, and all steps in between.
     *
     * @param string $payment_dispute_id This parameter is used to specify the unique identifier of the payment dispute associated with the activity log being retrieved. Use the get...
     */
    public function getActivities(string $payment_dispute_id): Model\PaymentDisputeActivityHistory
    {
        $path = strtr(self::BASE_PATH . '/payment_dispute/{payment_dispute_id}/activity', [
            '{payment_dispute_id}' => rawurlencode($payment_dispute_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\PaymentDisputeActivityHistory::fromArray($response);
    }

    /**
     * This method is used retrieve one or more payment disputes filed against the seller. These payment disputes can be open or recently closed. The following filter types are available in the request payload to control the payment disputes that are returned:Dispute...
     *
     * @param string|null $order_id This filter is used if the seller wishes to retrieve one or more payment disputes filed against a specific order. It is possible that there...
     * @param string|null $buyer_username This filter is used if the seller wishes to retrieve one or more payment disputes opened by a specific buyer. The string that is passed in t...
     * @param string|null $open_date_from The open_date_from and/or open_date_to date filters are used if the seller wishes to retrieve payment disputes opened within a specific date...
     * @param string|null $open_date_to The open_date_from and/or open_date_to date filters are used if the seller wishes to retrieve payment disputes opened within a specific date...
     * @param string|null $payment_dispute_status This filter is used if the seller wishes to only retrieve payment disputes in one or more specific states. To filter by more than one status...
     * @param string|null $limit The value passed in this query parameter sets the maximum number of payment disputes to return per page of data. The value passed in this fi...
     * @param string|null $offset This field is used to specify the number of records to skip in the result set before returning the first payment dispute in the paginated re...
     */
    public function getPaymentDisputeSummaries(?string $order_id = null, ?string $buyer_username = null, ?string $open_date_from = null, ?string $open_date_to = null, ?string $payment_dispute_status = null, ?string $limit = null, ?string $offset = null): Model\DisputeSummaryResponse
    {
        $path = self::BASE_PATH . '/payment_dispute_summary';
        $query = [];
        if ($order_id !== null) {
            $query['order_id'] = $order_id;
        }
        if ($buyer_username !== null) {
            $query['buyer_username'] = $buyer_username;
        }
        if ($open_date_from !== null) {
            $query['open_date_from'] = $open_date_from;
        }
        if ($open_date_to !== null) {
            $query['open_date_to'] = $open_date_to;
        }
        if ($payment_dispute_status !== null) {
            $query['payment_dispute_status'] = $payment_dispute_status;
        }
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($offset !== null) {
            $query['offset'] = $offset;
        }
        $headers = [];

        $response = $this->transport->request('GET', $path, $query, null, $headers);
        return Model\DisputeSummaryResponse::fromArray($response);
    }

    /**
     * This method is used if the seller wishes to contest a payment dispute initiated by the buyer. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the getPaymentDispute...
     *
     * @param string $payment_dispute_id This parameter is used to specify the unique identifier of the payment dispute being contested. Use the getPaymentDisputeSummaries method to...
     *
     * @return array<string, mixed>
     */
    public function contestPaymentDispute(string $payment_dispute_id, Model\ContestPaymentDisputeRequest $body): array
    {
        $path = strtr(self::BASE_PATH . '/payment_dispute/{payment_dispute_id}/contest', [
            '{payment_dispute_id}' => rawurlencode($payment_dispute_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This method is used if the seller wishes to accept a payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the getPaymentDisputeSummaries method. The re...
     *
     * @param string $payment_dispute_id This parameter is used to specify the unique identifier of the payment dispute being accepted. Use the getPaymentDisputeSummaries method to...
     *
     * @return array<string, mixed>
     */
    public function acceptPaymentDispute(string $payment_dispute_id, Model\AcceptPaymentDisputeRequest $body): array
    {
        $path = strtr(self::BASE_PATH . '/payment_dispute/{payment_dispute_id}/accept', [
            '{payment_dispute_id}' => rawurlencode($payment_dispute_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }

    /**
     * This method is used to upload an evidence file for a contested payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the getPaymentDisputeSummaries meth...
     *
     * @param string $payment_dispute_id This parameter is used to specify the unique identifier of the contested payment dispute for which the user intends to upload an evidence fi...
     */
    public function uploadEvidenceFile(string $payment_dispute_id): Model\FileEvidence
    {
        $path = strtr(self::BASE_PATH . '/payment_dispute/{payment_dispute_id}/upload_evidence_file', [
            '{payment_dispute_id}' => rawurlencode($payment_dispute_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, null, $headers);
        return Model\FileEvidence::fromArray($response);
    }

    /**
     * This method is used by the seller to add one or more evidence files to address a payment dispute initiated by the buyer. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved...
     *
     * @param string $payment_dispute_id This parameter is used to specify the unique identifier of the contested payment dispute for which the seller wishes to add evidence files....
     */
    public function addEvidence(string $payment_dispute_id, Model\AddEvidencePaymentDisputeRequest $body): Model\AddEvidencePaymentDisputeResponse
    {
        $path = strtr(self::BASE_PATH . '/payment_dispute/{payment_dispute_id}/add_evidence', [
            '{payment_dispute_id}' => rawurlencode($payment_dispute_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return Model\AddEvidencePaymentDisputeResponse::fromArray($response);
    }

    /**
     * This method is used by the seller to update an existing evidence set for a payment dispute with one or more evidence files. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrie...
     *
     * @param string $payment_dispute_id This parameter is used to specify the unique identifier of the contested payment dispute for which the user plans to update the evidence set...
     *
     * @return array<string, mixed>
     */
    public function updateEvidence(string $payment_dispute_id, Model\UpdateEvidencePaymentDisputeRequest $body): array
    {
        $path = strtr(self::BASE_PATH . '/payment_dispute/{payment_dispute_id}/update_evidence', [
            '{payment_dispute_id}' => rawurlencode($payment_dispute_id),
        ]);
        $query = [];
        $headers = [];

        $response = $this->transport->request('POST', $path, $query, $body->toArray(), $headers);
        return $response;
    }
}
