<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This root container defines a seller's payment business policy for a specific marketplace and category group. This type is used when creating or updating a payment business policy.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentPolicyRequest
{
    /**
     * @param list<CategoryType>|null $categoryTypes This container is used to specify whether the payment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
     * @param Deposit|null $deposit This container is used if the seller wants to require an initial deposit on a motor vehicle listing. In this container, the seller sets the deposit amount and the due date for the deposit. Because eBay controls all elect...
     * @param string|null $description A seller-defined description of the payment business policy. This description is only for the seller's use, and is not exposed on any eBay pages. Max length: 250
     * @param TimeDuration|null $fullPaymentDueIn This container is used to specify the number of days that a buyer has to make their full payment to the seller and close the remaining balance on a motor vehicle transaction. This container must be specified for motor ve...
     * @param bool|null $immediatePay This field should be included and set to true if the seller wants to require immediate payment from the buyer for: A fixed-price itemAn auction item where the buyer is using the 'Buy it Now' optionA deposit for a motor v...
     * @param string|null $marketplaceId The ID of the eBay marketplace to which this payment business policy applies. For implementation help, refer to eBay API documentation
     * @param string|null $name A seller-defined name for this payment business policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     * @param string|null $paymentInstructions Note: DO NOT USE THIS FIELD. Payment instructions are no longer supported by payment business policies.A free-form string field that allows sellers to add detailed payment instructions to their listings.
     * @param list<PaymentMethod>|null $paymentMethods Note: This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.This array is used to specify on...
     */
    public function __construct(
        public ?array $categoryTypes = null,
        public ?Deposit $deposit = null,
        public ?string $description = null,
        public ?TimeDuration $fullPaymentDueIn = null,
        public ?bool $immediatePay = null,
        public ?string $marketplaceId = null,
        public ?string $name = null,
        public ?string $paymentInstructions = null,
        public ?array $paymentMethods = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryTypes: isset($data['categoryTypes']) && is_array($data['categoryTypes'])
                ? array_values(array_map(static fn (array $i): CategoryType => CategoryType::fromArray($i), $data['categoryTypes']))
                : null,
            deposit: isset($data['deposit']) && is_array($data['deposit']) ? Deposit::fromArray($data['deposit']) : null,
            description: isset($data['description']) ? (string) $data['description'] : null,
            fullPaymentDueIn: isset($data['fullPaymentDueIn']) && is_array($data['fullPaymentDueIn']) ? TimeDuration::fromArray($data['fullPaymentDueIn']) : null,
            immediatePay: isset($data['immediatePay']) ? (bool) $data['immediatePay'] : null,
            marketplaceId: isset($data['marketplaceId']) ? (string) $data['marketplaceId'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
            paymentInstructions: isset($data['paymentInstructions']) ? (string) $data['paymentInstructions'] : null,
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
        if ($this->categoryTypes !== null) {
            $data['categoryTypes'] = array_map(static fn (CategoryType $i): array => $i->toArray(), $this->categoryTypes);
        }
        if ($this->deposit !== null) {
            $data['deposit'] = $this->deposit->toArray();
        }
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->fullPaymentDueIn !== null) {
            $data['fullPaymentDueIn'] = $this->fullPaymentDueIn->toArray();
        }
        if ($this->immediatePay !== null) {
            $data['immediatePay'] = $this->immediatePay;
        }
        if ($this->marketplaceId !== null) {
            $data['marketplaceId'] = $this->marketplaceId;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->paymentInstructions !== null) {
            $data['paymentInstructions'] = $this->paymentInstructions;
        }
        if ($this->paymentMethods !== null) {
            $data['paymentMethods'] = array_map(static fn (PaymentMethod $i): array => $i->toArray(), $this->paymentMethods);
        }

        return $data;
    }
}
