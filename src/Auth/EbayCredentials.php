<?php

declare(strict_types=1);

namespace Survos\Ebay\Auth;

/**
 * One eBay application keyset.
 *
 * Sandbox and production keysets are separate and NOT interchangeable, so a
 * credentials object belongs to exactly one environment.
 *
 * `devId` is only used by the legacy Trading API; the REST APIs ignore it. It is
 * accepted here so a keyset can be stored whole.
 */
final readonly class EbayCredentials
{
    public function __construct(
        public string $clientId,
        public string $clientSecret,
        /**
         * The redirect-URI *alias* eBay calls an RuName -- not a URL. eBay matches
         * the registered alias, so passing the literal redirect URL fails with an
         * unhelpful invalid_request.
         */
        public ?string $ruName = null,
        public ?string $devId = null,
    ) {
    }

    /** The Basic credential eBay's token endpoint expects. */
    public function basicAuthorization(): string
    {
        return 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret);
    }
}
