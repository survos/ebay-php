<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by each recorded activity on a payment dispute, from creation to resolution.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentDisputeActivity
{
    /**
     * @param string|null $activityDate The timestamp in this field shows the date/time of the payment dispute activity. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), als...
     * @param string|null $activityType This enumeration value indicates the type of activity that occured on the payment dispute. For example, a value of DISPUTE_OPENED is returned when a payment disute is first created, a value indicating the seller's decisi...
     * @param string|null $actor This enumeration value indicates the actor that performed the action. Possible values include the BUYER, SELLER, CS_AGENT (eBay customer service), or SYSTEM. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?string $activityDate = null,
        public ?string $activityType = null,
        public ?string $actor = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            activityDate: isset($data['activityDate']) ? (string) $data['activityDate'] : null,
            activityType: isset($data['activityType']) ? (string) $data['activityType'] : null,
            actor: isset($data['actor']) ? (string) $data['actor'] : null,
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
        if ($this->activityDate !== null) {
            $data['activityDate'] = $this->activityDate;
        }
        if ($this->activityType !== null) {
            $data['activityType'] = $this->activityType;
        }
        if ($this->actor !== null) {
            $data['actor'] = $this->actor;
        }

        return $data;
    }
}
