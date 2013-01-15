<?php
namespace DLS\Tests\Healthvault\Platform;
use DLS\Tests\HealthvaultTestCase;

class CreateAuthenticatedSessionTokenTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveCreateAuthenticatedSessionTokenPlatformMethods()
	{
		$driver = $this->getDriverWithMockConfiguration();
		$method = $driver->getPlatformMethod('CreateAuthenticatedSessionToken');
		
		$this->assertInstanceOf('DLS\Healthvault\Platform\CreateAuthenticatedSessionTokenMethod', $method);
		$this->assertEquals('CreateAuthenticatedSessionToken', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function createsValidHeaders()
	{
		$driver = $this->getDriverWithMockConfiguration();
		$method = $driver->getPlatformMethod('CreateAuthenticatedSessionToken');
		
		// Enable access to protected method
		$getRequestXmlMethod = new \ReflectionMethod(
				'\DLS\Healthvault\Platform\PlatformMethod', 'getRequestXML'
		);
		
		$getRequestXmlMethod->setAccessible(TRUE);
		
		error_log($getRequestXmlMethod->invoke($method));
	}
	
	/*
	 * @test
	 */
	public function executesTheMethod()
	{
		$driver = $this->getDriverWithUSDevelopmentConfiguration();
		$method = $driver->getPlatformMethod('CreateAuthenticatedSessionToken');
	
		//var_dump($method);
		
		$response = $method->execute();
	
		echo($response);
		//var_dump($response);
	}
	
}
