<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * The seller program to opt in to when part of an optInToProgram request, or out of when part of an optOutOfProgram request.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Program
{
    /**
     * @param string|null $programType The seller program to opt in to when part of an optInToProgram request, or out of when part of an optOutOfProgram request. When returned in an getOptedInPrograms response, a separate programType field is returned for eac...
     */
    public function __construct(
        public ?string $programType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            programType: isset($data['programType']) ? (string) $data['programType'] : null,
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

        return $data;
    }
}
