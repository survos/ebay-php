<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ReturnPolicy
{
    /**
     * @param string|null $categoryId The category ID to which the return policies apply.
     * @param string|null $categoryTreeId A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy informa...
     * @param ReturnPolicyDetails|null $domestic This complex type defines the category policies related to domestic item returns.
     * @param ReturnPolicyDetails|null $international This complex type defines the category policies related to international item returns.
     * @param bool|null $required If set to true, this flag indicates that you must specify a return policy for items listed in the associated category. Note that not accepting returns (setting returnsAcceptedEnabled to false) is a valid return policy.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?ReturnPolicyDetails $domestic = null,
        public ?ReturnPolicyDetails $international = null,
        public ?bool $required = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            domestic: isset($data['domestic']) && is_array($data['domestic']) ? ReturnPolicyDetails::fromArray($data['domestic']) : null,
            international: isset($data['international']) && is_array($data['international']) ? ReturnPolicyDetails::fromArray($data['international']) : null,
            required: isset($data['required']) ? (bool) $data['required'] : null,
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
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->domestic !== null) {
            $data['domestic'] = $this->domestic->toArray();
        }
        if ($this->international !== null) {
            $data['international'] = $this->international->toArray();
        }
        if ($this->required !== null) {
            $data['required'] = $this->required;
        }

        return $data;
    }
}
