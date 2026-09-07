<?php

declare(strict_types=1);

namespace Survos\Ebay\Exception;

/**
 * A non-2xx response from an eBay API.
 *
 * Carries the parsed `errors` array, because eBay's HTTP status is rarely the
 * useful part -- almost everything wrong with a listing arrives as 400 with a
 * specific errorId that says which field and why.
 */
class EbayApiException extends \RuntimeException implements EbayException
{
    /** @param list<EbayError> $errors */
    public function __construct(
        public readonly int $statusCode,
        public readonly array $errors = [],
        public readonly ?string $rawBody = null,
        ?\Throwable $previous = null,
    ) {
        parent::__construct(self::summarize($statusCode, $errors, $rawBody), $statusCode, $previous);
    }

    /** @param array<string, mixed> $payload */
    public static function fromPayload(int $statusCode, array $payload, ?string $rawBody = null): self
    {
        $errors = array_map(
            static fn (array $e): EbayError => EbayError::fromArray($e),
            array_values(array_filter(
                (array) ($payload['errors'] ?? []),
                static fn (mixed $e): bool => is_array($e),
            )),
        );

        return match (true) {
            $statusCode === 401, $statusCode === 403 => new EbayAuthenticationException($statusCode, $errors, $rawBody),
            $statusCode === 429 => new EbayRateLimitException($statusCode, $errors, $rawBody),
            default => new self($statusCode, $errors, $rawBody),
        };
    }

    public function hasErrorId(int $errorId): bool
    {
        foreach ($this->errors as $error) {
            if ($error->errorId === $errorId) {
                return true;
            }
        }

        return false;
    }

    /** @param list<EbayError> $errors */
    private static function summarize(int $statusCode, array $errors, ?string $rawBody): string
    {
        if ($errors === []) {
            return sprintf(
                'eBay returned HTTP %d with no error detail.%s',
                $statusCode,
                $rawBody !== null && $rawBody !== '' ? ' Body: ' . mb_substr($rawBody, 0, 300) : '',
            );
        }

        return sprintf(
            "eBay returned HTTP %d:\n%s",
            $statusCode,
            implode("\n", array_map(static fn (EbayError $e): string => '  ' . $e, $errors)),
        );
    }
}
