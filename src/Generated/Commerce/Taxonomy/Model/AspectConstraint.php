<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type contains information about the formatting, occurrence, and support of an aspect.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AspectConstraint
{
    /**
     * @param list<string>|null $aspectApplicableTo This value indicate if the aspect identified by the aspects.localizedAspectName field is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will var...
     * @param string|null $aspectDataType The data type of this aspect. For implementation help, refer to eBay API documentation
     * @param bool|null $aspectEnabledForVariations A value of true indicates that this aspect can be used to help identify item variations.
     * @param string|null $aspectFormat Returned only if the value of aspectDataType identifies a data type that requires specific formatting. Currently, this field provides formatting hints as follows: DATE: YYYY, YYYYMM, YYYYMMDD NUMBER: int32, double
     * @param int|null $aspectMaxLength The maximum length of the item/instance aspect's value. The seller must make sure not to exceed this length when specifying the instance aspect's value for a product. This field is only returned for instance aspects.
     * @param string|null $aspectMode The manner in which values of this aspect must be specified by the seller (as free text or by selecting from available options). For implementation help, refer to eBay API documentation
     * @param bool|null $aspectRequired A value of true indicates that this aspect is required when offering items in the specified category.
     * @param string|null $aspectUsage The enumeration value returned in this field will indicate if the corresponding aspect is recommended or optional. Note: This field is always returned, even for hard-mandated/required aspects (where aspectRequired: true)...
     * @param string|null $expectedRequiredByDate The expected date after which the aspect will be required. Note: The value returned in this field specifies only an approximate date, which may not reflect the actual date after which the aspect is required.
     * @param string|null $itemToAspectCardinality Indicates whether this aspect can accept single or multiple values for items in the specified category. Note: Up to 30 values can be supplied for aspects that accept multiple values. For implementation help, refer to eBa...
     * @param string|null $aspectAdvancedDataType Indicates additional data type requirements for the aspect. For example, NUMERIC_RANGE indicates that the aspect value must be in numeric range format. Note: Currently only NUMERIC_RANGE is supported. For implementation...
     */
    public function __construct(
        public ?array $aspectApplicableTo = null,
        public ?string $aspectDataType = null,
        public ?bool $aspectEnabledForVariations = null,
        public ?string $aspectFormat = null,
        public ?int $aspectMaxLength = null,
        public ?string $aspectMode = null,
        public ?bool $aspectRequired = null,
        public ?string $aspectUsage = null,
        public ?string $expectedRequiredByDate = null,
        public ?string $itemToAspectCardinality = null,
        public ?string $aspectAdvancedDataType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            aspectApplicableTo: isset($data['aspectApplicableTo']) ? (array) $data['aspectApplicableTo'] : null,
            aspectDataType: isset($data['aspectDataType']) ? (string) $data['aspectDataType'] : null,
            aspectEnabledForVariations: isset($data['aspectEnabledForVariations']) ? (bool) $data['aspectEnabledForVariations'] : null,
            aspectFormat: isset($data['aspectFormat']) ? (string) $data['aspectFormat'] : null,
            aspectMaxLength: isset($data['aspectMaxLength']) ? (int) $data['aspectMaxLength'] : null,
            aspectMode: isset($data['aspectMode']) ? (string) $data['aspectMode'] : null,
            aspectRequired: isset($data['aspectRequired']) ? (bool) $data['aspectRequired'] : null,
            aspectUsage: isset($data['aspectUsage']) ? (string) $data['aspectUsage'] : null,
            expectedRequiredByDate: isset($data['expectedRequiredByDate']) ? (string) $data['expectedRequiredByDate'] : null,
            itemToAspectCardinality: isset($data['itemToAspectCardinality']) ? (string) $data['itemToAspectCardinality'] : null,
            aspectAdvancedDataType: isset($data['aspectAdvancedDataType']) ? (string) $data['aspectAdvancedDataType'] : null,
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
        if ($this->aspectApplicableTo !== null) {
            $data['aspectApplicableTo'] = $this->aspectApplicableTo;
        }
        if ($this->aspectDataType !== null) {
            $data['aspectDataType'] = $this->aspectDataType;
        }
        if ($this->aspectEnabledForVariations !== null) {
            $data['aspectEnabledForVariations'] = $this->aspectEnabledForVariations;
        }
        if ($this->aspectFormat !== null) {
            $data['aspectFormat'] = $this->aspectFormat;
        }
        if ($this->aspectMaxLength !== null) {
            $data['aspectMaxLength'] = $this->aspectMaxLength;
        }
        if ($this->aspectMode !== null) {
            $data['aspectMode'] = $this->aspectMode;
        }
        if ($this->aspectRequired !== null) {
            $data['aspectRequired'] = $this->aspectRequired;
        }
        if ($this->aspectUsage !== null) {
            $data['aspectUsage'] = $this->aspectUsage;
        }
        if ($this->expectedRequiredByDate !== null) {
            $data['expectedRequiredByDate'] = $this->expectedRequiredByDate;
        }
        if ($this->itemToAspectCardinality !== null) {
            $data['itemToAspectCardinality'] = $this->itemToAspectCardinality;
        }
        if ($this->aspectAdvancedDataType !== null) {
            $data['aspectAdvancedDataType'] = $this->aspectAdvancedDataType;
        }

        return $data;
    }
}
