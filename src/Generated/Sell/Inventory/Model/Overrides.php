<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type defines the override dates for cut-off times. This allows sellers to set special hours for their inventory location and specify different cut-off times on these days.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Overrides
{
    /**
     * @param string|null $cutOffTime This field is used to override the cut-off time(s) specified in the weeklySchedule container. If an order is placed after this time in the specified date or date range, it will be handled by the seller on the following d...
     * @param string|null $endDate The end date of the cut-off time override in ISO 8601 format, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Note: If the cut-off time override is only for a single day, input the same date in the...
     * @param string|null $startDate The start date of the cut-off time override in ISO 8601 format, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Note: If the cut-off time override is only for a single day, input the same date in th...
     */
    public function __construct(
        public ?string $cutOffTime = null,
        public ?string $endDate = null,
        public ?string $startDate = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            cutOffTime: isset($data['cutOffTime']) ? (string) $data['cutOffTime'] : null,
            endDate: isset($data['endDate']) ? (string) $data['endDate'] : null,
            startDate: isset($data['startDate']) ? (string) $data['startDate'] : null,
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
        if ($this->endDate !== null) {
            $data['endDate'] = $this->endDate;
        }
        if ($this->startDate !== null) {
            $data['startDate'] = $this->startDate;
        }

        return $data;
    }
}
