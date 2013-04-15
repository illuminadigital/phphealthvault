<?php
namespace DLS\Healthvault\Platform\Exceptions;

use DLS\Healthvault\Platform\Exceptions\HealthvaultException;

class AuthenticatedSessionTokenExpiredException extends HealthvaultException
{
    public function __construct($message = 'Authenticated session token has expired need a new one.', $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
