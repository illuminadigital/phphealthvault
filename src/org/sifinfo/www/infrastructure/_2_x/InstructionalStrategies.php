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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\InstructionalStrategy", collection="true", name="InstructionalStrategy")
	 */
	protected $instructionalStrategy;

	public function __construct($instructionalStrategy = NULL) {
		$this->instructionalStrategy = ($instructionalStrategy===NULL) ? NULL : $this->validateInstructionalStrategy($instructionalStrategy);
	}

	public function getInstructionalStrategy() {
		if ($this->instructionalStrategy===NULL) {
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
		if ( ! is_array ($instructionalStrategy) && ! is_null($instructionalStrategy) ) {
			$instructionalStrategy = array($instructionalStrategy);
		}
		$count = count($instructionalStrategy);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'instructionalStrategy', 0));
		}
		foreach ($instructionalStrategy as $entry) {
			if (!($entry instanceof InstructionalStrategy)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'instructionalStrategy', 'InstructionalStrategy'));
			}
		}
	
		return $instructionalStrategy;
	}

	public function addInstructionalStrategy($instructionalStrategy) {
		$this->instructionalStrategy[] = $instructionalStrategy;
	}
} // end class InstructionalStrategies
