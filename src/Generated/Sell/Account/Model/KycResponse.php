<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * This is the base response type of the getKYC method.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class KycResponse
{
    /**
     * @param list<KycCheck>|null $kycChecks This array contains one or more KYC checks required from a managed payments seller. The seller may need to provide more documentation and/or information about themselves, their company, or the bank account they are using...
     */
    public function __construct(
        public ?array $kycChecks = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            kycChecks: isset($data['kycChecks']) && is_array($data['kycChecks'])
                ? array_values(array_map(static fn (array $i): KycCheck => KycCheck::fromArray($i), $data['kycChecks']))
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
        if ($this->kycChecks !== null) {
            $data['kycChecks'] = array_map(static fn (KycCheck $i): array => $i->toArray(), $this->kycChecks);
        }

        return $data;
    }
}
