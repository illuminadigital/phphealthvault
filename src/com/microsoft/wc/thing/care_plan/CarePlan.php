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
	const NAME = 'CarePlan (Preview)';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="start-date")
	 */
	protected $startDate;

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

	public function __construct($name = NULL, $startDate = NULL, $status = NULL, $careTeam = NULL, $carePlanManager = NULL, $tasks = NULL, $goalGroups = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
		$this->careTeam = ($careTeam===NULL) ? NULL : $this->validateCareTeam($careTeam);
		$this->carePlanManager = ($carePlanManager===NULL) ? NULL : $this->validateCarePlanManager($carePlanManager);
		$this->tasks = ($tasks===NULL) ? NULL : $this->validateTasks($tasks);
		$this->goalGroups = ($goalGroups===NULL) ? NULL : $this->validateGoalGroups($goalGroups);
	}

	public function getName() {
		if ($this->name===NULL) {
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

	public function getStartDate() {
		if ($this->startDate===NULL) {
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
		if ( ! $startDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($startDate) ) {
			$startDate = new \com\microsoft\wc\dates\ApproxDateTime ($startDate);
		}
	
		return $startDate;
	}

	public function getStatus() {
		if ($this->status===NULL) {
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
		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}
	
		return $status;
	}

	public function getCareTeam() {
		if ($this->careTeam===NULL) {
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
		if ( ! $careTeam instanceof \com\microsoft\wc\thing\care_plan\CareTeam  && ! is_null($careTeam) ) {
			$careTeam = new \com\microsoft\wc\thing\care_plan\CareTeam ($careTeam);
		}
	
		return $careTeam;
	}

	public function getCarePlanManager() {
		if ($this->carePlanManager===NULL) {
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
		if ( ! $carePlanManager instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($carePlanManager) ) {
			$carePlanManager = new \com\microsoft\wc\thing\types\Person ($carePlanManager);
		}
	
		return $carePlanManager;
	}

	public function getTasks() {
		if ($this->tasks===NULL) {
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
		if ( ! $tasks instanceof \com\microsoft\wc\thing\care_plan\CarePlanTasks  && ! is_null($tasks) ) {
			$tasks = new \com\microsoft\wc\thing\care_plan\CarePlanTasks ($tasks);
		}
	
		return $tasks;
	}

	public function getGoalGroups() {
		if ($this->goalGroups===NULL) {
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
		if ( ! $goalGroups instanceof \com\microsoft\wc\thing\care_plan\CarePlanGoalGroups  && ! is_null($goalGroups) ) {
			$goalGroups = new \com\microsoft\wc\thing\care_plan\CarePlanGoalGroups ($goalGroups);
		}
	
		return $goalGroups;
	}
} // end class CarePlan
