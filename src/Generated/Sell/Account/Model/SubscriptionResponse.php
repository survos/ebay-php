<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the response payload for the getSubscription method. Note: Pagination has not yet been enabled for getSubscription, so all of the pagination-related fields are for future use.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SubscriptionResponse
{
    /**
     * @param string|null $href This field is for future use.
     * @param int|null $limit This field is for future use.
     * @param string|null $next This field is for future use.
     * @param list<Subscription>|null $subscriptions An array of subscriptions associated with the seller account.
     * @param int|null $total The total number of subscriptions displayed on the current page of results.
     */
    public function __construct(
        public ?string $href = null,
        public ?int $limit = null,
        public ?string $next = null,
        public ?array $subscriptions = null,
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
            subscriptions: isset($data['subscriptions']) && is_array($data['subscriptions'])
                ? array_values(array_map(static fn (array $i): Subscription => Subscription::fromArray($i), $data['subscriptions']))
                : null,
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
        if ($this->subscriptions !== null) {
            $data['subscriptions'] = array_map(static fn (Subscription $i): array => $i->toArray(), $this->subscriptions);
        }
        if ($this->total !== null) {
            $data['total'] = $this->total;
        }

        return $data;
    }
}
