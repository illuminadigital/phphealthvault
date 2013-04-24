<?php
namespace DLS\Healthvault\Proxy\Type;

class Phone extends BaseType
{
    protected $description;

    protected $isPrimary;

    protected $number;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }

    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        
        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        
        return $this;
    }

    public function setFromThingElement($thingElement)
    {
        if (empty($thingElement)) {
            return;
        }
        
        $this->description = $this->getValue($thingElement->getDescription(FALSE));
        $this->isPrimary = $this->getValue($thingElement->getIsPrimary(FALSE));
        $this->number = $this->getValue($thingElement->getNumber(FALSE));
    }

    public function updateToThingElement($thingElement)
    {
        $thingElement->setDescription($this->description);
        $thingElement->setIsPrimary($this->isPrimary);
        $thingElement->setNumber($this->number);
    }

    public function isEmpty()
    {
        return empty($this->number);
    }
    
    public function __toString() {
        return ( isset($this->address) ? $this->address : '' );
    }
}
