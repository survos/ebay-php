<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to provide shipping specification details, such as the weekly cut-off schedule for order handling and cut-off override(s), for a fulfillment center location.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class FulfillmentCenterSpecifications
{
    /**
     * @param SameDayShippingCutOffTimes|null $sameDayShippingCutOffTimes Note: This container only applies to listings with same-day handling. This container specifies cut-off time(s) for order handling (and optionally cut-off overrides) at a fulfillment center location. For example, if the c...
     */
    public function __construct(
        public ?SameDayShippingCutOffTimes $sameDayShippingCutOffTimes = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            sameDayShippingCutOffTimes: isset($data['sameDayShippingCutOffTimes']) && is_array($data['sameDayShippingCutOffTimes']) ? SameDayShippingCutOffTimes::fromArray($data['sameDayShippingCutOffTimes']) : null,
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
        if ($this->sameDayShippingCutOffTimes !== null) {
            $data['sameDayShippingCutOffTimes'] = $this->sameDayShippingCutOffTimes->toArray();
        }

        return $data;
    }
}
