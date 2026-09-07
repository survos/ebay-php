<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify the product aspect(s) where individual items of the group vary, as well as a list of the available variations of those aspects.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class VariesBy
{
    /**
     * @param list<string>|null $aspectsImageVariesBy This container is used if the seller wants to include multiple images to demonstrate how variations within a multiple-variation listing differ. In this string field, the seller will specify the product aspect where the v...
     * @param list<Specification>|null $specifications This container consists of an array of one or more product aspects where each variation differs, and values for each of those product aspects. This container is not immediately required, but will be required before the f...
     */
    public function __construct(
        public ?array $aspectsImageVariesBy = null,
        public ?array $specifications = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            aspectsImageVariesBy: isset($data['aspectsImageVariesBy']) ? (array) $data['aspectsImageVariesBy'] : null,
            specifications: isset($data['specifications']) && is_array($data['specifications'])
                ? array_values(array_map(static fn (array $i): Specification => Specification::fromArray($i), $data['specifications']))
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
        if ($this->aspectsImageVariesBy !== null) {
            $data['aspectsImageVariesBy'] = $this->aspectsImageVariesBy;
        }
        if ($this->specifications !== null) {
            $data['specifications'] = array_map(static fn (Specification $i): array => $i->toArray(), $this->specifications);
        }

        return $data;
    }
}
