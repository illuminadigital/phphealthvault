<?php
namespace DLS\Tests\Healthvault\Platform;
use DLS\Tests\HealthvaultTestCase;

use DLS\Healthvault\Platform\GetPersonInfoMethod;

class PlatformMethodTest extends HealthvaultTestCase {
	
	/**
	 * @test
	 */
	public function extractPayloadMustHandleEmptyRootNode()
	{
		$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<info/>\n";
		
		$platformMethod = new GetPersonInfoMethod($this->getMockConfiguration());
		
		$extractPayloadMethod = $this->makeExtractPayloadAccessible();
		
		$payload = $extractPayloadMethod->invoke($platformMethod, $xml);
		
		$this->assertNotContains('<?xml', $payload); // Should not have an XML prefix
		$this->assertNotContains('<info', $payload); // Should not contain the info element
	}

	/**
	 * @test
	 */
	public function extractPayloadMustHandleGeneralDocuments() 
	{
		$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<Header>\n <method>GetPersonInfo</method>\n <method-version>1</method-version>\n <app-id>05a059c9-c309-46af-9b86-b06d42510550</app-id>\n <msg-time>2013-01-14T10:59:59+00:00</msg-time>\n <msg-ttl>36000</msg-ttl>\n <version>0.0.0.1</version>\n <info-hash>\n  <hash-data algName=\"SHA1\">5QqE+Pu7h1yYYUGZSJk/mtAedCo=</hash-data>\n </info-hash>\n</Header>\n";
		
		$platformMethod = new GetPersonInfoMethod($this->getMockConfiguration());
		
		$extractPayloadMethod = $this->makeExtractPayloadAccessible();
		
		$payload = $extractPayloadMethod->invoke($platformMethod, $xml);
		
		$this->assertNotContains('<?xml', $payload); // Should not have an XML prefix
		$this->assertNotContains('<Header', $payload); // Should not contain the info element
		$this->assertContains('<method', $payload); // Should contain the method element
	}

	protected function makeExtractPayloadAccessible()
	{
		// Enable access to protected method
		$extractPayloadMethod = new \ReflectionMethod(
				'\DLS\Healthvault\Platform\PlatformMethod', 'extractPayload'
		);
		
		$extractPayloadMethod->setAccessible(TRUE);
		
		return $extractPayloadMethod;
	}
}