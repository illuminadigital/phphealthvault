<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-goal-groups")
 */
class CarePlanGoalGroups {
	/**
	 * List of care plan goal groups.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CarePlanGoalGroup", collection="true", name="goal-group")
	 */
	protected $goalGroup;

	public function __construct($goalGroup = NULL) {
		$this->goalGroup = ($goalGroup===NULL) ? NULL : $this->validateGoalGroup($goalGroup);
	}

	public function getGoalGroup($autoCreate = TRUE) {
		if ($this->goalGroup===NULL && $autoCreate && ! isset($this->_overrides['goalGroup']) ) {
			$this->goalGroup = $this->createGoalGroup();
		}
		return $this->goalGroup;
	}
	
	protected function createGoalGroup() {
		return array();
	}

	public function setGoalGroup($goalGroup) {
		$this->goalGroup = $this->validateGoalGroup($goalGroup);
	}

	protected function validateGoalGroup($goalGroup) {
		if ( ! is_array ($goalGroup) ) {
			$goalGroup = array($goalGroup);
		}
		$count = count($goalGroup);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'goalGroup', 1));
		}
		foreach ($goalGroup as $entry) {
			if (!($entry instanceof CarePlanGoalGroup)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'goalGroup', 'care-plan-goal-group'));
			}
		}
	
		return $goalGroup;
	}

	public function addGoalGroup($goalGroup) {
		$this->goalGroup[] = $goalGroup;
	}
} // end class CarePlanGoalGroups
