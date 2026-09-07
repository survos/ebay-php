<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used by the intervals container to define the opening and closing times of a store location's working day. Local time (in Military format) is used, with the following format: hh:mm:ss.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Interval
{
    /**
     * @param string|null $close The close value is actually the time that the store location closes. Local time (in Military format) is used. So, if a store closed at 8 PM local time, the close time would look like the following: 20:00:00. This field i...
     * @param string|null $open The open value is actually the time that the store opens. Local time (in Military format) is used. So, if a store opens at 9 AM local time, the open time would look like the following: 09:00:00. This field is conditional...
     */
    public function __construct(
        public ?string $close = null,
        public ?string $open = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            close: isset($data['close']) ? (string) $data['close'] : null,
            open: isset($data['open']) ? (string) $data['open'] : null,
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
        if ($this->close !== null) {
            $data['close'] = $this->close;
        }
        if ($this->open !== null) {
            $data['open'] = $this->open;
        }

        return $data;
    }
}
