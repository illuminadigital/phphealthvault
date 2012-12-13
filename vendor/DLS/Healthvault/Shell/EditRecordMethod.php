<?php
namespace DLS\Healthvault\Shell;

class EditRecordMethod extends ShellMethodWithAppId {
    protected $externalRecordId = NULL;
    
    protected $methodName = 'EditRecord';
    
    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addParameter('extrecordid', (string) $this->externalRecordId);
        
        return $this->targetqsParameter;
    }
    
    public function setExternalRecordId($recordId)
    {
        $this->externalRecordId = $recordId;
        return $this;
    }
}