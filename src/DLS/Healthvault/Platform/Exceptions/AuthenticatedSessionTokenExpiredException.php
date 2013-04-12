<?php
namespace DLS\Healthvault\Platform\Exceptions;

class AuthenticatedSessionTokenExpiredException extends \Exception
{
    public function __construct($message = 'Authenticated session token has expired need a new one.', $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
