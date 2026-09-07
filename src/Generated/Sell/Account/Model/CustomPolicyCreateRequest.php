<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used by the request payload of the createCustomPolicy method to define a new custom policy for a specific marketplace.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CustomPolicyCreateRequest
{
    /**
     * @param string|null $description Contains the seller's policy and policy terms. Max length: 15,000
     * @param string|null $label Customer-facing label shown on View Item pages for items to which the policy applies. This seller-defined string is displayed as a system-generated hyperlink pointing to the seller's policy information. Max length: 65
     * @param string|null $name The seller-defined name for the custom policy. Names must be unique for policies assigned to the same seller and policy type. Note: This field is visible only to the seller. Max length: 65
     * @param string|null $policyType Specifies the type of custom policy being created. Two Custom Policy types are supported: Product Compliance (PRODUCT_COMPLIANCE) Takeback (TAKE_BACK) For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?string $description = null,
        public ?string $label = null,
        public ?string $name = null,
        public ?string $policyType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            description: isset($data['description']) ? (string) $data['description'] : null,
            label: isset($data['label']) ? (string) $data['label'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
            policyType: isset($data['policyType']) ? (string) $data['policyType'] : null,
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
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->label !== null) {
            $data['label'] = $this->label;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->policyType !== null) {
            $data['policyType'] = $this->policyType;
        }

        return $data;
    }
}
