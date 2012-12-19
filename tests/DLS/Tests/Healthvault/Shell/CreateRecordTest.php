<?php
namespace DLS\Tests\Healthvault\Shell;

class CreateRecordTest extends AuthTest {

	/**
	 * @test
	 */
	public function theDriverMustGiveCreateRecordShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('CreateRecord');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\CreateRecordMethod', $method);
		$this->assertEquals('CreateRecord', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theCreateRecordShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('CreateRecord');
		
		$baseUrl = 'https://account.healthvault.co.uk/redirect.aspx?target=CreateRecord&targetqs=appid%3D' . $this->applicationId;
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setOptionalOnlineRules(array('Rule1', 'Rule2'));
		$this->assertEquals($baseUrl . '%26onopt1%3DRule1%26onopt2%3DRule2', $method->getMethodUrl());
		
		$method->setOptionalOfflineRules(array('Rule3', 'Rule4'));
		$this->assertEquals($baseUrl . '%26onopt1%3DRule1%26onopt2%3DRule2%26offopt1%3DRule3%26offopt2%3DRule4', $method->getMethodUrl());
		
		$method->setOptionalOnlineRules(NULL);
		$method->setOptionalOfflineRules(NULL);
		
		$method->setTokenRedirectMethod('PosT');
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setMultiRecordApplication();
		$this->assertEquals($baseUrl . '%26ismra%3DTrue', $method->getMethodUrl());
	}
}
