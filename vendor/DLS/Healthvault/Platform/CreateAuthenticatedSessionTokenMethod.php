<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\Platform\PlatformMethod;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use com\microsoft\wc\methods\CreateAuthenticatedSessionToken\Info;

class CreateAuthenticatedSessionTokenMethod extends PlatformMethod {
	protected $methodName = 'CreateAuthenticatedSessionToken';

	public function __construct(HealthvaultConfigurationInterface $configuration)
	{
		parent::__construct($configuration);
	}
}