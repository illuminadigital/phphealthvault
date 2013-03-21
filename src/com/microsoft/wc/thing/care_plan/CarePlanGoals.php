<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-goals")
 */
class CarePlanGoals {
	/**
	 * List of care plan goals.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CarePlanGoal", collection="true", name="goal")
	 */
	protected $goal;

	public function __construct($goal = NULL) {
		$this->goal = ($goal===NULL) ? NULL : $this->validateGoal($goal);
	}

	public function getGoal($autoCreate = TRUE) {
		if ($this->goal===NULL && $autoCreate && ! isset($this->_overrides['goal']) ) {
			$this->goal = $this->createGoal();
		}
		return $this->goal;
	}
	
	protected function createGoal() {
		return array();
	}

	public function setGoal($goal) {
		$this->goal = $this->validateGoal($goal);
	}

	protected function validateGoal($goal) {
		if ( ! is_array ($goal) ) {
			$goal = array($goal);
		}
		$count = count($goal);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'goal', 1));
		}
		foreach ($goal as $entry) {
			if (!($entry instanceof CarePlanGoal)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'goal', 'care-plan-goal'));
			}
		}
	
		return $goal;
	}

	public function addGoal($goal) {
		$this->goal[] = $goal;
	}
} // end class CarePlanGoals
