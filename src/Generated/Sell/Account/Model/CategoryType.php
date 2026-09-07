<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * The category type discerns whether the policy applies to motor vehicle listings, or to any other items except motor vehicle listings. Each business policy can be associated with either or both categories ('MOTORS_VEHICLES' and 'ALL_EXCLUDING_MOTORS_VEHICLES'); however, return business policies are not applicable for motor vehicle listings.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class CategoryType
{
    /**
     * @param bool|null $_default Note: This field has been deprecated and is no longer used.Do not include this field in any create or update method.This field may be returned within the payload of a get method, but it can be ignored.
     * @param string|null $name The category type to which the policy applies (motor vehicles or non-motor vehicles). Note: The MOTORS_VEHICLES category type is not valid for return policies. eBay flows do not support the return of motor vehicles. For...
     */
    public function __construct(
        public ?bool $_default = null,
        public ?string $name = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            _default: isset($data['default']) ? (bool) $data['default'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
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
        if ($this->_default !== null) {
            $data['default'] = $this->_default;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }

        return $data;
    }
}
