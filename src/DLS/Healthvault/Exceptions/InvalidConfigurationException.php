<?php
namespace DLS\Healthvault\Exceptions;

class InvalidConfigurationException extends \Exception
{
    public function __construct($message = 'The configuration is invalid or not defined', $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
