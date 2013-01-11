<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class HelpMethod extends ShellMethod
{
    protected $topicId;
    
    protected $methodName = 'Help';

    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addParameter('topicid', (string) $this->topicId);
        
        return $this->targetqsParameter;
    }
    
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;
        
        return $this;
    }
    
    public function validateParameters($throwException = TRUE)
    {
    	if (empty($this->topicId))
    	{
    		if ($throwException)
    		{
    			throw new MissingParameterException('The topicId parameter is missing.');
    		}
    		else
    		{
    			return array('topicId');
    		}
    	}
    	return TRUE;
    }
}
