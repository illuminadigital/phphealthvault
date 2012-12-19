<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class ShareRecordTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveShareRecordShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('ShareRecord');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\ShareRecordMethod', $method);
		$this->assertEquals('ShareRecord', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theShareRecordShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('ShareRecord');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=ShareRecord&targetqs=appid%%3D%s',
				$this->applicationId
		);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setExternalRecordId('baz');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=ShareRecord&targetqs=appid%%3D%s%%26extrecordid%%3D%s',
				$this->applicationId,
				'baz'
		);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
