<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * The type defining valid currencies for the marketplace.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Currency
{
    /**
     * @param string|null $code The three-letter ISO 4217 code returned. Restriction: Only the currency of the marketplace is supported. Examples: on the US marketplace, the only currency supported is the United States dollar, USD; on the Canadian mark...
     * @param string|null $description The description of the returned three-letter code. For example, if the code is USD, the description returned would be US Dollar.
     */
    public function __construct(
        public ?string $code = null,
        public ?string $description = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            code: isset($data['code']) ? (string) $data['code'] : null,
            description: isset($data['description']) ? (string) $data['description'] : null,
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
        if ($this->code !== null) {
            $data['code'] = $this->code;
        }
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }

        return $data;
    }
}
