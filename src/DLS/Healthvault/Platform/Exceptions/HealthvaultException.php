<?php
namespace DLS\Healthvault\Platform\Exceptions;

class HealthvaultException extends \Exception
{
    public function __construct($message = 'Generic failure due to unknown causes or internal error.', $code = 1, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
