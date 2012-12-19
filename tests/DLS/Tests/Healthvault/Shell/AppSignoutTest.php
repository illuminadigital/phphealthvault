<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;

class AppSignoutTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveAppSignoutShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('AppSignout');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\AppSignoutMethod', $method);
		$this->assertEquals('AppSignout', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theAppSignoutShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('AppSignout');
		
		$baseUrl = 'https://account.healthvault.co.uk/redirect.aspx?target=AppSignout&targetqs=appid%3D' . $this->applicationId;
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());

		$method->setAuthenticationToken('foobar');
		
		$this->assertEquals($baseUrl . '%26credToken%3Dfoobar', $method->getMethodUrl());
	}
}
