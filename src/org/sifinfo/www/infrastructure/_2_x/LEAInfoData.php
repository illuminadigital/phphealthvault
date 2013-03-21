<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="LEAInfoData")
 */
class LEAInfoData {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LocalIdType", name="LocalId")
	 */
	protected $localId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StateProvinceIdType", name="StateProvinceId")
	 */
	protected $stateProvinceId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCESIdType", name="NCESId")
	 */
	protected $nCESId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LEAName", name="LEAName")
	 */
	protected $lEAName;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($localId = NULL, $stateProvinceId = NULL, $nCESId = NULL, $lEAName = NULL, $sifExtendedElements = NULL) {
		$this->localId = ($localId===NULL) ? NULL : $this->validateLocalId($localId);
		$this->stateProvinceId = ($stateProvinceId===NULL) ? NULL : $this->validateStateProvinceId($stateProvinceId);
		$this->nCESId = ($nCESId===NULL) ? NULL : $this->validateNCESId($nCESId);
		$this->lEAName = ($lEAName===NULL) ? NULL : $this->validateLEAName($lEAName);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getLocalId($autoCreate = TRUE) {
		if ($this->localId===NULL && $autoCreate && ! isset($this->_overrides['localId']) ) {
			$this->localId = $this->createLocalId();
		}
		return $this->localId;
	}
	
	protected function createLocalId() {
		return NULL;
	}

	public function setLocalId($localId) {
		$this->localId = $this->validateLocalId($localId);
	}

	protected function validateLocalId($localId) {
	
		return $localId;
	}

	public function getStateProvinceId($autoCreate = TRUE) {
		if ($this->stateProvinceId===NULL && $autoCreate && ! isset($this->_overrides['stateProvinceId']) ) {
			$this->stateProvinceId = $this->createStateProvinceId();
		}
		return $this->stateProvinceId;
	}
	
	protected function createStateProvinceId() {
		return NULL;
	}

	public function setStateProvinceId($stateProvinceId) {
		$this->stateProvinceId = $this->validateStateProvinceId($stateProvinceId);
	}

	protected function validateStateProvinceId($stateProvinceId) {
	
		return $stateProvinceId;
	}

	public function getNCESId($autoCreate = TRUE) {
		if ($this->nCESId===NULL && $autoCreate && ! isset($this->_overrides['nCESId']) ) {
			$this->nCESId = $this->createNCESId();
		}
		return $this->nCESId;
	}
	
	protected function createNCESId() {
		return NULL;
	}

	public function setNCESId($nCESId) {
		$this->nCESId = $this->validateNCESId($nCESId);
	}

	protected function validateNCESId($nCESId) {
	
		return $nCESId;
	}

	public function getLEAName($autoCreate = TRUE) {
		if ($this->lEAName===NULL && $autoCreate && ! isset($this->_overrides['lEAName']) ) {
			$this->lEAName = $this->createLEAName();
		}
		return $this->lEAName;
	}
	
	protected function createLEAName() {
		return new \org\sifinfo\www\infrastructure\_2_x\LEAName();
	}

	public function setLEAName($lEAName) {
		$this->lEAName = $this->validateLEAName($lEAName);
	}

	protected function validateLEAName($lEAName) {
		if ( ! $lEAName instanceof \org\sifinfo\www\infrastructure\_2_x\LEAName ) {
			$lEAName = new \org\sifinfo\www\infrastructure\_2_x\LEAName ($lEAName);
		}
	
		return $lEAName;
	}

	public function getSifExtendedElements($autoCreate = TRUE) {
		if ($this->sifExtendedElements===NULL && $autoCreate && ! isset($this->_overrides['sifExtendedElements']) ) {
			$this->sifExtendedElements = $this->createSifExtendedElements();
		}
		return $this->sifExtendedElements;
	}
	
	protected function createSifExtendedElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType();
	}

	public function setSifExtendedElements($sifExtendedElements) {
		$this->sifExtendedElements = $this->validateSifExtendedElements($sifExtendedElements);
	}

	protected function validateSifExtendedElements($sifExtendedElements) {
		if ( $sifExtendedElements === FALSE ) {
			$this->_overrides['sifExtendedElements'] = TRUE;
			return NULL;
		}

		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}

		unset ($this->_overrides['sifExtendedElements']);
	
		return $sifExtendedElements;
	}
} // end class LEAInfoData
