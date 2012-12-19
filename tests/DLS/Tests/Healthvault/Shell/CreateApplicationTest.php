<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class CreateApplicationTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveCreateApplicationShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('CreateApplication');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\CreateApplicationMethod', $method);
		$this->assertEquals('CreateApplication', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theCreateApplicationShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('CreateApplication');
		
		try {
			$method->getMethodUrl();
			
			$this->fail('Failed to detect the missing parameter');
		}
		catch (MissingParameterException $e)
		{
			// Good
		}
		
		$method->setApplicationCreationToken('foo-bar');
		$method->setInstanceName('baz');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=CreateApplication&targetqs=appid%%3D%s%%26appCreationToken%%3D%s%%26instancename%%3D%s',
			$this->applicationId,
			'foo-bar',
			'baz'
		);
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
