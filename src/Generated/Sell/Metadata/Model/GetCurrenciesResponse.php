<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the response fields specifying the default currency for the marketplace.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class GetCurrenciesResponse
{
    /**
     * @param Currency|null $defaultCurrency This field specifies the default currency used by the marketplace.
     * @param string|null $marketplaceId The ID of the eBay marketplace to which the default currency applies. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?Currency $defaultCurrency = null,
        public ?string $marketplaceId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            defaultCurrency: isset($data['defaultCurrency']) && is_array($data['defaultCurrency']) ? Currency::fromArray($data['defaultCurrency']) : null,
            marketplaceId: isset($data['marketplaceId']) ? (string) $data['marketplaceId'] : null,
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
        if ($this->defaultCurrency !== null) {
            $data['defaultCurrency'] = $this->defaultCurrency->toArray();
        }
        if ($this->marketplaceId !== null) {
            $data['marketplaceId'] = $this->marketplaceId;
        }

        return $data;
    }
}
