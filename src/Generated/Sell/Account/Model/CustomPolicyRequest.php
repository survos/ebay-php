<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CustomPolicyRequest
{
    /**
     * @param string|null $description Contains the seller specified policy and policy terms. Note: Always supply this field. If this field is not specified, any previous value is removed. Call the getCustomPolicy method to return the present field value for...
     * @param string|null $label Customer-facing label shown on View Item pages for items to which the policy applies. This seller-defined string is displayed as a system-generated hyperlink pointing to seller specified policy information. Note: Always...
     * @param string|null $name The seller-defined name for the custom policy. Names must be unique for policies assigned to the same seller and policy type. Note: This field is visible only to the seller. Note: Always supply this field. If this field...
     */
    public function __construct(
        public ?string $description = null,
        public ?string $label = null,
        public ?string $name = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            description: isset($data['description']) ? (string) $data['description'] : null,
            label: isset($data['label']) ? (string) $data['label'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
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

        return $data;
    }
}
