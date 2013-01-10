<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Healthvault\Configurations\HealthvaultROWConfiguration;
use DLS\Healthvault\Driver;

use DLS\Tests\HealthvaultTestCase;

use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class AppRedirectTest extends HealthvaultTestCase {

	protected $destinationApplicationId = '05a059c9-c309-46af-9b86-b06d42510551'; // FIXME: Faked
	
	/**
	 * @test
	 */
	public function theDriverMustGiveAppRedirectShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('AppRedirect');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\AppRedirectMethod', $method);
		$this->assertEquals('AppRedirect', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theDriverMustGiveValidUrls() {
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('AppRedirect');
		
		try {
			$method->getMethodUrl();
			
			$this->fail('Failed to detect missing parameters');
		}
		catch (MissingParameterException $e)
		{
			// Detected missing parameters
		}

		$targetConfig = new HealthvaultROWConfiguration($this->destinationApplicationId, __DIR__ . '/../../../../../samples/app.pem');
		$targetDriver = new Driver($targetConfig);
		$targetMethod = $targetDriver->getShellMethod('AppAuth'); // Arbitrary
		$targetMethod->setMultiRecordApplication(); // To Create QS
		
		$method->setDestinationTargetqs($targetMethod->getTargetqsParameter());
		$method->setDestinationTarget('AppAuth');
		$method->setDestinationApplicationId($this->destinationApplicationId);
		
		$targetQs = sprintf('appid%%253D%s%%2526ismra%%253DTrue', $this->destinationApplicationId);
		
		$baseUrl = sprintf('https://account.healthvault.co.uk/redirect.aspx?target=AppRedirect&targetqs=appid%%3D%s%%26refappid%%3D%s%%26target%%3D%s%%26targetqs%%3D%s',
				$this->destinationApplicationId,
				$this->applicationId,
				'AppAuth',
				$targetQs
		);
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
