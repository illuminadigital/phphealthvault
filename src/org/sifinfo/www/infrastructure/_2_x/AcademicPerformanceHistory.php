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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TermPerformance", collection="true", name="TermPerformance")
	 */
	protected $termPerformance;

	public function __construct($termPerformance = NULL) {
		$this->termPerformance = ($termPerformance===NULL) ? NULL : $this->validateTermPerformance($termPerformance);
	}

	public function getTermPerformance() {
		if ($this->termPerformance===NULL) {
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
		if ( ! is_array ($termPerformance) && ! is_null($termPerformance) ) {
			$termPerformance = array($termPerformance);
		}
		$count = count($termPerformance);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'termPerformance', 0));
		}
		foreach ($termPerformance as $entry) {
			if (!($entry instanceof TermPerformance)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'termPerformance', 'TermPerformance'));
			}
		}
	
		return $termPerformance;
	}

	public function addTermPerformance($termPerformance) {
		$this->termPerformance[] = $termPerformance;
	}
} // end class AcademicPerformanceHistory
