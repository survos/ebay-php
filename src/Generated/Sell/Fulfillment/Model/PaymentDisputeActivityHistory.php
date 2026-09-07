<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the base response of the getActivities method, and includes a log of all activities of a payment dispute, from creation to resolution.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentDisputeActivityHistory
{
    /**
     * @param list<PaymentDisputeActivity>|null $activity This array holds all activities of a payment dispute, from creation to resolution. For each activity, the activity type, the actor, and a timestamp is shown. The getActivities response is dynamic, and grows with each rec...
     */
    public function __construct(
        public ?array $activity = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            activity: isset($data['activity']) && is_array($data['activity'])
                ? array_values(array_map(static fn (array $i): PaymentDisputeActivity => PaymentDisputeActivity::fromArray($i), $data['activity']))
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
        if ($this->activity !== null) {
            $data['activity'] = array_map(static fn (PaymentDisputeActivity $i): array => $i->toArray(), $this->activity);
        }

        return $data;
    }
}
