<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ProgramFundingSources")
 */
class ProgramFundingSources {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ProgramFundingSource", collection="true", name="ProgramFundingSource")
	 */
	protected $programFundingSource;

	public function __construct($programFundingSource = NULL) {
		$this->programFundingSource = ($programFundingSource===NULL) ? NULL : $this->validateProgramFundingSource($programFundingSource);
	}

	public function getProgramFundingSource($autoCreate = TRUE) {
		if ($this->programFundingSource===NULL && $autoCreate && ! isset($this->_overrides['programFundingSource']) ) {
			$this->programFundingSource = $this->createProgramFundingSource();
		}
		return $this->programFundingSource;
	}
	
	protected function createProgramFundingSource() {
		return array();
	}

	public function setProgramFundingSource($programFundingSource) {
		$this->programFundingSource = $this->validateProgramFundingSource($programFundingSource);
	}

	protected function validateProgramFundingSource($programFundingSource) {
		if ( ! is_array ($programFundingSource) ) {
			$programFundingSource = array($programFundingSource);
		}
		$count = count($programFundingSource);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'programFundingSource', 1));
		}
		foreach ($programFundingSource as $entry) {
			if (!($entry instanceof ProgramFundingSource)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'programFundingSource', 'ProgramFundingSource'));
			}
		}
	
		return $programFundingSource;
	}

	public function addProgramFundingSource($programFundingSource) {
		$this->programFundingSource[] = $programFundingSource;
	}
} // end class ProgramFundingSources
