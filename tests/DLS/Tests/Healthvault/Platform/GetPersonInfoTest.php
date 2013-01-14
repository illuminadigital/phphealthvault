<?php
namespace DLS\Tests\Healthvault\Platform;

use DLS\Tests\HealthvaultTestCase;

class GetPersonInfoTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveGetPersonInfoPlatformMethods()
	{
		$driver = $this->getDriverWithMockConfiguration();
		$method = $driver->getPlatformMethod('GetPersonInfo');
		
		$this->assertInstanceOf('DLS\Healthvault\Platform\GetPersonInfoMethod', $method);
		$this->assertEquals('GetPersonInfo', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function createsValidHeaders()
	{
		$driver = $this->getDriverWithMockConfiguration();
		$method = $driver->getPlatformMethod('GetPersonInfo');
		
		$method->fetchGroups();
		
		// Enable access to protected method
		$getRequestXmlMethod = new \ReflectionMethod(
				'\DLS\Healthvault\Platform\PlatformMethod', 'getRequestXML'
		);
		
		$getRequestXmlMethod->setAccessible(TRUE);
		
		$xml = $getRequestXmlMethod->invoke($method);
		
		error_log($xml);
		var_dump($xml);
	}
	
	/** 
	 * @test 
	 */
	public function executesTheMethod()
	{
		$driver = $this->getDriverWithUSDevelopmentConfiguration();
		$method = $driver->getPlatformMethod('GetPersonInfo');
		
		$method->fetchGroups();
		
		$response = $method->execute();
		
		echo($response);
		//var_dump($response);
	}
		
}
