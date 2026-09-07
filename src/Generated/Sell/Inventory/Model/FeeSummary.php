<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to display the expected listing fees for each unpublished offer specified in the request of the getListingFees call.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class FeeSummary
{
    /**
     * @param list<Fee>|null $fees This container is an array of listing fees that can be expected to be applied to an offer on the specified eBay marketplace (marketplaceId value). Many fee types will get returned even when they are 0.0. See the Standard...
     * @param string|null $marketplaceId This is the unique identifier of the eBay site for which listing fees for the offer are applicable. For implementation help, refer to eBay API documentation
     * @param list<Error>|null $warnings This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur.
     */
    public function __construct(
        public ?array $fees = null,
        public ?string $marketplaceId = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fees: isset($data['fees']) && is_array($data['fees'])
                ? array_values(array_map(static fn (array $i): Fee => Fee::fromArray($i), $data['fees']))
                : null,
            marketplaceId: isset($data['marketplaceId']) ? (string) $data['marketplaceId'] : null,
            warnings: isset($data['warnings']) && is_array($data['warnings'])
                ? array_values(array_map(static fn (array $i): Error => Error::fromArray($i), $data['warnings']))
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
        if ($this->fees !== null) {
            $data['fees'] = array_map(static fn (Fee $i): array => $i->toArray(), $this->fees);
        }
        if ($this->marketplaceId !== null) {
            $data['marketplaceId'] = $this->marketplaceId;
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
