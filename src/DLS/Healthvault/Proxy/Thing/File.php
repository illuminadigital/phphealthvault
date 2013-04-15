<?php
namespace DLS\Healthvault\Proxy\Thing;

use DLS\Healthvault\Proxy\Thing\BaseThing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\file\File as hvFile;

class File extends BaseThing
{
    protected $size;

    /**
     * @var string
     */
    protected $thingType;
    
    protected $name;

    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);
        
        if ( ! $result )
        {
            return $result;
        }
        
        $payload = $this->getThingPayload();
        
        $this->name = $payload->getName()->getValue();
        
        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $this->setThingName($this->name);
        
        return $thing;
    }

    public function getSize()
    {
        if ($this->thing) {
            return $this->getThingSize();
        }
        // else
        return NULL;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        
        if ($this->thing) {
            $this->setThingName($name);
        }
        
        return $this;
    }
    
    public function setThingName($name)
    {
        $payload = $this->getThingPayload();
        $payload->getName()->setValue($name);
        
        return $this;
    }
    
    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvFile::ID);
    }
    
    public function getNewDataXmlContent() {
        return new hvFile();
    }
    
    public function getThingSize()
    {
        $payload = $this->getThingPayload();
        
        return $payload->getSize();
    }
}
