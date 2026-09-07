<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that defines the attributes of an Extended Producer Responsibility policy.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ExtendedProducerResponsibility
{
    /**
     * @param bool|null $enabledForVariations An indication of whether the attribute can be enabled for listing variations. If the value is true, the attribute may be specified at the variation level.
     * @param string|null $name The name of the attribute included in the policy. For implementation help, refer to eBay API documentation
     * @param string|null $usage The usage guidelines for the attribute, in the specified marketplace. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?bool $enabledForVariations = null,
        public ?string $name = null,
        public ?string $usage = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            enabledForVariations: isset($data['enabledForVariations']) ? (bool) $data['enabledForVariations'] : null,
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
        if ($this->enabledForVariations !== null) {
            $data['enabledForVariations'] = $this->enabledForVariations;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->usage !== null) {
            $data['usage'] = $this->usage;
        }

        return $data;
    }
}
