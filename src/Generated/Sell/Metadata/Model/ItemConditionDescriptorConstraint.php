<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type specifies the constraints on a condition descriptor, such as the maximum length, default condition descriptor value ID, cardinality, mode, usage, and applicable descriptor IDs.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ItemConditionDescriptorConstraint
{
    /**
     * @param list<string>|null $applicableToConditionDescriptorIds This array is returned if the corresponding condition descriptor requires that one or more other associated condition descriptors must also be specified in a listing. The condition descriptor IDs for the associated condi...
     * @param string|null $cardinality The value returned in this field indicates whether a condition descriptor can have a single value or multiple values. For implementation help, refer to eBay API documentation
     * @param string|null $defaultConditionDescriptorValueId The default condition descriptor value that will be set if there are multiple values.
     * @param int|null $maxLength The maximum characters allowed for a condition descriptor. This field is only returned/applicable for condition descriptors that allow free text for condition descriptor values.
     * @param string|null $mode The value returned in this field indicates whether the supported values for a condition descriptor are predefined or if the seller manually specified the value. Note: FREE_TEXT is currently only applicable to the Certifi...
     * @param string|null $usage This value indicates whether or not the condition descriptor is required for the item condition. Currently, this field is only returned if the condition descriptor is required for the item condition. For implementation h...
     */
    public function __construct(
        public ?array $applicableToConditionDescriptorIds = null,
        public ?string $cardinality = null,
        public ?string $defaultConditionDescriptorValueId = null,
        public ?int $maxLength = null,
        public ?string $mode = null,
        public ?string $usage = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            applicableToConditionDescriptorIds: isset($data['applicableToConditionDescriptorIds']) ? (array) $data['applicableToConditionDescriptorIds'] : null,
            cardinality: isset($data['cardinality']) ? (string) $data['cardinality'] : null,
            defaultConditionDescriptorValueId: isset($data['defaultConditionDescriptorValueId']) ? (string) $data['defaultConditionDescriptorValueId'] : null,
            maxLength: isset($data['maxLength']) ? (int) $data['maxLength'] : null,
            mode: isset($data['mode']) ? (string) $data['mode'] : null,
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
        if ($this->applicableToConditionDescriptorIds !== null) {
            $data['applicableToConditionDescriptorIds'] = $this->applicableToConditionDescriptorIds;
        }
        if ($this->cardinality !== null) {
            $data['cardinality'] = $this->cardinality;
        }
        if ($this->defaultConditionDescriptorValueId !== null) {
            $data['defaultConditionDescriptorValueId'] = $this->defaultConditionDescriptorValueId;
        }
        if ($this->maxLength !== null) {
            $data['maxLength'] = $this->maxLength;
        }
        if ($this->mode !== null) {
            $data['mode'] = $this->mode;
        }
        if ($this->usage !== null) {
            $data['usage'] = $this->usage;
        }

        return $data;
    }
}
