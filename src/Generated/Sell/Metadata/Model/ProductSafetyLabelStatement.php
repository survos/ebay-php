<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that describes statements for product safety labels.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ProductSafetyLabelStatement
{
    /**
     * @param string|null $statementDescription The description of the statement localized to the default language of the marketplace.
     * @param string|null $statementId The identifier of the statement.
     */
    public function __construct(
        public ?string $statementDescription = null,
        public ?string $statementId = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            statementDescription: isset($data['statementDescription']) ? (string) $data['statementDescription'] : null,
            statementId: isset($data['statementId']) ? (string) $data['statementId'] : null,
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
        if ($this->statementDescription !== null) {
            $data['statementDescription'] = $this->statementDescription;
        }
        if ($this->statementId !== null) {
            $data['statementId'] = $this->statementId;
        }

        return $data;
    }
}
