<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * The response payload for the getFulfillmentPolicies method. Note: Pagination has not yet been enabled for getFulfillmentPolicies, so all of the pagination-related fields are for future use.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class FulfillmentPolicyResponse
{
    /**
     * @param list<FulfillmentPolicy>|null $fulfillmentPolicies A list of all of the seller's fulfillment policies defined for the specified marketplace. This array will be returned as empty if no fulfillment policies are defined for the specified marketplace.
     * @param string|null $href This field is for future use.
     * @param int|null $limit This field is for future use.
     * @param string|null $next This field is for future use.
     * @param int|null $offset This field is for future use.
     * @param string|null $prev This field is for future use.
     * @param int|null $total The total number of fulfillment policies retrieved in the result set. If no fulfillment policies are defined for the specified marketplace, this field is returned with a value of 0.
     */
    public function __construct(
        public ?array $fulfillmentPolicies = null,
        public ?string $href = null,
        public ?int $limit = null,
        public ?string $next = null,
        public ?int $offset = null,
        public ?string $prev = null,
        public ?int $total = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fulfillmentPolicies: isset($data['fulfillmentPolicies']) && is_array($data['fulfillmentPolicies'])
                ? array_values(array_map(static fn (array $i): FulfillmentPolicy => FulfillmentPolicy::fromArray($i), $data['fulfillmentPolicies']))
                : null,
            href: isset($data['href']) ? (string) $data['href'] : null,
            limit: isset($data['limit']) ? (int) $data['limit'] : null,
            next: isset($data['next']) ? (string) $data['next'] : null,
            offset: isset($data['offset']) ? (int) $data['offset'] : null,
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
        if ($this->fulfillmentPolicies !== null) {
            $data['fulfillmentPolicies'] = array_map(static fn (FulfillmentPolicy $i): array => $i->toArray(), $this->fulfillmentPolicies);
        }
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
        if ($this->prev !== null) {
            $data['prev'] = $this->prev;
        }
        if ($this->total !== null) {
            $data['total'] = $this->total;
        }

        return $data;
    }
}
