<?php
namespace com\microsoft\wc\location;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.location", prefix="wc-location")
 * })
 * @XmlEntity	(xml="SupportedInstanceList")
 */
class SupportedInstanceList {
	/**
	 * A list of supported HealthVault instances.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", collection="true", name="instance-id")
	 */
	protected $instanceId;

	public function __construct($instanceId = NULL) {
		$this->instanceId = ($instanceId===NULL) ? NULL : $this->validateInstanceId($instanceId);
	}

	public function getInstanceId($autoCreate = TRUE) {
		if ($this->instanceId===NULL && $autoCreate && ! isset($this->_overrides['instanceId']) ) {
			$this->instanceId = $this->createInstanceId();
		}
		return $this->instanceId;
	}
	
	protected function createInstanceId() {
		return array();
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $this->validateInstanceId($instanceId);
	}

	protected function validateInstanceId($instanceId) {
		if ( ! is_array ($instanceId) ) {
			$instanceId = array($instanceId);
		}
		$count = count($instanceId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'instanceId', 1));
		}
		foreach ($instanceId as $entry) {
			if (!($entry instanceof \com\microsoft\wc\types\String255nw )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'instanceId', 'string255nw'));
			}
		}
	
		return $instanceId;
	}

	public function addInstanceId($instanceId) {
		$this->instanceId[] = $instanceId;
	}
} // end class SupportedInstanceList
