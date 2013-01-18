<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="PlannedAssessmentParticipationType")
 */
class PlannedAssessmentParticipationType {
	/**
	 * The student's planned level of participation in statewide assessments.
	 */

	/**
	 * @XmlAttribute	(type="string", name="Codeset")
	 */
	protected $codeset;

	public function __construct($codeset = NULL) {
		$this->codeset = ($codeset===NULL) ? NULL : $this->validateCodeset($codeset);
	}

	public function getCodeset() {
		if ($this->codeset===NULL) {
			$this->codeset = $this->createCodeset();
		}
		return $this->codeset;
	}
	
	protected function createCodeset() {
		return NULL;
	}

	public function setCodeset($codeset) {
		$this->codeset = $this->validateCodeset($codeset);
	}

	protected function validateCodeset($codeset) {
		if (!is_string($codeset)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'codeset', 'string'));
		}
	
		return $codeset;
	}
} // end class PlannedAssessmentParticipationType
