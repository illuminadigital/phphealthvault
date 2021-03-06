<?php
namespace DLS\Tests\Healthvault\Configurations;

use DLS\Tests\HealthvaultTestCase;

class ConfigurationsTest extends HealthvaultTestCase {
	/**
	 * @test
	 */
	public function theConfigurationShouldBeSetByParameters()
	{
		$configuration = new \DLS\Healthvault\BaseHealthvaultConfiguration($this->applicationId, __DIR__ . '/../../../../../samples/app.pem', $this->thumbprint, 'foo.bar.baz');
		
		$this->assertEquals($this->applicationId, $configuration->getApplicationId());
		$this->assertEquals('https://platform.foo.bar.baz', $configuration->getBasePlatformUrl());
		$this->assertEquals($this->thumbprint, $configuration->getThumbprint());
	}
	
	/**
	 * @test
	 */
	public function theConfigurationShouldBeSetByArray()
	{
		$confArray = array(
			'applicationId' => $this->applicationId, 
			'baseUrl' => 'foo.bar.baz',
		    'thumbprint' => $this->thumbprint,
			'privateKey' =>__DIR__ . '/../../../../../samples/app.pem', 
		);
		
		$configuration = new \DLS\Healthvault\BaseHealthvaultConfiguration($confArray);
		
		$this->assertEquals($this->applicationId, $configuration->getApplicationId());
		$this->assertEquals('https://platform.foo.bar.baz', $configuration->getBasePlatformUrl());
		$this->assertEquals($this->thumbprint, $configuration->getThumbprint());
	}
	
	/**
	 * @test
	 */
	public function theRowConfigurationShouldHaveValidUrls()
	{
		$configuration = new \DLS\Healthvault\Configurations\HealthvaultROWConfiguration($this->applicationId, __DIR__ . '/../../../../../samples/app.pem', $this->thumbprint);
		
		$this->assertEquals('https://account.healthvault.co.uk', $configuration->getBaseShellUrl());
		$this->assertEquals('https://platform.healthvault.co.uk', $configuration->getBasePlatformUrl());
	}
	
	/**
	 * @test
	 */
	public function theMockConfigurationReturnsDifferentTargets()
	{
		$configuration = new \DLS\Healthvault\Configurations\HealthvaultROWConfiguration($this->applicationId, __DIR__ . '/../../../../../samples/app.pem', $this->thumbprint);
		
		$this->assertNull($configuration->getReturnUrl('Auth'));
		
		$configuration = new \DLS\Tests\Mocks\TargetOverrideConfiguration($this->applicationId, __DIR__ . '/../../../../../samples/app.pem', $this->thumbprint, 'bar.baz');
		
		$this->assertEquals('https://account.bar.baz', $configuration->getBaseShellUrl());
		$this->assertEquals('http://foo.bar.baz/Auth', $configuration->getReturnUrl('Auth'));
		$this->assertEquals('http://foo.bar.baz/', $configuration->getReturnUrl('CreateAccount'));
	}
}
