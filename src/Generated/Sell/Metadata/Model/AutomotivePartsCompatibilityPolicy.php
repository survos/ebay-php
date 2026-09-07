<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AutomotivePartsCompatibilityPolicy
{
    /**
     * @param string|null $categoryId The category ID to which the automotive parts compatibility policies apply.
     * @param string|null $categoryTreeId A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy informa...
     * @param string|null $compatibilityBasedOn Indicates whether the category supports parts compatibility by either ASSEMBLY or by SPECIFICATION. For implementation help, refer to eBay API documentation
     * @param list<string>|null $compatibleVehicleTypes Indicates the compatibility classification of the part based on high-level vehicle types.
     * @param int|null $maxNumberOfCompatibleVehicles Specifies the maximum number of compatible vehicle-applications allowed per item.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?string $compatibilityBasedOn = null,
        public ?array $compatibleVehicleTypes = null,
        public ?int $maxNumberOfCompatibleVehicles = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            compatibilityBasedOn: isset($data['compatibilityBasedOn']) ? (string) $data['compatibilityBasedOn'] : null,
            compatibleVehicleTypes: isset($data['compatibleVehicleTypes']) ? (array) $data['compatibleVehicleTypes'] : null,
            maxNumberOfCompatibleVehicles: isset($data['maxNumberOfCompatibleVehicles']) ? (int) $data['maxNumberOfCompatibleVehicles'] : null,
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
        if ($this->compatibilityBasedOn !== null) {
            $data['compatibilityBasedOn'] = $this->compatibilityBasedOn;
        }
        if ($this->compatibleVehicleTypes !== null) {
            $data['compatibleVehicleTypes'] = $this->compatibleVehicleTypes;
        }
        if ($this->maxNumberOfCompatibleVehicles !== null) {
            $data['maxNumberOfCompatibleVehicles'] = $this->maxNumberOfCompatibleVehicles;
        }

        return $data;
    }
}
