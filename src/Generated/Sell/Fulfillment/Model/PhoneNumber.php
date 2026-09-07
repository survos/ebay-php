<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains a string field representing a telephone number.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PhoneNumber
{
    /**
     * @param string|null $phoneNumber The primary telephone number for the shipping recipient.
     */
    public function __construct(
        public ?string $phoneNumber = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            phoneNumber: isset($data['phoneNumber']) ? (string) $data['phoneNumber'] : null,
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
        if ($this->phoneNumber !== null) {
            $data['phoneNumber'] = $this->phoneNumber;
        }

        return $data;
    }
}
