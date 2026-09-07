<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type is used by the compatibilityProperties array that is returned in the getCompatibilityProperties call. The compatibilityProperties container consists of an array of all compatible vehicle properties applicable to the specified eBay marketplace and eBay category ID.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CompatibilityProperty
{
    /**
     * @param string|null $name This is the actual name of the compatible vehicle property as it is known on the specified eBay marketplace and in the eBay category. This is the string value that should be used in the compatibility_property and filter...
     * @param string|null $localizedName This is the localized name of the compatible vehicle property. The language that is used will depend on the user making the call, or based on the language specified if the Content-Language HTTP header is used. In some in...
     */
    public function __construct(
        public ?string $name = null,
        public ?string $localizedName = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            name: isset($data['name']) ? (string) $data['name'] : null,
            localizedName: isset($data['localizedName']) ? (string) $data['localizedName'] : null,
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
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->localizedName !== null) {
            $data['localizedName'] = $this->localizedName;
        }

        return $data;
    }
}
