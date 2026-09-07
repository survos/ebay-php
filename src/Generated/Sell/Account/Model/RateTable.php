<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used to provide details about each shipping rate table that is returned in the getRateTables response.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class RateTable
{
    /**
     * @param string|null $countryCode A two-letter ISO 3166 country code representing the eBay marketplace where the shipping rate table is defined. For implementation help, refer to eBay API documentation
     * @param string|null $locality This enumeration value returned here indicates whether the shipping rate table is a domestic or international shipping rate table. For implementation help, refer to eBay API documentation
     * @param string|null $name The seller-defined name for the shipping rate table.
     * @param string|null $rateTableId A unique eBay-assigned ID for a seller's shipping rate table. These rateTableId values are used to associate shipping rate tables to fulfillment business policies or directly to listings through an add/revise/relist call...
     */
    public function __construct(
        public ?string $countryCode = null,
        public ?string $locality = null,
        public ?string $name = null,
        public ?string $rateTableId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            countryCode: isset($data['countryCode']) ? (string) $data['countryCode'] : null,
            locality: isset($data['locality']) ? (string) $data['locality'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
            rateTableId: isset($data['rateTableId']) ? (string) $data['rateTableId'] : null,
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
        if ($this->countryCode !== null) {
            $data['countryCode'] = $this->countryCode;
        }
        if ($this->locality !== null) {
            $data['locality'] = $this->locality;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->rateTableId !== null) {
            $data['rateTableId'] = $this->rateTableId;
        }

        return $data;
    }
}
