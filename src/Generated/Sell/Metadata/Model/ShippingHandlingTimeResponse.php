<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable shipping handling times returned for the specified marketplace.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingHandlingTimeResponse
{
    /**
     * @param list<ShippingHandlingTime>|null $handlingTimes A list of supported handling times for the marketplace.
     */
    public function __construct(
        public ?array $handlingTimes = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            handlingTimes: isset($data['handlingTimes']) && is_array($data['handlingTimes'])
                ? array_values(array_map(static fn (array $i): ShippingHandlingTime => ShippingHandlingTime::fromArray($i), $data['handlingTimes']))
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
        if ($this->handlingTimes !== null) {
            $data['handlingTimes'] = array_map(static fn (ShippingHandlingTime $i): array => $i->toArray(), $this->handlingTimes);
        }

        return $data;
    }
}
