<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class ManageAccountTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveManageAccountShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('ManageAccount');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\ManageAccountMethod', $method);
		$this->assertEquals('ManageAccount', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theManageAccountShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('ManageAccount');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=ManageAccount&targetqs=appid%%3D%s',
			$this->applicationId
		);
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
