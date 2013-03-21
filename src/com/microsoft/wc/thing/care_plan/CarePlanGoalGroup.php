<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-goal-group")
 */
class CarePlanGoalGroup {
	/**
	 * Goal groups are used to group related measurement goals together.For example, blood pressure has two individual measurement goals (systolic and diastolic) but are grouped together under blood pressure.
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
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CarePlanGoals", name="goals")
	 */
	protected $goals;

	public function __construct($name = NULL, $description = NULL, $goals = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->goals = ($goals===NULL) ? NULL : $this->validateGoals($goals);
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

	public function getGoals($autoCreate = TRUE) {
		if ($this->goals===NULL && $autoCreate && ! isset($this->_overrides['goals']) ) {
			$this->goals = $this->createGoals();
		}
		return $this->goals;
	}
	
	protected function createGoals() {
		return new \com\microsoft\wc\thing\care_plan\CarePlanGoals();
	}

	public function setGoals($goals) {
		$this->goals = $this->validateGoals($goals);
	}

	protected function validateGoals($goals) {
		if ( ! $goals instanceof \com\microsoft\wc\thing\care_plan\CarePlanGoals ) {
			$goals = new \com\microsoft\wc\thing\care_plan\CarePlanGoals ($goals);
		}
	
		return $goals;
	}
} // end class CarePlanGoalGroup
