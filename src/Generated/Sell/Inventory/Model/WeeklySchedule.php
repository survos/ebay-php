<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type describes the weekly schedule for cut-off times.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class WeeklySchedule
{
    /**
     * @param string|null $cutOffTime This field specifies the cut-off times (in 24-hour format) for the business day(s) specified in the dayOfWeekEnum array. Cut-off times default to the time zone of the specified address if the timeZoneId is not provided....
     * @param list<string>|null $dayOfWeekEnum This comma-separated array defines the days of week for which the specified cutOffTime is used.
     */
    public function __construct(
        public ?string $cutOffTime = null,
        public ?array $dayOfWeekEnum = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            cutOffTime: isset($data['cutOffTime']) ? (string) $data['cutOffTime'] : null,
            dayOfWeekEnum: isset($data['dayOfWeekEnum']) ? (array) $data['dayOfWeekEnum'] : null,
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
        if ($this->cutOffTime !== null) {
            $data['cutOffTime'] = $this->cutOffTime;
        }
        if ($this->dayOfWeekEnum !== null) {
            $data['dayOfWeekEnum'] = $this->dayOfWeekEnum;
        }

        return $data;
    }
}
