<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type describes the physical location of an order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ItemLocation
{
    /**
     * @param string|null $countryCode The two-letter ISO 3166 code representing the country of the address. For implementation help, refer to eBay API documentation
     * @param string|null $location Indicates the geographical location of the item (along with the values in the countryCode and postalCode fields). Note: If the item is shipped from a fulfillment center location through the Multi-Warehouse Program, this...
     * @param string|null $postalCode The postal code of the address.
     */
    public function __construct(
        public ?string $countryCode = null,
        public ?string $location = null,
        public ?string $postalCode = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            countryCode: isset($data['countryCode']) ? (string) $data['countryCode'] : null,
            location: isset($data['location']) ? (string) $data['location'] : null,
            postalCode: isset($data['postalCode']) ? (string) $data['postalCode'] : null,
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
        if ($this->countryCode !== null) {
            $data['countryCode'] = $this->countryCode;
        }
        if ($this->location !== null) {
            $data['location'] = $this->location;
        }
        if ($this->postalCode !== null) {
            $data['postalCode'] = $this->postalCode;
        }

        return $data;
    }
}
