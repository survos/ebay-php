<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * A type that is used to provide the seller's eligibility status for an eBay advertising program.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SellerEligibilityResponse
{
    /**
     * @param string|null $programType The eBay advertising program for which a seller may be eligible. For implementation help, refer to eBay API documentation
     * @param string|null $reason The reason why a seller is ineligible for the specified eBay advertising program. This field is only returned if the seller is ineligible for the eBay advertising program. For implementation help, refer to eBay API docum...
     * @param string|null $status The seller eligibility status for the specified eBay advertising program. For implementation help, refer to eBay API documentation
     */
    public function __construct(
        public ?string $programType = null,
        public ?string $reason = null,
        public ?string $status = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            programType: isset($data['programType']) ? (string) $data['programType'] : null,
            reason: isset($data['reason']) ? (string) $data['reason'] : null,
            status: isset($data['status']) ? (string) $data['status'] : null,
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
        if ($this->programType !== null) {
            $data['programType'] = $this->programType;
        }
        if ($this->reason !== null) {
            $data['reason'] = $this->reason;
        }
        if ($this->status !== null) {
            $data['status'] = $this->status;
        }

        return $data;
    }
}
