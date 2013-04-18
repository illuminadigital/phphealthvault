<?php
namespace com\microsoft\wc\thing\encounter;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.encounter", prefix="")
 * })
 * @XmlEntity	(xml="encounter")
 */
class Encounter extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a medical encounter.
	 * This thing type describes the medical encounter a person has.
	 */

	const ID = '464083cc-13de-4f3e-a189-da8e47d5651b';
	const NAME = 'Encounter';

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
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="type")
	 */
	protected $type;

	/**
	 * @XmlText	(type="string", name="reason")
	 */
	protected $reason;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DurationValue", name="duration")
	 */
	protected $duration;

	/**
	 * @XmlText	(type="boolean", name="consent-granted")
	 */
	protected $consentGranted;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="facility")
	 */
	protected $facility;

	public function __construct($when = NULL, $type = NULL, $reason = NULL, $duration = NULL, $consentGranted = NULL, $facility = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->reason = ($reason===NULL) ? NULL : $this->validateReason($reason);
		$this->duration = ($duration===NULL) ? NULL : $this->validateDuration($duration);
		$this->consentGranted = ($consentGranted===NULL) ? NULL : $this->validateConsentGranted($consentGranted);
		$this->facility = ($facility===NULL) ? NULL : $this->validateFacility($facility);
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
		if ( $when === FALSE ) {
			$this->_overrides['when'] = TRUE;
			return NULL;
		}

		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($when) ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}

		unset ($this->_overrides['when']);
	
		return $when;
	}

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if ( $type === FALSE ) {
			$this->_overrides['type'] = TRUE;
			return NULL;
		}

		if ( ! $type instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($type) ) {
			$type = new \com\microsoft\wc\types\CodableValue ($type);
		}

		unset ($this->_overrides['type']);
	
		return $type;
	}

	public function getReason($autoCreate = TRUE) {
		if ($this->reason===NULL && $autoCreate && ! isset($this->_overrides['reason']) ) {
			$this->reason = $this->createReason();
		}
		return $this->reason;
	}
	
	protected function createReason() {
		return '';
	}

	public function setReason($reason) {
		$this->reason = $this->validateReason($reason);
	}

	protected function validateReason($reason) {
		if ( ! is_string($reason) && ! is_null($reason) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'reason', 'string'));
		}
	
		return $reason;
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

	public function getConsentGranted($autoCreate = TRUE) {
		if ($this->consentGranted===NULL && $autoCreate && ! isset($this->_overrides['consentGranted']) ) {
			$this->consentGranted = $this->createConsentGranted();
		}
		return $this->consentGranted;
	}
	
	protected function createConsentGranted() {
		return FALSE;
	}

	public function setConsentGranted($consentGranted) {
		$this->consentGranted = $this->validateConsentGranted($consentGranted);
	}

	protected function validateConsentGranted($consentGranted) {
		if ( ! is_bool($consentGranted) && ! is_null($consentGranted) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'consentGranted', 'boolean'));
		}
	
		return $consentGranted;
	}

	public function getFacility($autoCreate = TRUE) {
		if ($this->facility===NULL && $autoCreate && ! isset($this->_overrides['facility']) ) {
			$this->facility = $this->createFacility();
		}
		return $this->facility;
	}
	
	protected function createFacility() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setFacility($facility) {
		$this->facility = $this->validateFacility($facility);
	}

	protected function validateFacility($facility) {
		if ( $facility === FALSE ) {
			$this->_overrides['facility'] = TRUE;
			return NULL;
		}

		if ( ! $facility instanceof \com\microsoft\wc\thing\types\Organization  && ! is_null($facility) ) {
			$facility = new \com\microsoft\wc\thing\types\Organization ($facility);
		}

		unset ($this->_overrides['facility']);
	
		return $facility;
	}
} // end class Encounter
