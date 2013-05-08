<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="RaceListType")
 */
class RaceListType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Race", collection="true", name="Race")
	 */
	protected $race;

	public function __construct($race = NULL) {
		$this->race = ($race===NULL) ? NULL : $this->validateRace($race);
	}

	public function getRace($autoCreate = TRUE) {
		if ($this->race===NULL && $autoCreate && ! isset($this->_overrides['race']) ) {
			$this->race = $this->createRace();
		}
		return $this->race;
	}
	
	protected function createRace() {
		return array();
	}

	public function setRace($race) {
		$this->race = $this->validateRace($race);
	}

	protected function validateRace($race) {
		if ( ! is_array ($race) ) {
			$race = array($race);
		}
		$count = count($race);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'race', 1));
		}
		foreach ($race as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\Race )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'race', 'Race'));
			}
		}
	
		return $race;
	}

	public function addRace($race) {
		$this->race[] = $race;
	}
} // end class RaceListType
