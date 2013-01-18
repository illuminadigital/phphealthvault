<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="AcademicFoci")
 */
class AcademicFoci {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AcademicFocus", collection="true", name="AcademicFocus")
	 */
	protected $academicFocus;

	public function __construct($academicFocus = NULL) {
		$this->academicFocus = ($academicFocus===NULL) ? NULL : $this->validateAcademicFocus($academicFocus);
	}

	public function getAcademicFocus() {
		if ($this->academicFocus===NULL) {
			$this->academicFocus = $this->createAcademicFocus();
		}
		return $this->academicFocus;
	}
	
	protected function createAcademicFocus() {
		return array();
	}

	public function setAcademicFocus($academicFocus) {
		$this->academicFocus = $this->validateAcademicFocus($academicFocus);
	}

	protected function validateAcademicFocus($academicFocus) {
		if ( ! $academicFocus instanceof \org\sifinfo\www\infrastructure\_2_x\AcademicFocus  && ! is_null($academicFocus) ) {
			$academicFocus = new \org\sifinfo\www\infrastructure\_2_x\AcademicFocus ($academicFocus);
		}
		$count = count($academicFocus);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'academicFocus', 0));
		}
		foreach ($academicFocus as $entry) {
			if (!($entry instanceof AcademicFocus)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'academicFocus', 'AcademicFocus'));
			}
		}
	
		return $academicFocus;
	}

	public function addAcademicFocus($academicFocus) {
		$this->academicFocus[] = $academicFocus;
	}
} // end class AcademicFoci
