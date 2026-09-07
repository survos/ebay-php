<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides the properties and specifications to use to search for compatibilities.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SpecificationRequest
{
    /**
     * @param string|null $categoryId The unique identifier of the eBay leaf category for which compatibility details are being retrieved. This category must be a valid eBay category on the specified eBay marketplace, and the category must support parts comp...
     * @param list<PropertyFilterInner>|null $compatibilityPropertyFilters This comma-delimited array can be used to restrict the number of compatible application name-value pairs returned in the response by specifying the properties that the seller wishes to be included in the response. Only c...
     * @param string|null $dataset This field can be used to define the type of properties that will be returned in the response. For example, if you specify Searchable, the compatibility details will contain properties that can be used to search for prod...
     * @param list<string>|null $datasetPropertyName This comma-delimited array can be used to define the specific property name(s) that will be returned in the response. For example, if you specify Engine, the result set will only contain engines that are compatible with...
     * @param bool|null $exactMatch This boolean can be used to specify that the compatibilities returned in the response are to be defined by an exact match on the input value of specification properties. By default, an expanded compatibility match is don...
     * @param PaginationInput|null $paginationInput Important! Pagination is not yet supported by this method. If this container is included in the request, it will be ignored.
     * @param list<SortOrderInner>|null $sortOrders This array specifies the sorting order of the compatibility properties. Any of the searchable properties can be used to specify search order. Up to 5 levels of sort order may be specified. Note: If no sort order is speci...
     * @param list<PropertyFilterInner>|null $specifications This array defines the specifications of the part, in the form of name-value pairs, for which compatible applications will be retrieved.
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?array $compatibilityPropertyFilters = null,
        public ?string $dataset = null,
        public ?array $datasetPropertyName = null,
        public ?bool $exactMatch = null,
        public ?PaginationInput $paginationInput = null,
        public ?array $sortOrders = null,
        public ?array $specifications = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            compatibilityPropertyFilters: isset($data['compatibilityPropertyFilters']) && is_array($data['compatibilityPropertyFilters'])
                ? array_values(array_map(static fn (array $i): PropertyFilterInner => PropertyFilterInner::fromArray($i), $data['compatibilityPropertyFilters']))
                : null,
            dataset: isset($data['dataset']) ? (string) $data['dataset'] : null,
            datasetPropertyName: isset($data['datasetPropertyName']) ? (array) $data['datasetPropertyName'] : null,
            exactMatch: isset($data['exactMatch']) ? (bool) $data['exactMatch'] : null,
            paginationInput: isset($data['paginationInput']) && is_array($data['paginationInput']) ? PaginationInput::fromArray($data['paginationInput']) : null,
            sortOrders: isset($data['sortOrders']) && is_array($data['sortOrders'])
                ? array_values(array_map(static fn (array $i): SortOrderInner => SortOrderInner::fromArray($i), $data['sortOrders']))
                : null,
            specifications: isset($data['specifications']) && is_array($data['specifications'])
                ? array_values(array_map(static fn (array $i): PropertyFilterInner => PropertyFilterInner::fromArray($i), $data['specifications']))
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
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->compatibilityPropertyFilters !== null) {
            $data['compatibilityPropertyFilters'] = array_map(static fn (PropertyFilterInner $i): array => $i->toArray(), $this->compatibilityPropertyFilters);
        }
        if ($this->dataset !== null) {
            $data['dataset'] = $this->dataset;
        }
        if ($this->datasetPropertyName !== null) {
            $data['datasetPropertyName'] = $this->datasetPropertyName;
        }
        if ($this->exactMatch !== null) {
            $data['exactMatch'] = $this->exactMatch;
        }
        if ($this->paginationInput !== null) {
            $data['paginationInput'] = $this->paginationInput->toArray();
        }
        if ($this->sortOrders !== null) {
            $data['sortOrders'] = array_map(static fn (SortOrderInner $i): array => $i->toArray(), $this->sortOrders);
        }
        if ($this->specifications !== null) {
            $data['specifications'] = array_map(static fn (PropertyFilterInner $i): array => $i->toArray(), $this->specifications);
        }

        return $data;
    }
}
