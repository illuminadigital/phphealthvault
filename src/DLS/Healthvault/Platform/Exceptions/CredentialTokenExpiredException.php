<?php
namespace DLS\Healthvault\Platform\Exceptions;

use DLS\Healthvault\Platform\Exceptions\HealthvaultException;

class CredentialTokenExpiredException extends HealthvaultException
{
    public function __construct($message = null, $code = null, $previous = null)
    {
        parent::__construct('Credential token has expired need a new one.',7, $previous);
    }
}