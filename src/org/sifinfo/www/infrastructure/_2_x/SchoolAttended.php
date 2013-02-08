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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LEAInfoData", name="LEAInfoData")
	 */
	protected $lEAInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolInfoData", name="SchoolInfoData")
	 */
	protected $schoolInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="AccreditingBody")
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

	public function getLEAInfoData() {
		if ($this->lEAInfoData===NULL) {
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
		if ( ! $lEAInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\LEAInfoData  && ! is_null($lEAInfoData) ) {
			$lEAInfoData = new \org\sifinfo\www\infrastructure\_2_x\LEAInfoData ($lEAInfoData);
		}
	
		return $lEAInfoData;
	}

	public function getSchoolInfoData() {
		if ($this->schoolInfoData===NULL) {
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

	public function getAccreditingBody() {
		if ($this->accreditingBody===NULL) {
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
		if ( ! is_normalizedString($accreditingBody) && ! is_null($accreditingBody) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'accreditingBody', 'normalizedString'));
		}
	
		return $accreditingBody;
	}

	public function getMarkingSystems() {
		if ($this->markingSystems===NULL) {
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
		if ( ! $markingSystems instanceof \org\sifinfo\www\infrastructure\_2_x\MarkingSystems  && ! is_null($markingSystems) ) {
			$markingSystems = new \org\sifinfo\www\infrastructure\_2_x\MarkingSystems ($markingSystems);
		}
	
		return $markingSystems;
	}

	public function getRefId() {
		if ($this->refId===NULL) {
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
