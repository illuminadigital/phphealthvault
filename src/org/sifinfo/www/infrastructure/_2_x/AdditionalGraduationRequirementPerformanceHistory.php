<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="AdditionalGraduationRequirementPerformanceHistory")
 */
class AdditionalGraduationRequirementPerformanceHistory {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Requirement", collection="true", name="Requirement")
	 */
	protected $requirement;

	public function __construct($requirement = NULL) {
		$this->requirement = ($requirement===NULL) ? NULL : $this->validateRequirement($requirement);
	}

	public function getRequirement() {
		if ($this->requirement===NULL) {
			$this->requirement = $this->createRequirement();
		}
		return $this->requirement;
	}
	
	protected function createRequirement() {
		return array();
	}

	public function setRequirement($requirement) {
		$this->requirement = $this->validateRequirement($requirement);
	}

	protected function validateRequirement($requirement) {
		if ( ! is_array ($requirement) ) {
			$requirement = array($requirement);
		}
		$count = count($requirement);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'requirement', 1));
		}
		foreach ($requirement as $entry) {
			if (!($entry instanceof Requirement)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'requirement', 'Requirement'));
			}
		}
	
		return $requirement;
	}

	public function addRequirement($requirement) {
		$this->requirement[] = $requirement;
	}
} // end class AdditionalGraduationRequirementPerformanceHistory
