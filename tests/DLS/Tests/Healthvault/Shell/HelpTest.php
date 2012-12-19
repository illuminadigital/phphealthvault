<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class HelpTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveHelpShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Help');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\HelpMethod', $method);
		$this->assertEquals('Help', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theHelpShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Help');
		
		try {
			$method->getMethodUrl();
			
			$this->fail('Failed to detect the missing parameter');
		}
		catch (MissingParameterException $e)
		{
			// Good
		}
		
		$method->setTopicId('foo-bar');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=Help&targetqs=topicid%%3D%s',
			'foo-bar'
		);
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
