<?php
namespace DLS\Healthvault\Configurations;

use DLS\Healthvault\BaseHealthvaultConfiguration;

class HealthvaultROWConfiguration extends BaseHealthvaultConfiguration {
    public function __construct($application, $privateKey = NULL, $thumbprint = NULL, $baseUrl = NULL, $marshallingService = NULL)
    {
        $this->baseUrl = 'healthvault.co.uk';
        
        parent::__construct($application, $privateKey, $thumbprint, $baseUrl, $marshallingService);
    }
}