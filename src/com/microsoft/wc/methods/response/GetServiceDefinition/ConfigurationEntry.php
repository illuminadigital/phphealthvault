<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetServiceDefinition", prefix="")
 * })
 * @XmlEntity	(xml="ConfigurationEntry")
 */
class ConfigurationEntry {
	/**
	 * A configuration value that is important for developers to know about Microsoft HealthVault.
	 * Microsoft HealthVault has some configuration that dictates the behavior of certain methods and data. For instance, GetThings will return only a certain number of full things in the response and give only thing keys for anything beyond that limit. The number of full things returned is defined by configuration and can be changed at any time to optimize the services ability to respond to applications. These configuration values are surfaced here so that application developers can make programmatic decisions based on these values if necessary.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="ConfigurationEntry")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="key")
	 */
	protected $key;

	public function __construct($value = NULL, $key = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->key = ($key===NULL) ? NULL : $this->validateKey($key);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}
	
		return $value;
	}

	public function getKey($autoCreate = TRUE) {
		if ($this->key===NULL && $autoCreate && ! isset($this->_overrides['key']) ) {
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
