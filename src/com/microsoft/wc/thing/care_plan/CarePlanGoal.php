<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-goal")
 */
class CarePlanGoal {
	/**
	 * A goal defines a target for a measurement.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="start-date")
	 */
	protected $startDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="end-date")
	 */
	protected $endDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="thing-type-version-id")
	 */
	protected $thingTypeVersionId;

	/**
	 * @XmlText	(type="string", name="thing-type-value-xpath")
	 */
	protected $thingTypeValueXpath;

	/**
	 * @XmlText	(type="string", name="thing-type-display-xpath")
	 */
	protected $thingTypeDisplayXpath;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="value-unit")
	 */
	protected $valueUnit;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\UnitConversion", name="unit-conversion")
	 */
	protected $unitConversion;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CarePlanGoalRanges", name="goal-ranges")
	 */
	protected $goalRanges;

	/**
	 * @XmlText	(type="string", name="reference-id")
	 */
	protected $referenceId;

	public function __construct($name = NULL, $description = NULL, $startDate = NULL, $endDate = NULL, $thingTypeVersionId = NULL, $thingTypeValueXpath = NULL, $thingTypeDisplayXpath = NULL, $valueUnit = NULL, $unitConversion = NULL, $goalRanges = NULL, $referenceId = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->thingTypeVersionId = ($thingTypeVersionId===NULL) ? NULL : $this->validateThingTypeVersionId($thingTypeVersionId);
		$this->thingTypeValueXpath = ($thingTypeValueXpath===NULL) ? NULL : $this->validateThingTypeValueXpath($thingTypeValueXpath);
		$this->thingTypeDisplayXpath = ($thingTypeDisplayXpath===NULL) ? NULL : $this->validateThingTypeDisplayXpath($thingTypeDisplayXpath);
		$this->valueUnit = ($valueUnit===NULL) ? NULL : $this->validateValueUnit($valueUnit);
		$this->unitConversion = ($unitConversion===NULL) ? NULL : $this->validateUnitConversion($unitConversion);
		$this->goalRanges = ($goalRanges===NULL) ? NULL : $this->validateGoalRanges($goalRanges);
		$this->referenceId = ($referenceId===NULL) ? NULL : $this->validateReferenceId($referenceId);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodableValue ) {
			$name = new \com\microsoft\wc\types\CodableValue ($name);
		}
	
		return $name;
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

	public function getStartDate($autoCreate = TRUE) {
		if ($this->startDate===NULL && $autoCreate && ! isset($this->_overrides['startDate']) ) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
		if ( $startDate === FALSE ) {
			$this->_overrides['startDate'] = TRUE;
			return NULL;
		}

		if ( ! $startDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($startDate) ) {
			$startDate = new \com\microsoft\wc\dates\ApproxDateTime ($startDate);
		}

		unset ($this->_overrides['startDate']);
	
		return $startDate;
	}

	public function getEndDate($autoCreate = TRUE) {
		if ($this->endDate===NULL && $autoCreate && ! isset($this->_overrides['endDate']) ) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
		if ( $endDate === FALSE ) {
			$this->_overrides['endDate'] = TRUE;
			return NULL;
		}

		if ( ! $endDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($endDate) ) {
			$endDate = new \com\microsoft\wc\dates\ApproxDateTime ($endDate);
		}

		unset ($this->_overrides['endDate']);
	
		return $endDate;
	}

	public function getThingTypeVersionId($autoCreate = TRUE) {
		if ($this->thingTypeVersionId===NULL && $autoCreate && ! isset($this->_overrides['thingTypeVersionId']) ) {
			$this->thingTypeVersionId = $this->createThingTypeVersionId();
		}
		return $this->thingTypeVersionId;
	}
	
	protected function createThingTypeVersionId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setThingTypeVersionId($thingTypeVersionId) {
		$this->thingTypeVersionId = $this->validateThingTypeVersionId($thingTypeVersionId);
	}

	protected function validateThingTypeVersionId($thingTypeVersionId) {
		if ( $thingTypeVersionId === FALSE ) {
			$this->_overrides['thingTypeVersionId'] = TRUE;
			return NULL;
		}

		if ( ! $thingTypeVersionId instanceof \com\microsoft\wc\types\Guid  && ! is_null($thingTypeVersionId) ) {
			$thingTypeVersionId = new \com\microsoft\wc\types\Guid ($thingTypeVersionId);
		}

		unset ($this->_overrides['thingTypeVersionId']);
	
		return $thingTypeVersionId;
	}

	public function getThingTypeValueXpath($autoCreate = TRUE) {
		if ($this->thingTypeValueXpath===NULL && $autoCreate && ! isset($this->_overrides['thingTypeValueXpath']) ) {
			$this->thingTypeValueXpath = $this->createThingTypeValueXpath();
		}
		return $this->thingTypeValueXpath;
	}
	
	protected function createThingTypeValueXpath() {
		return '';
	}

	public function setThingTypeValueXpath($thingTypeValueXpath) {
		$this->thingTypeValueXpath = $this->validateThingTypeValueXpath($thingTypeValueXpath);
	}

	protected function validateThingTypeValueXpath($thingTypeValueXpath) {
		if ( ! is_string($thingTypeValueXpath) && ! is_null($thingTypeValueXpath) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'thingTypeValueXpath', 'string'));
		}
	
		return $thingTypeValueXpath;
	}

	public function getThingTypeDisplayXpath($autoCreate = TRUE) {
		if ($this->thingTypeDisplayXpath===NULL && $autoCreate && ! isset($this->_overrides['thingTypeDisplayXpath']) ) {
			$this->thingTypeDisplayXpath = $this->createThingTypeDisplayXpath();
		}
		return $this->thingTypeDisplayXpath;
	}
	
	protected function createThingTypeDisplayXpath() {
		return '';
	}

	public function setThingTypeDisplayXpath($thingTypeDisplayXpath) {
		$this->thingTypeDisplayXpath = $this->validateThingTypeDisplayXpath($thingTypeDisplayXpath);
	}

	protected function validateThingTypeDisplayXpath($thingTypeDisplayXpath) {
		if ( ! is_string($thingTypeDisplayXpath) && ! is_null($thingTypeDisplayXpath) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'thingTypeDisplayXpath', 'string'));
		}
	
		return $thingTypeDisplayXpath;
	}

	public function getValueUnit($autoCreate = TRUE) {
		if ($this->valueUnit===NULL && $autoCreate && ! isset($this->_overrides['valueUnit']) ) {
			$this->valueUnit = $this->createValueUnit();
		}
		return $this->valueUnit;
	}
	
	protected function createValueUnit() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setValueUnit($valueUnit) {
		$this->valueUnit = $this->validateValueUnit($valueUnit);
	}

	protected function validateValueUnit($valueUnit) {
		if ( $valueUnit === FALSE ) {
			$this->_overrides['valueUnit'] = TRUE;
			return NULL;
		}

		if ( ! $valueUnit instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($valueUnit) ) {
			$valueUnit = new \com\microsoft\wc\types\CodableValue ($valueUnit);
		}

		unset ($this->_overrides['valueUnit']);
	
		return $valueUnit;
	}

	public function getUnitConversion($autoCreate = TRUE) {
		if ($this->unitConversion===NULL && $autoCreate && ! isset($this->_overrides['unitConversion']) ) {
			$this->unitConversion = $this->createUnitConversion();
		}
		return $this->unitConversion;
	}
	
	protected function createUnitConversion() {
		return new \com\microsoft\wc\thing\care_plan\UnitConversion();
	}

	public function setUnitConversion($unitConversion) {
		$this->unitConversion = $this->validateUnitConversion($unitConversion);
	}

	protected function validateUnitConversion($unitConversion) {
		if ( $unitConversion === FALSE ) {
			$this->_overrides['unitConversion'] = TRUE;
			return NULL;
		}

		if ( ! $unitConversion instanceof \com\microsoft\wc\thing\care_plan\UnitConversion  && ! is_null($unitConversion) ) {
			$unitConversion = new \com\microsoft\wc\thing\care_plan\UnitConversion ($unitConversion);
		}

		unset ($this->_overrides['unitConversion']);
	
		return $unitConversion;
	}

	public function getGoalRanges($autoCreate = TRUE) {
		if ($this->goalRanges===NULL && $autoCreate && ! isset($this->_overrides['goalRanges']) ) {
			$this->goalRanges = $this->createGoalRanges();
		}
		return $this->goalRanges;
	}
	
	protected function createGoalRanges() {
		return new \com\microsoft\wc\thing\care_plan\CarePlanGoalRanges();
	}

	public function setGoalRanges($goalRanges) {
		$this->goalRanges = $this->validateGoalRanges($goalRanges);
	}

	protected function validateGoalRanges($goalRanges) {
		if ( $goalRanges === FALSE ) {
			$this->_overrides['goalRanges'] = TRUE;
			return NULL;
		}

		if ( ! $goalRanges instanceof \com\microsoft\wc\thing\care_plan\CarePlanGoalRanges  && ! is_null($goalRanges) ) {
			$goalRanges = new \com\microsoft\wc\thing\care_plan\CarePlanGoalRanges ($goalRanges);
		}

		unset ($this->_overrides['goalRanges']);
	
		return $goalRanges;
	}

	public function getReferenceId($autoCreate = TRUE) {
		if ($this->referenceId===NULL && $autoCreate && ! isset($this->_overrides['referenceId']) ) {
			$this->referenceId = $this->createReferenceId();
		}
		return $this->referenceId;
	}
	
	protected function createReferenceId() {
		return '';
	}

	public function setReferenceId($referenceId) {
		$this->referenceId = $this->validateReferenceId($referenceId);
	}

	protected function validateReferenceId($referenceId) {
		if ( ! is_string($referenceId) && ! is_null($referenceId) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'referenceId', 'string'));
		}
	
		return $referenceId;
	}
} // end class CarePlanGoal
