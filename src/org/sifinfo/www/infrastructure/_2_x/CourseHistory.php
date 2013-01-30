<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="CourseHistory")
 */
class CourseHistory {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Term", collection="true", name="Term")
	 */
	protected $term;

	public function __construct($term = NULL) {
		$this->term = ($term===NULL) ? NULL : $this->validateTerm($term);
	}

	public function getTerm() {
		if ($this->term===NULL) {
			$this->term = $this->createTerm();
		}
		return $this->term;
	}
	
	protected function createTerm() {
		return array();
	}

	public function setTerm($term) {
		$this->term = $this->validateTerm($term);
	}

	protected function validateTerm($term) {
		if ( ! is_array ($term) && ! is_null($term) ) {
			$term = array($term);
		}
		$count = count($term);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'term', 0));
		}
		foreach ($term as $entry) {
			if (!($entry instanceof Term)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'term', 'Term'));
			}
		}
	
		return $term;
	}

	public function addTerm($term) {
		$this->term[] = $term;
	}
} // end class CourseHistory
