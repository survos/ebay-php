<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains a valid value for an aspect, along with any constraints on the occurrence of that value.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AspectValue
{
    /**
     * @param string|null $localizedValue The localized value of this aspect. Note: This value is always localized for the specified marketplace.
     * @param list<ValueConstraint>|null $valueConstraints Not returned if the value of the localizedValue field can always be selected for this aspect of the specified category. Contains a list of the dependencies that identify when the value of the localizedValue field is avai...
     */
    public function __construct(
        public ?string $localizedValue = null,
        public ?array $valueConstraints = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            localizedValue: isset($data['localizedValue']) ? (string) $data['localizedValue'] : null,
            valueConstraints: isset($data['valueConstraints']) && is_array($data['valueConstraints'])
                ? array_values(array_map(static fn (array $i): ValueConstraint => ValueConstraint::fromArray($i), $data['valueConstraints']))
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
        if ($this->localizedValue !== null) {
            $data['localizedValue'] = $this->localizedValue;
        }
        if ($this->valueConstraints !== null) {
            $data['valueConstraints'] = array_map(static fn (ValueConstraint $i): array => $i->toArray(), $this->valueConstraints);
        }

        return $data;
    }
}
