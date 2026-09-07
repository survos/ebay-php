<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that defines the response fields for the getExtendedProducerResponsibilityPolicies method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ExtendedProducerResponsibilityPolicyResponse
{
    /**
     * @param list<ExtendedProducerResponsibilityPolicy>|null $extendedProducerResponsibilities An array of response fields detailing the Extended Producer Responsibility policies supported for the specified marketplace.
     * @param list<Error>|null $warnings A collection of warnings generated for the request.
     */
    public function __construct(
        public ?array $extendedProducerResponsibilities = null,
        public ?array $warnings = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            extendedProducerResponsibilities: isset($data['extendedProducerResponsibilities']) && is_array($data['extendedProducerResponsibilities'])
                ? array_values(array_map(static fn (array $i): ExtendedProducerResponsibilityPolicy => ExtendedProducerResponsibilityPolicy::fromArray($i), $data['extendedProducerResponsibilities']))
                : null,
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
        if ($this->extendedProducerResponsibilities !== null) {
            $data['extendedProducerResponsibilities'] = array_map(static fn (ExtendedProducerResponsibilityPolicy $i): array => $i->toArray(), $this->extendedProducerResponsibilities);
        }
        if ($this->warnings !== null) {
            $data['warnings'] = array_map(static fn (Error $i): array => $i->toArray(), $this->warnings);
        }

        return $data;
    }
}
