<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the seller to provide additional information about the condition of an item in a structured format.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ConditionDescriptor
{
    /**
     * @param string|null $additionalInfo This string provides additional information about a condition descriptor. Open text is passed in this field. In the case of trading cards and coins, this field houses the optional Certification Number condition descripto...
     * @param string|null $name This string provides the name of a condition descriptor. A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information ab...
     * @param list<string>|null $values This array provides the value(s) associated with a condition descriptor. One or more numeric IDs is passed in this field. Commas are used as delimiters between successive name/value pairs. These numeric IDs map to the va...
     */
    public function __construct(
        public ?string $additionalInfo = null,
        public ?string $name = null,
        public ?array $values = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            additionalInfo: isset($data['additionalInfo']) ? (string) $data['additionalInfo'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
            values: isset($data['values']) ? (array) $data['values'] : null,
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
        if ($this->additionalInfo !== null) {
            $data['additionalInfo'] = $this->additionalInfo;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->values !== null) {
            $data['values'] = $this->values;
        }

        return $data;
    }
}
