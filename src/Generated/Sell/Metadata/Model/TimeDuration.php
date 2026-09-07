<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A complex type that specifies a period of time using a specified time-measurement unit.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class TimeDuration
{
    /**
     * @param string|null $unit A time-measurement unit that specifies a singular period of time. A span of time is defined when you apply the value specified in the value field to the value specified for unit. Time-measurement units can be YEAR, MONTH...
     * @param int|null $value An integer that represents an amount of time, as measured by the time-measurement unit specified in the unit field.
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
