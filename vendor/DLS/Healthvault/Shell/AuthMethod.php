<?php
namespace DLS\Healthvault\Shell;
use DLS\Healthvault\HealthvaultConfiguration;

class AuthMethod extends ShellMethodWithAppId
{
    protected $isMultiRecordApplication = NULL;
    protected $tokenRedirectMethod = NULL;
    protected $onlineOptionalRules;
    protected $offlineOptionalRules;
    
    protected $allowMultiRecordApplication = TRUE;
    protected $allowTokenRedirect = TRUE;
    protected $allowOptionalRules = FALSE;
    
    protected $methodName = 'Auth';
    
    public function __construct(HealthvaultConfiguration $configuration)
    {
        parent::__construct($configuration);
        
        $this->onlineOptionalRules = array();
        $this->offlineOptionalRules = array();
    }
    
    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        if ($this->allowOptionalRules)
        {
            $this->addOptionalCountedParameters(array(
                    'onopt%d' => 'onlineOptionalRules',
                    'offopt%d' => 'offlineOptionalRules',
            ));
        }
        
        if ($this->allowMultiRecordApplication)
        {
            $this->addOptionalBooleanParameters(array(
                    'ismra' => 'isMultiRecordApplication',
            ));
        }
        
        if ($this->allowTokenRedirect)
        {
            $this->addOptionalParameters(array(
                    'trm' => 'tokenRedirectMethod',
            ));
        }
        
        return $this->targetqsParameter;        
    }
    
    public function setMultiRecordApplication($state = TRUE)
    {
        $this->isMultiRecordApplication = (bool) $state;
    }
    
    public function setTokenRedirectMethod($method)
    {
        switch(strtolower($method))
        {
            case 'post':
                $this->tokenRedirectMethod = 'Post';
                break;
    
            case 'get':
                $this->tokenRedirectMethod = 'Get';
                break;
    
            default:
                $this->tokenRedirectMethod = NULL;
                break;
        }
    }
    
    public function addOptionalOnlineRule($rule)
    {
        $this->onlineOptionalRules[] = $rule;
        return $this;
    }
    
    public function addOptionalOnlineRules(array $rules)
    {
        $this->onlineOptionalRules = $this->array_merge($this->onlineOptionalRules, $rules);
        return $this;
    }
    
    public function setOptionalOnlineRules(array $rules)
    {
        $this->onlineOptionalRules = $rules;
        return $this;
    }
    
    public function addOptionalOfflineRule($rule)
    {
        $this->offlineOptionalRules[] = $rule;
        return $this;
    }
    
    public function addOptionalOfflineRules(array $rules)
    {
        $this->offlineOptionalRules = $this->array_merge($this->offlineOptionalRules, $rules);
        return $this;
    }
    
    public function setOptionalOfflineRules(array $rules)
    {
        $this->offlineOptionalRules = $rules;
        return $this;
    }
}
