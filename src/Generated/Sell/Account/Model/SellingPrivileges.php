<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the base response of the getPrivileges method.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SellingPrivileges
{
    /**
     * @param bool|null $sellerRegistrationCompleted If this field is returned as true, the seller's registration is completed. If this field is returned as false, the registration process is not complete.
     * @param SellingLimit|null $sellingLimit This container lists the monthly cap for the quantity of items sold and total sales amount allowed for the seller's account. This container may not be returned if a seller does not have a monthly cap for total quantity s...
     */
    public function __construct(
        public ?bool $sellerRegistrationCompleted = null,
        public ?SellingLimit $sellingLimit = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            sellerRegistrationCompleted: isset($data['sellerRegistrationCompleted']) ? (bool) $data['sellerRegistrationCompleted'] : null,
            sellingLimit: isset($data['sellingLimit']) && is_array($data['sellingLimit']) ? SellingLimit::fromArray($data['sellingLimit']) : null,
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
        if ($this->sellerRegistrationCompleted !== null) {
            $data['sellerRegistrationCompleted'] = $this->sellerRegistrationCompleted;
        }
        if ($this->sellingLimit !== null) {
            $data['sellingLimit'] = $this->sellingLimit->toArray();
        }

        return $data;
    }
}
