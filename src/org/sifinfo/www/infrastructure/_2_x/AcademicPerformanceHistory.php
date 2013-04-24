<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="AcademicPerformanceHistory")
 */
class AcademicPerformanceHistory {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TermPerformance", collection="true", name="TermPerformance")
	 */
	protected $termPerformance;

	public function __construct($termPerformance = NULL) {
		$this->termPerformance = ($termPerformance===NULL) ? NULL : $this->validateTermPerformance($termPerformance);
	}

	public function getTermPerformance($autoCreate = TRUE) {
		if ($this->termPerformance===NULL && $autoCreate && ! isset($this->_overrides['termPerformance']) ) {
			$this->termPerformance = $this->createTermPerformance();
		}
		return $this->termPerformance;
	}
	
	protected function createTermPerformance() {
		return array();
	}

	public function setTermPerformance($termPerformance) {
		$this->termPerformance = $this->validateTermPerformance($termPerformance);
	}

	protected function validateTermPerformance($termPerformance) {
		if ( $termPerformance === FALSE ) {
			$this->_overrides['termPerformance'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($termPerformance) && ! is_null($termPerformance) ) {
			$termPerformance = array($termPerformance);
		}

		unset ($this->_overrides['termPerformance']);
		$count = count($termPerformance);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'termPerformance', 0));
		}
		if ( ! empty($termPerformance) ) {
			foreach ($termPerformance as $entry) {
				if (!($entry instanceof TermPerformance)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'termPerformance', 'TermPerformance'));
				}
			}
		}
	
		return $termPerformance;
	}

	public function addTermPerformance($termPerformance) {
		$this->termPerformance[] = $termPerformance;
	}
} // end class AcademicPerformanceHistory
