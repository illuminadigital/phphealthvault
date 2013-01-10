<?php
namespace DLS\Tests;

use PHPUnit_Framework_TestCase;

use DLS\Healthvault\Driver;
use DLS\Healthvault\Configurations\HealthvaultROWConfiguration;
use DLS\Healthvault\Configurations\HealthvaultUSDevelopmentConfiguration;
use DLS\Tests\Mocks\TargetOverrideConfiguration;

class HealthvaultTestCase extends PHPUnit_Framework_TestCase {
	protected $applicationId = '05a059c9-c309-46af-9b86-b06d42510550';
	
	public function getDriverWithMockConfiguration()
	{
		$mockConfiguration = new TargetOverrideConfiguration($this->applicationId, __DIR__ .'/../../../samples/app.pem', 'bar.baz');
		return new Driver($mockConfiguration);
	}
	
	public function getDriverWithRowConfiguration()
	{
		$rowConfiguration = new HealthvaultRowConfiguration($this->applicationId, __DIR__ . '/../../../samples/app.pem');
		return new Driver($rowConfiguration);
	}

	public function getDriverWithUSDevelopmentConfiguration()
	{
		$rowConfiguration = new HealthvaultUSDevelopmentConfiguration($this->applicationId, __DIR__ .'/../../../samples/app.pem');
		return new Driver($rowConfiguration);
	}
}
