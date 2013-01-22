<?php
namespace com\microsoft\wc\thing\weight_goal;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.weight-goal", prefix="")
 * })
 * @XmlEntity	(xml="weight-goal")
 */
class WeightGoal extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A target weight range with an associated target date.
	 * More than one weight goal may exist in a record. It isup to the application to determine which is the activegoal.The thing's effective-date implies the date on whichthe goal was initiated, for purposes of graphing, etc.
	 */

	const ID = 'b7925180-d69e-48fa-ae1d-cb3748ca170e';
	const NAME = 'Weight Goal';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="initial")
	 */
	protected $initial;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="minimum")
	 */
	protected $minimum;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="maximum")
	 */
	protected $maximum;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Goal", name="goal-info")
	 */
	protected $goalInfo;

	public function __construct($initial = NULL, $minimum = NULL, $maximum = NULL, $goalInfo = NULL) {
		$this->initial = ($initial===NULL) ? NULL : $this->validateInitial($initial);
		$this->minimum = ($minimum===NULL) ? NULL : $this->validateMinimum($minimum);
		$this->maximum = ($maximum===NULL) ? NULL : $this->validateMaximum($maximum);
		$this->goalInfo = ($goalInfo===NULL) ? NULL : $this->validateGoalInfo($goalInfo);
	}

	public function getInitial() {
		if ($this->initial===NULL) {
			$this->initial = $this->createInitial();
		}
		return $this->initial;
	}
	
	protected function createInitial() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setInitial($initial) {
		$this->initial = $this->validateInitial($initial);
	}

	protected function validateInitial($initial) {
		if ( ! $initial instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($initial) ) {
			$initial = new \com\microsoft\wc\thing\types\WeightValue ($initial);
		}
	
		return $initial;
	}

	public function getMinimum() {
		if ($this->minimum===NULL) {
			$this->minimum = $this->createMinimum();
		}
		return $this->minimum;
	}
	
	protected function createMinimum() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setMinimum($minimum) {
		$this->minimum = $this->validateMinimum($minimum);
	}

	protected function validateMinimum($minimum) {
		if ( ! $minimum instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($minimum) ) {
			$minimum = new \com\microsoft\wc\thing\types\WeightValue ($minimum);
		}
	
		return $minimum;
	}

	public function getMaximum() {
		if ($this->maximum===NULL) {
			$this->maximum = $this->createMaximum();
		}
		return $this->maximum;
	}
	
	protected function createMaximum() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setMaximum($maximum) {
		$this->maximum = $this->validateMaximum($maximum);
	}

	protected function validateMaximum($maximum) {
		if ( ! $maximum instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($maximum) ) {
			$maximum = new \com\microsoft\wc\thing\types\WeightValue ($maximum);
		}
	
		return $maximum;
	}

	public function getGoalInfo() {
		if ($this->goalInfo===NULL) {
			$this->goalInfo = $this->createGoalInfo();
		}
		return $this->goalInfo;
	}
	
	protected function createGoalInfo() {
		return new \com\microsoft\wc\thing\types\Goal();
	}

	public function setGoalInfo($goalInfo) {
		$this->goalInfo = $this->validateGoalInfo($goalInfo);
	}

	protected function validateGoalInfo($goalInfo) {
		if ( ! $goalInfo instanceof \com\microsoft\wc\thing\types\Goal  && ! is_null($goalInfo) ) {
			$goalInfo = new \com\microsoft\wc\thing\types\Goal ($goalInfo);
		}
	
		return $goalInfo;
	}
} // end class WeightGoal
