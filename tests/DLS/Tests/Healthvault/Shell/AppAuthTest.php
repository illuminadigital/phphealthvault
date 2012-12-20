<?php
namespace DLS\Tests\Healthvault\Shell;

class AppAuthTest extends AuthTest {
	protected $otherApplicationIds = array('3a93ca55-6a08-46bf-bf76-d0e205823242', 'ea1af0c4-f4a1-4fc0-95a2-50b60a97d92d');
	
	/**
	 * @test
	 */
	public function theDriverMustGiveAppAuthShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('AppAuth');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\AppAuthMethod', $method);
		$this->assertEquals('AppAuth', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theAppAuthShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('AppAuth');
		
		$baseUrl = 'https://account.healthvault.co.uk/redirect.aspx?target=AppAuth&targetqs=appid%3D' . $this->applicationId;
		
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setOptionalOnlineRules(array('Rule1', 'Rule2'));
		$this->assertEquals($baseUrl . '%26onopt1%3DRule1%26onopt2%3DRule2', $method->getMethodUrl());
		
		$method->setOptionalOfflineRules(array('Rule3', 'Rule4'));
		$this->assertEquals($baseUrl . '%26onopt1%3DRule1%26onopt2%3DRule2%26offopt1%3DRule3%26offopt2%3DRule4', $method->getMethodUrl());
		
		$method->addOptionalOnlineRule('Rule4');
		$method->addOptionalOfflineRule('Rule5');
		$this->assertEquals($baseUrl . '%26onopt1%3DRule1%26onopt2%3DRule2%26onopt3%3DRule4%26offopt1%3DRule3%26offopt2%3DRule4%26offopt3%3DRule5', $method->getMethodUrl());
		
		$method->addOptionalOnlineRules(array('Rule6', 'Rule7'));
		$method->addOptionalOfflineRules(array('Rule8', 'Rule9'));
		$this->assertEquals($baseUrl . '%26onopt1%3DRule1%26onopt2%3DRule2%26onopt3%3DRule4%26onopt4%3DRule6%26onopt5%3DRule7%26offopt1%3DRule3%26offopt2%3DRule4%26offopt3%3DRule5%26offopt4%3DRule8%26offopt5%3DRule9', $method->getMethodUrl());
		
		// Rules should only feature once
		$method->setOptionalOnlineRules(array('Rule1', 'Rule1'));
		$method->setOptionalOfflineRules(array('Rule2', 'Rule2'));
		$this->assertEquals($baseUrl . '%26onopt1%3DRule1%26offopt1%3DRule2', $method->getMethodUrl());
		
		$method->addOptionalOnlineRules(array('Rule1', 'Rule1'));
		$method->addOptionalOfflineRules(array('Rule2', 'Rule2'));
		$this->assertEquals($baseUrl . '%26onopt1%3DRule1%26offopt1%3DRule2', $method->getMethodUrl());
		
		$method->addOptionalOnlineRule('Rule1');
		$method->addOptionalOfflineRule('Rule2');
		$this->assertEquals($baseUrl . '%26onopt1%3DRule1%26offopt1%3DRule2', $method->getMethodUrl());
		
		$method->setOptionalOnlineRules(NULL);
		$method->setOptionalOfflineRules(NULL);
		$this->assertEquals($baseUrl, $method->getMethodUrl());
		
		$method->setMultiRecordApplication();
		$this->assertEquals($baseUrl . '%26ismra%3DTrue', $method->getMethodUrl());
		
		$method->setMultiRecordApplication(FALSE);
		$this->assertEquals($baseUrl . '%26ismra%3DFalse', $method->getMethodUrl());
		
		$method->setMultiRecordApplication(NULL);
		$this->assertEquals($baseUrl . '%26ismra%3DFalse', $method->getMethodUrl());
		
		$method->addApplicationIds($this->otherApplicationIds);
		$this->assertEquals($baseUrl . '%252C3a93ca55-6a08-46bf-bf76-d0e205823242%252Cea1af0c4-f4a1-4fc0-95a2-50b60a97d92d%26ismra%3DFalse', $method->getMethodUrl());
	}
}
