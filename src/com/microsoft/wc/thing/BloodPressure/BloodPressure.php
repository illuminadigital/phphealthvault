<?php
namespace com\microsoft\wc\thing\BloodPressure;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.BloodPressure", prefix="")
 * })
 * @XmlEntity	(xml="blood-pressure")
 */
class BloodPressure extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines a single blood pressure reading.
	 */

	const ID = 'ca3c57f4-f4c1-4e15-be67-0a3caf5414ed';
	const NAME = 'Blood Pressure Measurement';

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

	public function getSystolic($autoCreate = TRUE) {
		if ($this->systolic===NULL && $autoCreate && ! isset($this->_overrides['systolic']) ) {
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

	public function getDiastolic($autoCreate = TRUE) {
		if ($this->diastolic===NULL && $autoCreate && ! isset($this->_overrides['diastolic']) ) {
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

	public function getPulse($autoCreate = TRUE) {
		if ($this->pulse===NULL && $autoCreate && ! isset($this->_overrides['pulse']) ) {
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
		if ( $pulse === FALSE ) {
			$this->_overrides['pulse'] = TRUE;
			return NULL;
		}

		if ( ! $pulse instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($pulse) ) {
			$pulse = new \com\microsoft\wc\thing\types\NonNegativeInt ($pulse);
		}

		unset ($this->_overrides['pulse']);
	
		return $pulse;
	}

	public function getIrregularHeartbeat($autoCreate = TRUE) {
		if ($this->irregularHeartbeat===NULL && $autoCreate && ! isset($this->_overrides['irregularHeartbeat']) ) {
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
