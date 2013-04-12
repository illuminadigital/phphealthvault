<?php
namespace DLS\Healthvault\Platform\Exceptions;

class UnsupportedPlatformMethodException extends \Exception
{
    public function __construct($message = 'This platform method is not supported', $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
