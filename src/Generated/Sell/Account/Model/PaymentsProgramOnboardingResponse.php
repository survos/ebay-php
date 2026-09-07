<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * Type used by the payments program onboarding response
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentsProgramOnboardingResponse
{
    /**
     * @param string|null $onboardingStatus This enumeration value indicates the eligibility of payment onboarding for the registered site. For implementation help, refer to eBay API documentation
     * @param list<PaymentsProgramOnboardingSteps>|null $steps An array of the active process steps for payment onboarding and the status of each step. This array includes the step name, step status, and a webUrl to the IN_PROGRESS step. The step names are returned in sequential ord...
     */
    public function __construct(
        public ?string $onboardingStatus = null,
        public ?array $steps = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            onboardingStatus: isset($data['onboardingStatus']) ? (string) $data['onboardingStatus'] : null,
            steps: isset($data['steps']) && is_array($data['steps'])
                ? array_values(array_map(static fn (array $i): PaymentsProgramOnboardingSteps => PaymentsProgramOnboardingSteps::fromArray($i), $data['steps']))
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
        if ($this->onboardingStatus !== null) {
            $data['onboardingStatus'] = $this->onboardingStatus;
        }
        if ($this->steps !== null) {
            $data['steps'] = array_map(static fn (PaymentsProgramOnboardingSteps $i): array => $i->toArray(), $this->steps);
        }

        return $data;
    }
}
