<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition2;

use com\microsoft\wc\methods\response\GetServiceDefinition2\XmlMethodVersion;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetServiceDefinition2", prefix="")
 * })
 * @XmlEntity	(xml="XmlMethod")
 */
class XmlMethod {
	/**
	 * Information about a Microsoft HealthVault web-method.
	 */

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\XmlMethodVersion", collection="true", name="version")
	 */
	protected $version;

	public function __construct($name = NULL, $version = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getVersion() {
		if ($this->version===NULL) {
			$this->version = $this->createVersion();
		}
		return $this->version;
	}
	
	protected function createVersion() {
		return array();
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if ( ! $version instanceof XmlMethodVersion ) {
			$version = new XmlMethodVersion ($version);
		}
		$count = count($version);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'version', 0));
		}
		foreach ($version as $entry) {
			if (!($entry instanceof XmlMethodVersion)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'version', 'XmlMethodVersion'));
			}
		}
	
		return $version;
	}

	public function addVersion($version) {
		$this->version[] = $version;
	}
} // end class XmlMethod
