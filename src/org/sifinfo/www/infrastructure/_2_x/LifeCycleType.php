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

	public function getCreated() {
		if ($this->created===NULL) {
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
		if ( ! $created instanceof \org\sifinfo\www\infrastructure\_2_x\Created  && ! is_null($created) ) {
			$created = new \org\sifinfo\www\infrastructure\_2_x\Created ($created);
		}
	
		return $created;
	}

	public function getModificationHistory() {
		if ($this->modificationHistory===NULL) {
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
		if ( ! $modificationHistory instanceof \org\sifinfo\www\infrastructure\_2_x\ModificationHistory  && ! is_null($modificationHistory) ) {
			$modificationHistory = new \org\sifinfo\www\infrastructure\_2_x\ModificationHistory ($modificationHistory);
		}
	
		return $modificationHistory;
	}

	public function getTimeElements() {
		if ($this->timeElements===NULL) {
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
		if ( ! $timeElements instanceof \org\sifinfo\www\infrastructure\_2_x\TimeElements  && ! is_null($timeElements) ) {
			$timeElements = new \org\sifinfo\www\infrastructure\_2_x\TimeElements ($timeElements);
		}
	
		return $timeElements;
	}
} // end class LifeCycleType
