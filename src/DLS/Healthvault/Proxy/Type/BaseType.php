<?php
namespace DLS\Healthvault\Proxy\Type;

abstract class BaseType
{
    public function __construct($thingElement = NULL) {
        if ( ! empty($thingElement) )
        {
            $this->setFromThingElement($thingElement);
        }
    }
    
    abstract public function setFromThingElement($thingElement);
    
    abstract public function updateToThingElement($thingElement);
    
    abstract public function __toString();
    
    public function getValue($element)
    {
        if ( ! empty($element) ) {
            return $element->getValue();
        } else {
            return NULL;
        }
    }
}
