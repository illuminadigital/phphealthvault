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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Term", collection="true", name="Term")
	 */
	protected $term;

	public function __construct($term = NULL) {
		$this->term = ($term===NULL) ? NULL : $this->validateTerm($term);
	}

	public function getTerm($autoCreate = TRUE) {
		if ($this->term===NULL && $autoCreate && ! isset($this->_overrides['term']) ) {
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
		if ( $term === FALSE ) {
			$this->_overrides['term'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($term) && ! is_null($term) ) {
			$term = array($term);
		}

		unset ($this->_overrides['term']);
		$count = count($term);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'term', 0));
		}
		if ( ! empty($term) ) {
			foreach ($term as $entry) {
				if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\Term )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'term', 'Term'));
				}
			}
		}
	
		return $term;
	}

	public function addTerm($term) {
		$this->term[] = $term;
	}
} // end class CourseHistory
