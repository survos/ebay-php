<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * Note: This type is no longer applicable. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class RecipientAccountReference
{
    /**
     * @param string|null $referenceId Note: DO NOT USE THIS FIELD. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods.
     * @param string|null $referenceType Note: DO NOT USE THIS FIELD. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods. For implementation help, refer to eBay API docu...
     */
    public function __construct(
        public ?string $referenceId = null,
        public ?string $referenceType = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            referenceId: isset($data['referenceId']) ? (string) $data['referenceId'] : null,
            referenceType: isset($data['referenceType']) ? (string) $data['referenceType'] : null,
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
        if ($this->referenceId !== null) {
            $data['referenceId'] = $this->referenceId;
        }
        if ($this->referenceType !== null) {
            $data['referenceType'] = $this->referenceType;
        }

        return $data;
    }
}
