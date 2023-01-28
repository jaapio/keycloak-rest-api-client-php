<?php

declare(strict_types=1);

namespace Fschmtt\Keycloak\Representation;

/**
 * @method string|null getClientId()
 * @method int|null getCreatedDate()
 * @method string[]|null getGrantedClientScopes()
 * @method int|null getLastUpdatedDate()
 *
 * @codeCoverageIgnore
 */
class UserConsent extends Representation
{
    public function __construct(
        protected ?string $clientId,
        protected ?int $createdDate,
        /** @var string[]|null */
        protected ?array $grantedClientScopes,
        protected ?int $lastUpdatedDate,
    ) {
    }
}
