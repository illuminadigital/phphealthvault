<?php
namespace DLS\Healthvault\Shell;

/**
 * Handle shell methods that require the application ID to be included
 * 
 * @author Alistair MacDonald <alistair.macdonald@digitallifesciences.co.uk>
 *
 */
class ShellMethodWithAppId extends ShellMethod
{
    public function getTargetqsParameter() {
        parent::getTargetqsParameter();

        // The Application ID is in the configuration data
        $this->addParameter('appid', $this->configuration->getApplicationId());
        
        return $this->targetqsParameter;
    }
}
