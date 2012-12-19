<?php
namespace DLS\Healthvault\Shell;
use DLS\Healthvault\HealthvaultConfigurationInterface;

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
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
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
    	if ( ! is_array($this->onlineOptionalRules) || ! in_array($rule, $this->onlineOptionalRules)) {
	        $this->onlineOptionalRules[] = $rule;
    	}
        return $this;
    }
    
    public function addOptionalOnlineRules(array $rules)
    {
        $this->onlineOptionalRules = array_unique(is_array($this->onlineOptionalRules) ? array_merge($this->onlineOptionalRules, $rules) : $rules);
        return $this;
    }
    
    public function setOptionalOnlineRules($rules)
    {
    	$this->onlineOptionalRules = (is_array($rules) ? array_unique($rules) : NULL);
        
        return $this;
    }
    
    public function addOptionalOfflineRule($rule)
    {
    	if ( ! is_array($this->offlineOptionalRules) || ! in_array($rule, $this->offlineOptionalRules)) {
    		$this->offlineOptionalRules[] = $rule;
    	}
        return $this;
    }
    
    public function addOptionalOfflineRules(array $rules)
    {
        $this->offlineOptionalRules = array_unique(is_array($this->offlineOptionalRules) ? array_merge($this->offlineOptionalRules, $rules) : $rules);
        
        return $this;
    }
    
    public function setOptionalOfflineRules($rules)
    {
        $this->offlineOptionalRules = (is_array($rules) ? array_unique($rules) : NULL);
        return $this;
    }
}
