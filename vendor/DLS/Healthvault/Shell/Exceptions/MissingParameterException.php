<?php
namespace DLS\Healthvault\Shell\Exceptions;

class MissingParameterException extends \Exception
{
    public function __construct($message = 'Required parameters are missing', $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
