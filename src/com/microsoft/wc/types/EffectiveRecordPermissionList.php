<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="EffectiveRecordPermissionList")
 */
class EffectiveRecordPermissionList {
	/**
	 * A list of the effective permissions the calling application has for the specified record.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\EffectiveRecordPermission", collection="true", name="effective-record-permission")
	 */
	protected $effectiveRecordPermission;

	public function __construct($effectiveRecordPermission = NULL) {
		$this->effectiveRecordPermission = ($effectiveRecordPermission===NULL) ? NULL : $this->validateEffectiveRecordPermission($effectiveRecordPermission);
	}

	public function getEffectiveRecordPermission($autoCreate = TRUE) {
		if ($this->effectiveRecordPermission===NULL && $autoCreate && ! isset($this->_overrides['effectiveRecordPermission']) ) {
			$this->effectiveRecordPermission = $this->createEffectiveRecordPermission();
		}
		return $this->effectiveRecordPermission;
	}
	
	protected function createEffectiveRecordPermission() {
		return array();
	}

	public function setEffectiveRecordPermission($effectiveRecordPermission) {
		$this->effectiveRecordPermission = $this->validateEffectiveRecordPermission($effectiveRecordPermission);
	}

	protected function validateEffectiveRecordPermission($effectiveRecordPermission) {
		if ( ! is_array ($effectiveRecordPermission) ) {
			$effectiveRecordPermission = array($effectiveRecordPermission);
		}
		$count = count($effectiveRecordPermission);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'effectiveRecordPermission', 1));
		}
		foreach ($effectiveRecordPermission as $entry) {
			if (!($entry instanceof \com\microsoft\wc\types\EffectiveRecordPermission )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'effectiveRecordPermission', 'EffectiveRecordPermission'));
			}
		}
	
		return $effectiveRecordPermission;
	}

	public function addEffectiveRecordPermission($effectiveRecordPermission) {
		$this->effectiveRecordPermission[] = $effectiveRecordPermission;
	}
} // end class EffectiveRecordPermissionList
