<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Creators")
 */
class Creators {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Creator", collection="true", name="Creator")
	 */
	protected $creator;

	public function __construct($creator = NULL) {
		$this->creator = ($creator===NULL) ? NULL : $this->validateCreator($creator);
	}

	public function getCreator($autoCreate = TRUE) {
		if ($this->creator===NULL && $autoCreate && ! isset($this->_overrides['creator']) ) {
			$this->creator = $this->createCreator();
		}
		return $this->creator;
	}
	
	protected function createCreator() {
		return array();
	}

	public function setCreator($creator) {
		$this->creator = $this->validateCreator($creator);
	}

	protected function validateCreator($creator) {
		if ( ! is_array ($creator) ) {
			$creator = array($creator);
		}
		$count = count($creator);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'creator', 1));
		}
		foreach ($creator as $entry) {
			if (!($entry instanceof Creator)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'creator', 'Creator'));
			}
		}
	
		return $creator;
	}

	public function addCreator($creator) {
		$this->creator[] = $creator;
	}
} // end class Creators
