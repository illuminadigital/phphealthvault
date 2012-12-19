<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Healthvault\Configurations\HealthvaultROWConfiguration;
use DLS\Healthvault\Driver;

use DLS\Tests\HealthvaultTestCase;

use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class RecordListTest extends HealthvaultTestCase {

	protected $otherApplicationId = '05a059c9-c309-46af-9b86-b06d42510551'; // FIXME: Faked
	
	/**
	 * @test
	 */
	public function theDriverMustGiveRecordListShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('RecordList');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\RecordListMethod', $method);
		$this->assertEquals('RecordList', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theDriverMustGiveValidUrls() {
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('RecordList');
		
		$baseUrl = 'https://account.healthvault.co.uk/redirect.aspx?target=RecordList&targetqs=';
		
		$this->assertEquals($baseUrl . 'appid%3D' . $this->applicationId, $method->getMethodUrl());
		
		$method->setApplicationId($this->otherApplicationId);
		$this->assertEquals($baseUrl . 'appid%3D' . $this->otherApplicationId, $method->getMethodUrl());

		$method->setIncludeApplicationId(FALSE);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		try {
			$method->setIncludeApplicationId(TRUE);
			
			$method->setApplicationId(NULL);
			$method->getMethodUrl();
				
			$this->fail('Failed to detect missing parameters');
		}
		catch (MissingParameterException $e)
		{
			// Detected missing parameters
		}
	}
}
