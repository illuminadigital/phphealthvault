<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MarkingPeriods")
 */
class MarkingPeriods {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MarkingPeriod", collection="true", name="MarkingPeriod")
	 */
	protected $markingPeriod;

	public function __construct($markingPeriod = NULL) {
		$this->markingPeriod = ($markingPeriod===NULL) ? NULL : $this->validateMarkingPeriod($markingPeriod);
	}

	public function getMarkingPeriod($autoCreate = TRUE) {
		if ($this->markingPeriod===NULL && $autoCreate && ! isset($this->_overrides['markingPeriod']) ) {
			$this->markingPeriod = $this->createMarkingPeriod();
		}
		return $this->markingPeriod;
	}
	
	protected function createMarkingPeriod() {
		return array();
	}

	public function setMarkingPeriod($markingPeriod) {
		$this->markingPeriod = $this->validateMarkingPeriod($markingPeriod);
	}

	protected function validateMarkingPeriod($markingPeriod) {
		if ( ! is_array ($markingPeriod) ) {
			$markingPeriod = array($markingPeriod);
		}
		$count = count($markingPeriod);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'markingPeriod', 1));
		}
		foreach ($markingPeriod as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\MarkingPeriod )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'markingPeriod', 'MarkingPeriod'));
			}
		}
	
		return $markingPeriod;
	}

	public function addMarkingPeriod($markingPeriod) {
		$this->markingPeriod[] = $markingPeriod;
	}
} // end class MarkingPeriods
