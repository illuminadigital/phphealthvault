<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MealStatusType")
 */
class MealStatusType {
	/**
	 * This gives information about a student's meal status.
	 */

	/**
	 * @XmlText	(type="string", name="StartDate")
	 */
	protected $startDate;

	/**
	 * @XmlText	(type="string", name="EndDate")
	 */
	protected $endDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolYearType", name="SchoolYear")
	 */
	protected $schoolYear;

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	public function __construct($startDate = NULL, $endDate = NULL, $schoolYear = NULL, $type = NULL) {
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->schoolYear = ($schoolYear===NULL) ? NULL : $this->validateSchoolYear($schoolYear);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
	}

	public function getStartDate() {
		if ($this->startDate===NULL) {
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
		if ( ! is_string($startDate) && ! is_null($startDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'startDate', 'string'));
		}
	
		return $startDate;
	}

	public function getEndDate() {
		if ($this->endDate===NULL) {
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
		if ( ! is_string($endDate) && ! is_null($endDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'endDate', 'string'));
		}
	
		return $endDate;
	}

	public function getSchoolYear() {
		if ($this->schoolYear===NULL) {
			$this->schoolYear = $this->createSchoolYear();
		}
		return $this->schoolYear;
	}
	
	protected function createSchoolYear() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolYearType();
	}

	public function setSchoolYear($schoolYear) {
		$this->schoolYear = $this->validateSchoolYear($schoolYear);
	}

	protected function validateSchoolYear($schoolYear) {
		if ( ! $schoolYear instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolYearType  && ! is_null($schoolYear) ) {
			$schoolYear = new \org\sifinfo\www\infrastructure\_2_x\SchoolYearType ($schoolYear);
		}
	
		return $schoolYear;
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return NULL;
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if (!is_string($type)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}
} // end class MealStatusType
