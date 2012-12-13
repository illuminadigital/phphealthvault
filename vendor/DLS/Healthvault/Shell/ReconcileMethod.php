<?php
namespace DLS\Healthvault\Shell;

class ReconcileMethod extends ShellMethodWithRecordId
{
    protected $thingId;

    protected $methodName = 'Reconcile';
    
    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addParameter('thingid', $this->thingId);
        
        return $this->targetqsParameter;
    }
    
    public function setThingId($thingId)
    {
        $this->thingId = $thingId;
        
        return $this;
    }
}
