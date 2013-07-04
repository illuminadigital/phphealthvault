<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="InstructionalStrategies")
 */
class InstructionalStrategies {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\InstructionalStrategy", collection="true", name="InstructionalStrategy")
	 */
	protected $instructionalStrategy;

	public function __construct($instructionalStrategy = NULL) {
		$this->instructionalStrategy = ($instructionalStrategy===NULL) ? NULL : $this->validateInstructionalStrategy($instructionalStrategy);
	}

	public function getInstructionalStrategy($autoCreate = TRUE) {
		if ($this->instructionalStrategy===NULL && $autoCreate && ! isset($this->_overrides['instructionalStrategy']) ) {
			$this->instructionalStrategy = $this->createInstructionalStrategy();
		}
		return $this->instructionalStrategy;
	}
	
	protected function createInstructionalStrategy() {
		return array();
	}

	public function setInstructionalStrategy($instructionalStrategy) {
		$this->instructionalStrategy = $this->validateInstructionalStrategy($instructionalStrategy);
	}

	protected function validateInstructionalStrategy($instructionalStrategy) {
		$count = count($instructionalStrategy);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'instructionalStrategy', 0));
		}
		if ( ! empty($instructionalStrategy) ) {
			foreach ($instructionalStrategy as $entry) {
			}
		}
	
		return $instructionalStrategy;
	}

	public function addInstructionalStrategy($instructionalStrategy) {
		$this->instructionalStrategy[] = $this->validateInstructionalStrategyType($instructionalStrategy);
	}

	protected function validateInstructionalStrategyType($instructionalStrategy) {
	
		return $instructionalStrategy;
	}
} // end class InstructionalStrategies
