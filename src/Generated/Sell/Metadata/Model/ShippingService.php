<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This type provides applicable shipping service metadata.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ShippingService
{
    /**
     * @param string|null $description This field returns the localized name of the shipping service.
     * @param bool|null $internationalService A value of true indicates that the shipping service is international. An international shipping service option is required if an item is being shipped from one country (origin) to another (destination).
     * @param int|null $maxShippingTime This value indicates the maximum number of business days that it takes the shippingCarrier to ship an item using the corresponding shippingService.
     * @param int|null $minShippingTime This value indicates the minimum number of business days that it takes the shippingCarrier to ship an item using the corresponding shippingService.
     * @param PackageLimits|null $packageLimits This container provides name-value pairs that specify physical constraints and measurement units of packages for the shippingCarrier and the corresponding shippingService. An empty container is returned if the shipping s...
     * @param string|null $shippingCarrier The code for the shipping carrier returned, for example, UPS, FedEx, and USPS.
     * @param string|null $shippingCategory The shipping category of the shipping service including: ECONOMY, STANDARD, EXPEDITED, ONE_DAY, PICKUP, and other similar categories.
     * @param list<string>|null $shippingCostTypes A list of shipping cost types that this shipping service option supports. For example, FLAT_RATE, CALCULATED, and FREIGHT.
     * @param string|null $shippingService The name of the shipping service. The shipping service named here can only be used in listings or in business policies if validForSellingFlow is true. The value returned in this field is used in listing APIs and business...
     * @param bool|null $validForSellingFlow A value of true indicates that the shippingService can be set as an available shipping service in the listing or through the fulfillment business policy.
     */
    public function __construct(
        public ?string $description = null,
        public ?bool $internationalService = null,
        public ?int $maxShippingTime = null,
        public ?int $minShippingTime = null,
        public ?PackageLimits $packageLimits = null,
        public ?string $shippingCarrier = null,
        public ?string $shippingCategory = null,
        public ?array $shippingCostTypes = null,
        public ?string $shippingService = null,
        public ?bool $validForSellingFlow = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            description: isset($data['description']) ? (string) $data['description'] : null,
            internationalService: isset($data['internationalService']) ? (bool) $data['internationalService'] : null,
            maxShippingTime: isset($data['maxShippingTime']) ? (int) $data['maxShippingTime'] : null,
            minShippingTime: isset($data['minShippingTime']) ? (int) $data['minShippingTime'] : null,
            packageLimits: isset($data['packageLimits']) && is_array($data['packageLimits']) ? PackageLimits::fromArray($data['packageLimits']) : null,
            shippingCarrier: isset($data['shippingCarrier']) ? (string) $data['shippingCarrier'] : null,
            shippingCategory: isset($data['shippingCategory']) ? (string) $data['shippingCategory'] : null,
            shippingCostTypes: isset($data['shippingCostTypes']) ? (array) $data['shippingCostTypes'] : null,
            shippingService: isset($data['shippingService']) ? (string) $data['shippingService'] : null,
            validForSellingFlow: isset($data['validForSellingFlow']) ? (bool) $data['validForSellingFlow'] : null,
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
        if ($this->internationalService !== null) {
            $data['internationalService'] = $this->internationalService;
        }
        if ($this->maxShippingTime !== null) {
            $data['maxShippingTime'] = $this->maxShippingTime;
        }
        if ($this->minShippingTime !== null) {
            $data['minShippingTime'] = $this->minShippingTime;
        }
        if ($this->packageLimits !== null) {
            $data['packageLimits'] = $this->packageLimits->toArray();
        }
        if ($this->shippingCarrier !== null) {
            $data['shippingCarrier'] = $this->shippingCarrier;
        }
        if ($this->shippingCategory !== null) {
            $data['shippingCategory'] = $this->shippingCategory;
        }
        if ($this->shippingCostTypes !== null) {
            $data['shippingCostTypes'] = $this->shippingCostTypes;
        }
        if ($this->shippingService !== null) {
            $data['shippingService'] = $this->shippingService;
        }
        if ($this->validForSellingFlow !== null) {
            $data['validForSellingFlow'] = $this->validForSellingFlow;
        }

        return $data;
    }
}
