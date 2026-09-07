<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about any sales tax applied to a line item.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Tax
{
    /**
     * @param Amount|null $amount The monetary amount of the tax. The taxes array is always returned for each line item in the order, but this amount will only be returned when the line item is subject to any type of sales tax.
     * @param string|null $taxType Tax type. This field is only available when fieldGroups is set to TAX_BREAKDOWN. If the order has fees, a breakdown of the fees is also provided. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?Amount $amount = null,
        public ?string $taxType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            amount: isset($data['amount']) && is_array($data['amount']) ? Amount::fromArray($data['amount']) : null,
            taxType: isset($data['taxType']) ? (string) $data['taxType'] : null,
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
        if ($this->taxType !== null) {
            $data['taxType'] = $this->taxType;
        }

        return $data;
    }
}
