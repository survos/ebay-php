<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type is used by the getExpiredCategories response to indicate any eBay leaf categories in the specified category tree that have expired and the currently active leaf categories that have replaced them.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ExpiredCategories
{
    /**
     * @param list<ExpiredCategory>|null $expiredCategories An array of expired category ID(s) for the requested category tree, and the currently active category ID(s) that have replaced them.
     */
    public function __construct(
        public ?array $expiredCategories = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            expiredCategories: isset($data['expiredCategories']) && is_array($data['expiredCategories'])
                ? array_values(array_map(static fn (array $i): ExpiredCategory => ExpiredCategory::fromArray($i), $data['expiredCategories']))
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
        if ($this->expiredCategories !== null) {
            $data['expiredCategories'] = array_map(static fn (ExpiredCategory $i): array => $i->toArray(), $this->expiredCategories);
        }

        return $data;
    }
}
