<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type contains the kind of distance and radius of the selling area for Local Market Vehicle listings.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class LocalListingDistance
{
    /**
     * @param list<int>|null $distances This array indicates the radius (in miles) of the selling area for Local Market Vehicle listings.
     * @param string|null $distanceType This enumerated value indicates the type of local listing distances, such as non-subscription or regular, for items listed by sellers. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?array $distances = null,
        public ?string $distanceType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            distances: isset($data['distances']) ? (array) $data['distances'] : null,
            distanceType: isset($data['distanceType']) ? (string) $data['distanceType'] : null,
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
        if ($this->distances !== null) {
            $data['distances'] = $this->distances;
        }
        if ($this->distanceType !== null) {
            $data['distanceType'] = $this->distanceType;
        }

        return $data;
    }
}
