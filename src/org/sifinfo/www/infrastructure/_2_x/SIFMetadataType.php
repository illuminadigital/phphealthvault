<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SIF_MetadataType")
 */
class SIFMetadataType {
	/**
	 * A commonly defined container for metadata elements defined within SIF.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TimeElements", name="TimeElements")
	 */
	protected $timeElements;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LifeCycleType", name="LifeCycle")
	 */
	protected $lifeCycle;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\RightsElements", name="RightsElements")
	 */
	protected $rightsElements;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\EducationFilterType", name="EducationFilter")
	 */
	protected $educationFilter;

	public function __construct($timeElements = NULL, $lifeCycle = NULL, $rightsElements = NULL, $educationFilter = NULL) {
		$this->timeElements = ($timeElements===NULL) ? NULL : $this->validateTimeElements($timeElements);
		$this->lifeCycle = ($lifeCycle===NULL) ? NULL : $this->validateLifeCycle($lifeCycle);
		$this->rightsElements = ($rightsElements===NULL) ? NULL : $this->validateRightsElements($rightsElements);
		$this->educationFilter = ($educationFilter===NULL) ? NULL : $this->validateEducationFilter($educationFilter);
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

	public function getLifeCycle($autoCreate = TRUE) {
		if ($this->lifeCycle===NULL && $autoCreate && ! isset($this->_overrides['lifeCycle']) ) {
			$this->lifeCycle = $this->createLifeCycle();
		}
		return $this->lifeCycle;
	}
	
	protected function createLifeCycle() {
		return new \org\sifinfo\www\infrastructure\_2_x\LifeCycleType();
	}

	public function setLifeCycle($lifeCycle) {
		$this->lifeCycle = $this->validateLifeCycle($lifeCycle);
	}

	protected function validateLifeCycle($lifeCycle) {
		if ( $lifeCycle === FALSE ) {
			$this->_overrides['lifeCycle'] = TRUE;
			return NULL;
		}

		if ( ! $lifeCycle instanceof \org\sifinfo\www\infrastructure\_2_x\LifeCycleType  && ! is_null($lifeCycle) ) {
			$lifeCycle = new \org\sifinfo\www\infrastructure\_2_x\LifeCycleType ($lifeCycle);
		}

		unset ($this->_overrides['lifeCycle']);
	
		return $lifeCycle;
	}

	public function getRightsElements($autoCreate = TRUE) {
		if ($this->rightsElements===NULL && $autoCreate && ! isset($this->_overrides['rightsElements']) ) {
			$this->rightsElements = $this->createRightsElements();
		}
		return $this->rightsElements;
	}
	
	protected function createRightsElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\RightsElements();
	}

	public function setRightsElements($rightsElements) {
		$this->rightsElements = $this->validateRightsElements($rightsElements);
	}

	protected function validateRightsElements($rightsElements) {
		if ( $rightsElements === FALSE ) {
			$this->_overrides['rightsElements'] = TRUE;
			return NULL;
		}

		if ( ! $rightsElements instanceof \org\sifinfo\www\infrastructure\_2_x\RightsElements  && ! is_null($rightsElements) ) {
			$rightsElements = new \org\sifinfo\www\infrastructure\_2_x\RightsElements ($rightsElements);
		}

		unset ($this->_overrides['rightsElements']);
	
		return $rightsElements;
	}

	public function getEducationFilter($autoCreate = TRUE) {
		if ($this->educationFilter===NULL && $autoCreate && ! isset($this->_overrides['educationFilter']) ) {
			$this->educationFilter = $this->createEducationFilter();
		}
		return $this->educationFilter;
	}
	
	protected function createEducationFilter() {
		return new \org\sifinfo\www\infrastructure\_2_x\EducationFilterType();
	}

	public function setEducationFilter($educationFilter) {
		$this->educationFilter = $this->validateEducationFilter($educationFilter);
	}

	protected function validateEducationFilter($educationFilter) {
		if ( $educationFilter === FALSE ) {
			$this->_overrides['educationFilter'] = TRUE;
			return NULL;
		}

		if ( ! $educationFilter instanceof \org\sifinfo\www\infrastructure\_2_x\EducationFilterType  && ! is_null($educationFilter) ) {
			$educationFilter = new \org\sifinfo\www\infrastructure\_2_x\EducationFilterType ($educationFilter);
		}

		unset ($this->_overrides['educationFilter']);
	
		return $educationFilter;
	}
} // end class SIFMetadataType
