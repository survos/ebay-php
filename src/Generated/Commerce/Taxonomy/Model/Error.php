<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Commerce\Taxonomy\Model;

/**
 * This type defines the fields that can be returned in an error.
 *
 * Generated from eBay's Taxonomy API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class Error
{
    /**
     * @param string|null $category Identifies the type of erro.
     * @param string|null $domain Name for the primary system where the error occurred. This is relevant for application errors.
     * @param int|null $errorId A unique number to identify the error.
     * @param list<string>|null $inputRefIds An array of request elements most closely associated to the error.
     * @param string|null $longMessage A more detailed explanation of the error.
     * @param string|null $message Information on how to correct the problem, in the end user's terms and language where applicable.
     * @param list<string>|null $outputRefIds An array of request elements most closely associated to the error.
     * @param list<ErrorParameter>|null $parameters An array of name/value pairs that describe details the error condition. These are useful when multiple errors are returned.
     * @param string|null $subdomain Further helps indicate which subsystem the error is coming from. System subcategories include: Initialization, Serialization, Security, Monitoring, Rate Limiting, etc.
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
