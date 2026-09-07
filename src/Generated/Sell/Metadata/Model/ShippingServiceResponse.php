<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable shipping service metadata returned.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingServiceResponse
{
    /**
     * @param list<ShippingService>|null $shippingServices A complete list of shipping service options that can be used on the marketplace for shipping items.
     */
    public function __construct(
        public ?array $shippingServices = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            shippingServices: isset($data['shippingServices']) && is_array($data['shippingServices'])
                ? array_values(array_map(static fn (array $i): ShippingService => ShippingService::fromArray($i), $data['shippingServices']))
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
        if ($this->shippingServices !== null) {
            $data['shippingServices'] = array_map(static fn (ShippingService $i): array => $i->toArray(), $this->shippingServices);
        }

        return $data;
    }
}
