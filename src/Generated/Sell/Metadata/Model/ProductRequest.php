<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type defines the request fields for the getProductCompatibilities method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ProductRequest
{
    /**
     * @param list<PropertyFilterInner>|null $applicationPropertyFilters This array is used to filter the properties of an application, such as a vehicle's make or model, that will be returned in the response. Application property filters are specified as name-value pairs. Only products compa...
     * @param list<string>|null $dataset This array defines the type of properties that are returned for the catalog-enabled category. For example, if you specify Searchable, the compatibility details will contain properties that can be used to search for produ...
     * @param list<string>|null $datasetPropertyName This comma-delimted array can be used to define the specific property name(s) that will be returned in the response. For example, if you specify Engine, the result set will only contain engines that are compatible with t...
     * @param DisabledProductFilter|null $disabledProductFilter This container can be used to specify whether or not to filter out products which are disabled for selling on eBay and/or disabled for product review.
     * @param PaginationInput|null $paginationInput This container controls the pagination of the result set.
     * @param ProductIdentifier|null $productIdentifier This container is used to provide unique identifier for the product. The product identifier consists of an identifier type and value, and are unique across all sites.
     * @param list<SortOrderInner>|null $sortOrders This array controls the sort order of compatibility properties.
     */
    public function __construct(
        public ?array $applicationPropertyFilters = null,
        public ?array $dataset = null,
        public ?array $datasetPropertyName = null,
        public ?DisabledProductFilter $disabledProductFilter = null,
        public ?PaginationInput $paginationInput = null,
        public ?ProductIdentifier $productIdentifier = null,
        public ?array $sortOrders = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            applicationPropertyFilters: isset($data['applicationPropertyFilters']) && is_array($data['applicationPropertyFilters'])
                ? array_values(array_map(static fn (array $i): PropertyFilterInner => PropertyFilterInner::fromArray($i), $data['applicationPropertyFilters']))
                : null,
            dataset: isset($data['dataset']) ? (array) $data['dataset'] : null,
            datasetPropertyName: isset($data['datasetPropertyName']) ? (array) $data['datasetPropertyName'] : null,
            disabledProductFilter: isset($data['disabledProductFilter']) && is_array($data['disabledProductFilter']) ? DisabledProductFilter::fromArray($data['disabledProductFilter']) : null,
            paginationInput: isset($data['paginationInput']) && is_array($data['paginationInput']) ? PaginationInput::fromArray($data['paginationInput']) : null,
            productIdentifier: isset($data['productIdentifier']) && is_array($data['productIdentifier']) ? ProductIdentifier::fromArray($data['productIdentifier']) : null,
            sortOrders: isset($data['sortOrders']) && is_array($data['sortOrders'])
                ? array_values(array_map(static fn (array $i): SortOrderInner => SortOrderInner::fromArray($i), $data['sortOrders']))
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
        if ($this->applicationPropertyFilters !== null) {
            $data['applicationPropertyFilters'] = array_map(static fn (PropertyFilterInner $i): array => $i->toArray(), $this->applicationPropertyFilters);
        }
        if ($this->dataset !== null) {
            $data['dataset'] = $this->dataset;
        }
        if ($this->datasetPropertyName !== null) {
            $data['datasetPropertyName'] = $this->datasetPropertyName;
        }
        if ($this->disabledProductFilter !== null) {
            $data['disabledProductFilter'] = $this->disabledProductFilter->toArray();
        }
        if ($this->paginationInput !== null) {
            $data['paginationInput'] = $this->paginationInput->toArray();
        }
        if ($this->productIdentifier !== null) {
            $data['productIdentifier'] = $this->productIdentifier->toArray();
        }
        if ($this->sortOrders !== null) {
            $data['sortOrders'] = array_map(static fn (SortOrderInner $i): array => $i->toArray(), $this->sortOrders);
        }

        return $data;
    }
}
