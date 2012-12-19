<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

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
    
    public function validateParameters($throwException = TRUE)
    {
    	if (empty($this->externalRecordId))
    	{
    		if ($throwException)
    		{
    			throw new MissingParameterException('The externalRecordId parameter is missing.');
    		}
    		else
    		{
    			return array('externalRecordId');
    		}
    	}
    	return TRUE;
    }
}