<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ErrorParameter
{
    /**
     * @param string|null $name The object of the error.
     * @param string|null $value The value of the object.
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
