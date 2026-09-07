<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * Note: In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition....
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ItemCondition
{
    /**
     * @param string|null $conditionDescription The human-readable label for the condition (e.g., "New"). This value is typically localized for each site. Note that the display name can vary by category. For example, the description for condition ID 1000 could be call...
     * @param list<ItemConditionDescriptor>|null $conditionDescriptors This array contains the possible condition descriptors and condition descriptor values applicable for the specified category. It also returns usage requirements, maximum length, cardinality, and help text. Note: This arr...
     * @param string|null $conditionHelpText A detailed description of the condition denoted by the conditionID and conditionDescription.
     * @param string|null $conditionId The ID value of the selected item condition. For information on the supported condition ID values, see Item condition ID and name values.
     * @param string|null $usage The value returned in this field indicates if there are any usage restrictions or requirements for the corresponding item condition in the corresponding category. Note: Currently, the only supported value is 'RESTRICTED'...
     */
    public function __construct(
        public ?string $conditionDescription = null,
        public ?array $conditionDescriptors = null,
        public ?string $conditionHelpText = null,
        public ?string $conditionId = null,
        public ?string $usage = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            conditionDescription: isset($data['conditionDescription']) ? (string) $data['conditionDescription'] : null,
            conditionDescriptors: isset($data['conditionDescriptors']) && is_array($data['conditionDescriptors'])
                ? array_values(array_map(static fn (array $i): ItemConditionDescriptor => ItemConditionDescriptor::fromArray($i), $data['conditionDescriptors']))
                : null,
            conditionHelpText: isset($data['conditionHelpText']) ? (string) $data['conditionHelpText'] : null,
            conditionId: isset($data['conditionId']) ? (string) $data['conditionId'] : null,
            usage: isset($data['usage']) ? (string) $data['usage'] : null,
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
        if ($this->conditionDescription !== null) {
            $data['conditionDescription'] = $this->conditionDescription;
        }
        if ($this->conditionDescriptors !== null) {
            $data['conditionDescriptors'] = array_map(static fn (ItemConditionDescriptor $i): array => $i->toArray(), $this->conditionDescriptors);
        }
        if ($this->conditionHelpText !== null) {
            $data['conditionHelpText'] = $this->conditionHelpText;
        }
        if ($this->conditionId !== null) {
            $data['conditionId'] = $this->conditionId;
        }
        if ($this->usage !== null) {
            $data['usage'] = $this->usage;
        }

        return $data;
    }
}
