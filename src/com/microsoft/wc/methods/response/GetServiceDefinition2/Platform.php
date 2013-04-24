<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetServiceDefinition2", prefix="")
 * })
 * @XmlEntity	(xml="Platform")
 */
class Platform {
	/**
	 * Information about Microsoft HealthVault.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getUrl($autoCreate = TRUE) {
		if ($this->url===NULL && $autoCreate && ! isset($this->_overrides['url']) ) {
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

	public function getVersion($autoCreate = TRUE) {
		if ($this->version===NULL && $autoCreate && ! isset($this->_overrides['version']) ) {
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

	public function getConfiguration($autoCreate = TRUE) {
		if ($this->configuration===NULL && $autoCreate && ! isset($this->_overrides['configuration']) ) {
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
		if ( $configuration === FALSE ) {
			$this->_overrides['configuration'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($configuration) && ! is_null($configuration) ) {
			$configuration = array($configuration);
		}

		unset ($this->_overrides['configuration']);
		$count = count($configuration);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'configuration', 0));
		}
		if ( ! empty($configuration) ) {
			foreach ($configuration as $entry) {
				if (!($entry instanceof ConfigurationEntry)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'configuration', 'ConfigurationEntry'));
				}
			}
		}
	
		return $configuration;
	}

	public function addConfiguration($configuration) {
		$this->configuration[] = $configuration;
	}
} // end class Platform
