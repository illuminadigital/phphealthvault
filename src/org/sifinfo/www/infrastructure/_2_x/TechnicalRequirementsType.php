<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="TechnicalRequirementsType")
 */
class TechnicalRequirementsType {
	/**
	 * A list of operating system, network, and other technical requirements.
	 */

	/**
	 * @XmlText	(type="string", collection="true", name="TechnicalRequirement")
	 */
	protected $technicalRequirement;

	public function __construct($technicalRequirement = NULL) {
		$this->technicalRequirement = ($technicalRequirement===NULL) ? NULL : $this->validateTechnicalRequirement($technicalRequirement);
	}

	public function getTechnicalRequirement() {
		if ($this->technicalRequirement===NULL) {
			$this->technicalRequirement = $this->createTechnicalRequirement();
		}
		return $this->technicalRequirement;
	}
	
	protected function createTechnicalRequirement() {
		return array();
	}

	public function setTechnicalRequirement($technicalRequirement) {
		$this->technicalRequirement = $this->validateTechnicalRequirement($technicalRequirement);
	}

	protected function validateTechnicalRequirement($technicalRequirement) {
		$count = count($technicalRequirement);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'technicalRequirement', 1));
		}
		foreach ($technicalRequirement as $entry) {
			if (!is_string($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'technicalRequirement', 'string'));
			}
		}
	
		return $technicalRequirement;
	}

	public function addTechnicalRequirement($technicalRequirement) {
		$this->technicalRequirement[] = $this->validateTechnicalRequirementType($technicalRequirement);
	}

	protected function validateTechnicalRequirementType($technicalRequirement) {
		if (!is_string($technicalRequirement)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'technicalRequirement', 'string'));
		}
	
		return $technicalRequirement;
	}
} // end class TechnicalRequirementsType
