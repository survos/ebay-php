<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Account\Model;

/**
 * A container that defines the elements of error and warning messages.
 *
 * Generated from eBay's Account v1 API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Error
{
    /**
     * @param string|null $category The category type for this error or warning. It is a string that can have one of three values:Application: Indicates an exception or error occurred in the application code or at runtime. Examples include catching an exce...
     * @param string|null $domain Name of the domain ,or primary system, of the service or application where the error occurred.
     * @param int|null $errorId A positive integer that uniquely identifies the specific error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
     * @param list<string>|null $inputRefIds Identifies specific request elements associated with the error, if any. inputRefId's response is format specific. For JSON, use JSONPath notation.
     * @param string|null $longMessage A more detailed explanation of the error than given in the message error field.
     * @param string|null $message Information on how to correct the problem, in the end user's terms and language where applicable. Its value is at most 50 characters long. If applicable, the value is localized in the end user's requested locale.
     * @param list<string>|null $outputRefIds Identifies specific response elements associated with the error, if any. Path format is the same as inputRefId.
     * @param list<ErrorParameter>|null $parameters This optional list of name/value pairs that contain context-specific ErrorParameter objects, with each item in the list being a parameter (or input field name) that caused an error condition. Each ErrorParameter object c...
     * @param string|null $subdomain If present, indicates the subsystem in which the error occurred.
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
