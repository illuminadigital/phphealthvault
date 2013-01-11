<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition;



/**
 * @XmlEntity	(xml="SDKAssembly")
 */
class SDKAssembly {
	/**
	 * Information about the .NET assembly that can be used to access Microsoft HealthVault.
	 * Microsoft HealthVault can be accessed via XML web methods. Microsoft has also developed .NET assemblies for making it easier for developers using .NET to access Microsoft HealthVault. The following contains information about those assemblies.
	 */

	/**
	 * @XmlText	(type="string", name="url")
	 */
	protected $url;

	/**
	 * @XmlText	(type="string", name="version")
	 */
	protected $version;

	/**
	 * @XmlText	(type="string", name="doc-url")
	 */
	protected $docUrl;

	public function __construct($url = NULL, $version = NULL, $docUrl = NULL) {
		$this->url = ($url===NULL) ? NULL : $this->validateUrl($url);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
		$this->docUrl = ($docUrl===NULL) ? NULL : $this->validateDocUrl($docUrl);
	}

	public function getUrl() {
		if ($this->url===NULL) {
			$this->url = $this->createUrl();
		}
		return $this->url;
	}
	
	protected function createUrl() {
		return '';
	}

	public function setUrl($url) {
		$this->url = $this->validateUrl($url);
	}

	protected function validateUrl($url) {
		if (!is_string($url)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'url', 'string'));
		}
	
		return $url;
	}

	public function getVersion() {
		if ($this->version===NULL) {
			$this->version = $this->createVersion();
		}
		return $this->version;
	}
	
	protected function createVersion() {
		return '';
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if (!is_string($version)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'version', 'string'));
		}
	
		return $version;
	}

	public function getDocUrl() {
		if ($this->docUrl===NULL) {
			$this->docUrl = $this->createDocUrl();
		}
		return $this->docUrl;
	}
	
	protected function createDocUrl() {
		return '';
	}

	public function setDocUrl($docUrl) {
		$this->docUrl = $this->validateDocUrl($docUrl);
	}

	protected function validateDocUrl($docUrl) {
		if (!is_string($docUrl)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'docUrl', 'string'));
		}
	
		return $docUrl;
	}
} // end class SDKAssembly
