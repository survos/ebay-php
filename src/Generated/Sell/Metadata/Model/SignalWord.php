<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that describes signal words for hazardous materials labels.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class SignalWord
{
    /**
     * @param string|null $signalWordId The identifier of the signal word. For more information, see Signal word information.
     * @param string|null $signalWordDescription The description of the signal word localized to the default language of the marketplace. For more information, see Signal word information.
     */
    public function __construct(
        public ?string $signalWordId = null,
        public ?string $signalWordDescription = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            signalWordId: isset($data['signalWordId']) ? (string) $data['signalWordId'] : null,
            signalWordDescription: isset($data['signalWordDescription']) ? (string) $data['signalWordDescription'] : null,
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
        if ($this->signalWordId !== null) {
            $data['signalWordId'] = $this->signalWordId;
        }
        if ($this->signalWordDescription !== null) {
            $data['signalWordDescription'] = $this->signalWordDescription;
        }

        return $data;
    }
}
