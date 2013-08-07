<?php
namespace DLS\Healthvault\Platform\Exceptions;

class NoResponseFromHealthvaultException extends \Exception
{
    public function __construct($message = null, $code = null, $previous = null)
{
    parent::__construct("Healthvault didn't response.",0);
}
}
