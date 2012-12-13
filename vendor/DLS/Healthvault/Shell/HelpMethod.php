<?php
namespace DLS\Healthvault\Shell;

class HelpMethod extends ShellMethod
{
    protected $topicId;
    
    protected $methodName = 'Help';

    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addParameter('topicid', (string) $topicId);
        
        return $this->targetqsParameter;
    }
    
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;
        
        return $this;
    }
}
