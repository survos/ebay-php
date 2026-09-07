<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to identify a motor vehicle that is compatible with the corresponding inventory item (the SKU that is passed in as part of the call URI). The motor vehicle can be identified through an eBay Product ID or a K-Type value. The gtin field (for inputting Global Trade Item Numbers) is for future use only. If a motor vehicle is found in the eBay product catalog, the motor vehicle proper...
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ProductIdentifier
{
    /**
     * @param string|null $epid This field can be used if the seller already knows the eBay catalog product ID (ePID) associated with the motor vehicle that is to be added to the compatible product list. If this eBay catalog product ID is found in the...
     * @param string|null $gtin This field can be used if the seller knows the Global Trade Item Number for the motor vehicle that is to be added to the compatible product list. If this GTIN value is found in the eBay product catalog, the motor vehicle...
     * @param string|null $ktype This field can be used if the seller knows the K Type Number for the motor vehicle that is to be added to the compatible product list. If this K Type value is found in the eBay product catalog, the motor vehicle properti...
     */
    public function __construct(
        public ?string $epid = null,
        public ?string $gtin = null,
        public ?string $ktype = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            epid: isset($data['epid']) ? (string) $data['epid'] : null,
            gtin: isset($data['gtin']) ? (string) $data['gtin'] : null,
            ktype: isset($data['ktype']) ? (string) $data['ktype'] : null,
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
        if ($this->epid !== null) {
            $data['epid'] = $this->epid;
        }
        if ($this->gtin !== null) {
            $data['gtin'] = $this->gtin;
        }
        if ($this->ktype !== null) {
            $data['ktype'] = $this->ktype;
        }

        return $data;
    }
}
