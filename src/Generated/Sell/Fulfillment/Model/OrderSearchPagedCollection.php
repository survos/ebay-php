<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the specifications for the collection of orders that match the search or filter criteria of a getOrders call. The collection is grouped into a result set, and based on the query parameters that are set (including the limit and offset parameters), the result set may included multiple pages, but only one page of the result set can be viewed at a time.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OrderSearchPagedCollection
{
    /**
     * @param string|null $href The URI of the getOrders call request that produced the current page of the result set.
     * @param int|null $limit The maximum number of orders returned per page of the result set. The limit value can be passed in as a query parameter, or if omitted, its value defaults to 50. Note: If this is the last or only page of the result set,...
     * @param string|null $next The getOrders call URI to use if you wish to view the next page of the result set. For example, the following URI returns records 41 thru 50 from the collection of orders: path/order?limit=10&offset=40 This field is only...
     * @param int|null $offset The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the offset query parameter. Note: The items in a paginated result set use a zero-based l...
     * @param list<Order>|null $orders This array contains one or more orders that are part of the current result set, that is controlled by the input criteria. The details of each order include information about the buyer, order history, shipping fulfillment...
     * @param string|null $prev The getOrders call URI for the previous result set. For example, the following URI returns orders 21 thru 30 from the collection of orders: path/order?limit=10&offset=20 This field is only returned if there is a previous...
     * @param int|null $total The total number of orders in the results set based on the current input criteria. Note: If no orders are found, this field is returned with a value of 0.
     * @param list<Error>|null $warnings This array is returned if one or more errors or warnings occur with the call request.
     */
    public function __construct(
        public ?string $href = null,
        public ?int $limit = null,
        public ?string $next = null,
        public ?int $offset = null,
        public ?array $orders = null,
        public ?string $prev = null,
        public ?int $total = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            href: isset($data['href']) ? (string) $data['href'] : null,
            limit: isset($data['limit']) ? (int) $data['limit'] : null,
            next: isset($data['next']) ? (string) $data['next'] : null,
            offset: isset($data['offset']) ? (int) $data['offset'] : null,
            orders: isset($data['orders']) && is_array($data['orders'])
                ? array_values(array_map(static fn (array $i): Order => Order::fromArray($i), $data['orders']))
                : null,
            prev: isset($data['prev']) ? (string) $data['prev'] : null,
            total: isset($data['total']) ? (int) $data['total'] : null,
            warnings: isset($data['warnings']) && is_array($data['warnings'])
                ? array_values(array_map(static fn (array $i): Error => Error::fromArray($i), $data['warnings']))
                : null,
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
        if ($this->href !== null) {
            $data['href'] = $this->href;
        }
        if ($this->limit !== null) {
            $data['limit'] = $this->limit;
        }
        if ($this->next !== null) {
            $data['next'] = $this->next;
        }
        if ($this->offset !== null) {
            $data['offset'] = $this->offset;
        }
        if ($this->orders !== null) {
            $data['orders'] = array_map(static fn (Order $i): array => $i->toArray(), $this->orders);
        }
        if ($this->prev !== null) {
            $data['prev'] = $this->prev;
        }
        if ($this->total !== null) {
            $data['total'] = $this->total;
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
