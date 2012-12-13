<?php
namespace DLS\Healthvault\Shell;

class AppAuthMethod extends AuthMethod {
    protected $externalRecordId = NULL;
    
    protected $methodName = 'AppAuth';
    
    protected $allowOptionalRules = TRUE;
    
    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addOptionalParameters(array(
                'extrecordid' => 'externalRecordId',
        ));
        
        return $this->targetqsParameter;
    }
    
    public function setExternalRecordId($recordId)
    {
        $this->recordId = $recordId;
        return $this;
    }
}