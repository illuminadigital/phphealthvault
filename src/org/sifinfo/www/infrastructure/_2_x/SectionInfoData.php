<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SectionInfoData")
 */
class SectionInfoData {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MediumOfInstruction", name="MediumOfInstruction")
	 */
	protected $mediumOfInstruction;

	public function __construct($mediumOfInstruction = NULL) {
		$this->mediumOfInstruction = ($mediumOfInstruction===NULL) ? NULL : $this->validateMediumOfInstruction($mediumOfInstruction);
	}

	public function getMediumOfInstruction() {
		if ($this->mediumOfInstruction===NULL) {
			$this->mediumOfInstruction = $this->createMediumOfInstruction();
		}
		return $this->mediumOfInstruction;
	}
	
	protected function createMediumOfInstruction() {
		return new \org\sifinfo\www\infrastructure\_2_x\MediumOfInstruction();
	}

	public function setMediumOfInstruction($mediumOfInstruction) {
		$this->mediumOfInstruction = $this->validateMediumOfInstruction($mediumOfInstruction);
	}

	protected function validateMediumOfInstruction($mediumOfInstruction) {
		if ( ! $mediumOfInstruction instanceof \org\sifinfo\www\infrastructure\_2_x\MediumOfInstruction  && ! is_null($mediumOfInstruction) ) {
			$mediumOfInstruction = new \org\sifinfo\www\infrastructure\_2_x\MediumOfInstruction ($mediumOfInstruction);
		}
	
		return $mediumOfInstruction;
	}
} // end class SectionInfoData
