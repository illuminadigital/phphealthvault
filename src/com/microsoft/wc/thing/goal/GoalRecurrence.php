<?php
namespace com\microsoft\wc\thing\goal;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.goal", prefix="")
 * })
 * @XmlEntity	(xml="goal-recurrence")
 */
class GoalRecurrence {
	/**
	 * This sub-type allows specifying recurrence for Goals.
	 */

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

	public function getInterval() {
		if ($this->interval===NULL) {
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

	public function getTimesInInterval() {
		if ($this->timesInInterval===NULL) {
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
