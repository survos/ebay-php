<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains shipping and contact information for a buyer or an eBay shipping partner.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ExtendedContact
{
    /**
     * @param string|null $companyName The company name associated with the buyer or eBay shipping partner. This field is only returned if defined/applicable to the buyer or eBay shipping partner.
     * @param Address|null $contactAddress This container shows the shipping address of the buyer or eBay shipping partner.
     * @param string|null $email This field contains the email address of the buyer. This address will be returned for up to 14 days from order creation. If an order is more than 14 days old, no address is returned. Note: If returned, this field contain...
     * @param string|null $fullName The full name of the buyer or eBay shipping partner. Note: The fullName will not be returned for any order that is more than 90 days old.
     * @param PhoneNumber|null $primaryPhone The primary telephone number of the buyer or eBay shipping partner. Note: The primaryPhone will not be returned for any order that is more than 90 days old.
     */
    public function __construct(
        public ?string $companyName = null,
        public ?Address $contactAddress = null,
        public ?string $email = null,
        public ?string $fullName = null,
        public ?PhoneNumber $primaryPhone = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            companyName: isset($data['companyName']) ? (string) $data['companyName'] : null,
            contactAddress: isset($data['contactAddress']) && is_array($data['contactAddress']) ? Address::fromArray($data['contactAddress']) : null,
            email: isset($data['email']) ? (string) $data['email'] : null,
            fullName: isset($data['fullName']) ? (string) $data['fullName'] : null,
            primaryPhone: isset($data['primaryPhone']) && is_array($data['primaryPhone']) ? PhoneNumber::fromArray($data['primaryPhone']) : null,
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
        if ($this->companyName !== null) {
            $data['companyName'] = $this->companyName;
        }
        if ($this->contactAddress !== null) {
            $data['contactAddress'] = $this->contactAddress->toArray();
        }
        if ($this->email !== null) {
            $data['email'] = $this->email;
        }
        if ($this->fullName !== null) {
            $data['fullName'] = $this->fullName;
        }
        if ($this->primaryPhone !== null) {
            $data['primaryPhone'] = $this->primaryPhone->toArray();
        }

        return $data;
    }
}
