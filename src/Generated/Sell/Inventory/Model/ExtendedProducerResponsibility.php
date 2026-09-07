<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type provides IDs for the producer or importer related to the new item, packaging, added documentation, or an eco-participation fee. In some markets, such as in France, this may be the importer of the item.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ExtendedProducerResponsibility
{
    /**
     * @param Amount|null $ecoParticipationFee This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France). It is a contribution to the financing of the elimination of the item responsibly. Note: 0 should not be used as a defau...
     * @param string|null $producerProductId Note: THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED. For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide...
     * @param string|null $productDocumentationId Note: THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED. For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide...
     * @param string|null $productPackageId Note: THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED. For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide...
     * @param string|null $shipmentPackageId Note: THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED. For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide...
     */
    public function __construct(
        public ?Amount $ecoParticipationFee = null,
        public ?string $producerProductId = null,
        public ?string $productDocumentationId = null,
        public ?string $productPackageId = null,
        public ?string $shipmentPackageId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            ecoParticipationFee: isset($data['ecoParticipationFee']) && is_array($data['ecoParticipationFee']) ? Amount::fromArray($data['ecoParticipationFee']) : null,
            producerProductId: isset($data['producerProductId']) ? (string) $data['producerProductId'] : null,
            productDocumentationId: isset($data['productDocumentationId']) ? (string) $data['productDocumentationId'] : null,
            productPackageId: isset($data['productPackageId']) ? (string) $data['productPackageId'] : null,
            shipmentPackageId: isset($data['shipmentPackageId']) ? (string) $data['shipmentPackageId'] : null,
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
        if ($this->ecoParticipationFee !== null) {
            $data['ecoParticipationFee'] = $this->ecoParticipationFee->toArray();
        }
        if ($this->producerProductId !== null) {
            $data['producerProductId'] = $this->producerProductId;
        }
        if ($this->productDocumentationId !== null) {
            $data['productDocumentationId'] = $this->productDocumentationId;
        }
        if ($this->productPackageId !== null) {
            $data['productPackageId'] = $this->productPackageId;
        }
        if ($this->shipmentPackageId !== null) {
            $data['shipmentPackageId'] = $this->shipmentPackageId;
        }

        return $data;
    }
}
