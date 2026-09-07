<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used to define specific shipping regions. There are four 'levels' of shipping regions, including large geographical regions (like 'Asia', 'Europe', or 'Middle East'), individual countries, US states or Canadian provinces, and special locations/domestic regions within a country (like 'Alaska/Hawaii' or 'PO Box').
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Region
{
    /**
     * @param string|null $regionName A string that indicates the name of a region, as defined by eBay. A "region" can be either a 'world region' (e.g., the "Middle East" or "Southeast Asia"), a country (represented with a two-letter country code), a state o...
     * @param string|null $regionType Reserved for future use. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?string $regionName = null,
        public ?string $regionType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            regionName: isset($data['regionName']) ? (string) $data['regionName'] : null,
            regionType: isset($data['regionType']) ? (string) $data['regionType'] : null,
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
        if ($this->regionName !== null) {
            $data['regionName'] = $this->regionName;
        }
        if ($this->regionType !== null) {
            $data['regionType'] = $this->regionType;
        }

        return $data;
    }
}
