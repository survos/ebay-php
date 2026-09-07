<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains a error or warning related to a call request.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Error
{
    /**
     * @param string|null $category The context or source of this error or warning.
     * @param string|null $domain The name of the domain containing the service or application. For example, sell is a domain.
     * @param int|null $errorId A positive integer that uniquely identifies the specific error condition that occurred. Your application can use these values as error code identifiers in your customized error-handling algorithms.
     * @param list<string>|null $inputRefIds A list of one or more specific request elements (if any) associated with the error or warning. The format of these strings depends on the request payload format. For JSON, use JSONPath notation.
     * @param string|null $longMessage An expanded version of the message field. Maximum length: 200 characters
     * @param string|null $message A message about the error or warning which is device agnostic and readable by end users and application developers. It explains what the error or warning is, and how to fix it (in a general sense). If applicable, the val...
     * @param list<string>|null $outputRefIds A list of one or more specific response elements (if any) associated with the error or warning. The format of these strings depends on the request payload format. For JSON, use JSONPath notation.
     * @param list<ErrorParameter>|null $parameters Contains a list of name-value pairs that provide additional information concerning this error or warning. Each item in the list is an input parameter that contributed to the error or warning condition.
     * @param string|null $subdomain The name of the domain's subsystem or subdivision. For example, fulfillment is a subdomain in the sell domain.
     */
    public function __construct(
        public ?string $category = null,
        public ?string $domain = null,
        public ?int $errorId = null,
        public ?array $inputRefIds = null,
        public ?string $longMessage = null,
        public ?string $message = null,
        public ?array $outputRefIds = null,
        public ?array $parameters = null,
        public ?string $subdomain = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            category: isset($data['category']) ? (string) $data['category'] : null,
            domain: isset($data['domain']) ? (string) $data['domain'] : null,
            errorId: isset($data['errorId']) ? (int) $data['errorId'] : null,
            inputRefIds: isset($data['inputRefIds']) ? (array) $data['inputRefIds'] : null,
            longMessage: isset($data['longMessage']) ? (string) $data['longMessage'] : null,
            message: isset($data['message']) ? (string) $data['message'] : null,
            outputRefIds: isset($data['outputRefIds']) ? (array) $data['outputRefIds'] : null,
            parameters: isset($data['parameters']) && is_array($data['parameters'])
                ? array_values(array_map(static fn (array $i): ErrorParameter => ErrorParameter::fromArray($i), $data['parameters']))
                : null,
            subdomain: isset($data['subdomain']) ? (string) $data['subdomain'] : null,
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
        if ($this->category !== null) {
            $data['category'] = $this->category;
        }
        if ($this->domain !== null) {
            $data['domain'] = $this->domain;
        }
        if ($this->errorId !== null) {
            $data['errorId'] = $this->errorId;
        }
        if ($this->inputRefIds !== null) {
            $data['inputRefIds'] = $this->inputRefIds;
        }
        if ($this->longMessage !== null) {
            $data['longMessage'] = $this->longMessage;
        }
        if ($this->message !== null) {
            $data['message'] = $this->message;
        }
        if ($this->outputRefIds !== null) {
            $data['outputRefIds'] = $this->outputRefIds;
        }
        if ($this->parameters !== null) {
            $data['parameters'] = array_map(static fn (ErrorParameter $i): array => $i->toArray(), $this->parameters);
        }
        if ($this->subdomain !== null) {
            $data['subdomain'] = $this->subdomain;
        }

        return $data;
    }
}
