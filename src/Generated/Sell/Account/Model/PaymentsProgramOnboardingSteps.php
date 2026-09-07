<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * The payments program onboarding steps, status, and link.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentsProgramOnboardingSteps
{
    /**
     * @param string|null $name The name of the step in the steps array. Over time, these names are subject to change as processes change. The output sample contains example step names. Review an actual call response for updated step names.
     * @param string|null $status This enumeration value indicates the status of the associated step. Note: Only one step can be IN_PROGRESS at a time. For implementation help, refer to eBay API documentation
     * @param string|null $webUrl This URL provides access to the IN_PROGRESS step.
     */
    public function __construct(
        public ?string $name = null,
        public ?string $status = null,
        public ?string $webUrl = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            name: isset($data['name']) ? (string) $data['name'] : null,
            status: isset($data['status']) ? (string) $data['status'] : null,
            webUrl: isset($data['webUrl']) ? (string) $data['webUrl'] : null,
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
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->status !== null) {
            $data['status'] = $this->status;
        }
        if ($this->webUrl !== null) {
            $data['webUrl'] = $this->webUrl;
        }

        return $data;
    }
}
