<?php
namespace com\microsoft\wc\thing\appointment;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.appointment", prefix="")
 * })
 * @XmlEntity	(xml="appointment")
 */
class Appointment extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a medical appointment.
	 * This thing type describes the appointment a person has.
	 */

	const ID = '4B18AEB6-5F01-444C-8C70-DBF13A2F510B';
	const NAME = 'Appointment';

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
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DurationValue", name="duration")
	 */
	protected $duration;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="service")
	 */
	protected $service;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="clinic")
	 */
	protected $clinic;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="specialty")
	 */
	protected $specialty;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status")
	 */
	protected $status;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="care-class")
	 */
	protected $careClass;

	public function __construct($when = NULL, $duration = NULL, $service = NULL, $clinic = NULL, $specialty = NULL, $status = NULL, $careClass = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->duration = ($duration===NULL) ? NULL : $this->validateDuration($duration);
		$this->service = ($service===NULL) ? NULL : $this->validateService($service);
		$this->clinic = ($clinic===NULL) ? NULL : $this->validateClinic($clinic);
		$this->specialty = ($specialty===NULL) ? NULL : $this->validateSpecialty($specialty);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
		$this->careClass = ($careClass===NULL) ? NULL : $this->validateCareClass($careClass);
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

	public function getDuration($autoCreate = TRUE) {
		if ($this->duration===NULL && $autoCreate && ! isset($this->_overrides['duration']) ) {
			$this->duration = $this->createDuration();
		}
		return $this->duration;
	}
	
	protected function createDuration() {
		return new \com\microsoft\wc\thing\types\DurationValue();
	}

	public function setDuration($duration) {
		$this->duration = $this->validateDuration($duration);
	}

	protected function validateDuration($duration) {
		if ( $duration === FALSE ) {
			$this->_overrides['duration'] = TRUE;
			return NULL;
		}

		if ( ! $duration instanceof \com\microsoft\wc\thing\types\DurationValue  && ! is_null($duration) ) {
			$duration = new \com\microsoft\wc\thing\types\DurationValue ($duration);
		}

		unset ($this->_overrides['duration']);
	
		return $duration;
	}

	public function getService($autoCreate = TRUE) {
		if ($this->service===NULL && $autoCreate && ! isset($this->_overrides['service']) ) {
			$this->service = $this->createService();
		}
		return $this->service;
	}
	
	protected function createService() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setService($service) {
		$this->service = $this->validateService($service);
	}

	protected function validateService($service) {
		if ( $service === FALSE ) {
			$this->_overrides['service'] = TRUE;
			return NULL;
		}

		if ( ! $service instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($service) ) {
			$service = new \com\microsoft\wc\types\CodableValue ($service);
		}

		unset ($this->_overrides['service']);
	
		return $service;
	}

	public function getClinic($autoCreate = TRUE) {
		if ($this->clinic===NULL && $autoCreate && ! isset($this->_overrides['clinic']) ) {
			$this->clinic = $this->createClinic();
		}
		return $this->clinic;
	}
	
	protected function createClinic() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setClinic($clinic) {
		$this->clinic = $this->validateClinic($clinic);
	}

	protected function validateClinic($clinic) {
		if ( $clinic === FALSE ) {
			$this->_overrides['clinic'] = TRUE;
			return NULL;
		}

		if ( ! $clinic instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($clinic) ) {
			$clinic = new \com\microsoft\wc\thing\types\Person ($clinic);
		}

		unset ($this->_overrides['clinic']);
	
		return $clinic;
	}

	public function getSpecialty($autoCreate = TRUE) {
		if ($this->specialty===NULL && $autoCreate && ! isset($this->_overrides['specialty']) ) {
			$this->specialty = $this->createSpecialty();
		}
		return $this->specialty;
	}
	
	protected function createSpecialty() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSpecialty($specialty) {
		$this->specialty = $this->validateSpecialty($specialty);
	}

	protected function validateSpecialty($specialty) {
		if ( $specialty === FALSE ) {
			$this->_overrides['specialty'] = TRUE;
			return NULL;
		}

		if ( ! $specialty instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($specialty) ) {
			$specialty = new \com\microsoft\wc\types\CodableValue ($specialty);
		}

		unset ($this->_overrides['specialty']);
	
		return $specialty;
	}

	public function getStatus($autoCreate = TRUE) {
		if ($this->status===NULL && $autoCreate && ! isset($this->_overrides['status']) ) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
		if ( $status === FALSE ) {
			$this->_overrides['status'] = TRUE;
			return NULL;
		}

		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}

		unset ($this->_overrides['status']);
	
		return $status;
	}

	public function getCareClass($autoCreate = TRUE) {
		if ($this->careClass===NULL && $autoCreate && ! isset($this->_overrides['careClass']) ) {
			$this->careClass = $this->createCareClass();
		}
		return $this->careClass;
	}
	
	protected function createCareClass() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCareClass($careClass) {
		$this->careClass = $this->validateCareClass($careClass);
	}

	protected function validateCareClass($careClass) {
		if ( $careClass === FALSE ) {
			$this->_overrides['careClass'] = TRUE;
			return NULL;
		}

		if ( ! $careClass instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($careClass) ) {
			$careClass = new \com\microsoft\wc\types\CodableValue ($careClass);
		}

		unset ($this->_overrides['careClass']);
	
		return $careClass;
	}
} // end class Appointment
