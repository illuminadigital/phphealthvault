<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class PickupTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGivePickupShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Pickup');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\PickupMethod', $method);
		$this->assertEquals('Pickup', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function thePickupShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Pickup');
		
		try {
			$method->getMethodUrl();
			
			$this->fail('Failed to detect the missing parameter');
		}
		catch (MissingParameterException $e)
		{
			// Good
		}
		
		$method->setPackageId('foo-bar');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=Pickup&targetqs=packageid%%3D%s',
			'foo-bar'
		);
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
