<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type is used to display the possible condition descriptors and condition values applicable for a specified category. It also returns usage requirements, maximum length, cardinality, and help text.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ItemConditionDescriptor
{
    /**
     * @param ItemConditionDescriptorConstraint|null $conditionDescriptorConstraint This container shows the constraints on a condition descriptor, such as the maximum length, default condition descriptor value ID, cardinality, mode, usage, and applicable descriptor IDs.
     * @param string|null $conditionDescriptorHelpText A description of the condition descriptor that directs a user to its condition descriptor values. For example, the help text for Card Condition is Select ungraded condition.
     * @param string|null $conditionDescriptorId The unique identification number of a condition descriptor associated with with a conditionDescriptorName. For example, 40001 is the ID for Card Condition. These IDs are used in the addItem family of calls of the Trading...
     * @param string|null $conditionDescriptorName The human-readable label for the condition descriptor associated with the conditionDescriptorID. For example, Card Condition is the condition descriptor name for ID 40001
     * @param list<ItemConditionDescriptorValue>|null $conditionDescriptorValues This array shows the possible values that map to the corresponding conditionDescriptorName values. Constraint information and help text are also shown for each value. For example, The ID 40001 is ID for the condition des...
     */
    public function __construct(
        public ?ItemConditionDescriptorConstraint $conditionDescriptorConstraint = null,
        public ?string $conditionDescriptorHelpText = null,
        public ?string $conditionDescriptorId = null,
        public ?string $conditionDescriptorName = null,
        public ?array $conditionDescriptorValues = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            conditionDescriptorConstraint: isset($data['conditionDescriptorConstraint']) && is_array($data['conditionDescriptorConstraint']) ? ItemConditionDescriptorConstraint::fromArray($data['conditionDescriptorConstraint']) : null,
            conditionDescriptorHelpText: isset($data['conditionDescriptorHelpText']) ? (string) $data['conditionDescriptorHelpText'] : null,
            conditionDescriptorId: isset($data['conditionDescriptorId']) ? (string) $data['conditionDescriptorId'] : null,
            conditionDescriptorName: isset($data['conditionDescriptorName']) ? (string) $data['conditionDescriptorName'] : null,
            conditionDescriptorValues: isset($data['conditionDescriptorValues']) && is_array($data['conditionDescriptorValues'])
                ? array_values(array_map(static fn (array $i): ItemConditionDescriptorValue => ItemConditionDescriptorValue::fromArray($i), $data['conditionDescriptorValues']))
                : null,
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
        if ($this->conditionDescriptorConstraint !== null) {
            $data['conditionDescriptorConstraint'] = $this->conditionDescriptorConstraint->toArray();
        }
        if ($this->conditionDescriptorHelpText !== null) {
            $data['conditionDescriptorHelpText'] = $this->conditionDescriptorHelpText;
        }
        if ($this->conditionDescriptorId !== null) {
            $data['conditionDescriptorId'] = $this->conditionDescriptorId;
        }
        if ($this->conditionDescriptorName !== null) {
            $data['conditionDescriptorName'] = $this->conditionDescriptorName;
        }
        if ($this->conditionDescriptorValues !== null) {
            $data['conditionDescriptorValues'] = array_map(static fn (ItemConditionDescriptorValue $i): array => $i->toArray(), $this->conditionDescriptorValues);
        }

        return $data;
    }
}
