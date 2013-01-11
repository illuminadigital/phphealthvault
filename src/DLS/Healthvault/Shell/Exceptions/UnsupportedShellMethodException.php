<?php
namespace DLS\Healthvault\Shell\Exceptions;

class UnsupportedShellMethodException extends \Exception
{
    public function __construct($message = 'This shell method is not supported', $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
