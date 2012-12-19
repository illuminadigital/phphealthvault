<?php
namespace DLS\Tests\Healthvault\Shell;

class CreateAccountTest extends AuthTest {

	/**
	 * @test
	 */
	public function theDriverMustGiveCreateAccountShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('CreateAccount');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\CreateAccountMethod', $method);
		$this->assertEquals('CreateAccount', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theCreateAccountShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('CreateAccount');
		
		$baseUrl = 'https://account.healthvault.co.uk/redirect.aspx?target=CreateAccount&targetqs=appid%3D' . $this->applicationId;
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		// This doesn't support optional rules
		$method->setOptionalOnlineRules(array('Rule1', 'Rule2'));
		$method->setOptionalOfflineRules(array('Rule3', 'Rule4'));
		$this->assertEquals($baseUrl, $method->getMethodUrl());		
		
		$method->setNewSignIn(TRUE);
		$this->assertEquals($baseUrl . '%26nsi%3D1', $method->getMethodUrl());
		
		$method->setNewSignIn(FALSE);
		$this->assertEquals($baseUrl . '%26nsi%3D0', $method->getMethodUrl());
		
		$method->setNewSignIn(NULL);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setWorkflow('emergEncy preparedneSs');
		$this->assertEquals($baseUrl . '%26flow%3Deprep', $method->getMethodUrl());
		
		$method->setWorkflow('weiGht managEment');
		$this->assertEquals($baseUrl . '%26flow%3DWMgmt', $method->getMethodUrl());
		
		$method->setWorkflow('foobar');
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setDisableAddRecord(TRUE);
		$this->assertEquals($baseUrl . '%26daddrec%3DTrue', $method->getMethodUrl());
		
		$method->setDisableAddRecord(FALSE);
		$this->assertEquals($baseUrl . '%26daddrec%3DFalse', $method->getMethodUrl());
		
		$method->setDisableAddRecord(NULL);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setMultiRecordApplication();
		$this->assertEquals($baseUrl . '%26ismra%3DTrue', $method->getMethodUrl());
		
		$method->setMultiRecordApplication(FALSE);
		$this->assertEquals($baseUrl . '%26ismra%3DFalse', $method->getMethodUrl());
		
		$method->setMultiRecordApplication(NULL);
		$this->assertEquals($baseUrl . '%26ismra%3DFalse', $method->getMethodUrl());
	}
}
