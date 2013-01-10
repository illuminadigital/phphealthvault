<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition2;

use com\microsoft\wc\methods\response\GetServiceDefinition2\Platform;
use com\microsoft\wc\methods\response\GetServiceDefinition2\Shell;
use com\microsoft\wc\methods\response\GetServiceDefinition2\XmlMethod;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetServiceDefinition2", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\Platform", name="platform")
	 */
	protected $platform;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\Shell", name="shell")
	 */
	protected $shell;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\XmlMethod", collection="true", name="xml-method")
	 */
	protected $xmlMethod;

	/**
	 * @XmlText	(type="string", collection="true", name="common-schema")
	 */
	protected $commonSchema;

	public function __construct($platform = NULL, $shell = NULL, $xmlMethod = NULL, $commonSchema = NULL) {
		$this->platform = ($platform===NULL) ? NULL : $this->validatePlatform($platform);
		$this->shell = ($shell===NULL) ? NULL : $this->validateShell($shell);
		$this->xmlMethod = ($xmlMethod===NULL) ? NULL : $this->validateXmlMethod($xmlMethod);
		$this->commonSchema = ($commonSchema===NULL) ? NULL : $this->validateCommonSchema($commonSchema);
	}

	public function getPlatform() {
		if ($this->platform===NULL) {
			$this->platform = $this->createPlatform();
		}
		return $this->platform;
	}
	
	protected function createPlatform() {
		return new Platform();
	}

	public function setPlatform($platform) {
		$this->platform = $this->validatePlatform($platform);
	}

	protected function validatePlatform($platform) {
		if ( ! $platform instanceof Platform ) {
			$platform = new Platform ($platform);
		}
	
		return $platform;
	}

	public function getShell() {
		if ($this->shell===NULL) {
			$this->shell = $this->createShell();
		}
		return $this->shell;
	}
	
	protected function createShell() {
		return new Shell();
	}

	public function setShell($shell) {
		$this->shell = $this->validateShell($shell);
	}

	protected function validateShell($shell) {
		if ( ! $shell instanceof Shell ) {
			$shell = new Shell ($shell);
		}
	
		return $shell;
	}

	public function getXmlMethod() {
		if ($this->xmlMethod===NULL) {
			$this->xmlMethod = $this->createXmlMethod();
		}
		return $this->xmlMethod;
	}
	
	protected function createXmlMethod() {
		return array();
	}

	public function setXmlMethod($xmlMethod) {
		$this->xmlMethod = $this->validateXmlMethod($xmlMethod);
	}

	protected function validateXmlMethod($xmlMethod) {
		if ( ! $xmlMethod instanceof XmlMethod ) {
			$xmlMethod = new XmlMethod ($xmlMethod);
		}
		$count = count($xmlMethod);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'xmlMethod', 1));
		}
		foreach ($xmlMethod as $entry) {
			if (!($entry instanceof XmlMethod)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'xmlMethod', 'XmlMethod'));
			}
		}
	
		return $xmlMethod;
	}

	public function addXmlMethod($xmlMethod) {
		$this->xmlMethod[] = $xmlMethod;
	}

	public function getCommonSchema() {
		if ($this->commonSchema===NULL) {
			$this->commonSchema = $this->createCommonSchema();
		}
		return $this->commonSchema;
	}
	
	protected function createCommonSchema() {
		return array();
	}

	public function setCommonSchema($commonSchema) {
		$this->commonSchema = $this->validateCommonSchema($commonSchema);
	}

	protected function validateCommonSchema($commonSchema) {
		$count = count($commonSchema);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'commonSchema', 0));
		}
		foreach ($commonSchema as $entry) {
			if (!is_string($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'commonSchema', 'string'));
			}
		}
	
		return $commonSchema;
	}

	public function addCommonSchema($commonSchema) {
		$this->commonSchema[] = $this->validateCommonSchemaType($commonSchema);
	}

	protected function validateCommonSchemaType($commonSchema) {
		if (!is_string($commonSchema)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'commonSchema', 'string'));
		}
	
		return $commonSchema;
	}
} // end class Info
