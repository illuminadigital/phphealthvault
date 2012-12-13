<?php
namespace DLS\Healthvault;

interface XMLMarshallingService
{
    /**
     * Converts an object into the appropriate XML representation
     *  
     * @param mixed $object
     * 
     * @return string
     */
    public function marshal($object);
    
    /**
     * Converts an XML string into objects
     * 
     * @param string $xml
     * 
     * @return mixed
     */
    public function unmarshal($xml);
}
