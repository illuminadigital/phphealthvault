<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="BloomsTaxonomyLevels")
 */
class BloomsTaxonomyLevels {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\BloomsTaxonomyLevel", collection="true", name="BloomsTaxonomyLevel")
	 */
	protected $bloomsTaxonomyLevel;

	public function __construct($bloomsTaxonomyLevel = NULL) {
		$this->bloomsTaxonomyLevel = ($bloomsTaxonomyLevel===NULL) ? NULL : $this->validateBloomsTaxonomyLevel($bloomsTaxonomyLevel);
	}

	public function getBloomsTaxonomyLevel() {
		if ($this->bloomsTaxonomyLevel===NULL) {
			$this->bloomsTaxonomyLevel = $this->createBloomsTaxonomyLevel();
		}
		return $this->bloomsTaxonomyLevel;
	}
	
	protected function createBloomsTaxonomyLevel() {
		return array();
	}

	public function setBloomsTaxonomyLevel($bloomsTaxonomyLevel) {
		$this->bloomsTaxonomyLevel = $this->validateBloomsTaxonomyLevel($bloomsTaxonomyLevel);
	}

	protected function validateBloomsTaxonomyLevel($bloomsTaxonomyLevel) {
		if ( ! $bloomsTaxonomyLevel instanceof \org\sifinfo\www\infrastructure\_2_x\BloomsTaxonomyLevel  && ! is_null($bloomsTaxonomyLevel) ) {
			$bloomsTaxonomyLevel = new \org\sifinfo\www\infrastructure\_2_x\BloomsTaxonomyLevel ($bloomsTaxonomyLevel);
		}
		$count = count($bloomsTaxonomyLevel);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'bloomsTaxonomyLevel', 0));
		}
		foreach ($bloomsTaxonomyLevel as $entry) {
			if (!($entry instanceof BloomsTaxonomyLevel)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'bloomsTaxonomyLevel', 'BloomsTaxonomyLevel'));
			}
		}
	
		return $bloomsTaxonomyLevel;
	}

	public function addBloomsTaxonomyLevel($bloomsTaxonomyLevel) {
		$this->bloomsTaxonomyLevel[] = $bloomsTaxonomyLevel;
	}
} // end class BloomsTaxonomyLevels
