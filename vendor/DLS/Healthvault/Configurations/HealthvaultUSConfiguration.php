<?php
namespace DLS\Healthvault\Configurations;

use DLS\Healthvault\BaseHealthvaultConfiguration;

class HealthvaultUSConfiguration extends BaseHealthvaultConfiguration {
    public function __construct($application, $privateKey = NULL, $baseUrl = NULL)
    {
        $this->baseUrl = 'healthvault.com';
        
        parent::__construct($application, $privateKey, $baseUrl);
    }
}