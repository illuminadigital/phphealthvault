<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SchoolAttendanceHistory")
 */
class SchoolAttendanceHistory {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolAttended", collection="true", name="SchoolAttended")
	 */
	protected $schoolAttended;

	public function __construct($schoolAttended = NULL) {
		$this->schoolAttended = ($schoolAttended===NULL) ? NULL : $this->validateSchoolAttended($schoolAttended);
	}

	public function getSchoolAttended() {
		if ($this->schoolAttended===NULL) {
			$this->schoolAttended = $this->createSchoolAttended();
		}
		return $this->schoolAttended;
	}
	
	protected function createSchoolAttended() {
		return array();
	}

	public function setSchoolAttended($schoolAttended) {
		$this->schoolAttended = $this->validateSchoolAttended($schoolAttended);
	}

	protected function validateSchoolAttended($schoolAttended) {
		if ( ! is_array ($schoolAttended) ) {
			$schoolAttended = array($schoolAttended);
		}
		$count = count($schoolAttended);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'schoolAttended', 1));
		}
		foreach ($schoolAttended as $entry) {
			if (!($entry instanceof SchoolAttended)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'schoolAttended', 'SchoolAttended'));
			}
		}
	
		return $schoolAttended;
	}

	public function addSchoolAttended($schoolAttended) {
		$this->schoolAttended[] = $schoolAttended;
	}
} // end class SchoolAttendanceHistory
