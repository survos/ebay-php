<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the paymentMethods container, which is used by the seller to specify one or more offline payment methods. Note: eBay now controls all electronic payment methods available for a marketplace, so a seller will no longer use this type to specify any electronic payment methods.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentMethod
{
    /**
     * @param list<string>|null $brands Note: This array is no longer applicable and should not be used. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods, including a...
     * @param string|null $paymentMethodType This array is only applicable for listings supporting offline payment methods. See the PaymentMethodTypeEnum type for supported offline payment method enum values. If offline payments are enabled for the policy, provide...
     * @param RecipientAccountReference|null $recipientAccountReference Note: This container is no longer applicable and should not be used. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods, includi...
     */
    public function __construct(
        public ?array $brands = null,
        public ?string $paymentMethodType = null,
        public ?RecipientAccountReference $recipientAccountReference = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            brands: isset($data['brands']) ? (array) $data['brands'] : null,
            paymentMethodType: isset($data['paymentMethodType']) ? (string) $data['paymentMethodType'] : null,
            recipientAccountReference: isset($data['recipientAccountReference']) && is_array($data['recipientAccountReference']) ? RecipientAccountReference::fromArray($data['recipientAccountReference']) : null,
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
        if ($this->brands !== null) {
            $data['brands'] = $this->brands;
        }
        if ($this->paymentMethodType !== null) {
            $data['paymentMethodType'] = $this->paymentMethodType;
        }
        if ($this->recipientAccountReference !== null) {
            $data['recipientAccountReference'] = $this->recipientAccountReference->toArray();
        }

        return $data;
    }
}
