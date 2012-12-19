<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class ReconcileTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveReconcileShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Reconcile');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\ReconcileMethod', $method);
		$this->assertEquals('Reconcile', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theReconcileShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('Reconcile');
		
		try {
			$method->getMethodUrl();
			
			$this->fail('Failed to detect the missing parameter');
		}
		catch (MissingParameterException $e)
		{
			// Good
		}

		$method->setThingId('foo-bar');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=Reconcile&targetqs=appid%%3D%s%%26thingid%%3D%s',
				$this->applicationId,
				'foo-bar'
		);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setExternalRecordId('baz');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=Reconcile&targetqs=appid%%3D%s%%26extrecordid%%3D%s%%26thingid%%3D%s',
				$this->applicationId,
				'baz',
				'foo-bar'
		);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
	}
}
