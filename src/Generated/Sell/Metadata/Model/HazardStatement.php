<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that describes hazard statements for hazardous materials labels
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class HazardStatement
{
    /**
     * @param string|null $statementId The identifier of the statement. For sample values, see Hazard statement sample values.
     * @param string|null $statementDescription The description of the statement localized to the default language of the marketplace. For sample values, see Hazard statement sample values.
     */
    public function __construct(
        public ?string $statementId = null,
        public ?string $statementDescription = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            statementId: isset($data['statementId']) ? (string) $data['statementId'] : null,
            statementDescription: isset($data['statementDescription']) ? (string) $data['statementDescription'] : null,
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
        if ($this->statementId !== null) {
            $data['statementId'] = $this->statementId;
        }
        if ($this->statementDescription !== null) {
            $data['statementDescription'] = $this->statementDescription;
        }

        return $data;
    }
}
