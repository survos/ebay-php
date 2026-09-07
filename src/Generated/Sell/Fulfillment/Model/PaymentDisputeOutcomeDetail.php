<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the resolution container that is returned for payment disputes that have been resolved.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentDisputeOutcomeDetail
{
    /**
     * @param SimpleAmount|null $fees This container will show the dollar value of any fees associated with the payment dispute. This container is only returned if there are fees associated with the payment dispute.
     * @param SimpleAmount|null $protectedAmount This container shows the amount of money that the seller is protected against in a payment dispute under eBay's seller protection policy.
     * @param string|null $protectionStatus This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved. For implementa...
     * @param string|null $reasonForClosure The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved. For implementation help, refer to eBay API doc...
     * @param SimpleAmount|null $recoupAmount This container shows the dollar amount being recouped from the seller. This container is empty if the seller wins the payment dispute or if the seller is fully protected by eBay's seller protection policy.
     * @param SimpleAmount|null $totalFeeCredit This container shows the amount of money in selling fee credits due back to the seller after a payment dispute is settled.
     */
    public function __construct(
        public ?SimpleAmount $fees = null,
        public ?SimpleAmount $protectedAmount = null,
        public ?string $protectionStatus = null,
        public ?string $reasonForClosure = null,
        public ?SimpleAmount $recoupAmount = null,
        public ?SimpleAmount $totalFeeCredit = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fees: isset($data['fees']) && is_array($data['fees']) ? SimpleAmount::fromArray($data['fees']) : null,
            protectedAmount: isset($data['protectedAmount']) && is_array($data['protectedAmount']) ? SimpleAmount::fromArray($data['protectedAmount']) : null,
            protectionStatus: isset($data['protectionStatus']) ? (string) $data['protectionStatus'] : null,
            reasonForClosure: isset($data['reasonForClosure']) ? (string) $data['reasonForClosure'] : null,
            recoupAmount: isset($data['recoupAmount']) && is_array($data['recoupAmount']) ? SimpleAmount::fromArray($data['recoupAmount']) : null,
            totalFeeCredit: isset($data['totalFeeCredit']) && is_array($data['totalFeeCredit']) ? SimpleAmount::fromArray($data['totalFeeCredit']) : null,
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
        if ($this->fees !== null) {
            $data['fees'] = $this->fees->toArray();
        }
        if ($this->protectedAmount !== null) {
            $data['protectedAmount'] = $this->protectedAmount->toArray();
        }
        if ($this->protectionStatus !== null) {
            $data['protectionStatus'] = $this->protectionStatus;
        }
        if ($this->reasonForClosure !== null) {
            $data['reasonForClosure'] = $this->reasonForClosure;
        }
        if ($this->recoupAmount !== null) {
            $data['recoupAmount'] = $this->recoupAmount->toArray();
        }
        if ($this->totalFeeCredit !== null) {
            $data['totalFeeCredit'] = $this->totalFeeCredit->toArray();
        }

        return $data;
    }
}
