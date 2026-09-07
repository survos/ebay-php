<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * The relevance of this aspect. This field is returned if eBay has data on how many searches have been performed for listings in the category using this item aspect. Note: This container is restricted to applications that have been granted permission to access this feature. You must submit an App Check ticket to request this access. In the App Check form, add a note to the Application Title/Summary...
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class RelevanceIndicator
{
    /**
     * @param int|null $searchCount The number of recent searches (based on 30 days of data) for the aspect.
     */
    public function __construct(
        public ?int $searchCount = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            searchCount: isset($data['searchCount']) ? (int) $data['searchCount'] : null,
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
        if ($this->searchCount !== null) {
            $data['searchCount'] = $this->searchCount;
        }

        return $data;
    }
}
