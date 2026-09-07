<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information about a digital gift card line item that was purchased as a gift and sent to the recipient by email. Note: GiftDetails will not be returned for any order that is more than 90 days old.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class GiftDetails
{
    /**
     * @param string|null $message This field contains the gift message from the buyer to the gift recipient. This field is only returned if the buyer of the gift included a message for the gift. Note: The message will not be returned for any order that i...
     * @param string|null $recipientEmail The email address of the gift recipient. The seller will send the digital gift card to this email address. Note: The recipientEmail will not be returned for any order that is more than 90 days old.
     * @param string|null $senderName The name of the buyer, which will appear on the email that is sent to the gift recipient. Note: The senderName will not be returned for any order that is more than 90 days old.
     */
    public function __construct(
        public ?string $message = null,
        public ?string $recipientEmail = null,
        public ?string $senderName = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            message: isset($data['message']) ? (string) $data['message'] : null,
            recipientEmail: isset($data['recipientEmail']) ? (string) $data['recipientEmail'] : null,
            senderName: isset($data['senderName']) ? (string) $data['senderName'] : null,
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
        if ($this->message !== null) {
            $data['message'] = $this->message;
        }
        if ($this->recipientEmail !== null) {
            $data['recipientEmail'] = $this->recipientEmail;
        }
        if ($this->senderName !== null) {
            $data['senderName'] = $this->senderName;
        }

        return $data;
    }
}
