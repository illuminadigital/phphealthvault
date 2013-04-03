<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="goal-recurrence")
 */
class GoalRecurrence {
	/**
	 * This sub-type allows specifying recurrence for Goals.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="interval")
	 */
	protected $interval;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="times-in-interval")
	 */
	protected $timesInInterval;

	public function __construct($interval = NULL, $timesInInterval = NULL) {
		$this->interval = ($interval===NULL) ? NULL : $this->validateInterval($interval);
		$this->timesInInterval = ($timesInInterval===NULL) ? NULL : $this->validateTimesInInterval($timesInInterval);
	}

	public function getInterval($autoCreate = TRUE) {
		if ($this->interval===NULL && $autoCreate && ! isset($this->_overrides['interval']) ) {
			$this->interval = $this->createInterval();
		}
		return $this->interval;
	}
	
	protected function createInterval() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setInterval($interval) {
		$this->interval = $this->validateInterval($interval);
	}

	protected function validateInterval($interval) {
		if ( ! $interval instanceof \com\microsoft\wc\types\CodableValue ) {
			$interval = new \com\microsoft\wc\types\CodableValue ($interval);
		}
	
		return $interval;
	}

	public function getTimesInInterval($autoCreate = TRUE) {
		if ($this->timesInInterval===NULL && $autoCreate && ! isset($this->_overrides['timesInInterval']) ) {
			$this->timesInInterval = $this->createTimesInInterval();
		}
		return $this->timesInInterval;
	}
	
	protected function createTimesInInterval() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setTimesInInterval($timesInInterval) {
		$this->timesInInterval = $this->validateTimesInInterval($timesInInterval);
	}

	protected function validateTimesInInterval($timesInInterval) {
		if ( ! $timesInInterval instanceof \com\microsoft\wc\thing\types\PositiveInt ) {
			$timesInInterval = new \com\microsoft\wc\thing\types\PositiveInt ($timesInInterval);
		}
	
		return $timesInInterval;
	}
} // end class GoalRecurrence
