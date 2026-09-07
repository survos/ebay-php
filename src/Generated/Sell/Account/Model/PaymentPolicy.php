<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the paymentPolicy response container, a container which defines a seller's payment business policy for a specific marketplace.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentPolicy
{
    /**
     * @param list<CategoryType>|null $categoryTypes This container indicates whether the payment policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
     * @param Deposit|null $deposit This container is applicable only if the categoryTypes.name field is set to MOTORS_VEHICLES, and is only returned if the seller requires an initial deposit on motor vehicles. The container shows the amount due for the de...
     * @param string|null $description A seller-defined description of the payment policy. This description is only for the seller's use, and is not exposed on any eBay pages. Max length: 250
     * @param TimeDuration|null $fullPaymentDueIn This container applies to motor vehicles listings only and indicates when a final payment for the vehicle is due. This value is always returned if categoryTypes is set to MOTORS_VEHICLES. This container indicates the num...
     * @param bool|null $immediatePay If this field is returned as true, immediate payment is required from the buyer for: A fixed-price itemAn auction item where the buyer uses the 'Buy it Now' optionA deposit for a motor vehicle listing It is possible for...
     * @param string|null $marketplaceId The ID of the eBay marketplace to which the payment business policy applies. For implementation help, refer to eBay API documentation
     * @param string|null $name A seller-defined name for this payment policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     * @param string|null $paymentInstructions Although this field may be returned for some older payment business policies, payment instructions are no longer supported by payment business policies. If this field is returned, it can be ignored and these payment inst...
     * @param list<PaymentMethod>|null $paymentMethods This container is returned to show the payment methods that are accepted for the payment business policy. Sellers do not have to specify any electronic payment methods for listings, so this array will often be returned e...
     * @param string|null $paymentPolicyId A unique eBay-assigned ID for a payment business policy. This ID is generated when the policy is created.
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
        public ?string $paymentPolicyId = null,
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
            paymentPolicyId: isset($data['paymentPolicyId']) ? (string) $data['paymentPolicyId'] : null,
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
        if ($this->paymentPolicyId !== null) {
            $data['paymentPolicyId'] = $this->paymentPolicyId;
        }

        return $data;
    }
}
