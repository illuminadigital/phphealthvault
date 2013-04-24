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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\BloomsTaxonomyLevel", collection="true", name="BloomsTaxonomyLevel")
	 */
	protected $bloomsTaxonomyLevel;

	public function __construct($bloomsTaxonomyLevel = NULL) {
		$this->bloomsTaxonomyLevel = ($bloomsTaxonomyLevel===NULL) ? NULL : $this->validateBloomsTaxonomyLevel($bloomsTaxonomyLevel);
	}

	public function getBloomsTaxonomyLevel($autoCreate = TRUE) {
		if ($this->bloomsTaxonomyLevel===NULL && $autoCreate && ! isset($this->_overrides['bloomsTaxonomyLevel']) ) {
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
		if ( $bloomsTaxonomyLevel === FALSE ) {
			$this->_overrides['bloomsTaxonomyLevel'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($bloomsTaxonomyLevel) && ! is_null($bloomsTaxonomyLevel) ) {
			$bloomsTaxonomyLevel = array($bloomsTaxonomyLevel);
		}

		unset ($this->_overrides['bloomsTaxonomyLevel']);
		$count = count($bloomsTaxonomyLevel);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'bloomsTaxonomyLevel', 0));
		}
		if ( ! empty($bloomsTaxonomyLevel) ) {
			foreach ($bloomsTaxonomyLevel as $entry) {
				if (!($entry instanceof BloomsTaxonomyLevel)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'bloomsTaxonomyLevel', 'BloomsTaxonomyLevel'));
				}
			}
		}
	
		return $bloomsTaxonomyLevel;
	}

	public function addBloomsTaxonomyLevel($bloomsTaxonomyLevel) {
		$this->bloomsTaxonomyLevel[] = $bloomsTaxonomyLevel;
	}
} // end class BloomsTaxonomyLevels
