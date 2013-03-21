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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MediumOfInstruction", name="MediumOfInstruction")
	 */
	protected $mediumOfInstruction;

	public function __construct($mediumOfInstruction = NULL) {
		$this->mediumOfInstruction = ($mediumOfInstruction===NULL) ? NULL : $this->validateMediumOfInstruction($mediumOfInstruction);
	}

	public function getMediumOfInstruction($autoCreate = TRUE) {
		if ($this->mediumOfInstruction===NULL && $autoCreate && ! isset($this->_overrides['mediumOfInstruction']) ) {
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
		if ( $mediumOfInstruction === FALSE ) {
			$this->_overrides['mediumOfInstruction'] = TRUE;
			return NULL;
		}

		if ( ! $mediumOfInstruction instanceof \org\sifinfo\www\infrastructure\_2_x\MediumOfInstruction  && ! is_null($mediumOfInstruction) ) {
			$mediumOfInstruction = new \org\sifinfo\www\infrastructure\_2_x\MediumOfInstruction ($mediumOfInstruction);
		}

		unset ($this->_overrides['mediumOfInstruction']);
	
		return $mediumOfInstruction;
	}
} // end class SectionInfoData
