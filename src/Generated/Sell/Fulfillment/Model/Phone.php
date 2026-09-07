<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the returnAddress
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Phone
{
    /**
     * @param string|null $countryCode The two-letter, ISO 3166 code associated with the seller's phone number. This field is needed if the buyer is located in a different country than the seller. It is also OK to provide if the buyer and seller are both loca...
     * @param string|null $number The seller's primary phone number associated with the return address. When this number is provided in a contestPaymentDispute or contestPaymentDispute method, it is provided as one continuous numeric string, including th...
     */
    public function __construct(
        public ?string $countryCode = null,
        public ?string $number = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            countryCode: isset($data['countryCode']) ? (string) $data['countryCode'] : null,
            number: isset($data['number']) ? (string) $data['number'] : null,
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
        if ($this->number !== null) {
            $data['number'] = $this->number;
        }

        return $data;
    }
}
