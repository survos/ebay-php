<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base container of the bulkMigrateListings request payload.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BulkMigrateListing
{
    /**
     * @param list<MigrateListing>|null $requests This is the base container of the bulkMigrateListings request payload. One to five eBay listings will be included under this container.
     */
    public function __construct(
        public ?array $requests = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            requests: isset($data['requests']) && is_array($data['requests'])
                ? array_values(array_map(static fn (array $i): MigrateListing => MigrateListing::fromArray($i), $data['requests']))
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
        if ($this->requests !== null) {
            $data['requests'] = array_map(static fn (MigrateListing $i): array => $i->toArray(), $this->requests);
        }

        return $data;
    }
}
