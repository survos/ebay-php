<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This type is used to provide details about any KYC check that is applicable to the managed payments seller.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class KycCheck
{
    /**
     * @param string|null $dataRequired The enumeration value returned in this field categorizes the type of details needed for the KYC check. More information about the check is shown in the detailMessage and other applicable, corresponding fields. For implem...
     * @param string|null $dueDate The timestamp in this field indicates the date by which the seller should resolve the KYC requirement. The timestamp in this field uses the UTC date and time format described in the ISO 8601 Standard. See below for this...
     * @param string|null $remedyUrl If applicable and available, a URL will be returned in this field, and the link will take the seller to an eBay page where they can provide the requested information.
     * @param string|null $alert This field gives a short summary of what is required from the seller. An example might be, 'Upload bank document now.'. The detailMessage field will often provide more details on what is required of the seller.
     * @param string|null $detailMessage This field gives a detailed message about what is required from the seller. An example might be, 'Please upload a bank document by 2020-08-01 to get your account back in good standing.'.
     */
    public function __construct(
        public ?string $dataRequired = null,
        public ?string $dueDate = null,
        public ?string $remedyUrl = null,
        public ?string $alert = null,
        public ?string $detailMessage = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            dataRequired: isset($data['dataRequired']) ? (string) $data['dataRequired'] : null,
            dueDate: isset($data['dueDate']) ? (string) $data['dueDate'] : null,
            remedyUrl: isset($data['remedyUrl']) ? (string) $data['remedyUrl'] : null,
            alert: isset($data['alert']) ? (string) $data['alert'] : null,
            detailMessage: isset($data['detailMessage']) ? (string) $data['detailMessage'] : null,
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
        if ($this->dataRequired !== null) {
            $data['dataRequired'] = $this->dataRequired;
        }
        if ($this->dueDate !== null) {
            $data['dueDate'] = $this->dueDate;
        }
        if ($this->remedyUrl !== null) {
            $data['remedyUrl'] = $this->remedyUrl;
        }
        if ($this->alert !== null) {
            $data['alert'] = $this->alert;
        }
        if ($this->detailMessage !== null) {
            $data['detailMessage'] = $this->detailMessage;
        }

        return $data;
    }
}
