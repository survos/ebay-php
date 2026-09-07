<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that defines the response fields for the getHazardousMaterialsLabels method.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class HazardousMaterialDetailsResponse
{
    /**
     * @param list<SignalWord>|null $signalWords This array contains available hazardous materials signal words for the specified marketplace.
     * @param list<HazardStatement>|null $statements This array contains available hazardous materials hazard statements for the specified marketplace.
     * @param list<Pictogram>|null $pictograms This array contains available hazardous materials hazard pictograms for the specified marketplace.
     */
    public function __construct(
        public ?array $signalWords = null,
        public ?array $statements = null,
        public ?array $pictograms = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            signalWords: isset($data['signalWords']) && is_array($data['signalWords'])
                ? array_values(array_map(static fn (array $i): SignalWord => SignalWord::fromArray($i), $data['signalWords']))
                : null,
            statements: isset($data['statements']) && is_array($data['statements'])
                ? array_values(array_map(static fn (array $i): HazardStatement => HazardStatement::fromArray($i), $data['statements']))
                : null,
            pictograms: isset($data['pictograms']) && is_array($data['pictograms'])
                ? array_values(array_map(static fn (array $i): Pictogram => Pictogram::fromArray($i), $data['pictograms']))
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
        if ($this->signalWords !== null) {
            $data['signalWords'] = array_map(static fn (SignalWord $i): array => $i->toArray(), $this->signalWords);
        }
        if ($this->statements !== null) {
            $data['statements'] = array_map(static fn (HazardStatement $i): array => $i->toArray(), $this->statements);
        }
        if ($this->pictograms !== null) {
            $data['pictograms'] = array_map(static fn (Pictogram $i): array => $i->toArray(), $this->pictograms);
        }

        return $data;
    }
}
