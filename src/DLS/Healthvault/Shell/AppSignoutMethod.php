<?php
namespace DLS\Healthvault\Shell;

class AppSignoutMethod extends ShellMethodWithAppId
{
    protected $authenticationToken = NULL;
    
    protected $methodName = 'AppSignout';
    
    public function getTargetqsParameter() {
        parent::getTargetqsParameter();        
    
        $this->addOptionalParameters(array(
                'credToken' => 'authenticationToken'
        ));
        
        return $this->targetqsParameter;
    }

    public function setAuthenticationToken($token)
    {
        $this->authenticationToken = $token;
    }
}
