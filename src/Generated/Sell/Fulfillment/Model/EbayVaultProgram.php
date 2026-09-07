<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class EbayVaultProgram
{
    /**
     * @param string|null $fulfillmentType This field specifies how an eBay vault order will be fulfilled. Supported options are:Seller to Vault: the order will be shipped by the seller to an authenticator.Vault to Vault: the order will be shipped from an eBay va...
     */
    public function __construct(
        public ?string $fulfillmentType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fulfillmentType: isset($data['fulfillmentType']) ? (string) $data['fulfillmentType'] : null,
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
        if ($this->fulfillmentType !== null) {
            $data['fulfillmentType'] = $this->fulfillmentType;
        }

        return $data;
    }
}
