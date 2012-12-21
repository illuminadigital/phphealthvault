<?php
namespace DLS\Healthvault\Configurations;

use DLS\Healthvault\BaseHealthvaultConfiguration;

class HealthvaultUSDevelopmentConfiguration extends BaseHealthvaultConfiguration {
    public function __construct($application, $privateKey = NULL, $baseUrl = NULL, $marshallingService = NULL)
    {
        $this->baseUrl = 'healthvault-ppe.com';
        
        parent::__construct($application, $privateKey, $baseUrl, $marshallingService);
    }
}