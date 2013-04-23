<?php
namespace DLS\Healthvault\Shell;

class CreateAccountMethod extends AuthMethod
{
    protected $newSignIn = NULL;
    protected $workflow = NULL;
    protected $disableAddRecord = NULL;

    protected $methodName = 'CreateAccount';

    protected $allowMultiRecordApplication = TRUE;

    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();

        $this->addOptionalParameters(array(
            'nsi' => 'newSignIn',
            'flow' => 'workflow',
        ));

        $this->addOptionalBooleanParameters(array(
            'daddrec' => 'disableAddRecord',
        ));
        
        return $this->targetqsParameter;
    }
    
    public function setNewSignIn($state)
    {
        $this->newSignIn = (! isset($state) ? NULL : ($state ? 1 : 0));
        
        return $this;
    }
    
    public function setWorkflow($workflow)
    {
        switch (strtolower($workflow))
        {
            case 'eprep':
            case 'emergency preparedness':
                $this->workflow = 'eprep';
                break;
                
            case 'wmgmt':
            case 'weight management':
                $this->workflow = 'WMgmt';
                break;
                
            default:
                $this->workflow = NULL;
        }
        
        return $this;
    }
    
    public function setDisableAddRecord($state)
    {
        $this->disableAddRecord = $state;
        
        return $this;
    }
}
