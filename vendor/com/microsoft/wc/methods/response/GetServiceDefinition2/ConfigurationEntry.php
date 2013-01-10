<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition2;



/**
 * @XmlEntity	(xml="ConfigurationEntry")
 */
class ConfigurationEntry {
	/**
	 * A configuration value that is important for developers to know about Microsoft HealthVault.
	 * Microsoft HealthVault has some configuration that dictates the behavior of certain methods and data. For instance, GetThings will return only a certain number of full things in the response and give only thing keys for anything beyond that limit. The number of full things returned is defined by configuration and can be changed at any time to optimize the services ability to respond to applications. These configuration values are surfaced here so that application developers can make programmatic decisions based on these values if necessary.
	 */

	/**
	 * @XmlAttribute	(type="string", name="key")
	 */
	protected $key;

	public function __construct($key = NULL) {
		$this->key = ($key===NULL) ? NULL : $this->validateKey($key);
	}

	public function getKey() {
		if ($this->key===NULL) {
			$this->key = $this->createKey();
		}
		return $this->key;
	}
	
	protected function createKey() {
		return '';
	}

	public function setKey($key) {
		$this->key = $this->validateKey($key);
	}

	protected function validateKey($key) {
		if (!is_string($key)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'key', 'string'));
		}
	
		return $key;
	}
} // end class ConfigurationEntry
