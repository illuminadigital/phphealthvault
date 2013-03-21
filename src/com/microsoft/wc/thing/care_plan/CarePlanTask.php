<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-task")
 */
class CarePlanTask {
	/**
	 * A task defines an action to be performed by the user.
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
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="sequence-number")
	 */
	protected $sequenceNumber;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="contact")
	 */
	protected $contact;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CarePlanTaskRecurrence", name="recurrence")
	 */
	protected $recurrence;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="thing-type-version-id")
	 */
	protected $thingTypeVersionId;

	/**
	 * @XmlText	(type="string", name="thing-type-xpath")
	 */
	protected $thingTypeXpath;

	/**
	 * @XmlText	(type="string", name="reference-id")
	 */
	protected $referenceId;

	public function __construct($name = NULL, $description = NULL, $startDate = NULL, $endDate = NULL, $sequenceNumber = NULL, $contact = NULL, $recurrence = NULL, $thingTypeVersionId = NULL, $thingTypeXpath = NULL, $referenceId = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->sequenceNumber = ($sequenceNumber===NULL) ? NULL : $this->validateSequenceNumber($sequenceNumber);
		$this->contact = ($contact===NULL) ? NULL : $this->validateContact($contact);
		$this->recurrence = ($recurrence===NULL) ? NULL : $this->validateRecurrence($recurrence);
		$this->thingTypeVersionId = ($thingTypeVersionId===NULL) ? NULL : $this->validateThingTypeVersionId($thingTypeVersionId);
		$this->thingTypeXpath = ($thingTypeXpath===NULL) ? NULL : $this->validateThingTypeXpath($thingTypeXpath);
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

	public function getSequenceNumber($autoCreate = TRUE) {
		if ($this->sequenceNumber===NULL && $autoCreate && ! isset($this->_overrides['sequenceNumber']) ) {
			$this->sequenceNumber = $this->createSequenceNumber();
		}
		return $this->sequenceNumber;
	}
	
	protected function createSequenceNumber() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setSequenceNumber($sequenceNumber) {
		$this->sequenceNumber = $this->validateSequenceNumber($sequenceNumber);
	}

	protected function validateSequenceNumber($sequenceNumber) {
		if ( $sequenceNumber === FALSE ) {
			$this->_overrides['sequenceNumber'] = TRUE;
			return NULL;
		}

		if ( ! $sequenceNumber instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($sequenceNumber) ) {
			$sequenceNumber = new \com\microsoft\wc\thing\types\NonNegativeInt ($sequenceNumber);
		}

		unset ($this->_overrides['sequenceNumber']);
	
		return $sequenceNumber;
	}

	public function getContact($autoCreate = TRUE) {
		if ($this->contact===NULL && $autoCreate && ! isset($this->_overrides['contact']) ) {
			$this->contact = $this->createContact();
		}
		return $this->contact;
	}
	
	protected function createContact() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setContact($contact) {
		$this->contact = $this->validateContact($contact);
	}

	protected function validateContact($contact) {
		if ( $contact === FALSE ) {
			$this->_overrides['contact'] = TRUE;
			return NULL;
		}

		if ( ! $contact instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($contact) ) {
			$contact = new \com\microsoft\wc\thing\types\Person ($contact);
		}

		unset ($this->_overrides['contact']);
	
		return $contact;
	}

	public function getRecurrence($autoCreate = TRUE) {
		if ($this->recurrence===NULL && $autoCreate && ! isset($this->_overrides['recurrence']) ) {
			$this->recurrence = $this->createRecurrence();
		}
		return $this->recurrence;
	}
	
	protected function createRecurrence() {
		return new \com\microsoft\wc\thing\care_plan\CarePlanTaskRecurrence();
	}

	public function setRecurrence($recurrence) {
		$this->recurrence = $this->validateRecurrence($recurrence);
	}

	protected function validateRecurrence($recurrence) {
		if ( $recurrence === FALSE ) {
			$this->_overrides['recurrence'] = TRUE;
			return NULL;
		}

		if ( ! $recurrence instanceof \com\microsoft\wc\thing\care_plan\CarePlanTaskRecurrence  && ! is_null($recurrence) ) {
			$recurrence = new \com\microsoft\wc\thing\care_plan\CarePlanTaskRecurrence ($recurrence);
		}

		unset ($this->_overrides['recurrence']);
	
		return $recurrence;
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

	public function getThingTypeXpath($autoCreate = TRUE) {
		if ($this->thingTypeXpath===NULL && $autoCreate && ! isset($this->_overrides['thingTypeXpath']) ) {
			$this->thingTypeXpath = $this->createThingTypeXpath();
		}
		return $this->thingTypeXpath;
	}
	
	protected function createThingTypeXpath() {
		return '';
	}

	public function setThingTypeXpath($thingTypeXpath) {
		$this->thingTypeXpath = $this->validateThingTypeXpath($thingTypeXpath);
	}

	protected function validateThingTypeXpath($thingTypeXpath) {
		if ( ! is_string($thingTypeXpath) && ! is_null($thingTypeXpath) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'thingTypeXpath', 'string'));
		}
	
		return $thingTypeXpath;
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
} // end class CarePlanTask
