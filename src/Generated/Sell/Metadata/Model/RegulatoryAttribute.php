<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that defines the attributes of a regulatory policy.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class RegulatoryAttribute
{
    /**
     * @param string|null $name A unique value identifying a specific regulatory attribute. For implementation help, refer to eBay API documentation
     * @param string|null $usage The enumeration value in this field indicates whether the corresponding attribute is recommended or required for the corresponding leaf category. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?string $name = null,
        public ?string $usage = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            name: isset($data['name']) ? (string) $data['name'] : null,
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
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->usage !== null) {
            $data['usage'] = $this->usage;
        }

        return $data;
    }
}
