<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition2;

use com\microsoft\wc\methods\response\GetServiceDefinition2\ConfigurationEntry;

/**
 * @XmlEntity	(xml="Platform")
 */
class Platform {
	/**
	 * Information about Microsoft HealthVault.
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
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\ConfigurationEntry", collection="true", name="configuration")
	 */
	protected $configuration;

	public function __construct($url = NULL, $version = NULL, $configuration = NULL) {
		$this->url = ($url===NULL) ? NULL : $this->validateUrl($url);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
		$this->configuration = ($configuration===NULL) ? NULL : $this->validateConfiguration($configuration);
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

	public function getConfiguration() {
		if ($this->configuration===NULL) {
			$this->configuration = $this->createConfiguration();
		}
		return $this->configuration;
	}
	
	protected function createConfiguration() {
		return array();
	}

	public function setConfiguration($configuration) {
		$this->configuration = $this->validateConfiguration($configuration);
	}

	protected function validateConfiguration($configuration) {
		if ( ! $configuration instanceof ConfigurationEntry  && ! is_null($configuration) ) {
			$configuration = new ConfigurationEntry ($configuration);
		}
		$count = count($configuration);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'configuration', 0));
		}
		foreach ($configuration as $entry) {
			if (!($entry instanceof ConfigurationEntry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'configuration', 'ConfigurationEntry'));
			}
		}
	
		return $configuration;
	}

	public function addConfiguration($configuration) {
		$this->configuration[] = $configuration;
	}
} // end class Platform
