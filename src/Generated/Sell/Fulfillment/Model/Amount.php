<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Amount
{
    /**
     * @param string|null $convertedFromCurrency A three-letter ISO 4217 code that indicates the currency of the amount in the convertedFromValue field. This value is required or returned only if currency conversion/localization is required, and represents the pre-conv...
     * @param string|null $convertedFromValue The monetary amount before any conversion is performed, in the currency specified by the convertedFromCurrency field. This value is required or returned only if currency conversion/localization is required. The value fie...
     * @param string|null $currency A three-letter ISO 4217 code that indicates the currency of the amount in the value field. If currency conversion/localization is required, this is the post-conversion currency of the amount in the value field. Default:...
     * @param string|null $value The monetary amount, in the currency specified by the currency field. If currency conversion/localization is required, this value is the converted amount, and the convertedFromValue field contains the amount in the origi...
     */
    public function __construct(
        public ?string $convertedFromCurrency = null,
        public ?string $convertedFromValue = null,
        public ?string $currency = null,
        public ?string $value = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            convertedFromCurrency: isset($data['convertedFromCurrency']) ? (string) $data['convertedFromCurrency'] : null,
            convertedFromValue: isset($data['convertedFromValue']) ? (string) $data['convertedFromValue'] : null,
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
        if ($this->convertedFromCurrency !== null) {
            $data['convertedFromCurrency'] = $this->convertedFromCurrency;
        }
        if ($this->convertedFromValue !== null) {
            $data['convertedFromValue'] = $this->convertedFromValue;
        }
        if ($this->currency !== null) {
            $data['currency'] = $this->currency;
        }
        if ($this->value !== null) {
            $data['value'] = $this->value;
        }

        return $data;
    }
}
