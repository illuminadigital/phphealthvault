<?php
namespace com\microsoft\wc\thing\sjam;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.sjam", prefix="")
 * })
 * @XmlEntity	(xml="Awakening")
 */
class Awakening {
	/**
	 * A time and duration of an awakening during a period of sleep.
	 * An awakening covers those times during a sleep sessionin which the person awoke and then went back to sleep.For example, if a person wakes up during a night's sleep to use the restroom and then returns to sleep. Itdoes not include awakenings that result in the person remaining awake for active periods.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Time", name="when")
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

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
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

	public function getMinutes($autoCreate = TRUE) {
		if ($this->minutes===NULL && $autoCreate && ! isset($this->_overrides['minutes']) ) {
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
} // end class Awakening
