<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the response payload of the createOffer and updateOffer calls. The offerId field contains the unique identifier for the offer if the offer is successfully created by the createOffer call. The warnings field contains any errors and/or warnings that may have been triggered by the call. Note: The offerId value is only returned with a successful createOffer call. This field will n...
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class OfferResponse
{
    /**
     * @param string|null $offerId The unique identifier of the offer that was just created with a createOffer call. It is not returned if the createOffer call fails to create an offer. This identifier will be needed for many offer-related calls. Note: Th...
     * @param list<Error>|null $warnings This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur.
     */
    public function __construct(
        public ?string $offerId = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            offerId: isset($data['offerId']) ? (string) $data['offerId'] : null,
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
        if ($this->offerId !== null) {
            $data['offerId'] = $this->offerId;
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
