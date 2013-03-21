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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AcademicSubject", collection="true", name="AcademicSubject")
	 */
	protected $academicSubject;

	public function __construct($academicSubject = NULL) {
		$this->academicSubject = ($academicSubject===NULL) ? NULL : $this->validateAcademicSubject($academicSubject);
	}

	public function getAcademicSubject($autoCreate = TRUE) {
		if ($this->academicSubject===NULL && $autoCreate && ! isset($this->_overrides['academicSubject']) ) {
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
		if ( $academicSubject === FALSE ) {
			$this->_overrides['academicSubject'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($academicSubject) && ! is_null($academicSubject) ) {
			$academicSubject = array($academicSubject);
		}

		unset ($this->_overrides['academicSubject']);
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
