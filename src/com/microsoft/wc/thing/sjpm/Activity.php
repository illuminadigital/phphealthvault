<?php
namespace com\microsoft\wc\thing\sjpm;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.sjpm", prefix="")
 * })
 * @XmlEntity	(xml="Activity")
 */
class Activity {
	/**
	 * Defines an activity taken by the person before laying downfor the night.
	 */

	/**
	 * @XmlText	(type="string", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="minutes")
	 */
	protected $minutes;

	public function __construct($when = NULL, $minutes = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->minutes = ($minutes===NULL) ? NULL : $this->validateMinutes($minutes);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\Time();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\Time ) {
			$when = new \com\microsoft\wc\dates\Time ($when);
		}
	
		return $when;
	}

	public function getMinutes() {
		if ($this->minutes===NULL) {
			$this->minutes = $this->createMinutes();
		}
		return $this->minutes;
	}
	
	protected function createMinutes() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setMinutes($minutes) {
		$this->minutes = $this->validateMinutes($minutes);
	}

	protected function validateMinutes($minutes) {
		if ( ! $minutes instanceof \com\microsoft\wc\thing\types\NonNegativeInt ) {
			$minutes = new \com\microsoft\wc\thing\types\NonNegativeInt ($minutes);
		}
	
		return $minutes;
	}
} // end class Activity
