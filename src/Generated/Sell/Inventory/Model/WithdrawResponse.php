<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * The base response of the withdrawOffer call.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class WithdrawResponse
{
    /**
     * @param string|null $listingId The unique identifier of the eBay listing associated with the offer that was withdrawn. This field will not be returned if the eBay listing was not successfully ended.
     * @param list<Error>|null $warnings This container will be returned if there were one or more warnings associated with the attempt to withdraw the offer.
     */
    public function __construct(
        public ?string $listingId = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            listingId: isset($data['listingId']) ? (string) $data['listingId'] : null,
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
        if ($this->listingId !== null) {
            $data['listingId'] = $this->listingId;
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
