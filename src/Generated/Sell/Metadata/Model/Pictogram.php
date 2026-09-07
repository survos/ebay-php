<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A type that describes pictograms for hazardous materials labels.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Pictogram
{
    /**
     * @param string|null $pictogramId The identifier of the pictogram. For sample values, see Pictogram sample values.
     * @param string|null $pictogramDescription The description of the pictogram localized to the default language of the marketplace. For sample values, see Pictogram sample values.
     * @param string|null $pictogramUrl The URL of the pictogram.
     */
    public function __construct(
        public ?string $pictogramId = null,
        public ?string $pictogramDescription = null,
        public ?string $pictogramUrl = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            pictogramId: isset($data['pictogramId']) ? (string) $data['pictogramId'] : null,
            pictogramDescription: isset($data['pictogramDescription']) ? (string) $data['pictogramDescription'] : null,
            pictogramUrl: isset($data['pictogramUrl']) ? (string) $data['pictogramUrl'] : null,
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
        if ($this->pictogramId !== null) {
            $data['pictogramId'] = $this->pictogramId;
        }
        if ($this->pictogramDescription !== null) {
            $data['pictogramDescription'] = $this->pictogramDescription;
        }
        if ($this->pictogramUrl !== null) {
            $data['pictogramUrl'] = $this->pictogramUrl;
        }

        return $data;
    }
}
