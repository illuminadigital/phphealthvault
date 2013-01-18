<?php
namespace com\microsoft\wc\thing\appointment;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.appointment", prefix="")
 * })
 * @XmlEntity	(xml="appointment")
 */
class Appointment extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to a medical appointment.
	 * This thing type describes the appointment a person has.
	 */

	const ID = '4B18AEB6-5F01-444C-8C70-DBF13A2F510B';
	const NAME = 'Appointment';

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

	public function getDuration() {
		if ($this->duration===NULL) {
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
		if ( ! $duration instanceof \com\microsoft\wc\thing\types\DurationValue  && ! is_null($duration) ) {
			$duration = new \com\microsoft\wc\thing\types\DurationValue ($duration);
		}
	
		return $duration;
	}

	public function getService() {
		if ($this->service===NULL) {
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
		if ( ! $service instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($service) ) {
			$service = new \com\microsoft\wc\types\CodableValue ($service);
		}
	
		return $service;
	}

	public function getClinic() {
		if ($this->clinic===NULL) {
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
		if ( ! $clinic instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($clinic) ) {
			$clinic = new \com\microsoft\wc\thing\types\Person ($clinic);
		}
	
		return $clinic;
	}

	public function getSpecialty() {
		if ($this->specialty===NULL) {
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
		if ( ! $specialty instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($specialty) ) {
			$specialty = new \com\microsoft\wc\types\CodableValue ($specialty);
		}
	
		return $specialty;
	}

	public function getStatus() {
		if ($this->status===NULL) {
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
		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}
	
		return $status;
	}

	public function getCareClass() {
		if ($this->careClass===NULL) {
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
		if ( ! $careClass instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($careClass) ) {
			$careClass = new \com\microsoft\wc\types\CodableValue ($careClass);
		}
	
		return $careClass;
	}
} // end class Appointment
