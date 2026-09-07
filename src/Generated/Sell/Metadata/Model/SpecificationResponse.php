<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the fields used in the getCompatibilitiesBySpecification response.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SpecificationResponse
{
    /**
     * @param list<Compatibility>|null $compatibilityDetails This container returns the list of all compatible application name-value pairs for the given filter criteria.
     * @param Pagination|null $pagination Important! Not currently returned. For future use.
     */
    public function __construct(
        public ?array $compatibilityDetails = null,
        public ?Pagination $pagination = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            compatibilityDetails: isset($data['compatibilityDetails']) && is_array($data['compatibilityDetails'])
                ? array_values(array_map(static fn (array $i): Compatibility => Compatibility::fromArray($i), $data['compatibilityDetails']))
                : null,
            pagination: isset($data['pagination']) && is_array($data['pagination']) ? Pagination::fromArray($data['pagination']) : null,
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
        if ($this->compatibilityDetails !== null) {
            $data['compatibilityDetails'] = array_map(static fn (Compatibility $i): array => $i->toArray(), $this->compatibilityDetails);
        }
        if ($this->pagination !== null) {
            $data['pagination'] = $this->pagination->toArray();
        }

        return $data;
    }
}
