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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AcademicFocus", collection="true", name="AcademicFocus")
	 */
	protected $academicFocus;

	public function __construct($academicFocus = NULL) {
		$this->academicFocus = ($academicFocus===NULL) ? NULL : $this->validateAcademicFocus($academicFocus);
	}

	public function getAcademicFocus($autoCreate = TRUE) {
		if ($this->academicFocus===NULL && $autoCreate && ! isset($this->_overrides['academicFocus']) ) {
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
		if ( $academicFocus === FALSE ) {
			$this->_overrides['academicFocus'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($academicFocus) && ! is_null($academicFocus) ) {
			$academicFocus = array($academicFocus);
		}

		unset ($this->_overrides['academicFocus']);
		$count = count($academicFocus);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'academicFocus', 0));
		}
		if ( ! empty($academicFocus) ) {
			foreach ($academicFocus as $entry) {
				if (!($entry instanceof AcademicFocus)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'academicFocus', 'AcademicFocus'));
				}
			}
		}
	
		return $academicFocus;
	}

	public function addAcademicFocus($academicFocus) {
		$this->academicFocus[] = $academicFocus;
	}
} // end class AcademicFoci
