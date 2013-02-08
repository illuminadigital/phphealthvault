<?php
namespace com\microsoft\wc\thing\inhaler;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.inhaler", prefix="")
 * })
 * @XmlEntity	(xml="alert")
 */
class Alert {
	/**
	 * A weekly alert schedule.
	 * A weekly alert schedule consists of one or more days of theweek plus one or more time values.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Dow", collection="true", name="dow")
	 */
	protected $dow;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Time", collection="true", name="time")
	 */
	protected $time;

	public function __construct($dow = NULL, $time = NULL) {
		$this->dow = ($dow===NULL) ? NULL : $this->validateDow($dow);
		$this->time = ($time===NULL) ? NULL : $this->validateTime($time);
	}

	public function getDow() {
		if ($this->dow===NULL) {
			$this->dow = $this->createDow();
		}
		return $this->dow;
	}
	
	protected function createDow() {
		return array();
	}

	public function setDow($dow) {
		$this->dow = $this->validateDow($dow);
	}

	protected function validateDow($dow) {
		if ( ! is_array ($dow) ) {
			$dow = array($dow);
		}
		$count = count($dow);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'dow', 1));
		}
		if ($count > 7) {
			throw new \Exception(sprintf('Supplied %s array has more than the required number (%d) of entries.', 'dow', 7));
		}
		foreach ($dow as $entry) {
			if (!($entry instanceof Dow)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'dow', 'dow'));
			}
		}
	
		return $dow;
	}

	public function addDow($dow) {
		$this->dow[] = $dow;
	}

	public function getTime() {
		if ($this->time===NULL) {
			$this->time = $this->createTime();
		}
		return $this->time;
	}
	
	protected function createTime() {
		return array();
	}

	public function setTime($time) {
		$this->time = $this->validateTime($time);
	}

	protected function validateTime($time) {
		if ( ! is_array ($time) ) {
			$time = array($time);
		}
		$count = count($time);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'time', 1));
		}
		foreach ($time as $entry) {
			if (!($entry instanceof Time)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'time', 'time'));
			}
		}
	
		return $time;
	}

	public function addTime($time) {
		$this->time[] = $time;
	}
} // end class Alert
