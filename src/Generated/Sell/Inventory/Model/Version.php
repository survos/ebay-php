<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to show the version number and instance of the service or API.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Version
{
    /**
     * @param Version|null $instance The instance of the version.
     * @param string|null $version The version number of the service or API.
     */
    public function __construct(
        public ?Version $instance = null,
        public ?string $version = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            instance: isset($data['instance']) && is_array($data['instance']) ? Version::fromArray($data['instance']) : null,
            version: isset($data['version']) ? (string) $data['version'] : null,
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
        if ($this->instance !== null) {
            $data['instance'] = $this->instance->toArray();
        }
        if ($this->version !== null) {
            $data['version'] = $this->version;
        }

        return $data;
    }
}
