<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type identifies the kind of listing and its duration periods.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ListingDuration
{
    /**
     * @param list<string>|null $durationValues This array defines the supported time duration options available for the listing type.
     * @param string|null $listingType The enumerated value returned in this field indicates the listing type for the duration value(s). For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?array $durationValues = null,
        public ?string $listingType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            durationValues: isset($data['durationValues']) ? (array) $data['durationValues'] : null,
            listingType: isset($data['listingType']) ? (string) $data['listingType'] : null,
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
        if ($this->durationValues !== null) {
            $data['durationValues'] = $this->durationValues;
        }
        if ($this->listingType !== null) {
            $data['listingType'] = $this->listingType;
        }

        return $data;
    }
}
