<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains a list of the dependencies that identify when a particular value is available for a given aspect of a given category. Each dependency specifies the values of another aspect of the same category (the control aspect), for which the given value of the given aspect can also be selected by the seller. This container consists of constraint information for the corresponding product asp...
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ValueConstraint
{
    /**
     * @param string|null $applicableForLocalizedAspectName The name of the control aspect on which the current aspect value depends.
     * @param list<string>|null $applicableForLocalizedAspectValues Contains a list of the values of the control aspect on which this aspect's value depends. When the control aspect has any of the specified values, the current value of the current aspect will also be available.
     */
    public function __construct(
        public ?string $applicableForLocalizedAspectName = null,
        public ?array $applicableForLocalizedAspectValues = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            applicableForLocalizedAspectName: isset($data['applicableForLocalizedAspectName']) ? (string) $data['applicableForLocalizedAspectName'] : null,
            applicableForLocalizedAspectValues: isset($data['applicableForLocalizedAspectValues']) ? (array) $data['applicableForLocalizedAspectValues'] : null,
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
        if ($this->applicableForLocalizedAspectName !== null) {
            $data['applicableForLocalizedAspectName'] = $this->applicableForLocalizedAspectName;
        }
        if ($this->applicableForLocalizedAspectValues !== null) {
            $data['applicableForLocalizedAspectValues'] = $this->applicableForLocalizedAspectValues;
        }

        return $data;
    }
}
