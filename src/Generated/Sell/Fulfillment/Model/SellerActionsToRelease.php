<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used to state possible action(s) that a seller can take to release a payment hold placed against an order.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SellerActionsToRelease
{
    /**
     * @param string|null $sellerActionToRelease A possible action that the seller can take to expedite the release of a payment hold. A sellerActionToRelease field is returned for each possible action that a seller may take. Possible actions may include providing ship...
     */
    public function __construct(
        public ?string $sellerActionToRelease = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            sellerActionToRelease: isset($data['sellerActionToRelease']) ? (string) $data['sellerActionToRelease'] : null,
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
        if ($this->sellerActionToRelease !== null) {
            $data['sellerActionToRelease'] = $this->sellerActionToRelease;
        }

        return $data;
    }
}
