<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class SharedAppDetailsTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveSharedAppDetailsShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('SharedAppDetails');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\SharedAppDetailsMethod', $method);
		$this->assertEquals('SharedAppDetails', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theSharedAppDetailsShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('SharedAppDetails');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=SharedAppDetails&targetqs=appid%%3D%s',
				$this->applicationId
		);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setExternalRecordId('baz');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=SharedAppDetails&targetqs=appid%%3D%s%%26extrecordid%%3D%s',
				$this->applicationId,
				'baz'
		);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
