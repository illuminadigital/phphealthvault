<?php
namespace com\microsoft\wc\thing\BloodPressure;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.BloodPressure", prefix="")
 * })
 * @XmlEntity	(xml="blood-pressure")
 */
class BloodPressure extends \com\microsoft\wc\thing\Thing {
	/**
	 * Defines a single blood pressure reading.
	 */

	const ID = 'ca3c57f4-f4c1-4e15-be67-0a3caf5414ed';
	const NAME = 'Blood Pressure Measurement';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="systolic")
	 */
	protected $systolic;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="diastolic")
	 */
	protected $diastolic;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="pulse")
	 */
	protected $pulse;

	/**
	 * @XmlText	(type="boolean", name="irregular-heartbeat")
	 */
	protected $irregularHeartbeat;

	public function __construct($when = NULL, $systolic = NULL, $diastolic = NULL, $pulse = NULL, $irregularHeartbeat = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->systolic = ($systolic===NULL) ? NULL : $this->validateSystolic($systolic);
		$this->diastolic = ($diastolic===NULL) ? NULL : $this->validateDiastolic($diastolic);
		$this->pulse = ($pulse===NULL) ? NULL : $this->validatePulse($pulse);
		$this->irregularHeartbeat = ($irregularHeartbeat===NULL) ? NULL : $this->validateIrregularHeartbeat($irregularHeartbeat);
	}

	public function getWhen() {
		if ($this->when===NULL) {
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

	public function getSystolic() {
		if ($this->systolic===NULL) {
			$this->systolic = $this->createSystolic();
		}
		return $this->systolic;
	}
	
	protected function createSystolic() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setSystolic($systolic) {
		$this->systolic = $this->validateSystolic($systolic);
	}

	protected function validateSystolic($systolic) {
		if ( ! $systolic instanceof \com\microsoft\wc\thing\types\NonNegativeInt ) {
			$systolic = new \com\microsoft\wc\thing\types\NonNegativeInt ($systolic);
		}
	
		return $systolic;
	}

	public function getDiastolic() {
		if ($this->diastolic===NULL) {
			$this->diastolic = $this->createDiastolic();
		}
		return $this->diastolic;
	}
	
	protected function createDiastolic() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setDiastolic($diastolic) {
		$this->diastolic = $this->validateDiastolic($diastolic);
	}

	protected function validateDiastolic($diastolic) {
		if ( ! $diastolic instanceof \com\microsoft\wc\thing\types\NonNegativeInt ) {
			$diastolic = new \com\microsoft\wc\thing\types\NonNegativeInt ($diastolic);
		}
	
		return $diastolic;
	}

	public function getPulse() {
		if ($this->pulse===NULL) {
			$this->pulse = $this->createPulse();
		}
		return $this->pulse;
	}
	
	protected function createPulse() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setPulse($pulse) {
		$this->pulse = $this->validatePulse($pulse);
	}

	protected function validatePulse($pulse) {
		if ( ! $pulse instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($pulse) ) {
			$pulse = new \com\microsoft\wc\thing\types\NonNegativeInt ($pulse);
		}
	
		return $pulse;
	}

	public function getIrregularHeartbeat() {
		if ($this->irregularHeartbeat===NULL) {
			$this->irregularHeartbeat = $this->createIrregularHeartbeat();
		}
		return $this->irregularHeartbeat;
	}
	
	protected function createIrregularHeartbeat() {
		return FALSE;
	}

	public function setIrregularHeartbeat($irregularHeartbeat) {
		$this->irregularHeartbeat = $this->validateIrregularHeartbeat($irregularHeartbeat);
	}

	protected function validateIrregularHeartbeat($irregularHeartbeat) {
		if ( ! is_bool($irregularHeartbeat) && ! is_null($irregularHeartbeat) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'irregularHeartbeat', 'boolean'));
		}
	
		return $irregularHeartbeat;
	}
} // end class BloodPressure
