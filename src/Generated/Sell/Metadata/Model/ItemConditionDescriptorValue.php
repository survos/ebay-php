<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type displays the possible values for the corresponding condition descriptor, along with help text and constraint information.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ItemConditionDescriptorValue
{
    /**
     * @param list<string>|null $conditionDescriptorValueAdditionalHelpText Additional information about the the condition of the item that is not included in the conditionDescriptorValueHelpText field.
     * @param list<ItemConditionDescriptorValueConstraint>|null $conditionDescriptorValueConstraints The constraints on a condition descriptor value, such as which descriptor value IDs and Descriptor ID it is associated with.
     * @param string|null $conditionDescriptorValueHelpText A detailed description of the condition descriptor value.
     * @param string|null $conditionDescriptorValueId The unique identification number of a condition descriptor value associated with the conditionDescriptorValueName.
     * @param string|null $conditionDescriptorValueName The human-readable label for the condition descriptor value associated with the conditionDescriptorValueID.
     */
    public function __construct(
        public ?array $conditionDescriptorValueAdditionalHelpText = null,
        public ?array $conditionDescriptorValueConstraints = null,
        public ?string $conditionDescriptorValueHelpText = null,
        public ?string $conditionDescriptorValueId = null,
        public ?string $conditionDescriptorValueName = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            conditionDescriptorValueAdditionalHelpText: isset($data['conditionDescriptorValueAdditionalHelpText']) ? (array) $data['conditionDescriptorValueAdditionalHelpText'] : null,
            conditionDescriptorValueConstraints: isset($data['conditionDescriptorValueConstraints']) && is_array($data['conditionDescriptorValueConstraints'])
                ? array_values(array_map(static fn (array $i): ItemConditionDescriptorValueConstraint => ItemConditionDescriptorValueConstraint::fromArray($i), $data['conditionDescriptorValueConstraints']))
                : null,
            conditionDescriptorValueHelpText: isset($data['conditionDescriptorValueHelpText']) ? (string) $data['conditionDescriptorValueHelpText'] : null,
            conditionDescriptorValueId: isset($data['conditionDescriptorValueId']) ? (string) $data['conditionDescriptorValueId'] : null,
            conditionDescriptorValueName: isset($data['conditionDescriptorValueName']) ? (string) $data['conditionDescriptorValueName'] : null,
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
        if ($this->conditionDescriptorValueAdditionalHelpText !== null) {
            $data['conditionDescriptorValueAdditionalHelpText'] = $this->conditionDescriptorValueAdditionalHelpText;
        }
        if ($this->conditionDescriptorValueConstraints !== null) {
            $data['conditionDescriptorValueConstraints'] = array_map(static fn (ItemConditionDescriptorValueConstraint $i): array => $i->toArray(), $this->conditionDescriptorValueConstraints);
        }
        if ($this->conditionDescriptorValueHelpText !== null) {
            $data['conditionDescriptorValueHelpText'] = $this->conditionDescriptorValueHelpText;
        }
        if ($this->conditionDescriptorValueId !== null) {
            $data['conditionDescriptorValueId'] = $this->conditionDescriptorValueId;
        }
        if ($this->conditionDescriptorValueName !== null) {
            $data['conditionDescriptorValueName'] = $this->conditionDescriptorValueName;
        }

        return $data;
    }
}
