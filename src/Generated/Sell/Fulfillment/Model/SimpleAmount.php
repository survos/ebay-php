<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type defines the monetary value of the payment dispute, and the currency used.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SimpleAmount
{
    /**
     * @param string|null $currency A three-letter ISO 4217 code (such as USD for US site) that indicates the currency of the amount in the value field. Both the value and currency fields are always returned with the amount container. For implementation he...
     * @param string|null $value The monetary amount of the payment dispute. Both the value and currency fields are always returned with the amount container.
     */
    public function __construct(
        public ?string $currency = null,
        public ?string $value = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            currency: isset($data['currency']) ? (string) $data['currency'] : null,
            value: isset($data['value']) ? (string) $data['value'] : null,
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
        if ($this->currency !== null) {
            $data['currency'] = $this->currency;
        }
        if ($this->value !== null) {
            $data['value'] = $this->value;
        }

        return $data;
    }
}
