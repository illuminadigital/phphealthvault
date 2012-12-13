<?php
namespace DLS\Healthvault\Shell;

class AppRedirectMethod extends ShellMethod
{
    protected $destinationApplicationId = NULL;
    protected $destinationTarget = NULL;
    protected $destinationTargetqs = NULL;
    
    protected $methodName = 'AppRedirect';

    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        // Our AppId parameter is that of the destination.
        $this->addParameter('appid', $this->destinationApplicationId);
        $this->addParameter('refappid', $this->applicationId);
        $this->addParameter('target', $this->destinationTarget);
        $this->addParameter('targetqs', $this->destinationTargetqs);
        
        return $this->targetqsParameter;
    }
    
    public function setDestinationApplicationId($applicationId)
    {
        $this->destinationApplicationId = $applicationId;
    }
    
    public function setDestinationTarget($target)
    {
        $this->destinationTarget = $target;
    }
    
    public function setDestinatationTargetqs($targetqs)
    {
        $this->destinationTargetqs = $targetqs;
    }
}
