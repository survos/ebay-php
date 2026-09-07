<?php

declare(strict_types=1);

namespace Survos\Ebay\Exception;

/** 429. Retrying is reasonable, but only after a wait. */
final class EbayRateLimitException extends EbayApiException
{
}
