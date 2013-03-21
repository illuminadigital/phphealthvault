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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getInitial($autoCreate = TRUE) {
		if ($this->initial===NULL && $autoCreate && ! isset($this->_overrides['initial']) ) {
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
		if ( $initial === FALSE ) {
			$this->_overrides['initial'] = TRUE;
			return NULL;
		}

		if ( ! $initial instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($initial) ) {
			$initial = new \com\microsoft\wc\thing\types\WeightValue ($initial);
		}

		unset ($this->_overrides['initial']);
	
		return $initial;
	}

	public function getMinimum($autoCreate = TRUE) {
		if ($this->minimum===NULL && $autoCreate && ! isset($this->_overrides['minimum']) ) {
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
		if ( $minimum === FALSE ) {
			$this->_overrides['minimum'] = TRUE;
			return NULL;
		}

		if ( ! $minimum instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($minimum) ) {
			$minimum = new \com\microsoft\wc\thing\types\WeightValue ($minimum);
		}

		unset ($this->_overrides['minimum']);
	
		return $minimum;
	}

	public function getMaximum($autoCreate = TRUE) {
		if ($this->maximum===NULL && $autoCreate && ! isset($this->_overrides['maximum']) ) {
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
		if ( $maximum === FALSE ) {
			$this->_overrides['maximum'] = TRUE;
			return NULL;
		}

		if ( ! $maximum instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($maximum) ) {
			$maximum = new \com\microsoft\wc\thing\types\WeightValue ($maximum);
		}

		unset ($this->_overrides['maximum']);
	
		return $maximum;
	}

	public function getGoalInfo($autoCreate = TRUE) {
		if ($this->goalInfo===NULL && $autoCreate && ! isset($this->_overrides['goalInfo']) ) {
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
		if ( $goalInfo === FALSE ) {
			$this->_overrides['goalInfo'] = TRUE;
			return NULL;
		}

		if ( ! $goalInfo instanceof \com\microsoft\wc\thing\types\Goal  && ! is_null($goalInfo) ) {
			$goalInfo = new \com\microsoft\wc\thing\types\Goal ($goalInfo);
		}

		unset ($this->_overrides['goalInfo']);
	
		return $goalInfo;
	}
} // end class WeightGoal
