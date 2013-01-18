<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-goal-ranges")
 */
class CarePlanGoalRanges {
	/**
	 * List of care plan goal group ranges.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CarePlanGoalRange", collection="true", name="goal-range")
	 */
	protected $goalRange;

	public function __construct($goalRange = NULL) {
		$this->goalRange = ($goalRange===NULL) ? NULL : $this->validateGoalRange($goalRange);
	}

	public function getGoalRange() {
		if ($this->goalRange===NULL) {
			$this->goalRange = $this->createGoalRange();
		}
		return $this->goalRange;
	}
	
	protected function createGoalRange() {
		return array();
	}

	public function setGoalRange($goalRange) {
		$this->goalRange = $this->validateGoalRange($goalRange);
	}

	protected function validateGoalRange($goalRange) {
		if ( ! $goalRange instanceof \com\microsoft\wc\thing\care_plan\CarePlanGoalRange ) {
			$goalRange = new \com\microsoft\wc\thing\care_plan\CarePlanGoalRange ($goalRange);
		}
		$count = count($goalRange);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'goalRange', 1));
		}
		foreach ($goalRange as $entry) {
			if (!($entry instanceof CarePlanGoalRange)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'goalRange', 'care-plan-goal-range'));
			}
		}
	
		return $goalRange;
	}

	public function addGoalRange($goalRange) {
		$this->goalRange[] = $goalRange;
	}
} // end class CarePlanGoalRanges
