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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Requirement", collection="true", name="Requirement")
	 */
	protected $requirement;

	public function __construct($requirement = NULL) {
		$this->requirement = ($requirement===NULL) ? NULL : $this->validateRequirement($requirement);
	}

	public function getRequirement($autoCreate = TRUE) {
		if ($this->requirement===NULL && $autoCreate && ! isset($this->_overrides['requirement']) ) {
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
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\Requirement )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'requirement', 'Requirement'));
			}
		}
	
		return $requirement;
	}

	public function addRequirement($requirement) {
		$this->requirement[] = $requirement;
	}
} // end class AdditionalGraduationRequirementPerformanceHistory
