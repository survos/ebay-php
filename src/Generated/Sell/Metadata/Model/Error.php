<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Metadata\Model;

/**
 * A container that defines the elements of error and warning messages.
 *
 * Generated from eBay's Metadata API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Error
{
    /**
     * @param string|null $category The category type for this error or warning. It takes an ErrorCategory object which can have one of three values:Application: Indicates an exception or error occurred in the application code or at runtime. Examples inclu...
     * @param string|null $domain Name of the domain containing the service or application.
     * @param int|null $errorId A positive integer that uniquely identifies the specific error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
     * @param list<string>|null $inputRefIds Identifies specific request elements associated with the error, if any. inputRefId's response is format specific. For JSON, use JSONPath notation.
     * @param string|null $longMessage An expanded version of message that should be around 100-200 characters long, but is not required to be such.
     * @param string|null $message An end user and app developer friendly device agnostic message. It explains what the error or warning is, and how to fix it (in a general sense). Its value is at most 50 characters long. If applicable, the value is local...
     * @param list<string>|null $outputRefIds Identifies specific response elements associated with the error, if any. Path format is the same as inputRefId.
     * @param list<ErrorParameter>|null $parameters This optional complex field type contains a list of one or more context-specific ErrorParameter objects, with each item in the list entry being a parameter (or input field name) that caused an error condition. Each Error...
     * @param string|null $subdomain Name of the domain's subsystem or subdivision. For example, checkout is a subdomain in the buying domain.
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
