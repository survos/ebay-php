<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to display the result for each offer and/or inventory item that the seller attempted to update with a bulkUpdatePriceQuantity call. If any errors or warnings occur, the error/warning data is returned at the offer/inventory item level.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PriceQuantityResponse
{
    /**
     * @param list<Error>|null $errors This array will be returned if there were one or more errors associated with the update to the offer or inventory item record.
     * @param string|null $offerId The unique identifier of the offer that was updated. This field will not be returned in situations where the seller is only updating the total 'ship-to-home' quantity of an inventory item record.
     * @param string|null $sku This is the seller-defined SKU value of the product. This field is returned whether the seller attempted to update an offer with the SKU value or just attempted to update the total 'ship-to-home' quantity of an inventory...
     * @param int|null $statusCode The value returned in this container will indicate the status of the attempt to update the price and/or quantity of the offer (specified in the corresponding offerId field) or the attempt to update the total 'ship-to-hom...
     * @param list<Error>|null $warnings This array will be returned if there were one or more warnings associated with the update to the offer or inventory item record.
     */
    public function __construct(
        public ?array $errors = null,
        public ?string $offerId = null,
        public ?string $sku = null,
        public ?int $statusCode = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            errors: isset($data['errors']) && is_array($data['errors'])
                ? array_values(array_map(static fn (array $i): Error => Error::fromArray($i), $data['errors']))
                : null,
            offerId: isset($data['offerId']) ? (string) $data['offerId'] : null,
            sku: isset($data['sku']) ? (string) $data['sku'] : null,
            statusCode: isset($data['statusCode']) ? (int) $data['statusCode'] : null,
            warnings: isset($data['warnings']) && is_array($data['warnings'])
                ? array_values(array_map(static fn (array $i): Error => Error::fromArray($i), $data['warnings']))
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
        if ($this->errors !== null) {
            $data['errors'] = array_map(static fn (Error $i): array => $i->toArray(), $this->errors);
        }
        if ($this->offerId !== null) {
            $data['offerId'] = $this->offerId;
        }
        if ($this->sku !== null) {
            $data['sku'] = $this->sku;
        }
        if ($this->statusCode !== null) {
            $data['statusCode'] = $this->statusCode;
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
