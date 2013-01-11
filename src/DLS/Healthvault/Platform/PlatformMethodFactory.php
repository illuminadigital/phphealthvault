<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use DLS\Healthvault\Exceptions\InvalidConfigurationException;
use DLS\Healthvault\Platform\Exceptions\UnsupportedPlatformMethodException;

class PlatformMethodFactory
{
	/**
	 * @var HealthvaultConfigurationInterface
	 */
	protected $configuration;
	
	public function __construct(HealthvaultConfigurationInterface $configuration)
	{
		$this->configuration = $configuration;
	}
	
	public function getPlatformMethod($name)
	{
		if ( ! isset($this->configuration) )
		{
			throw new InvalidConfigurationException();
		}
	
		$methodClass = sprintf('%s\\%sMethod', __NAMESPACE__, $name);
	
		if (class_exists($methodClass))
		{
			return new $methodClass($this->configuration);
		}
		else
		{
			throw new UnsupportedPlatformMethodException();
		}
	}
}
