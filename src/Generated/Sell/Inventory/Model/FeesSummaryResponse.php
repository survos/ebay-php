<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base response payload for the getListingFees call.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class FeesSummaryResponse
{
    /**
     * @param list<FeeSummary>|null $feeSummaries This container consists of an array of one or more listing fees that the seller can expect to pay for unpublished offers specified in the call request. Many fee types will get returned even when they are 0.0.
     */
    public function __construct(
        public ?array $feeSummaries = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            feeSummaries: isset($data['feeSummaries']) && is_array($data['feeSummaries'])
                ? array_values(array_map(static fn (array $i): FeeSummary => FeeSummary::fromArray($i), $data['feeSummaries']))
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
        if ($this->feeSummaries !== null) {
            $data['feeSummaries'] = array_map(static fn (FeeSummary $i): array => $i->toArray(), $this->feeSummaries);
        }

        return $data;
    }
}
