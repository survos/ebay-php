<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the property names and values that are compatible with the property name values specified in the request.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Compatibility
{
    /**
     * @param list<CompatibilityDetails>|null $compatibilityDetails This array returns a list of compatibility details associated with the specified property name(s).
     */
    public function __construct(
        public ?array $compatibilityDetails = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            compatibilityDetails: isset($data['compatibilityDetails']) && is_array($data['compatibilityDetails'])
                ? array_values(array_map(static fn (array $i): CompatibilityDetails => CompatibilityDetails::fromArray($i), $data['compatibilityDetails']))
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
        if ($this->compatibilityDetails !== null) {
            $data['compatibilityDetails'] = array_map(static fn (CompatibilityDetails $i): array => $i->toArray(), $this->compatibilityDetails);
        }

        return $data;
    }
}
