<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the property name metadata.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PropertyNamesResponsePropertyNameMetadata
{
    /**
     * @param int|null $displaySequence The numeric value indicating the ordering position of the property.
     */
    public function __construct(
        public ?int $displaySequence = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            displaySequence: isset($data['displaySequence']) ? (int) $data['displaySequence'] : null,
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
        if ($this->displaySequence !== null) {
            $data['displaySequence'] = $this->displaySequence;
        }

        return $data;
    }
}
