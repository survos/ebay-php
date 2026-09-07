<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to specify one to five eBay listings that will be migrated to the new Inventory model.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class MigrateListing
{
    /**
     * @param string|null $listingId The unique identifier of the eBay listing to migrate to the new Inventory model. In the Trading API, this field is known as the ItemID. Up to five unique eBay listings may be specified here in separate listingId fields....
     */
    public function __construct(
        public ?string $listingId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            listingId: isset($data['listingId']) ? (string) $data['listingId'] : null,
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
        if ($this->listingId !== null) {
            $data['listingId'] = $this->listingId;
        }

        return $data;
    }
}
