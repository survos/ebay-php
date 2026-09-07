<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to express the regular operating hours of a merchant's store or fulfillment center during the days of the week.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OperatingHours
{
    /**
     * @param string|null $dayOfWeekEnum A dayOfWeekEnum value is required for each day of the week that the store location has regular operating hours. This field is returned if operating hours are defined for the store location. For implementation help, refer...
     * @param list<Interval>|null $intervals This container is used to define the opening and closing times of a store location's working day (defined in the dayOfWeekEnum field). An intervals container is needed for each day of the week that the store location is...
     */
    public function __construct(
        public ?string $dayOfWeekEnum = null,
        public ?array $intervals = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            dayOfWeekEnum: isset($data['dayOfWeekEnum']) ? (string) $data['dayOfWeekEnum'] : null,
            intervals: isset($data['intervals']) && is_array($data['intervals'])
                ? array_values(array_map(static fn (array $i): Interval => Interval::fromArray($i), $data['intervals']))
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
        if ($this->dayOfWeekEnum !== null) {
            $data['dayOfWeekEnum'] = $this->dayOfWeekEnum;
        }
        if ($this->intervals !== null) {
            $data['intervals'] = array_map(static fn (Interval $i): array => $i->toArray(), $this->intervals);
        }

        return $data;
    }
}
