<?php
namespace DLS\Tests\Healthvault\Configurations;

class ConfigurationsTest extends \PHPUnit_Framework_TestCase {

	protected $applicationId = '05a059c9-c309-46af-9b86-b06d42510550'; 

	/**
	 * @test
	 */
	public function theConfigurationShouldBeSetByParameters()
	{
		$configuration = new \DLS\Healthvault\BaseHealthvaultConfiguration($this->applicationId, NULL, 'foo.bar.baz');
		
		$this->assertEquals($this->applicationId, $configuration->getApplicationId());
		$this->assertEquals('https://platform.foo.bar.baz', $configuration->getBasePlatformUrl());
	}
	
	/**
	 * @test
	 */
	public function theConfigurationShouldBeSetByArray()
	{
		$confArray = array(
			'applicationId' => $this->applicationId, 
			'baseUrl' => 'foo.bar.baz',
		);
		
		$configuration = new \DLS\Healthvault\BaseHealthvaultConfiguration($confArray);
		
		$this->assertEquals($this->applicationId, $configuration->getApplicationId());
		$this->assertEquals('https://platform.foo.bar.baz', $configuration->getBasePlatformUrl());
	}
	
	/**
	 * @test
	 */
	public function theRowConfigurationShouldHaveValidUrls()
	{
		$configuration = new \DLS\Healthvault\Configurations\HealthvaultROWConfiguration($this->applicationId);
		
		$this->assertEquals('https://account.healthvault.co.uk', $configuration->getBaseShellUrl());
		$this->assertEquals('https://platform.healthvault.co.uk', $configuration->getBasePlatformUrl());
	}
	
	/**
	 * @test
	 */
	public function theMockConfigurationReturnsDifferentTargets()
	{
		$configuration = new \DLS\Healthvault\Configurations\HealthvaultROWConfiguration($this->applicationId);
		
		$this->assertNull($configuration->getReturnUrl('Auth'));
		
		$configuration = new \DLS\Tests\Mocks\TargetOverrideConfiguration($this->applicationId, NULL, 'bar.baz');
		
		$this->assertEquals('https://account.bar.baz', $configuration->getBaseShellUrl());
		$this->assertEquals('http://foo.bar.baz/Auth', $configuration->getReturnUrl('Auth'));
		$this->assertEquals('http://foo.bar.baz/', $configuration->getReturnUrl('CreateAccount'));
	}
}
