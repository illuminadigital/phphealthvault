<?php
namespace DLS\Healthvault\Configurations;

use DLS\Healthvault\BaseHealthvaultConfiguration;

class HealthvaultUSConfiguration extends BaseHealthvaultConfiguration {
    public function __construct($application, $privateKey = NULL, $thumbprint = NULL, $baseUrl = NULL, $marshallingService = NULL)
    {
        $this->baseUrl = 'healthvault.com';
        
        parent::__construct($application, $privateKey, $thumbprint, $baseUrl, $marshallingService);
    }
}