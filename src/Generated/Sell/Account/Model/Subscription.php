<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the getSubscription response container, which defines the subscription types and levels for the seller account.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Subscription
{
    /**
     * @param string|null $marketplaceId The marketplace with which the subscription is associated. For implementation help, refer to eBay API documentation
     * @param string|null $subscriptionId The subscription ID.
     * @param string|null $subscriptionLevel The subscription level. For example, subscription levels for an eBay store include Starter, Basic, Featured, Anchor, and Enterprise levels.
     * @param string|null $subscriptionType The kind of entity with which the subscription is associated, such as an eBay store. For implementation help, refer to eBay API documentation
     * @param TimeDuration|null $term The term of the subscription plan (typically in months).
     */
    public function __construct(
        public ?string $marketplaceId = null,
        public ?string $subscriptionId = null,
        public ?string $subscriptionLevel = null,
        public ?string $subscriptionType = null,
        public ?TimeDuration $term = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            marketplaceId: isset($data['marketplaceId']) ? (string) $data['marketplaceId'] : null,
            subscriptionId: isset($data['subscriptionId']) ? (string) $data['subscriptionId'] : null,
            subscriptionLevel: isset($data['subscriptionLevel']) ? (string) $data['subscriptionLevel'] : null,
            subscriptionType: isset($data['subscriptionType']) ? (string) $data['subscriptionType'] : null,
            term: isset($data['term']) && is_array($data['term']) ? TimeDuration::fromArray($data['term']) : null,
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
        if ($this->marketplaceId !== null) {
            $data['marketplaceId'] = $this->marketplaceId;
        }
        if ($this->subscriptionId !== null) {
            $data['subscriptionId'] = $this->subscriptionId;
        }
        if ($this->subscriptionLevel !== null) {
            $data['subscriptionLevel'] = $this->subscriptionLevel;
        }
        if ($this->subscriptionType !== null) {
            $data['subscriptionType'] = $this->subscriptionType;
        }
        if ($this->term !== null) {
            $data['term'] = $this->term->toArray();
        }

        return $data;
    }
}
