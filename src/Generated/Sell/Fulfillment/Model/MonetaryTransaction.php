<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used to provide details about one or more monetary transactions that occur as part of a payment dispute.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class MonetaryTransaction
{
    /**
     * @param string|null $date This timestamp indicates when the monetary transaction occurred. A date is returned for all monetary transactions. The following format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2015-08-04T19:09:02.768Z.
     * @param string|null $type This enumeration value indicates whether the monetary transaction is a charge or a credit to the seller. For implementation help, refer to eBay API documentation
     * @param string|null $reason This enumeration value indicates the reason for the monetary transaction. For implementation help, refer to eBay API documentation
     * @param DisputeAmount|null $amount The amount involved in the monetary transaction. For active cross-border trade orders, the currency conversion and exchangeRate fields will be displayed as well.
     */
    public function __construct(
        public ?string $date = null,
        public ?string $type = null,
        public ?string $reason = null,
        public ?DisputeAmount $amount = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            date: isset($data['date']) ? (string) $data['date'] : null,
            type: isset($data['type']) ? (string) $data['type'] : null,
            reason: isset($data['reason']) ? (string) $data['reason'] : null,
            amount: isset($data['amount']) && is_array($data['amount']) ? DisputeAmount::fromArray($data['amount']) : null,
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
        if ($this->date !== null) {
            $data['date'] = $this->date;
        }
        if ($this->type !== null) {
            $data['type'] = $this->type;
        }
        if ($this->reason !== null) {
            $data['reason'] = $this->reason;
        }
        if ($this->amount !== null) {
            $data['amount'] = $this->amount->toArray();
        }

        return $data;
    }
}
