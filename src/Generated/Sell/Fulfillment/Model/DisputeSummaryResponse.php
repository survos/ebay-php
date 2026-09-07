<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type defines the base response payload of the getPaymentDisputeSummaries method. Each payment dispute that matches the input criteria is returned under the paymentDisputeSummaries array.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class DisputeSummaryResponse
{
    /**
     * @param string|null $href The URI of the getPaymentDisputeSummaries call request that produced the current page of the result set.
     * @param int|null $limit This value shows the maximum number of payment disputes that will appear on one page of the result set. The limit value can be passed in as a query parameter in the request, or if it is not used, it defaults to 200. If t...
     * @param string|null $next The getPaymentDisputeSummaries call URI to use if you wish to view the next page of the result set. For example, the following URI returns records 11 thru 20 from the collection of payment disputes: path/payment_dispute_...
     * @param int|null $offset This integer value indicates the number of payment disputes skipped before listing the first payment dispute from the result set. The offset value can be passed in as a query parameter in the request, or if it is not use...
     * @param list<PaymentDisputeSummary>|null $paymentDisputeSummaries Each payment dispute that matches the input criteria is returned under this array. If no payment disputes are found, an empty array is returned.
     * @param string|null $prev The getPaymentDisputeSummaries call URI to use if you wish to view the previous page of the result set. For example, the following URI returns records 1 thru 10 from the collection of payment disputes: path/payment_dispu...
     * @param int|null $total This integer value is the total number of payment disputes that matched the input criteria. If the total number of entries exceeds the value that was set for limit in the request payload, you will have to make multiple A...
     */
    public function __construct(
        public ?string $href = null,
        public ?int $limit = null,
        public ?string $next = null,
        public ?int $offset = null,
        public ?array $paymentDisputeSummaries = null,
        public ?string $prev = null,
        public ?int $total = null,
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
            paymentDisputeSummaries: isset($data['paymentDisputeSummaries']) && is_array($data['paymentDisputeSummaries'])
                ? array_values(array_map(static fn (array $i): PaymentDisputeSummary => PaymentDisputeSummary::fromArray($i), $data['paymentDisputeSummaries']))
                : null,
            prev: isset($data['prev']) ? (string) $data['prev'] : null,
            total: isset($data['total']) ? (int) $data['total'] : null,
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
        if ($this->paymentDisputeSummaries !== null) {
            $data['paymentDisputeSummaries'] = array_map(static fn (PaymentDisputeSummary $i): array => $i->toArray(), $this->paymentDisputeSummaries);
        }
        if ($this->prev !== null) {
            $data['prev'] = $this->prev;
        }
        if ($this->total !== null) {
            $data['total'] = $this->total;
        }

        return $data;
    }
}
