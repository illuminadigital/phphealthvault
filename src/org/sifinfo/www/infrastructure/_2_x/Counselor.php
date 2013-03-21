<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Counselor")
 */
class Counselor {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StaffPersonalData", name="StaffPersonalData")
	 */
	protected $staffPersonalData;

	public function __construct($staffPersonalData = NULL) {
		$this->staffPersonalData = ($staffPersonalData===NULL) ? NULL : $this->validateStaffPersonalData($staffPersonalData);
	}

	public function getStaffPersonalData($autoCreate = TRUE) {
		if ($this->staffPersonalData===NULL && $autoCreate && ! isset($this->_overrides['staffPersonalData']) ) {
			$this->staffPersonalData = $this->createStaffPersonalData();
		}
		return $this->staffPersonalData;
	}
	
	protected function createStaffPersonalData() {
		return new \org\sifinfo\www\infrastructure\_2_x\StaffPersonalData();
	}

	public function setStaffPersonalData($staffPersonalData) {
		$this->staffPersonalData = $this->validateStaffPersonalData($staffPersonalData);
	}

	protected function validateStaffPersonalData($staffPersonalData) {
		if ( ! $staffPersonalData instanceof \org\sifinfo\www\infrastructure\_2_x\StaffPersonalData ) {
			$staffPersonalData = new \org\sifinfo\www\infrastructure\_2_x\StaffPersonalData ($staffPersonalData);
		}
	
		return $staffPersonalData;
	}
} // end class Counselor
