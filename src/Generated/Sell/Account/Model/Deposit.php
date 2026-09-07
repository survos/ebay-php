<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used to specify/indicate that an initial deposit is required for a motor vehicle listing.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Deposit
{
    /**
     * @param Amount|null $amount This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate pa...
     * @param TimeDuration|null $dueIn This value indicates the number of hours that the buyer has (after they commit to buy) to pay the initial deposit on a motor vehicle. Valid dueIn times are 24, 48, and 72 hours. HOUR is set as the unit value, and 24, 48...
     * @param list<PaymentMethod>|null $paymentMethods This array is no longer applicable and should not be used since eBay now manages the electronic payment options available to buyers to pay the deposit.
     */
    public function __construct(
        public ?Amount $amount = null,
        public ?TimeDuration $dueIn = null,
        public ?array $paymentMethods = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? Amount::fromArray($data['amount']) : null,
            dueIn: isset($data['dueIn']) && is_array($data['dueIn']) ? TimeDuration::fromArray($data['dueIn']) : null,
            paymentMethods: isset($data['paymentMethods']) && is_array($data['paymentMethods'])
                ? array_values(array_map(static fn (array $i): PaymentMethod => PaymentMethod::fromArray($i), $data['paymentMethods']))
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
        if ($this->amount !== null) {
            $data['amount'] = $this->amount->toArray();
        }
        if ($this->dueIn !== null) {
            $data['dueIn'] = $this->dueIn->toArray();
        }
        if ($this->paymentMethods !== null) {
            $data['paymentMethods'] = array_map(static fn (PaymentMethod $i): array => $i->toArray(), $this->paymentMethods);
        }

        return $data;
    }
}
