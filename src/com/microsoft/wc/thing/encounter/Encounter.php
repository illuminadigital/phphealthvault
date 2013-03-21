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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
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

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
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

	public function getLocation($autoCreate = TRUE) {
		if ($this->location===NULL && $autoCreate && ! isset($this->_overrides['location']) ) {
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
		if ( $location === FALSE ) {
			$this->_overrides['location'] = TRUE;
			return NULL;
		}

		if ( ! $location instanceof \com\microsoft\wc\thing\types\Address  && ! is_null($location) ) {
			$location = new \com\microsoft\wc\thing\types\Address ($location);
		}

		unset ($this->_overrides['location']);
	
		return $location;
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
} // end class Encounter
