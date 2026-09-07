<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows. Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class TimeDuration
{
    /**
     * @param string|null $unit These enum values represent the time measurement unit, such as DAY. A span of time is defined when you apply the value specified in the value field to the value specified for unit. See TimeDurationUnitEnum for a complete...
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
