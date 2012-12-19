<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class EditRecordTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveEditRecordShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('EditRecord');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\EditRecordMethod', $method);
		$this->assertEquals('EditRecord', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theEditRecordShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('EditRecord');
		
		try {
			$method->getMethodUrl();
			
			$this->fail('Failed to detect the missing parameter');
		}
		catch (MissingParameterException $e)
		{
			// Good
		}
		
		$method->setExternalRecordId('foo-bar');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=EditRecord&targetqs=appid%%3D%s%%26extrecordid%%3D%s',
			$this->applicationId,
			'foo-bar'
		);
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
