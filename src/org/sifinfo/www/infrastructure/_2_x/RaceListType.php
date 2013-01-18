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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Race", collection="true", name="Race")
	 */
	protected $race;

	public function __construct($race = NULL) {
		$this->race = ($race===NULL) ? NULL : $this->validateRace($race);
	}

	public function getRace() {
		if ($this->race===NULL) {
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
		if ( ! $race instanceof \org\sifinfo\www\infrastructure\_2_x\Race ) {
			$race = new \org\sifinfo\www\infrastructure\_2_x\Race ($race);
		}
		$count = count($race);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'race', 1));
		}
		foreach ($race as $entry) {
			if (!($entry instanceof Race)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'race', 'Race'));
			}
		}
	
		return $race;
	}

	public function addRace($race) {
		$this->race[] = $race;
	}
} // end class RaceListType
