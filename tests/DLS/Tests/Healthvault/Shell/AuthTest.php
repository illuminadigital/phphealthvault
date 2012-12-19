<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;

class AuthTest extends HealthvaultTestCase {
	/**
	 * @test
	 */
	public function theDriverMustGiveAuthShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Auth');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\AuthMethod', $method);
		$this->assertEquals('Auth', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theAuthShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Auth');
		
		$baseUrl = 'https://account.healthvault.co.uk/redirect.aspx?target=Auth&targetqs=appid%3D' . $this->applicationId;
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setTokenRedirectMethod('PoSt'); // Case insensitive
		$this->assertEquals($baseUrl . '%26trm%3DPost', $method->getMethodUrl());
		
		$method->setTokenRedirectMethod('gEt'); // Case insensitive
		$this->assertEquals($baseUrl . '%26trm%3DGet', $method->getMethodUrl());
		
		$method->setTokenRedirectMethod(NULL);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		// This doesn't support optional rules
		$method->setOptionalOnlineRules(array('Rule1', 'Rule2'));
		$method->setOptionalOfflineRules(array('Rule3', 'Rule4'));
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
