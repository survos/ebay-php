<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that defines the regulatory policy.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class RegulatoryPolicy
{
    /**
     * @param string|null $categoryId The unique identifier of the leaf category to which the corresponding policies pertain.
     * @param string|null $categoryTreeId The unique identifier of the category tree, which reflects the specified marketplace.
     * @param list<RegulatoryAttribute>|null $supportedAttributes A list of supported regulatory attributes for this marketplace.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
        public ?array $supportedAttributes = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
            supportedAttributes: isset($data['supportedAttributes']) && is_array($data['supportedAttributes'])
                ? array_values(array_map(static fn (array $i): RegulatoryAttribute => RegulatoryAttribute::fromArray($i), $data['supportedAttributes']))
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
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }
        if ($this->supportedAttributes !== null) {
            $data['supportedAttributes'] = array_map(static fn (RegulatoryAttribute $i): array => $i->toArray(), $this->supportedAttributes);
        }

        return $data;
    }
}
