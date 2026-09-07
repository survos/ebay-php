<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the taxIdentifier container that is returned in getOrder. The taxIdentifier container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces. Note: Currently, the taxIdentifier container is only returned in getOrder and not in getOrders. So, if a...
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class TaxIdentifier
{
    /**
     * @param string|null $taxpayerId This value is the unique tax ID associated with the buyer. The type of tax identification is shown in the taxIdentifierType field.
     * @param string|null $taxIdentifierType This enumeration value indicates the type of tax identification being used for the buyer. The different tax types are defined in the TaxIdentifierTypeEnum type. For implementation help, refer to eBay API documentation
     * @param string|null $issuingCountry This two-letter code indicates the country that issued the buyer's tax ID. The country that the two-letter code represents can be found in the CountryCodeEnum type, or in the ISO 3166 standard. For implementation help, r...
     */
    public function __construct(
        public ?string $taxpayerId = null,
        public ?string $taxIdentifierType = null,
        public ?string $issuingCountry = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            taxpayerId: isset($data['taxpayerId']) ? (string) $data['taxpayerId'] : null,
            taxIdentifierType: isset($data['taxIdentifierType']) ? (string) $data['taxIdentifierType'] : null,
            issuingCountry: isset($data['issuingCountry']) ? (string) $data['issuingCountry'] : null,
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
        if ($this->taxpayerId !== null) {
            $data['taxpayerId'] = $this->taxpayerId;
        }
        if ($this->taxIdentifierType !== null) {
            $data['taxIdentifierType'] = $this->taxIdentifierType;
        }
        if ($this->issuingCountry !== null) {
            $data['issuingCountry'] = $this->issuingCountry;
        }

        return $data;
    }
}
