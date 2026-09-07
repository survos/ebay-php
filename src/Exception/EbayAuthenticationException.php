<?php

declare(strict_types=1);

namespace Survos\Ebay\Exception;

/**
 * 401/403. Distinct from a transient failure because retrying cannot help: the
 * token is wrong, expired beyond refresh, or minted without the scope this call
 * needs. The fix is re-consent or a corrected scope list, both human actions.
 *
 * A 403 on a production keyset is also, commonly, not about the token at all --
 * production keysets ship disabled until the API License Agreement is signed and
 * marketplace account deletion notifications are configured or opted out of.
 */
final class EbayAuthenticationException extends EbayApiException
{
}
