<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about the order's buyer.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Buyer
{
    /**
     * @param ExtendedContact|null $buyerRegistrationAddress Buyer's contact information that includes the buyer's name, email, phone number, and address.
     * @param TaxAddress|null $taxAddress This container consists of address information that can be used by sellers for tax purpose. Note: When using the eBay vault program, if an item is shipped to a vault, the tax address will be the vault address.
     * @param TaxIdentifier|null $taxIdentifier This container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces. Note: Currently,...
     * @param string|null $username The buyer's eBay user ID.
     */
    public function __construct(
        public ?ExtendedContact $buyerRegistrationAddress = null,
        public ?TaxAddress $taxAddress = null,
        public ?TaxIdentifier $taxIdentifier = null,
        public ?string $username = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            buyerRegistrationAddress: isset($data['buyerRegistrationAddress']) && is_array($data['buyerRegistrationAddress']) ? ExtendedContact::fromArray($data['buyerRegistrationAddress']) : null,
            taxAddress: isset($data['taxAddress']) && is_array($data['taxAddress']) ? TaxAddress::fromArray($data['taxAddress']) : null,
            taxIdentifier: isset($data['taxIdentifier']) && is_array($data['taxIdentifier']) ? TaxIdentifier::fromArray($data['taxIdentifier']) : null,
            username: isset($data['username']) ? (string) $data['username'] : null,
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
        if ($this->buyerRegistrationAddress !== null) {
            $data['buyerRegistrationAddress'] = $this->buyerRegistrationAddress->toArray();
        }
        if ($this->taxAddress !== null) {
            $data['taxAddress'] = $this->taxAddress->toArray();
        }
        if ($this->taxIdentifier !== null) {
            $data['taxIdentifier'] = $this->taxIdentifier->toArray();
        }
        if ($this->username !== null) {
            $data['username'] = $this->username;
        }

        return $data;
    }
}
