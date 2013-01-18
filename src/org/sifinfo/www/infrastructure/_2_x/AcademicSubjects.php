<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="AcademicSubjects")
 */
class AcademicSubjects {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AcademicSubject", collection="true", name="AcademicSubject")
	 */
	protected $academicSubject;

	public function __construct($academicSubject = NULL) {
		$this->academicSubject = ($academicSubject===NULL) ? NULL : $this->validateAcademicSubject($academicSubject);
	}

	public function getAcademicSubject() {
		if ($this->academicSubject===NULL) {
			$this->academicSubject = $this->createAcademicSubject();
		}
		return $this->academicSubject;
	}
	
	protected function createAcademicSubject() {
		return array();
	}

	public function setAcademicSubject($academicSubject) {
		$this->academicSubject = $this->validateAcademicSubject($academicSubject);
	}

	protected function validateAcademicSubject($academicSubject) {
		if ( ! $academicSubject instanceof \org\sifinfo\www\infrastructure\_2_x\AcademicSubject  && ! is_null($academicSubject) ) {
			$academicSubject = new \org\sifinfo\www\infrastructure\_2_x\AcademicSubject ($academicSubject);
		}
		$count = count($academicSubject);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'academicSubject', 0));
		}
		foreach ($academicSubject as $entry) {
			if (!($entry instanceof AcademicSubject)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'academicSubject', 'AcademicSubject'));
			}
		}
	
		return $academicSubject;
	}

	public function addAcademicSubject($academicSubject) {
		$this->academicSubject[] = $academicSubject;
	}
} // end class AcademicSubjects
