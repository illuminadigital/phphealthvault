<?php
namespace DLS\Healthvault\Shell;

class ShellMethodWithAppId extends ShellMethod
{
    public function getTargetqsParameter() {
        parent::getTargetqsParameter();
        
        $this->addParameter('appid', $this->configuration->getApplicationId());
        
        return $this->targetqsParameter;
    }
}
