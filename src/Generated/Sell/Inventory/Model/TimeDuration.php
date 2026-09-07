<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to indicate the fulfillment time for an In-Store Pickup order, or for an order than will be shipped to the buyer.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class TimeDuration
{
    /**
     * @param string|null $unit This enumeration value indicates the time unit used to specify the fulfillment time, such as BUSINESS_DAY. For implementation help, refer to eBay API documentation
     * @param int|null $value The integer value in this field, along with the time unit in the unit field, will indicate the fulfillment time. For standard orders that will be shipped, this value will indicate the expected fulfillment time if the inv...
     */
    public function __construct(
        public ?string $unit = null,
        public ?int $value = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            unit: isset($data['unit']) ? (string) $data['unit'] : null,
            value: isset($data['value']) ? (int) $data['value'] : null,
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
        if ($this->unit !== null) {
            $data['unit'] = $this->unit;
        }
        if ($this->value !== null) {
            $data['value'] = $this->value;
        }

        return $data;
    }
}
