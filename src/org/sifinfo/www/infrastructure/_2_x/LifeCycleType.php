<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="LifeCycleType")
 */
class LifeCycleType {
	/**
	 * This common metadata element describes the life cycle of the object it represents, based on the IEEE LOM LifeCycle element [LOM].
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Created", name="Created")
	 */
	protected $created;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ModificationHistory", name="ModificationHistory")
	 */
	protected $modificationHistory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TimeElements", name="TimeElements")
	 */
	protected $timeElements;

	public function __construct($created = NULL, $modificationHistory = NULL, $timeElements = NULL) {
		$this->created = ($created===NULL) ? NULL : $this->validateCreated($created);
		$this->modificationHistory = ($modificationHistory===NULL) ? NULL : $this->validateModificationHistory($modificationHistory);
		$this->timeElements = ($timeElements===NULL) ? NULL : $this->validateTimeElements($timeElements);
	}

	public function getCreated($autoCreate = TRUE) {
		if ($this->created===NULL && $autoCreate && ! isset($this->_overrides['created']) ) {
			$this->created = $this->createCreated();
		}
		return $this->created;
	}
	
	protected function createCreated() {
		return new \org\sifinfo\www\infrastructure\_2_x\Created();
	}

	public function setCreated($created) {
		$this->created = $this->validateCreated($created);
	}

	protected function validateCreated($created) {
		if ( $created === FALSE ) {
			$this->_overrides['created'] = TRUE;
			return NULL;
		}

		if ( ! $created instanceof \org\sifinfo\www\infrastructure\_2_x\Created  && ! is_null($created) ) {
			$created = new \org\sifinfo\www\infrastructure\_2_x\Created ($created);
		}

		unset ($this->_overrides['created']);
	
		return $created;
	}

	public function getModificationHistory($autoCreate = TRUE) {
		if ($this->modificationHistory===NULL && $autoCreate && ! isset($this->_overrides['modificationHistory']) ) {
			$this->modificationHistory = $this->createModificationHistory();
		}
		return $this->modificationHistory;
	}
	
	protected function createModificationHistory() {
		return new \org\sifinfo\www\infrastructure\_2_x\ModificationHistory();
	}

	public function setModificationHistory($modificationHistory) {
		$this->modificationHistory = $this->validateModificationHistory($modificationHistory);
	}

	protected function validateModificationHistory($modificationHistory) {
		if ( $modificationHistory === FALSE ) {
			$this->_overrides['modificationHistory'] = TRUE;
			return NULL;
		}

		if ( ! $modificationHistory instanceof \org\sifinfo\www\infrastructure\_2_x\ModificationHistory  && ! is_null($modificationHistory) ) {
			$modificationHistory = new \org\sifinfo\www\infrastructure\_2_x\ModificationHistory ($modificationHistory);
		}

		unset ($this->_overrides['modificationHistory']);
	
		return $modificationHistory;
	}

	public function getTimeElements($autoCreate = TRUE) {
		if ($this->timeElements===NULL && $autoCreate && ! isset($this->_overrides['timeElements']) ) {
			$this->timeElements = $this->createTimeElements();
		}
		return $this->timeElements;
	}
	
	protected function createTimeElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\TimeElements();
	}

	public function setTimeElements($timeElements) {
		$this->timeElements = $this->validateTimeElements($timeElements);
	}

	protected function validateTimeElements($timeElements) {
		if ( $timeElements === FALSE ) {
			$this->_overrides['timeElements'] = TRUE;
			return NULL;
		}

		if ( ! $timeElements instanceof \org\sifinfo\www\infrastructure\_2_x\TimeElements  && ! is_null($timeElements) ) {
			$timeElements = new \org\sifinfo\www\infrastructure\_2_x\TimeElements ($timeElements);
		}

		unset ($this->_overrides['timeElements']);
	
		return $timeElements;
	}
} // end class LifeCycleType
