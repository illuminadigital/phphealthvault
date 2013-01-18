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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StaffPersonalData", name="StaffPersonalData")
	 */
	protected $staffPersonalData;

	public function __construct($staffPersonalData = NULL) {
		$this->staffPersonalData = ($staffPersonalData===NULL) ? NULL : $this->validateStaffPersonalData($staffPersonalData);
	}

	public function getStaffPersonalData() {
		if ($this->staffPersonalData===NULL) {
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
