<?php
namespace DLS\Healthvault\Platform\Exceptions;

use DLS\Healthvault\Platform\Exceptions\HealthvaultException;

class AccessDeniedException extends HealthvaultException
{
    public function __construct($message = null, $code = null, $previous = null)
    {
        parent::__construct('Person or app does not have sufficient rights.',11, $previous);
    }
}
