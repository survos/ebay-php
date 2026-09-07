<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the base response of the getOffers call, and it is an array of one or more of the seller's offers, along with pagination data.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Offers
{
    /**
     * @param string|null $href This is the URL to the current page of offers.
     * @param int|null $limit This integer value is the number of offers that will be displayed on each results page.
     * @param string|null $next This is the URL to the next page of offers. This field will only be returned if there are additional offers to view.
     * @param list<EbayOfferDetailsWithAll>|null $offers This container is an array of one or more of the seller's offers for the SKU value that is passed in through the required sku query parameter. Note: Currently, the Inventory API does not support the same SKU across multi...
     * @param string|null $prev This is the URL to the previous page of offers. This field will only be returned if there are previous offers to view.
     * @param int|null $size This integer value indicates the number of offers being displayed on the current page of results. This number will generally be the same as the limit value if there are additional pages of results to view. Note: The same...
     * @param int|null $total This integer value is the total number of offers that exist for the specified SKU value. Based on this number and on the limit value, the seller may have to toggle through multiple pages to view all offers. Note: The sam...
     */
    public function __construct(
        public ?string $href = null,
        public ?int $limit = null,
        public ?string $next = null,
        public ?array $offers = null,
        public ?string $prev = null,
        public ?int $size = null,
        public ?int $total = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            href: isset($data['href']) ? (string) $data['href'] : null,
            limit: isset($data['limit']) ? (int) $data['limit'] : null,
            next: isset($data['next']) ? (string) $data['next'] : null,
            offers: isset($data['offers']) && is_array($data['offers'])
                ? array_values(array_map(static fn (array $i): EbayOfferDetailsWithAll => EbayOfferDetailsWithAll::fromArray($i), $data['offers']))
                : null,
            prev: isset($data['prev']) ? (string) $data['prev'] : null,
            size: isset($data['size']) ? (int) $data['size'] : null,
            total: isset($data['total']) ? (int) $data['total'] : null,
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
        if ($this->href !== null) {
            $data['href'] = $this->href;
        }
        if ($this->limit !== null) {
            $data['limit'] = $this->limit;
        }
        if ($this->next !== null) {
            $data['next'] = $this->next;
        }
        if ($this->offers !== null) {
            $data['offers'] = array_map(static fn (EbayOfferDetailsWithAll $i): array => $i->toArray(), $this->offers);
        }
        if ($this->prev !== null) {
            $data['prev'] = $this->prev;
        }
        if ($this->size !== null) {
            $data['size'] = $this->size;
        }
        if ($this->total !== null) {
            $data['total'] = $this->total;
        }

        return $data;
    }
}
