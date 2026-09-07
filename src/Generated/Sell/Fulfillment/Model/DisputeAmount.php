<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class DisputeAmount
{
    /**
     * @param string|null $convertedFromCurrency The three-letter ISO 4217 code representing the currency of the amount in the convertedFromValue field. This value is the pre-conversion currency. This field is only returned if/when currency conversion was applied by eB...
     * @param string|null $convertedFromValue The monetary amount before any conversion is performed, in the currency specified by the convertedFromCurrency field. This value is the pre-conversion amount. The value field contains the converted amount of this value,...
     * @param string|null $currency A three-letter ISO 4217 code that indicates the currency of the amount in the value field. This field is always returned with any container using Amount type. Default: The currency of the authenticated user's country. Fo...
     * @param string|null $exchangeRate The exchange rate used for the monetary conversion. This field shows the exchange rate used to convert the dollar value in the value field from the dollar value in the convertedFromValue field. This field is only returne...
     * @param string|null $value The monetary amount, in the currency specified by the currency field. This field is always returned with any container using Amount type.
     */
    public function __construct(
        public ?string $convertedFromCurrency = null,
        public ?string $convertedFromValue = null,
        public ?string $currency = null,
        public ?string $exchangeRate = null,
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
            exchangeRate: isset($data['exchangeRate']) ? (string) $data['exchangeRate'] : null,
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
        if ($this->exchangeRate !== null) {
            $data['exchangeRate'] = $this->exchangeRate;
        }
        if ($this->value !== null) {
            $data['value'] = $this->value;
        }

        return $data;
    }
}
