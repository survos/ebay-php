<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This container stores the array of sales-tax table entries that have been created or updated.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class UpdatedSalesTaxEntry
{
    /**
     * @param string|null $countryCode The two-letter ISO 3166 code of the country associated with the sales-tax table entry.
     * @param string|null $jurisdictionId The ID of the tax jurisdiction associated with the sales-tax table entry.
     * @param int|null $statusCode The HTTP status code for the call. Note: The system returns one HTTP status code regardless of the number of sales-tax table entries provided. Therefore, the same HTTP statusCode will be listed for all sales-tax table en...
     */
    public function __construct(
        public ?string $countryCode = null,
        public ?string $jurisdictionId = null,
        public ?int $statusCode = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            countryCode: isset($data['countryCode']) ? (string) $data['countryCode'] : null,
            jurisdictionId: isset($data['jurisdictionId']) ? (string) $data['jurisdictionId'] : null,
            statusCode: isset($data['statusCode']) ? (int) $data['statusCode'] : null,
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
        if ($this->jurisdictionId !== null) {
            $data['jurisdictionId'] = $this->jurisdictionId;
        }
        if ($this->statusCode !== null) {
            $data['statusCode'] = $this->statusCode;
        }

        return $data;
    }
}
