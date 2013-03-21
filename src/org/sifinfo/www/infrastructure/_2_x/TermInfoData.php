<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="TermInfoData")
 */
class TermInfoData {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolYearType", name="SchoolYear")
	 */
	protected $schoolYear;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="StartDate")
	 */
	protected $startDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="EndDate")
	 */
	protected $endDate;

	/**
	 * @XmlText	(type="string", name="Description")
	 */
	protected $description;

	/**
	 * @XmlText	(type="string", name="TermCode")
	 */
	protected $termCode;

	/**
	 * @XmlText	(type="string", name="Track")
	 */
	protected $track;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TermSpanType", name="TermSpan")
	 */
	protected $termSpan;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	/**
	 * @XmlAttribute	(type="string", name="SchoolAttendedRefId")
	 */
	protected $schoolAttendedRefId;

	public function __construct($schoolYear = NULL, $startDate = NULL, $endDate = NULL, $description = NULL, $termCode = NULL, $track = NULL, $termSpan = NULL, $sifExtendedElements = NULL, $schoolAttendedRefId = NULL) {
		$this->schoolYear = ($schoolYear===NULL) ? NULL : $this->validateSchoolYear($schoolYear);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->termCode = ($termCode===NULL) ? NULL : $this->validateTermCode($termCode);
		$this->track = ($track===NULL) ? NULL : $this->validateTrack($track);
		$this->termSpan = ($termSpan===NULL) ? NULL : $this->validateTermSpan($termSpan);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
		$this->schoolAttendedRefId = ($schoolAttendedRefId===NULL) ? NULL : $this->validateSchoolAttendedRefId($schoolAttendedRefId);
	}

	public function getSchoolYear($autoCreate = TRUE) {
		if ($this->schoolYear===NULL && $autoCreate && ! isset($this->_overrides['schoolYear']) ) {
			$this->schoolYear = $this->createSchoolYear();
		}
		return $this->schoolYear;
	}
	
	protected function createSchoolYear() {
		return NULL;
	}

	public function setSchoolYear($schoolYear) {
		$this->schoolYear = $this->validateSchoolYear($schoolYear);
	}

	protected function validateSchoolYear($schoolYear) {
	
		return $schoolYear;
	}

	public function getStartDate($autoCreate = TRUE) {
		if ($this->startDate===NULL && $autoCreate && ! isset($this->_overrides['startDate']) ) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return NULL;
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
	
		return $startDate;
	}

	public function getEndDate($autoCreate = TRUE) {
		if ($this->endDate===NULL && $autoCreate && ! isset($this->_overrides['endDate']) ) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return NULL;
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
	
		return $endDate;
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getTermCode($autoCreate = TRUE) {
		if ($this->termCode===NULL && $autoCreate && ! isset($this->_overrides['termCode']) ) {
			$this->termCode = $this->createTermCode();
		}
		return $this->termCode;
	}
	
	protected function createTermCode() {
		return NULL;
	}

	public function setTermCode($termCode) {
		$this->termCode = $this->validateTermCode($termCode);
	}

	protected function validateTermCode($termCode) {
		if ( ! is_string($termCode) && ! is_null($termCode) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'termCode', 'string'));
		}
	
		return $termCode;
	}

	public function getTrack($autoCreate = TRUE) {
		if ($this->track===NULL && $autoCreate && ! isset($this->_overrides['track']) ) {
			$this->track = $this->createTrack();
		}
		return $this->track;
	}
	
	protected function createTrack() {
		return NULL;
	}

	public function setTrack($track) {
		$this->track = $this->validateTrack($track);
	}

	protected function validateTrack($track) {
		if ( ! is_string($track) && ! is_null($track) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'track', 'string'));
		}
	
		return $track;
	}

	public function getTermSpan($autoCreate = TRUE) {
		if ($this->termSpan===NULL && $autoCreate && ! isset($this->_overrides['termSpan']) ) {
			$this->termSpan = $this->createTermSpan();
		}
		return $this->termSpan;
	}
	
	protected function createTermSpan() {
		return new \org\sifinfo\www\infrastructure\_2_x\TermSpanType();
	}

	public function setTermSpan($termSpan) {
		$this->termSpan = $this->validateTermSpan($termSpan);
	}

	protected function validateTermSpan($termSpan) {
		if ( $termSpan === FALSE ) {
			$this->_overrides['termSpan'] = TRUE;
			return NULL;
		}

		if ( ! $termSpan instanceof \org\sifinfo\www\infrastructure\_2_x\TermSpanType  && ! is_null($termSpan) ) {
			$termSpan = new \org\sifinfo\www\infrastructure\_2_x\TermSpanType ($termSpan);
		}

		unset ($this->_overrides['termSpan']);
	
		return $termSpan;
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

	public function getSchoolAttendedRefId($autoCreate = TRUE) {
		if ($this->schoolAttendedRefId===NULL && $autoCreate && ! isset($this->_overrides['schoolAttendedRefId']) ) {
			$this->schoolAttendedRefId = $this->createSchoolAttendedRefId();
		}
		return $this->schoolAttendedRefId;
	}
	
	protected function createSchoolAttendedRefId() {
		return NULL;
	}

	public function setSchoolAttendedRefId($schoolAttendedRefId) {
		$this->schoolAttendedRefId = $this->validateSchoolAttendedRefId($schoolAttendedRefId);
	}

	protected function validateSchoolAttendedRefId($schoolAttendedRefId) {
	
		return $schoolAttendedRefId;
	}
} // end class TermInfoData
