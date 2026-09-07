<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class NegotiatedPricePolicy
{
    /**
     * @param bool|null $bestOfferAutoAcceptEnabled This flag denotes whether or not the category supports the setting of a price at which best offers are automatically accepted. If set to true, the category does support the setting of an automatic price for best-offers.
     * @param bool|null $bestOfferAutoDeclineEnabled This flag denotes whether or not the category supports the setting of an auto-decline price for best offers. If set to true, the category does support the setting of an automatic-decline price for best-offers.
     * @param bool|null $bestOfferCounterEnabled This flag denotes whether or not the category supports the setting for an automatic counter-offer on best offers. If set to true, the category does support the setting of an automatic counter-offer price for best-offers.
     * @param string|null $categoryId The category ID to which the negotiated-price policies apply.
     * @param string|null $categoryTreeId A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy informa...
     */
    public function __construct(
        public ?bool $bestOfferAutoAcceptEnabled = null,
        public ?bool $bestOfferAutoDeclineEnabled = null,
        public ?bool $bestOfferCounterEnabled = null,
        public ?string $categoryId = null,
        public ?string $categoryTreeId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            bestOfferAutoAcceptEnabled: isset($data['bestOfferAutoAcceptEnabled']) ? (bool) $data['bestOfferAutoAcceptEnabled'] : null,
            bestOfferAutoDeclineEnabled: isset($data['bestOfferAutoDeclineEnabled']) ? (bool) $data['bestOfferAutoDeclineEnabled'] : null,
            bestOfferCounterEnabled: isset($data['bestOfferCounterEnabled']) ? (bool) $data['bestOfferCounterEnabled'] : null,
            categoryId: isset($data['categoryId']) ? (string) $data['categoryId'] : null,
            categoryTreeId: isset($data['categoryTreeId']) ? (string) $data['categoryTreeId'] : null,
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
        if ($this->bestOfferAutoAcceptEnabled !== null) {
            $data['bestOfferAutoAcceptEnabled'] = $this->bestOfferAutoAcceptEnabled;
        }
        if ($this->bestOfferAutoDeclineEnabled !== null) {
            $data['bestOfferAutoDeclineEnabled'] = $this->bestOfferAutoDeclineEnabled;
        }
        if ($this->bestOfferCounterEnabled !== null) {
            $data['bestOfferCounterEnabled'] = $this->bestOfferCounterEnabled;
        }
        if ($this->categoryId !== null) {
            $data['categoryId'] = $this->categoryId;
        }
        if ($this->categoryTreeId !== null) {
            $data['categoryTreeId'] = $this->categoryTreeId;
        }

        return $data;
    }
}
