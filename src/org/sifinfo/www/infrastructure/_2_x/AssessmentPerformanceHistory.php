<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="AssessmentPerformanceHistory")
 */
class AssessmentPerformanceHistory {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Assessment", collection="true", name="Assessment")
	 */
	protected $assessment;

	public function __construct($assessment = NULL) {
		$this->assessment = ($assessment===NULL) ? NULL : $this->validateAssessment($assessment);
	}

	public function getAssessment() {
		if ($this->assessment===NULL) {
			$this->assessment = $this->createAssessment();
		}
		return $this->assessment;
	}
	
	protected function createAssessment() {
		return array();
	}

	public function setAssessment($assessment) {
		$this->assessment = $this->validateAssessment($assessment);
	}

	protected function validateAssessment($assessment) {
		if ( ! is_array ($assessment) ) {
			$assessment = array($assessment);
		}
		$count = count($assessment);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'assessment', 1));
		}
		foreach ($assessment as $entry) {
			if (!($entry instanceof Assessment)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'assessment', 'Assessment'));
			}
		}
	
		return $assessment;
	}

	public function addAssessment($assessment) {
		$this->assessment[] = $assessment;
	}
} // end class AssessmentPerformanceHistory
