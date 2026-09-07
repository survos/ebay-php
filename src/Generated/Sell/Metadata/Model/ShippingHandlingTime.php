<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable shipping handling time metadata.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingHandlingTime
{
    /**
     * @param string|null $description The localized description of the maximum handling time.
     * @param bool|null $extendedHandling This field is only returned if its value is true. If returned, it indicates that the corresponding handling time is considered extended handling for the marketplace. Extended handling times may be used for freight shippi...
     * @param int|null $maxHandlingTime The integer value returned in this field indicates the maximum number of business days that the eBay site allows as a seller's handling time measured from when the buyer pays for the order. For example, if the maxHandlin...
     */
    public function __construct(
        public ?string $description = null,
        public ?bool $extendedHandling = null,
        public ?int $maxHandlingTime = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            description: isset($data['description']) ? (string) $data['description'] : null,
            extendedHandling: isset($data['extendedHandling']) ? (bool) $data['extendedHandling'] : null,
            maxHandlingTime: isset($data['maxHandlingTime']) ? (int) $data['maxHandlingTime'] : null,
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
        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->extendedHandling !== null) {
            $data['extendedHandling'] = $this->extendedHandling;
        }
        if ($this->maxHandlingTime !== null) {
            $data['maxHandlingTime'] = $this->maxHandlingTime;
        }

        return $data;
    }
}
