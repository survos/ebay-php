<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains information about an item attribute (for example, color) that is appropriate or necessary for accurately describing items in a particular leaf category. Sellers are required or encouraged to provide one or more values of this aspect when offering an item in that category on eBay.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Aspect
{
    /**
     * @param AspectConstraint|null $aspectConstraint Information about the formatting, occurrence, and support of this aspect.
     * @param list<AspectValue>|null $aspectValues A list of valid values for this aspect (for example: Red, Green, and Blue), along with any constraints on those values.
     * @param string|null $localizedAspectName The localized name of this aspect (for example: Colour on the eBay UK site). Note: This name is always localized for the specified marketplace.
     * @param RelevanceIndicator|null $relevanceIndicator The relevance of this aspect. This field is returned if eBay has data on how many searches have been performed for listings in the category using this item aspect. Note: This container is restricted to applications that...
     */
    public function __construct(
        public ?AspectConstraint $aspectConstraint = null,
        public ?array $aspectValues = null,
        public ?string $localizedAspectName = null,
        public ?RelevanceIndicator $relevanceIndicator = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            aspectConstraint: isset($data['aspectConstraint']) && is_array($data['aspectConstraint']) ? AspectConstraint::fromArray($data['aspectConstraint']) : null,
            aspectValues: isset($data['aspectValues']) && is_array($data['aspectValues'])
                ? array_values(array_map(static fn (array $i): AspectValue => AspectValue::fromArray($i), $data['aspectValues']))
                : null,
            localizedAspectName: isset($data['localizedAspectName']) ? (string) $data['localizedAspectName'] : null,
            relevanceIndicator: isset($data['relevanceIndicator']) && is_array($data['relevanceIndicator']) ? RelevanceIndicator::fromArray($data['relevanceIndicator']) : null,
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
        if ($this->aspectConstraint !== null) {
            $data['aspectConstraint'] = $this->aspectConstraint->toArray();
        }
        if ($this->aspectValues !== null) {
            $data['aspectValues'] = array_map(static fn (AspectValue $i): array => $i->toArray(), $this->aspectValues);
        }
        if ($this->localizedAspectName !== null) {
            $data['localizedAspectName'] = $this->localizedAspectName;
        }
        if ($this->relevanceIndicator !== null) {
            $data['relevanceIndicator'] = $this->relevanceIndicator->toArray();
        }

        return $data;
    }
}
