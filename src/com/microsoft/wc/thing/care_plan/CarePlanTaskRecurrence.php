<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-task-recurrence")
 */
class CarePlanTaskRecurrence {
	/**
	 * Care plan task recurrence representation.
	 * For recurrence rules that cannot be expressed using iCalendar recurrence format, use interval and times-in-interval fields.Ex: Two times in a week.
	 */

	/**
	 * @XmlText	(type="string", name="ical-recurrence")
	 */
	protected $icalRecurrence;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="interval")
	 */
	protected $interval;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="times-in-interval")
	 */
	protected $timesInInterval;

	public function __construct($icalRecurrence = NULL, $interval = NULL, $timesInInterval = NULL) {
		$this->icalRecurrence = ($icalRecurrence===NULL) ? NULL : $this->validateIcalRecurrence($icalRecurrence);
		$this->interval = ($interval===NULL) ? NULL : $this->validateInterval($interval);
		$this->timesInInterval = ($timesInInterval===NULL) ? NULL : $this->validateTimesInInterval($timesInInterval);
	}

	public function getIcalRecurrence() {
		if ($this->icalRecurrence===NULL) {
			$this->icalRecurrence = $this->createIcalRecurrence();
		}
		return $this->icalRecurrence;
	}
	
	protected function createIcalRecurrence() {
		return '';
	}

	public function setIcalRecurrence($icalRecurrence) {
		$this->icalRecurrence = $this->validateIcalRecurrence($icalRecurrence);
	}

	protected function validateIcalRecurrence($icalRecurrence) {
		if (!is_string($icalRecurrence)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'icalRecurrence', 'string'));
		}
	
		return $icalRecurrence;
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
} // end class CarePlanTaskRecurrence
