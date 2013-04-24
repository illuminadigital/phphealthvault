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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Modified", collection="true", name="Modified")
	 */
	protected $modified;

	public function __construct($modified = NULL) {
		$this->modified = ($modified===NULL) ? NULL : $this->validateModified($modified);
	}

	public function getModified($autoCreate = TRUE) {
		if ($this->modified===NULL && $autoCreate && ! isset($this->_overrides['modified']) ) {
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
		if ( $modified === FALSE ) {
			$this->_overrides['modified'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($modified) && ! is_null($modified) ) {
			$modified = array($modified);
		}

		unset ($this->_overrides['modified']);
		$count = count($modified);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'modified', 0));
		}
		if ( ! empty($modified) ) {
			foreach ($modified as $entry) {
				if (!($entry instanceof Modified)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'modified', 'Modified'));
				}
			}
		}
	
		return $modified;
	}

	public function addModified($modified) {
		$this->modified[] = $modified;
	}
} // end class ModificationHistory
