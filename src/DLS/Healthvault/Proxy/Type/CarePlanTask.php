<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Proxy\Type\CarePlanTargetType;

class CarePlanTask extends CarePlanTargetType
{
    public function setComplete($completed)
    {
        if ( ! isset($this->endDate) ) {
            $this->setEndDate(new \DateTime());
        }
    }
    
    public function getComplete()
    {
        return ( isset($this->endDate) );
    }
    
    public function __toString() {
        return $this->name->getText();
    }
}
