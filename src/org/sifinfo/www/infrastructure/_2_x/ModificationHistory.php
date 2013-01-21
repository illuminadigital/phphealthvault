<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ModificationHistory")
 */
class ModificationHistory {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Modified", collection="true", name="Modified")
	 */
	protected $modified;

	public function __construct($modified = NULL) {
		$this->modified = ($modified===NULL) ? NULL : $this->validateModified($modified);
	}

	public function getModified() {
		if ($this->modified===NULL) {
			$this->modified = $this->createModified();
		}
		return $this->modified;
	}
	
	protected function createModified() {
		return array();
	}

	public function setModified($modified) {
		$this->modified = $this->validateModified($modified);
	}

	protected function validateModified($modified) {
		if ( ! $modified instanceof \org\sifinfo\www\infrastructure\_2_x\Modified  && ! is_null($modified) ) {
			$modified = new \org\sifinfo\www\infrastructure\_2_x\Modified ($modified);
		}
		$count = count($modified);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'modified', 0));
		}
		foreach ($modified as $entry) {
			if (!($entry instanceof Modified)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'modified', 'Modified'));
			}
		}
	
		return $modified;
	}

	public function addModified($modified) {
		$this->modified[] = $modified;
	}
} // end class ModificationHistory