<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Inventory\Model;

/**
 * This type is used to express detailed information on errors and warnings that may occur with a call request.
 *
 * Generated from eBay's Inventory API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Error
{
    /**
     * @param string|null $category This string value indicates the error category. There are three categories of errors: request errors, application errors, and system errors.
     * @param string|null $domain The name of the domain in which the error or warning occurred.
     * @param int|null $errorId A unique code that identifies the particular error or warning that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
     * @param list<string>|null $inputRefIds An array of one or more reference IDs which identify the specific request element(s) most closely associated to the error or warning, if any.
     * @param string|null $longMessage A detailed description of the condition that caused the error or warning, and information on what to do to correct the problem.
     * @param string|null $message A description of the condition that caused the error or warning.
     * @param list<string>|null $outputRefIds An array of one or more reference IDs which identify the specific response element(s) most closely associated to the error or warning, if any.
     * @param list<ErrorParameter>|null $parameters Various warning and error messages return one or more variables that contain contextual information about the error or waring. This is often the field or value that triggered the error or warning.
     * @param string|null $subdomain The name of the subdomain in which the error or warning occurred.
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
