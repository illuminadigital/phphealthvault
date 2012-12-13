<?php
namespace DLS\Healthvault\Shell;

class PickupMethod extends ShellMethod
{
    protected $packageId;
    
    protected $methodName = 'Pickup';
    
    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addParameter('packageid', $this->packageId);
        
        return $this->targetqsParameter;
    }
    
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;
    }
}
