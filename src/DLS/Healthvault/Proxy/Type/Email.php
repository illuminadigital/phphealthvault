<?php
namespace DLS\Healthvault\Proxy\Type;

class Email extends BaseType
{
    protected $description;

    protected $isPrimary;

    protected $address;

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

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        
        return $this;
    }

    public function setFromThingElement($thingElement)
    {
        if (empty($thingElement)) {
            return;
        }
        
        $this->description = $this->getValue($thingElement->getDescription(FALSE));
        $this->isPrimary = $this->getValue($thingElement->getIsPrimary(FALSE));
        $this->address = $this->getValue($thingElement->getAddress(FALSE));
    }

    public function updateToThingElement($thingElement)
    {
        $thingElement->setDescription($this->description);
        $thingElement->setIsPrimary($this->isPrimary);
        $thingElement->setAddress($this->address);
    }

    public function isEmpty()
    {
        return empty($this->address);
    }
    
    public function __toString() {
        return ( isset($this->address) ? $this->address : '' );
    }
}
