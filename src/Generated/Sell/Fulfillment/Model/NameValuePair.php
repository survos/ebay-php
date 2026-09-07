<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains the name-value specifics of a multi-variation listing (variationAspects) or the name-value specifics for all item aspects of a linked line item (linkedOrderLineItems).
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class NameValuePair
{
    /**
     * @param string|null $name The text representing the name of the aspect for the name-value pair. For example, color, or Tire Type.
     * @param string|null $value The value of the aspect for the name-value pair. For example, red, or All Season.
     */
    public function __construct(
        public ?string $name = null,
        public ?string $value = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            name: isset($data['name']) ? (string) $data['name'] : null,
            value: isset($data['value']) ? (string) $data['value'] : null,
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
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->value !== null) {
            $data['value'] = $this->value;
        }

        return $data;
    }
}
