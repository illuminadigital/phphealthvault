<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="InterestLevels")
 */
class InterestLevels {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GradeLevelType", collection="true", name="InterestLevel")
	 */
	protected $interestLevel;

	public function __construct($interestLevel = NULL) {
		$this->interestLevel = ($interestLevel===NULL) ? NULL : $this->validateInterestLevel($interestLevel);
	}

	public function getInterestLevel($autoCreate = TRUE) {
		if ($this->interestLevel===NULL && $autoCreate && ! isset($this->_overrides['interestLevel']) ) {
			$this->interestLevel = $this->createInterestLevel();
		}
		return $this->interestLevel;
	}
	
	protected function createInterestLevel() {
		return array();
	}

	public function setInterestLevel($interestLevel) {
		$this->interestLevel = $this->validateInterestLevel($interestLevel);
	}

	protected function validateInterestLevel($interestLevel) {
		if ( ! is_array ($interestLevel) ) {
			$interestLevel = array($interestLevel);
		}
		$count = count($interestLevel);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'interestLevel', 1));
		}
		foreach ($interestLevel as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\GradeLevelType )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'interestLevel', 'GradeLevelType'));
			}
		}
	
		return $interestLevel;
	}

	public function addInterestLevel($interestLevel) {
		$this->interestLevel[] = $interestLevel;
	}
} // end class InterestLevels
