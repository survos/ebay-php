<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type is the container type for the response payload of the getItemAspectsForCategory call.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AspectMetadata
{
    /**
     * @param list<Aspect>|null $aspects A list of item aspects (for example, color) that are appropriate or necessary for accurately describing items in a particular leaf category. Each category has a different set of aspects and different requirements for asp...
     */
    public function __construct(
        public ?array $aspects = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            aspects: isset($data['aspects']) && is_array($data['aspects'])
                ? array_values(array_map(static fn (array $i): Aspect => Aspect::fromArray($i), $data['aspects']))
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
        if ($this->aspects !== null) {
            $data['aspects'] = array_map(static fn (Aspect $i): array => $i->toArray(), $this->aspects);
        }

        return $data;
    }
}
