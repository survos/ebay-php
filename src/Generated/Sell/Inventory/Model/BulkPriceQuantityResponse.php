<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is use by the base response payload of the bulkUpdatePriceQuantity call. The bulkUpdatePriceQuantity call response will return an HTTP status code, offer ID, and SKU value for each offer/inventory item being updated, as well as an errors and/or warnings container if any errors or warnings are triggered while trying to update those offers/inventory items.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class BulkPriceQuantityResponse
{
    /**
     * @param list<PriceQuantityResponse>|null $responses This container will return an HTTP status code, offer ID, and SKU value for each offer/inventory item being updated, as well as an errors and/or warnings container if any errors or warnings are triggered while trying to...
     */
    public function __construct(
        public ?array $responses = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            responses: isset($data['responses']) && is_array($data['responses'])
                ? array_values(array_map(static fn (array $i): PriceQuantityResponse => PriceQuantityResponse::fromArray($i), $data['responses']))
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
        if ($this->responses !== null) {
            $data['responses'] = array_map(static fn (PriceQuantityResponse $i): array => $i->toArray(), $this->responses);
        }

        return $data;
    }
}
