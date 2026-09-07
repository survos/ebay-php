<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to express the special operating hours of a store location on a specific date. A specialHours container is needed when the store's opening hours on a specific date are different than the normal operating hours on that particular day of the week.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SpecialHours
{
    /**
     * @param string|null $date A date value is required for each specific date that the store location has special operating hours or is closed for that date. The timestamp is formatted as an ISO 8601 string, which is based on the 24-hour Coordinated...
     * @param list<Interval>|null $intervals This array is used to set the operating hours for the date specified in the corresponding date field. These special operating hours on this specific date will override the normal operating hours for that day of the week...
     */
    public function __construct(
        public ?string $date = null,
        public ?array $intervals = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            date: isset($data['date']) ? (string) $data['date'] : null,
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
        if ($this->date !== null) {
            $data['date'] = $this->date;
        }
        if ($this->intervals !== null) {
            $data['intervals'] = array_map(static fn (Interval $i): array => $i->toArray(), $this->intervals);
        }

        return $data;
    }
}
