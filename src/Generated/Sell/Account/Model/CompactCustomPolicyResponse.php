<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * The response payload for requests that return a list of custom policies.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CompactCustomPolicyResponse
{
    /**
     * @param string|null $customPolicyId The unique custom policy identifier for the policy being returned. Note: This value is automatically assigned by the system when the policy is created.
     * @param string|null $label Customer-facing label shown on View Item pages for items to which the policy applies. This seller-defined string is displayed as a system-generated hyperlink pointing to the seller's policy information. Max length: 65
     * @param string|null $name The seller-defined name for the custom policy. Names must be unique for policies assigned to the same seller and policy type. Note: This field is visible only to the seller. Max length: 65
     * @param string|null $policyType Specifies the type of Custom Policy being returned. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?string $customPolicyId = null,
        public ?string $label = null,
        public ?string $name = null,
        public ?string $policyType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            customPolicyId: isset($data['customPolicyId']) ? (string) $data['customPolicyId'] : null,
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
        if ($this->customPolicyId !== null) {
            $data['customPolicyId'] = $this->customPolicyId;
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
