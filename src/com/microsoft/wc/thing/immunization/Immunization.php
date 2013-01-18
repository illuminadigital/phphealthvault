<?php
namespace com\microsoft\wc\thing\immunization;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.immunization", prefix="")
 * })
 * @XmlEntity	(xml="immunization")
 */
class Immunization extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to an immunization.
	 * Note: Please use the new version of this data type instead of this version.
	 */

	const ID = '3d817dbe-af42-4a9d-a553-d1298b4d08fc';
	const NAME = 'Immunization';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="administration-date")
	 */
	protected $administrationDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="administrator")
	 */
	protected $administrator;

	/**
	 * @XmlText	(type="string", name="manufacturer")
	 */
	protected $manufacturer;

	/**
	 * @XmlText	(type="string", name="lot")
	 */
	protected $lot;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="route")
	 */
	protected $route;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="expiration-date")
	 */
	protected $expirationDate;

	/**
	 * @XmlText	(type="string", name="sequence")
	 */
	protected $sequence;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="anatomic-surface")
	 */
	protected $anatomicSurface;

	/**
	 * @XmlText	(type="string", name="adverse-event")
	 */
	protected $adverseEvent;

	/**
	 * @XmlText	(type="string", name="consent")
	 */
	protected $consent;

	public function __construct($name = NULL, $administrationDate = NULL, $administrator = NULL, $manufacturer = NULL, $lot = NULL, $route = NULL, $expirationDate = NULL, $sequence = NULL, $anatomicSurface = NULL, $adverseEvent = NULL, $consent = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->administrationDate = ($administrationDate===NULL) ? NULL : $this->validateAdministrationDate($administrationDate);
		$this->administrator = ($administrator===NULL) ? NULL : $this->validateAdministrator($administrator);
		$this->manufacturer = ($manufacturer===NULL) ? NULL : $this->validateManufacturer($manufacturer);
		$this->lot = ($lot===NULL) ? NULL : $this->validateLot($lot);
		$this->route = ($route===NULL) ? NULL : $this->validateRoute($route);
		$this->expirationDate = ($expirationDate===NULL) ? NULL : $this->validateExpirationDate($expirationDate);
		$this->sequence = ($sequence===NULL) ? NULL : $this->validateSequence($sequence);
		$this->anatomicSurface = ($anatomicSurface===NULL) ? NULL : $this->validateAnatomicSurface($anatomicSurface);
		$this->adverseEvent = ($adverseEvent===NULL) ? NULL : $this->validateAdverseEvent($adverseEvent);
		$this->consent = ($consent===NULL) ? NULL : $this->validateConsent($consent);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodableValue ) {
			$name = new \com\microsoft\wc\types\CodableValue ($name);
		}
	
		return $name;
	}

	public function getAdministrationDate() {
		if ($this->administrationDate===NULL) {
			$this->administrationDate = $this->createAdministrationDate();
		}
		return $this->administrationDate;
	}
	
	protected function createAdministrationDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setAdministrationDate($administrationDate) {
		$this->administrationDate = $this->validateAdministrationDate($administrationDate);
	}

	protected function validateAdministrationDate($administrationDate) {
		if ( ! $administrationDate instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$administrationDate = new \com\microsoft\wc\dates\ApproxDateTime ($administrationDate);
		}
	
		return $administrationDate;
	}

	public function getAdministrator() {
		if ($this->administrator===NULL) {
			$this->administrator = $this->createAdministrator();
		}
		return $this->administrator;
	}
	
	protected function createAdministrator() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setAdministrator($administrator) {
		$this->administrator = $this->validateAdministrator($administrator);
	}

	protected function validateAdministrator($administrator) {
		if ( ! $administrator instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($administrator) ) {
			$administrator = new \com\microsoft\wc\thing\types\Person ($administrator);
		}
	
		return $administrator;
	}

	public function getManufacturer() {
		if ($this->manufacturer===NULL) {
			$this->manufacturer = $this->createManufacturer();
		}
		return $this->manufacturer;
	}
	
	protected function createManufacturer() {
		return '';
	}

	public function setManufacturer($manufacturer) {
		$this->manufacturer = $this->validateManufacturer($manufacturer);
	}

	protected function validateManufacturer($manufacturer) {
		if ( ! is_string($manufacturer) && ! is_null($manufacturer) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'manufacturer', 'string'));
		}
	
		return $manufacturer;
	}

	public function getLot() {
		if ($this->lot===NULL) {
			$this->lot = $this->createLot();
		}
		return $this->lot;
	}
	
	protected function createLot() {
		return '';
	}

	public function setLot($lot) {
		$this->lot = $this->validateLot($lot);
	}

	protected function validateLot($lot) {
		if ( ! is_string($lot) && ! is_null($lot) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'lot', 'string'));
		}
	
		return $lot;
	}

	public function getRoute() {
		if ($this->route===NULL) {
			$this->route = $this->createRoute();
		}
		return $this->route;
	}
	
	protected function createRoute() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setRoute($route) {
		$this->route = $this->validateRoute($route);
	}

	protected function validateRoute($route) {
		if ( ! $route instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($route) ) {
			$route = new \com\microsoft\wc\types\CodableValue ($route);
		}
	
		return $route;
	}

	public function getExpirationDate() {
		if ($this->expirationDate===NULL) {
			$this->expirationDate = $this->createExpirationDate();
		}
		return $this->expirationDate;
	}
	
	protected function createExpirationDate() {
		return new \com\microsoft\wc\dates\ApproxDate();
	}

	public function setExpirationDate($expirationDate) {
		$this->expirationDate = $this->validateExpirationDate($expirationDate);
	}

	protected function validateExpirationDate($expirationDate) {
		if ( ! $expirationDate instanceof \com\microsoft\wc\dates\ApproxDate  && ! is_null($expirationDate) ) {
			$expirationDate = new \com\microsoft\wc\dates\ApproxDate ($expirationDate);
		}
	
		return $expirationDate;
	}

	public function getSequence() {
		if ($this->sequence===NULL) {
			$this->sequence = $this->createSequence();
		}
		return $this->sequence;
	}
	
	protected function createSequence() {
		return '';
	}

	public function setSequence($sequence) {
		$this->sequence = $this->validateSequence($sequence);
	}

	protected function validateSequence($sequence) {
		if ( ! is_string($sequence) && ! is_null($sequence) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sequence', 'string'));
		}
	
		return $sequence;
	}

	public function getAnatomicSurface() {
		if ($this->anatomicSurface===NULL) {
			$this->anatomicSurface = $this->createAnatomicSurface();
		}
		return $this->anatomicSurface;
	}
	
	protected function createAnatomicSurface() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setAnatomicSurface($anatomicSurface) {
		$this->anatomicSurface = $this->validateAnatomicSurface($anatomicSurface);
	}

	protected function validateAnatomicSurface($anatomicSurface) {
		if ( ! $anatomicSurface instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($anatomicSurface) ) {
			$anatomicSurface = new \com\microsoft\wc\types\CodableValue ($anatomicSurface);
		}
	
		return $anatomicSurface;
	}

	public function getAdverseEvent() {
		if ($this->adverseEvent===NULL) {
			$this->adverseEvent = $this->createAdverseEvent();
		}
		return $this->adverseEvent;
	}
	
	protected function createAdverseEvent() {
		return '';
	}

	public function setAdverseEvent($adverseEvent) {
		$this->adverseEvent = $this->validateAdverseEvent($adverseEvent);
	}

	protected function validateAdverseEvent($adverseEvent) {
		if ( ! is_string($adverseEvent) && ! is_null($adverseEvent) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'adverseEvent', 'string'));
		}
	
		return $adverseEvent;
	}

	public function getConsent() {
		if ($this->consent===NULL) {
			$this->consent = $this->createConsent();
		}
		return $this->consent;
	}
	
	protected function createConsent() {
		return '';
	}

	public function setConsent($consent) {
		$this->consent = $this->validateConsent($consent);
	}

	protected function validateConsent($consent) {
		if ( ! is_string($consent) && ! is_null($consent) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'consent', 'string'));
		}
	
		return $consent;
	}
} // end class Immunization
