<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type shows the constraints on a condition descriptor value, such as any associated condition descriptor ID and condition descriptor value IDs required for a listing.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ItemConditionDescriptorValueConstraint
{
    /**
     * @param string|null $applicableToConditionDescriptorId This string is returned if the corresponding condition descriptor value requires an associated condition descriptor that must also be specified in a listing. The condition descriptor ID for the associated condition descr...
     * @param list<string>|null $applicableToConditionDescriptorValueIds This array is returned if the corresponding condition descriptor value is required for one or more associated condition descriptor values that must also be specified in a listing. The condition descriptor values IDs for...
     */
    public function __construct(
        public ?string $applicableToConditionDescriptorId = null,
        public ?array $applicableToConditionDescriptorValueIds = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            applicableToConditionDescriptorId: isset($data['applicableToConditionDescriptorId']) ? (string) $data['applicableToConditionDescriptorId'] : null,
            applicableToConditionDescriptorValueIds: isset($data['applicableToConditionDescriptorValueIds']) ? (array) $data['applicableToConditionDescriptorValueIds'] : null,
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
        if ($this->applicableToConditionDescriptorId !== null) {
            $data['applicableToConditionDescriptorId'] = $this->applicableToConditionDescriptorId;
        }
        if ($this->applicableToConditionDescriptorValueIds !== null) {
            $data['applicableToConditionDescriptorValueIds'] = $this->applicableToConditionDescriptorValueIds;
        }

        return $data;
    }
}
