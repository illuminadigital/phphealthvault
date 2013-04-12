<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Proxy\Type\CarePlanTargetType;

class CarePlanGoal extends CarePlanTargetType
{
    // FIXME: Implement targetRange
    // FIXME: Implement goalAdditionalRanges
        
    public function __toString() {
        return $this->name->getText();
    }
    
    /* Thing Manipulation */
    
    public function setFromThingElement($thingElement)
    {
        $result = parent::setFromThingElement($thingElement);
        
        // FIXME: Implement targetRange
        // FIXME: Implement goalAdditionalRanges
        
        return $result;
    }
    
    public function updateToThingElement($thingElement)
    {
        $result = parent::updateToThingElement($thingElement);
        
        // FIXME: Implement targetRange
        // FIXME: Implement goalAdditionalRanges
        
        return $result;
    }
    
    /* End of Thing Manipulation */
    
}
