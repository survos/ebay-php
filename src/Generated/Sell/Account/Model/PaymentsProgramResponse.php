<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * The response object containing the sellers status with regards to the specified payment program.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentsProgramResponse
{
    /**
     * @param string|null $marketplaceId The ID of the eBay marketplace to which the payment program applies. For implementation help, refer to eBay API documentation
     * @param string|null $paymentsProgramType This parameter specifies the payment program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For implementation help, refer to eBay API documentation
     * @param string|null $status The enumeration value returned in this field indicates whether or not the seller's account is enabled for the payments program. For implementation help, refer to eBay API documentation
     * @param bool|null $wasPreviouslyOptedIn If returned as true, the seller was at one point opted-in to the associated payment program, but they later opted out of the program. A value of false indicates the seller never opted-in to the program or if they did opt...
     */
    public function __construct(
        public ?string $marketplaceId = null,
        public ?string $paymentsProgramType = null,
        public ?string $status = null,
        public ?bool $wasPreviouslyOptedIn = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            marketplaceId: isset($data['marketplaceId']) ? (string) $data['marketplaceId'] : null,
            paymentsProgramType: isset($data['paymentsProgramType']) ? (string) $data['paymentsProgramType'] : null,
            status: isset($data['status']) ? (string) $data['status'] : null,
            wasPreviouslyOptedIn: isset($data['wasPreviouslyOptedIn']) ? (bool) $data['wasPreviouslyOptedIn'] : null,
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
        if ($this->marketplaceId !== null) {
            $data['marketplaceId'] = $this->marketplaceId;
        }
        if ($this->paymentsProgramType !== null) {
            $data['paymentsProgramType'] = $this->paymentsProgramType;
        }
        if ($this->status !== null) {
            $data['status'] = $this->status;
        }
        if ($this->wasPreviouslyOptedIn !== null) {
            $data['wasPreviouslyOptedIn'] = $this->wasPreviouslyOptedIn;
        }

        return $data;
    }
}
