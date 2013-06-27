<?php
namespace com\microsoft\wc\methods\GetPersonInfo;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetPersonInfo", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="boolean", name="group-membership")
	 */
	protected $groupMembership;

	/**
	 * @XmlText	(type="boolean", name="effective-record-permissions")
	 */
	protected $effectiveRecordPermissions;

	public function __construct($groupMembership = NULL, $effectiveRecordPermissions = NULL) {
		$this->groupMembership = ($groupMembership===NULL) ? NULL : $this->validateGroupMembership($groupMembership);
		$this->effectiveRecordPermissions = ($effectiveRecordPermissions===NULL) ? NULL : $this->validateEffectiveRecordPermissions($effectiveRecordPermissions);
	}

	public function getGroupMembership($autoCreate = TRUE) {
		if ($this->groupMembership===NULL && $autoCreate && ! isset($this->_overrides['groupMembership']) ) {
			$this->groupMembership = $this->createGroupMembership();
		}
		return $this->groupMembership;
	}
	
	protected function createGroupMembership() {
		return FALSE;
	}

	public function setGroupMembership($groupMembership) {
		$this->groupMembership = $this->validateGroupMembership($groupMembership);
	}

	protected function validateGroupMembership($groupMembership) {
		if ( ! is_bool($groupMembership) && ! is_null($groupMembership) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'groupMembership', 'boolean'));
		}
	
		return $groupMembership;
	}

	public function getEffectiveRecordPermissions($autoCreate = TRUE) {
		if ($this->effectiveRecordPermissions===NULL && $autoCreate && ! isset($this->_overrides['effectiveRecordPermissions']) ) {
			$this->effectiveRecordPermissions = $this->createEffectiveRecordPermissions();
		}
		return $this->effectiveRecordPermissions;
	}
	
	protected function createEffectiveRecordPermissions() {
		return FALSE;
	}

	public function setEffectiveRecordPermissions($effectiveRecordPermissions) {
		$this->effectiveRecordPermissions = $this->validateEffectiveRecordPermissions($effectiveRecordPermissions);
	}

	protected function validateEffectiveRecordPermissions($effectiveRecordPermissions) {
		if ( ! is_bool($effectiveRecordPermissions) && ! is_null($effectiveRecordPermissions) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effectiveRecordPermissions', 'boolean'));
		}
	
		return $effectiveRecordPermissions;
	}
} // end class Info
