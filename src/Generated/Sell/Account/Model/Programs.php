<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * The base response type of the getOptedInPrograms method.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Programs
{
    /**
     * @param list<Program>|null $programs An array of seller programs that the seller's account is opted in to. An empty array is returned if the seller is not opted in to any of the seller programs.
     */
    public function __construct(
        public ?array $programs = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            programs: isset($data['programs']) && is_array($data['programs'])
                ? array_values(array_map(static fn (array $i): Program => Program::fromArray($i), $data['programs']))
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
        if ($this->programs !== null) {
            $data['programs'] = array_map(static fn (Program $i): array => $i->toArray(), $this->programs);
        }

        return $data;
    }
}
