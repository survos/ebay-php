<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * Type defining regulatory information that the seller is required to disclose.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Regulatory
{
    /**
     * @param list<Document>|null $documents This container provides a collection of regulatory documents associated with the listing. For information on removing one or more files from a listing using the updateOffer method, see Remove documents from listings. . N...
     * @param EnergyEfficiencyLabel|null $energyEfficiencyLabel This container provides information about the energy efficiency for certain durable goods. Note: This container can be used to provide European energy efficiency (EEK) information for listings in the Tyres and Appliance...
     * @param Hazmat|null $hazmat This container is used by the seller to provide hazardous material information for the listing. The statements element is required to complete the Hazmat section of a listing. The following elements are optional:pictogra...
     * @param Manufacturer|null $manufacturer This container provides information about the manufacturer of the item. Note: As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-...
     * @param ProductSafety|null $productSafety This container is used to provide product safety information for the listing. One of the following elements is required to complete the Product Safety section for a listing: pictograms or statements. The component elemen...
     * @param float|null $repairScore This field represents the repair index for the listing. The repair index identifies the manufacturer's repair score for a product (i.e., how easy is it to repair the product.) This field is a floating point value between...
     * @param list<ResponsiblePerson>|null $responsiblePersons This container provides information about the EU-based Responsible Persons or entities associated with the listing. A maximum of 5 EU Responsible Persons are supported. Note: As a part of General Product Safety Regulatio...
     */
    public function __construct(
        public ?array $documents = null,
        public ?EnergyEfficiencyLabel $energyEfficiencyLabel = null,
        public ?Hazmat $hazmat = null,
        public ?Manufacturer $manufacturer = null,
        public ?ProductSafety $productSafety = null,
        public ?float $repairScore = null,
        public ?array $responsiblePersons = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            documents: isset($data['documents']) && is_array($data['documents'])
                ? array_values(array_map(static fn (array $i): Document => Document::fromArray($i), $data['documents']))
                : null,
            energyEfficiencyLabel: isset($data['energyEfficiencyLabel']) && is_array($data['energyEfficiencyLabel']) ? EnergyEfficiencyLabel::fromArray($data['energyEfficiencyLabel']) : null,
            hazmat: isset($data['hazmat']) && is_array($data['hazmat']) ? Hazmat::fromArray($data['hazmat']) : null,
            manufacturer: isset($data['manufacturer']) && is_array($data['manufacturer']) ? Manufacturer::fromArray($data['manufacturer']) : null,
            productSafety: isset($data['productSafety']) && is_array($data['productSafety']) ? ProductSafety::fromArray($data['productSafety']) : null,
            repairScore: isset($data['repairScore']) ? (float) $data['repairScore'] : null,
            responsiblePersons: isset($data['responsiblePersons']) && is_array($data['responsiblePersons'])
                ? array_values(array_map(static fn (array $i): ResponsiblePerson => ResponsiblePerson::fromArray($i), $data['responsiblePersons']))
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
        if ($this->documents !== null) {
            $data['documents'] = array_map(static fn (Document $i): array => $i->toArray(), $this->documents);
        }
        if ($this->energyEfficiencyLabel !== null) {
            $data['energyEfficiencyLabel'] = $this->energyEfficiencyLabel->toArray();
        }
        if ($this->hazmat !== null) {
            $data['hazmat'] = $this->hazmat->toArray();
        }
        if ($this->manufacturer !== null) {
            $data['manufacturer'] = $this->manufacturer->toArray();
        }
        if ($this->productSafety !== null) {
            $data['productSafety'] = $this->productSafety->toArray();
        }
        if ($this->repairScore !== null) {
            $data['repairScore'] = $this->repairScore;
        }
        if ($this->responsiblePersons !== null) {
            $data['responsiblePersons'] = array_map(static fn (ResponsiblePerson $i): array => $i->toArray(), $this->responsiblePersons);
        }

        return $data;
    }
}
