<?php

declare(strict_types=1);

namespace Survos\Ebay\Exception;

/**
 * One entry from eBay's `errors` array.
 *
 * eBay returns these on failures AND alongside successes -- a 200 from publishOffer
 * can carry warnings that silently dropped fields you sent. Keeping them structured
 * means a caller can surface "your Eco Participation Fee was ignored" instead of
 * discovering it in the live listing.
 */
final readonly class EbayError implements \Stringable
{
    /** @param list<array{name?: string, value?: string}> $parameters */
    public function __construct(
        public int $errorId,
        public string $message,
        public ?string $longMessage = null,
        public ?string $domain = null,
        public ?string $category = null,
        public array $parameters = [],
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        /** @var list<array{name?: string, value?: string}> $parameters */
        $parameters = array_values(array_filter(
            (array) ($data['parameters'] ?? []),
            static fn (mixed $p): bool => is_array($p),
        ));

        return new self(
            errorId: (int) ($data['errorId'] ?? 0),
            message: (string) ($data['message'] ?? 'Unknown eBay error'),
            longMessage: isset($data['longMessage']) ? (string) $data['longMessage'] : null,
            domain: isset($data['domain']) ? (string) $data['domain'] : null,
            category: isset($data['category']) ? (string) $data['category'] : null,
            parameters: $parameters,
        );
    }

    /** eBay marks advisory entries with category WARNING; the rest are failures. */
    public function isWarning(): bool
    {
        return strcasecmp((string) $this->category, 'WARNING') === 0;
    }

    public function __toString(): string
    {
        $text = sprintf('[%d] %s', $this->errorId, $this->longMessage ?? $this->message);

        $named = [];
        foreach ($this->parameters as $parameter) {
            if (isset($parameter['name'], $parameter['value'])) {
                $named[] = $parameter['name'] . '=' . $parameter['value'];
            }
        }

        return $named === [] ? $text : $text . ' (' . implode(', ', $named) . ')';
    }
}
