<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * The base response of the getAdvertisingEligibility method that contains the seller eligibility information for one or more advertising programs.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SellerEligibilityMultiProgramResponse
{
    /**
     * @param list<SellerEligibilityResponse>|null $advertisingEligibility An array of response fields that define the seller eligibility for eBay advertising programs.
     */
    public function __construct(
        public ?array $advertisingEligibility = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            advertisingEligibility: isset($data['advertisingEligibility']) && is_array($data['advertisingEligibility'])
                ? array_values(array_map(static fn (array $i): SellerEligibilityResponse => SellerEligibilityResponse::fromArray($i), $data['advertisingEligibility']))
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
        if ($this->advertisingEligibility !== null) {
            $data['advertisingEligibility'] = array_map(static fn (SellerEligibilityResponse $i): array => $i->toArray(), $this->advertisingEligibility);
        }

        return $data;
    }
}
