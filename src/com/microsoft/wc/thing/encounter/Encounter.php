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
	 * Note: Please use the new version of this data type instead of this version.This thing type describes the medical encounter a person has.
	 */

	const ID = '3D4BDF01-1B3E-4AFC-B41C-BD3E641A6DA7';
	const NAME = 'Encounter';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlText	(type="string", name="type")
	 */
	protected $type;

	/**
	 * @XmlText	(type="string", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DurationValue", name="duration")
	 */
	protected $duration;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Address", name="location")
	 */
	protected $location;

	/**
	 * @XmlText	(type="boolean", name="consent-granted")
	 */
	protected $consentGranted;

	public function __construct($when = NULL, $type = NULL, $id = NULL, $duration = NULL, $location = NULL, $consentGranted = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->duration = ($duration===NULL) ? NULL : $this->validateDuration($duration);
		$this->location = ($location===NULL) ? NULL : $this->validateLocation($location);
		$this->consentGranted = ($consentGranted===NULL) ? NULL : $this->validateConsentGranted($consentGranted);
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

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return '';
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if (!is_string($type)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return '';
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! is_string($id) && ! is_null($id) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'string'));
		}
	
		return $id;
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

	public function getLocation() {
		if ($this->location===NULL) {
			$this->location = $this->createLocation();
		}
		return $this->location;
	}
	
	protected function createLocation() {
		return new \com\microsoft\wc\thing\types\Address();
	}

	public function setLocation($location) {
		$this->location = $this->validateLocation($location);
	}

	protected function validateLocation($location) {
		if ( ! $location instanceof \com\microsoft\wc\thing\types\Address  && ! is_null($location) ) {
			$location = new \com\microsoft\wc\thing\types\Address ($location);
		}
	
		return $location;
	}

	public function getConsentGranted() {
		if ($this->consentGranted===NULL) {
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
} // end class Encounter
