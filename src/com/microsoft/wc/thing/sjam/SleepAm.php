<?php
namespace com\microsoft\wc\thing\sjam;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.sjam", prefix="")
 * })
 * @XmlEntity	(xml="sleep-am")
 */
class SleepAm extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Schema for a morning sleep journal.
	 * A morning sleep journal reflects back on the previous nightssleep. The data items were adapted from the NIH publication #06-5271,November 2005, "Your Guide to Healthy Sleep", ISBN 1-933236-05-1.
	 */

	const ID = '11C52484-7F1A-11DB-AEAC-87D355D89593';
	const NAME = 'Sleep Session';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Time", name="bed-time")
	 */
	protected $bedTime;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Time", name="wake-time")
	 */
	protected $wakeTime;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="sleep-minutes")
	 */
	protected $sleepMinutes;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="settling-minutes")
	 */
	protected $settlingMinutes;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\sjam\Awakening", collection="true", name="awakening")
	 */
	protected $awakening;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="medications")
	 */
	protected $medications;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\sjam\WakeState", name="wake-state")
	 */
	protected $wakeState;

	public function __construct($when = NULL, $bedTime = NULL, $wakeTime = NULL, $sleepMinutes = NULL, $settlingMinutes = NULL, $awakening = NULL, $medications = NULL, $wakeState = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->bedTime = ($bedTime===NULL) ? NULL : $this->validateBedTime($bedTime);
		$this->wakeTime = ($wakeTime===NULL) ? NULL : $this->validateWakeTime($wakeTime);
		$this->sleepMinutes = ($sleepMinutes===NULL) ? NULL : $this->validateSleepMinutes($sleepMinutes);
		$this->settlingMinutes = ($settlingMinutes===NULL) ? NULL : $this->validateSettlingMinutes($settlingMinutes);
		$this->awakening = ($awakening===NULL) ? NULL : $this->validateAwakening($awakening);
		$this->medications = ($medications===NULL) ? NULL : $this->validateMedications($medications);
		$this->wakeState = ($wakeState===NULL) ? NULL : $this->validateWakeState($wakeState);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getBedTime($autoCreate = TRUE) {
		if ($this->bedTime===NULL && $autoCreate && ! isset($this->_overrides['bedTime']) ) {
			$this->bedTime = $this->createBedTime();
		}
		return $this->bedTime;
	}
	
	protected function createBedTime() {
		return new \com\microsoft\wc\dates\Time();
	}

	public function setBedTime($bedTime) {
		$this->bedTime = $this->validateBedTime($bedTime);
	}

	protected function validateBedTime($bedTime) {
		if ( ! $bedTime instanceof \com\microsoft\wc\dates\Time ) {
			$bedTime = new \com\microsoft\wc\dates\Time ($bedTime);
		}
	
		return $bedTime;
	}

	public function getWakeTime($autoCreate = TRUE) {
		if ($this->wakeTime===NULL && $autoCreate && ! isset($this->_overrides['wakeTime']) ) {
			$this->wakeTime = $this->createWakeTime();
		}
		return $this->wakeTime;
	}
	
	protected function createWakeTime() {
		return new \com\microsoft\wc\dates\Time();
	}

	public function setWakeTime($wakeTime) {
		$this->wakeTime = $this->validateWakeTime($wakeTime);
	}

	protected function validateWakeTime($wakeTime) {
		if ( ! $wakeTime instanceof \com\microsoft\wc\dates\Time ) {
			$wakeTime = new \com\microsoft\wc\dates\Time ($wakeTime);
		}
	
		return $wakeTime;
	}

	public function getSleepMinutes($autoCreate = TRUE) {
		if ($this->sleepMinutes===NULL && $autoCreate && ! isset($this->_overrides['sleepMinutes']) ) {
			$this->sleepMinutes = $this->createSleepMinutes();
		}
		return $this->sleepMinutes;
	}
	
	protected function createSleepMinutes() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setSleepMinutes($sleepMinutes) {
		$this->sleepMinutes = $this->validateSleepMinutes($sleepMinutes);
	}

	protected function validateSleepMinutes($sleepMinutes) {
		if ( ! $sleepMinutes instanceof \com\microsoft\wc\thing\types\NonNegativeInt ) {
			$sleepMinutes = new \com\microsoft\wc\thing\types\NonNegativeInt ($sleepMinutes);
		}
	
		return $sleepMinutes;
	}

	public function getSettlingMinutes($autoCreate = TRUE) {
		if ($this->settlingMinutes===NULL && $autoCreate && ! isset($this->_overrides['settlingMinutes']) ) {
			$this->settlingMinutes = $this->createSettlingMinutes();
		}
		return $this->settlingMinutes;
	}
	
	protected function createSettlingMinutes() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setSettlingMinutes($settlingMinutes) {
		$this->settlingMinutes = $this->validateSettlingMinutes($settlingMinutes);
	}

	protected function validateSettlingMinutes($settlingMinutes) {
		if ( ! $settlingMinutes instanceof \com\microsoft\wc\thing\types\NonNegativeInt ) {
			$settlingMinutes = new \com\microsoft\wc\thing\types\NonNegativeInt ($settlingMinutes);
		}
	
		return $settlingMinutes;
	}

	public function getAwakening($autoCreate = TRUE) {
		if ($this->awakening===NULL && $autoCreate && ! isset($this->_overrides['awakening']) ) {
			$this->awakening = $this->createAwakening();
		}
		return $this->awakening;
	}
	
	protected function createAwakening() {
		return array();
	}

	public function setAwakening($awakening) {
		$this->awakening = $this->validateAwakening($awakening);
	}

	protected function validateAwakening($awakening) {
		if ( $awakening === FALSE ) {
			$this->_overrides['awakening'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($awakening) && ! is_null($awakening) ) {
			$awakening = array($awakening);
		}

		unset ($this->_overrides['awakening']);
		$count = count($awakening);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'awakening', 0));
		}
		if ( ! empty($awakening) ) {
			foreach ($awakening as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\sjam\Awakening )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'awakening', 'Awakening'));
				}
			}
		}
	
		return $awakening;
	}

	public function addAwakening($awakening) {
		$this->awakening[] = $awakening;
	}

	public function getMedications($autoCreate = TRUE) {
		if ($this->medications===NULL && $autoCreate && ! isset($this->_overrides['medications']) ) {
			$this->medications = $this->createMedications();
		}
		return $this->medications;
	}
	
	protected function createMedications() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMedications($medications) {
		$this->medications = $this->validateMedications($medications);
	}

	protected function validateMedications($medications) {
		if ( $medications === FALSE ) {
			$this->_overrides['medications'] = TRUE;
			return NULL;
		}

		if ( ! $medications instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($medications) ) {
			$medications = new \com\microsoft\wc\types\CodableValue ($medications);
		}

		unset ($this->_overrides['medications']);
	
		return $medications;
	}

	public function getWakeState($autoCreate = TRUE) {
		if ($this->wakeState===NULL && $autoCreate && ! isset($this->_overrides['wakeState']) ) {
			$this->wakeState = $this->createWakeState();
		}
		return $this->wakeState;
	}
	
	protected function createWakeState() {
		return new \com\microsoft\wc\thing\sjam\WakeState();
	}

	public function setWakeState($wakeState) {
		$this->wakeState = $this->validateWakeState($wakeState);
	}

	protected function validateWakeState($wakeState) {
		if ( ! $wakeState instanceof \com\microsoft\wc\thing\sjam\WakeState ) {
			$wakeState = new \com\microsoft\wc\thing\sjam\WakeState ($wakeState);
		}
	
		return $wakeState;
	}
} // end class SleepAm
