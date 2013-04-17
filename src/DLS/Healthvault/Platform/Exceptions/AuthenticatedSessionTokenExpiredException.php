<?php
namespace DLS\Healthvault\Platform\Exceptions;

use DLS\Healthvault\Platform\Exceptions\HealthvaultException;

class AuthenticatedSessionTokenExpiredException extends HealthvaultException
{
    public function __construct($message = null, $code = null, $previous = null)
    {
        parent::__construct('Authenticated session token has expired need a new one.',65, $previous);
    }
}
