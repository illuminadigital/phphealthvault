<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan")
 */
class CarePlan extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a care plan.
	 */

	const ID = '415c95e0-0533-4d9c-ac73-91dc5031186c';
	const NAME = 'CarePlan';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="start-date")
	 */
	protected $startDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="end-date")
	 */
	protected $endDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status")
	 */
	protected $status;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CareTeam", name="care-team")
	 */
	protected $careTeam;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="care-plan-manager")
	 */
	protected $carePlanManager;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CarePlanTasks", name="tasks")
	 */
	protected $tasks;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CarePlanGoalGroups", name="goal-groups")
	 */
	protected $goalGroups;

	public function __construct($name = NULL, $startDate = NULL, $endDate = NULL, $status = NULL, $careTeam = NULL, $carePlanManager = NULL, $tasks = NULL, $goalGroups = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
		$this->careTeam = ($careTeam===NULL) ? NULL : $this->validateCareTeam($careTeam);
		$this->carePlanManager = ($carePlanManager===NULL) ? NULL : $this->validateCarePlanManager($carePlanManager);
		$this->tasks = ($tasks===NULL) ? NULL : $this->validateTasks($tasks);
		$this->goalGroups = ($goalGroups===NULL) ? NULL : $this->validateGoalGroups($goalGroups);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\Stringnznw ) {
			$name = new \com\microsoft\wc\types\Stringnznw ($name);
		}
	
		return $name;
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

	public function getStatus($autoCreate = TRUE) {
		if ($this->status===NULL && $autoCreate && ! isset($this->_overrides['status']) ) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
		if ( $status === FALSE ) {
			$this->_overrides['status'] = TRUE;
			return NULL;
		}

		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}

		unset ($this->_overrides['status']);
	
		return $status;
	}

	public function getCareTeam($autoCreate = TRUE) {
		if ($this->careTeam===NULL && $autoCreate && ! isset($this->_overrides['careTeam']) ) {
			$this->careTeam = $this->createCareTeam();
		}
		return $this->careTeam;
	}
	
	protected function createCareTeam() {
		return new \com\microsoft\wc\thing\care_plan\CareTeam();
	}

	public function setCareTeam($careTeam) {
		$this->careTeam = $this->validateCareTeam($careTeam);
	}

	protected function validateCareTeam($careTeam) {
		if ( $careTeam === FALSE ) {
			$this->_overrides['careTeam'] = TRUE;
			return NULL;
		}

		if ( ! $careTeam instanceof \com\microsoft\wc\thing\care_plan\CareTeam  && ! is_null($careTeam) ) {
			$careTeam = new \com\microsoft\wc\thing\care_plan\CareTeam ($careTeam);
		}

		unset ($this->_overrides['careTeam']);
	
		return $careTeam;
	}

	public function getCarePlanManager($autoCreate = TRUE) {
		if ($this->carePlanManager===NULL && $autoCreate && ! isset($this->_overrides['carePlanManager']) ) {
			$this->carePlanManager = $this->createCarePlanManager();
		}
		return $this->carePlanManager;
	}
	
	protected function createCarePlanManager() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setCarePlanManager($carePlanManager) {
		$this->carePlanManager = $this->validateCarePlanManager($carePlanManager);
	}

	protected function validateCarePlanManager($carePlanManager) {
		if ( $carePlanManager === FALSE ) {
			$this->_overrides['carePlanManager'] = TRUE;
			return NULL;
		}

		if ( ! $carePlanManager instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($carePlanManager) ) {
			$carePlanManager = new \com\microsoft\wc\thing\types\Person ($carePlanManager);
		}

		unset ($this->_overrides['carePlanManager']);
	
		return $carePlanManager;
	}

	public function getTasks($autoCreate = TRUE) {
		if ($this->tasks===NULL && $autoCreate && ! isset($this->_overrides['tasks']) ) {
			$this->tasks = $this->createTasks();
		}
		return $this->tasks;
	}
	
	protected function createTasks() {
		return new \com\microsoft\wc\thing\care_plan\CarePlanTasks();
	}

	public function setTasks($tasks) {
		$this->tasks = $this->validateTasks($tasks);
	}

	protected function validateTasks($tasks) {
		if ( $tasks === FALSE ) {
			$this->_overrides['tasks'] = TRUE;
			return NULL;
		}

		if ( ! $tasks instanceof \com\microsoft\wc\thing\care_plan\CarePlanTasks  && ! is_null($tasks) ) {
			$tasks = new \com\microsoft\wc\thing\care_plan\CarePlanTasks ($tasks);
		}

		unset ($this->_overrides['tasks']);
	
		return $tasks;
	}

	public function getGoalGroups($autoCreate = TRUE) {
		if ($this->goalGroups===NULL && $autoCreate && ! isset($this->_overrides['goalGroups']) ) {
			$this->goalGroups = $this->createGoalGroups();
		}
		return $this->goalGroups;
	}
	
	protected function createGoalGroups() {
		return new \com\microsoft\wc\thing\care_plan\CarePlanGoalGroups();
	}

	public function setGoalGroups($goalGroups) {
		$this->goalGroups = $this->validateGoalGroups($goalGroups);
	}

	protected function validateGoalGroups($goalGroups) {
		if ( $goalGroups === FALSE ) {
			$this->_overrides['goalGroups'] = TRUE;
			return NULL;
		}

		if ( ! $goalGroups instanceof \com\microsoft\wc\thing\care_plan\CarePlanGoalGroups  && ! is_null($goalGroups) ) {
			$goalGroups = new \com\microsoft\wc\thing\care_plan\CarePlanGoalGroups ($goalGroups);
		}

		unset ($this->_overrides['goalGroups']);
	
		return $goalGroups;
	}
} // end class CarePlan
