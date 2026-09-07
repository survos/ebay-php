<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about a hold placed on a payment to a seller for an order, including the reason why the buyer's payment for the order is being held, the expected release date of the funds into the seller's account, the current state of the hold, and the actual release date if the payment has been released, and possible actions the seller can take to expedite the payout of funds into...
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class PaymentHold
{
    /**
     * @param string|null $expectedReleaseDate The date and time that the payment being held is expected to be released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field will be returned if...
     * @param Amount|null $holdAmount The monetary amount of the payment being held. This field is always returned with the paymentHolds array.
     * @param string|null $holdReason The reason that the payment is being held. A seller's payment may be held for a number of reasons, including when the seller is new, the seller's level is below standard, or if a return case or 'Significantly not as desc...
     * @param string|null $holdState The current stage or condition of the hold. This field is always returned with the paymentHolds array. Applicable values:HELDHELD_PENDINGNOT_HELDRELEASE_CONFIRMEDRELEASE_FAILEDRELEASE_PENDINGRELEASED
     * @param string|null $releaseDate The date and time that the payment being held was actually released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the...
     * @param list<SellerActionsToRelease>|null $sellerActionsToRelease A list of one or more possible actions that the seller can take to expedite the release of the payment hold.
     */
    public function __construct(
        public ?string $expectedReleaseDate = null,
        public ?Amount $holdAmount = null,
        public ?string $holdReason = null,
        public ?string $holdState = null,
        public ?string $releaseDate = null,
        public ?array $sellerActionsToRelease = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            expectedReleaseDate: isset($data['expectedReleaseDate']) ? (string) $data['expectedReleaseDate'] : null,
            holdAmount: isset($data['holdAmount']) && is_array($data['holdAmount']) ? Amount::fromArray($data['holdAmount']) : null,
            holdReason: isset($data['holdReason']) ? (string) $data['holdReason'] : null,
            holdState: isset($data['holdState']) ? (string) $data['holdState'] : null,
            releaseDate: isset($data['releaseDate']) ? (string) $data['releaseDate'] : null,
            sellerActionsToRelease: isset($data['sellerActionsToRelease']) && is_array($data['sellerActionsToRelease'])
                ? array_values(array_map(static fn (array $i): SellerActionsToRelease => SellerActionsToRelease::fromArray($i), $data['sellerActionsToRelease']))
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
        if ($this->expectedReleaseDate !== null) {
            $data['expectedReleaseDate'] = $this->expectedReleaseDate;
        }
        if ($this->holdAmount !== null) {
            $data['holdAmount'] = $this->holdAmount->toArray();
        }
        if ($this->holdReason !== null) {
            $data['holdReason'] = $this->holdReason;
        }
        if ($this->holdState !== null) {
            $data['holdState'] = $this->holdState;
        }
        if ($this->releaseDate !== null) {
            $data['releaseDate'] = $this->releaseDate;
        }
        if ($this->sellerActionsToRelease !== null) {
            $data['sellerActionsToRelease'] = array_map(static fn (SellerActionsToRelease $i): array => $i->toArray(), $this->sellerActionsToRelease);
        }

        return $data;
    }
}
