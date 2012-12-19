<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class ConnectTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveConnectShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Connect');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\ConnectMethod', $method);
		$this->assertEquals('Connect', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theConnectShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Connect');
		
		try {
			$method->getMethodUrl();
			
			$this->fail('Failed to detect the missing parameter');
		}
		catch (MissingParameterException $e)
		{
			// Good
		}
		
		$method->setPackageId('foo-bar');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=Connect&targetqs=packageid%%3D%s',
			'foo-bar'
		);
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
