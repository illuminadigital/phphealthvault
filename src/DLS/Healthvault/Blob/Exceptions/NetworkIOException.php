<?php
namespace DLS\Healthvault\Blob\Exceptions;

class NetworkIOException extends \Exception
{
    public function __construct($message = 'There was an error communicating over the network', $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
