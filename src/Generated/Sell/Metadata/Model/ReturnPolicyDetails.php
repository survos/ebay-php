<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * This container defines the category policies that relate to domestic and international return policies (the return shipping is made via a domestic or an international shipping service, respectively).
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class ReturnPolicyDetails
{
    /**
     * @param bool|null $policyDescriptionEnabled If set to true, this flag indicates you can supply a detailed return policy description within your return policy (for example, by populating the returnInstructions field in the Account API's createReturnPolicy). User-su...
     * @param list<string>|null $refundMethods A list of refund methods allowed for the associated category. Note: Depending on the API used to setup your return policy, available refund methods are defined differently.Account v1 API When using the createReturnPolicy...
     * @param list<string>|null $returnMethods A list of return methods allowed for the associated category. Note: Depending on the API used to setup your return policy, available return methods are defined differently.Account v1 API When using createReturnPolicy and...
     * @param list<TimeDuration>|null $returnPeriods A list of return periods allowed for the associated category. Note: Depending on the API used to setup your return policy, return periods are defined differently.Account v1 API When using createReturnPolicy and updateRet...
     * @param bool|null $returnsAcceptanceEnabled A value of true in this field indicates that return policies are applicable to the corresponding leaf category. Note: Depending on the API used to setup your return policy, whether or not you accept returns is configured...
     * @param list<string>|null $returnShippingCostPayers A list of allowed values for who pays for the return shipping cost. Note that for SNAD returns, the seller is always responsible for the return shipping cost. Note: Depending on the API used to setup your return policy,...
     */
    public function __construct(
        public ?bool $policyDescriptionEnabled = null,
        public ?array $refundMethods = null,
        public ?array $returnMethods = null,
        public ?array $returnPeriods = null,
        public ?bool $returnsAcceptanceEnabled = null,
        public ?array $returnShippingCostPayers = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            policyDescriptionEnabled: isset($data['policyDescriptionEnabled']) ? (bool) $data['policyDescriptionEnabled'] : null,
            refundMethods: isset($data['refundMethods']) ? (array) $data['refundMethods'] : null,
            returnMethods: isset($data['returnMethods']) ? (array) $data['returnMethods'] : null,
            returnPeriods: isset($data['returnPeriods']) && is_array($data['returnPeriods'])
                ? array_values(array_map(static fn (array $i): TimeDuration => TimeDuration::fromArray($i), $data['returnPeriods']))
                : null,
            returnsAcceptanceEnabled: isset($data['returnsAcceptanceEnabled']) ? (bool) $data['returnsAcceptanceEnabled'] : null,
            returnShippingCostPayers: isset($data['returnShippingCostPayers']) ? (array) $data['returnShippingCostPayers'] : null,
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
        if ($this->policyDescriptionEnabled !== null) {
            $data['policyDescriptionEnabled'] = $this->policyDescriptionEnabled;
        }
        if ($this->refundMethods !== null) {
            $data['refundMethods'] = $this->refundMethods;
        }
        if ($this->returnMethods !== null) {
            $data['returnMethods'] = $this->returnMethods;
        }
        if ($this->returnPeriods !== null) {
            $data['returnPeriods'] = array_map(static fn (TimeDuration $i): array => $i->toArray(), $this->returnPeriods);
        }
        if ($this->returnsAcceptanceEnabled !== null) {
            $data['returnsAcceptanceEnabled'] = $this->returnsAcceptanceEnabled;
        }
        if ($this->returnShippingCostPayers !== null) {
            $data['returnShippingCostPayers'] = $this->returnShippingCostPayers;
        }

        return $data;
    }
}
