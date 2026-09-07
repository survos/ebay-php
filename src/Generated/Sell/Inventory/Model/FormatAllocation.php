<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to indicate the quantities of the inventory items that are reserved for the different listing formats of the SKU offers.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class FormatAllocation
{
    /**
     * @param int|null $auction This integer value indicates the quantity of the inventory item that is reserved for the published auction format offers of the SKU.
     * @param int|null $fixedPrice This integer value indicates the quantity of the inventory item that is available for the fixed-price offers of the SKU.
     */
    public function __construct(
        public ?int $auction = null,
        public ?int $fixedPrice = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            auction: isset($data['auction']) ? (int) $data['auction'] : null,
            fixedPrice: isset($data['fixedPrice']) ? (int) $data['fixedPrice'] : null,
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
        if ($this->auction !== null) {
            $data['auction'] = $this->auction;
        }
        if ($this->fixedPrice !== null) {
            $data['fixedPrice'] = $this->fixedPrice;
        }

        return $data;
    }
}
