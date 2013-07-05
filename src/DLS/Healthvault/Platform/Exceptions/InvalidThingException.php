<?php
namespace DLS\Healthvault\Platform\Exceptions;

use DLS\Healthvault\Platform\Exceptions\HealthvaultException;

class InvalidThingException extends HealthvaultException
{
    public function __construct($message = null, $code = null, $previous = null)
    {
        parent::__construct('Invalid thing identifier.',19, $previous);
    }
}