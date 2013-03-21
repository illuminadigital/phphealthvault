<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SchoolAttended")
 */
class SchoolAttended {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LEAInfoData", name="LEAInfoData")
	 */
	protected $lEAInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolInfoData", name="SchoolInfoData")
	 */
	protected $schoolInfoData;

	/**
	 * @XmlText	(type="string", name="AccreditingBody")
	 */
	protected $accreditingBody;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MarkingSystems", name="MarkingSystems")
	 */
	protected $markingSystems;

	/**
	 * @XmlAttribute	(type="string", name="RefId")
	 */
	protected $refId;

	public function __construct($lEAInfoData = NULL, $schoolInfoData = NULL, $accreditingBody = NULL, $markingSystems = NULL, $refId = NULL) {
		$this->lEAInfoData = ($lEAInfoData===NULL) ? NULL : $this->validateLEAInfoData($lEAInfoData);
		$this->schoolInfoData = ($schoolInfoData===NULL) ? NULL : $this->validateSchoolInfoData($schoolInfoData);
		$this->accreditingBody = ($accreditingBody===NULL) ? NULL : $this->validateAccreditingBody($accreditingBody);
		$this->markingSystems = ($markingSystems===NULL) ? NULL : $this->validateMarkingSystems($markingSystems);
		$this->refId = ($refId===NULL) ? NULL : $this->validateRefId($refId);
	}

	public function getLEAInfoData($autoCreate = TRUE) {
		if ($this->lEAInfoData===NULL && $autoCreate && ! isset($this->_overrides['lEAInfoData']) ) {
			$this->lEAInfoData = $this->createLEAInfoData();
		}
		return $this->lEAInfoData;
	}
	
	protected function createLEAInfoData() {
		return new \org\sifinfo\www\infrastructure\_2_x\LEAInfoData();
	}

	public function setLEAInfoData($lEAInfoData) {
		$this->lEAInfoData = $this->validateLEAInfoData($lEAInfoData);
	}

	protected function validateLEAInfoData($lEAInfoData) {
		if ( $lEAInfoData === FALSE ) {
			$this->_overrides['lEAInfoData'] = TRUE;
			return NULL;
		}

		if ( ! $lEAInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\LEAInfoData  && ! is_null($lEAInfoData) ) {
			$lEAInfoData = new \org\sifinfo\www\infrastructure\_2_x\LEAInfoData ($lEAInfoData);
		}

		unset ($this->_overrides['lEAInfoData']);
	
		return $lEAInfoData;
	}

	public function getSchoolInfoData($autoCreate = TRUE) {
		if ($this->schoolInfoData===NULL && $autoCreate && ! isset($this->_overrides['schoolInfoData']) ) {
			$this->schoolInfoData = $this->createSchoolInfoData();
		}
		return $this->schoolInfoData;
	}
	
	protected function createSchoolInfoData() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolInfoData();
	}

	public function setSchoolInfoData($schoolInfoData) {
		$this->schoolInfoData = $this->validateSchoolInfoData($schoolInfoData);
	}

	protected function validateSchoolInfoData($schoolInfoData) {
		if ( ! $schoolInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolInfoData ) {
			$schoolInfoData = new \org\sifinfo\www\infrastructure\_2_x\SchoolInfoData ($schoolInfoData);
		}
	
		return $schoolInfoData;
	}

	public function getAccreditingBody($autoCreate = TRUE) {
		if ($this->accreditingBody===NULL && $autoCreate && ! isset($this->_overrides['accreditingBody']) ) {
			$this->accreditingBody = $this->createAccreditingBody();
		}
		return $this->accreditingBody;
	}
	
	protected function createAccreditingBody() {
		return NULL;
	}

	public function setAccreditingBody($accreditingBody) {
		$this->accreditingBody = $this->validateAccreditingBody($accreditingBody);
	}

	protected function validateAccreditingBody($accreditingBody) {
		if ( ! is_string($accreditingBody) && ! is_null($accreditingBody) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'accreditingBody', 'string'));
		}
	
		return $accreditingBody;
	}

	public function getMarkingSystems($autoCreate = TRUE) {
		if ($this->markingSystems===NULL && $autoCreate && ! isset($this->_overrides['markingSystems']) ) {
			$this->markingSystems = $this->createMarkingSystems();
		}
		return $this->markingSystems;
	}
	
	protected function createMarkingSystems() {
		return new \org\sifinfo\www\infrastructure\_2_x\MarkingSystems();
	}

	public function setMarkingSystems($markingSystems) {
		$this->markingSystems = $this->validateMarkingSystems($markingSystems);
	}

	protected function validateMarkingSystems($markingSystems) {
		if ( $markingSystems === FALSE ) {
			$this->_overrides['markingSystems'] = TRUE;
			return NULL;
		}

		if ( ! $markingSystems instanceof \org\sifinfo\www\infrastructure\_2_x\MarkingSystems  && ! is_null($markingSystems) ) {
			$markingSystems = new \org\sifinfo\www\infrastructure\_2_x\MarkingSystems ($markingSystems);
		}

		unset ($this->_overrides['markingSystems']);
	
		return $markingSystems;
	}

	public function getRefId($autoCreate = TRUE) {
		if ($this->refId===NULL && $autoCreate && ! isset($this->_overrides['refId']) ) {
			$this->refId = $this->createRefId();
		}
		return $this->refId;
	}
	
	protected function createRefId() {
		return NULL;
	}

	public function setRefId($refId) {
		$this->refId = $this->validateRefId($refId);
	}

	protected function validateRefId($refId) {
	
		return $refId;
	}
} // end class SchoolAttended
