<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the createInventoryLocation call to specify cut-off time(s) for an inventory location, as well as any overrides for these times.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SameDayShippingCutOffTimes
{
    /**
     * @param list<Overrides>|null $overrides This container can be used to override the existing cut-off time(s), specified in the weeklySchedule container, for a specific date or date range.
     * @param list<WeeklySchedule>|null $weeklySchedule This container is used to specify the weekly schedule for shipping and handling cut-off times. A cut-off time is required for each business day that the fulfillment center operates. Any orders made after the specified cu...
     */
    public function __construct(
        public ?array $overrides = null,
        public ?array $weeklySchedule = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            overrides: isset($data['overrides']) && is_array($data['overrides'])
                ? array_values(array_map(static fn (array $i): Overrides => Overrides::fromArray($i), $data['overrides']))
                : null,
            weeklySchedule: isset($data['weeklySchedule']) && is_array($data['weeklySchedule'])
                ? array_values(array_map(static fn (array $i): WeeklySchedule => WeeklySchedule::fromArray($i), $data['weeklySchedule']))
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
        if ($this->overrides !== null) {
            $data['overrides'] = array_map(static fn (Overrides $i): array => $i->toArray(), $this->overrides);
        }
        if ($this->weeklySchedule !== null) {
            $data['weeklySchedule'] = array_map(static fn (WeeklySchedule $i): array => $i->toArray(), $this->weeklySchedule);
        }

        return $data;
    }
}
