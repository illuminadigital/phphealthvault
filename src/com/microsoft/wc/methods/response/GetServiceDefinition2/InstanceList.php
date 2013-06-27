<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetServiceDefinition2", prefix="")
 * })
 * @XmlEntity	(xml="InstanceList")
 */
class InstanceList {
	/**
	 * Information about each of the HealthVault instances in the global HealthVault ecosystem.
	 * An instance is a single deployment of HealthVault services and health record storage primarily for users from a particular region or constituent population.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Instance", collection="true", name="instance")
	 */
	protected $instance;

	/**
	 * @XmlAttribute	(type="string", name="current-instance-id")
	 */
	protected $currentInstanceId;

	public function __construct($instance = NULL, $currentInstanceId = NULL) {
		$this->instance = ($instance===NULL) ? NULL : $this->validateInstance($instance);
		$this->currentInstanceId = ($currentInstanceId===NULL) ? NULL : $this->validateCurrentInstanceId($currentInstanceId);
	}

	public function getInstance($autoCreate = TRUE) {
		if ($this->instance===NULL && $autoCreate && ! isset($this->_overrides['instance']) ) {
			$this->instance = $this->createInstance();
		}
		return $this->instance;
	}
	
	protected function createInstance() {
		return array();
	}

	public function setInstance($instance) {
		$this->instance = $this->validateInstance($instance);
	}

	protected function validateInstance($instance) {
		if ( ! is_array ($instance) ) {
			$instance = array($instance);
		}
		$count = count($instance);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'instance', 1));
		}
		foreach ($instance as $entry) {
			if (!($entry instanceof \com\microsoft\wc\types\Instance )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'instance', 'Instance'));
			}
		}
	
		return $instance;
	}

	public function addInstance($instance) {
		$this->instance[] = $instance;
	}

	public function getCurrentInstanceId($autoCreate = TRUE) {
		if ($this->currentInstanceId===NULL && $autoCreate && ! isset($this->_overrides['currentInstanceId']) ) {
			$this->currentInstanceId = $this->createCurrentInstanceId();
		}
		return $this->currentInstanceId;
	}
	
	protected function createCurrentInstanceId() {
		return new \com\microsoft\wc\types\String255nw();
	}

	public function setCurrentInstanceId($currentInstanceId) {
		$this->currentInstanceId = $this->validateCurrentInstanceId($currentInstanceId);
	}

	protected function validateCurrentInstanceId($currentInstanceId) {
		if ( ! $currentInstanceId instanceof \com\microsoft\wc\types\String255nw ) {
			$currentInstanceId = new \com\microsoft\wc\types\String255nw ($currentInstanceId);
		}
	
		return $currentInstanceId;
	}
} // end class InstanceList
