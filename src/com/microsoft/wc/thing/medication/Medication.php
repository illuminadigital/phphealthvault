<?php
namespace com\microsoft\wc\thing\medication;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.medication", prefix="")
 * })
 * @XmlEntity	(xml="medication")
 */
class Medication extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a medication.
	 * This type contains information describing a medication, and is related to the medication fill type.Instances of the medication fill type are linked to instances of this type using related items. For example, if the medication is prescribed, the medication fill describes typical information that apharmacy would add.
	 */

	const ID = '30cafccc-047d-4288-94ef-643571f7919d';
	const NAME = 'Medication';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="generic-name")
	 */
	protected $genericName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GeneralMeasurement", name="dose")
	 */
	protected $dose;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GeneralMeasurement", name="strength")
	 */
	protected $strength;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GeneralMeasurement", name="frequency")
	 */
	protected $frequency;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="route")
	 */
	protected $route;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="indication")
	 */
	protected $indication;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="date-started")
	 */
	protected $dateStarted;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="date-discontinued")
	 */
	protected $dateDiscontinued;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="prescribed")
	 */
	protected $prescribed;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\medication\Prescription", name="prescription")
	 */
	protected $prescription;

	public function __construct($name = NULL, $genericName = NULL, $dose = NULL, $strength = NULL, $frequency = NULL, $route = NULL, $indication = NULL, $dateStarted = NULL, $dateDiscontinued = NULL, $prescribed = NULL, $prescription = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->genericName = ($genericName===NULL) ? NULL : $this->validateGenericName($genericName);
		$this->dose = ($dose===NULL) ? NULL : $this->validateDose($dose);
		$this->strength = ($strength===NULL) ? NULL : $this->validateStrength($strength);
		$this->frequency = ($frequency===NULL) ? NULL : $this->validateFrequency($frequency);
		$this->route = ($route===NULL) ? NULL : $this->validateRoute($route);
		$this->indication = ($indication===NULL) ? NULL : $this->validateIndication($indication);
		$this->dateStarted = ($dateStarted===NULL) ? NULL : $this->validateDateStarted($dateStarted);
		$this->dateDiscontinued = ($dateDiscontinued===NULL) ? NULL : $this->validateDateDiscontinued($dateDiscontinued);
		$this->prescribed = ($prescribed===NULL) ? NULL : $this->validatePrescribed($prescribed);
		$this->prescription = ($prescription===NULL) ? NULL : $this->validatePrescription($prescription);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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

	public function getGenericName($autoCreate = TRUE) {
		if ($this->genericName===NULL && $autoCreate && ! isset($this->_overrides['genericName']) ) {
			$this->genericName = $this->createGenericName();
		}
		return $this->genericName;
	}
	
	protected function createGenericName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setGenericName($genericName) {
		$this->genericName = $this->validateGenericName($genericName);
	}

	protected function validateGenericName($genericName) {
		if ( $genericName === FALSE ) {
			$this->_overrides['genericName'] = TRUE;
			return NULL;
		}

		if ( ! $genericName instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($genericName) ) {
			$genericName = new \com\microsoft\wc\types\CodableValue ($genericName);
		}

		unset ($this->_overrides['genericName']);
	
		return $genericName;
	}

	public function getDose($autoCreate = TRUE) {
		if ($this->dose===NULL && $autoCreate && ! isset($this->_overrides['dose']) ) {
			$this->dose = $this->createDose();
		}
		return $this->dose;
	}
	
	protected function createDose() {
		return new \com\microsoft\wc\thing\types\GeneralMeasurement();
	}

	public function setDose($dose) {
		$this->dose = $this->validateDose($dose);
	}

	protected function validateDose($dose) {
		if ( $dose === FALSE ) {
			$this->_overrides['dose'] = TRUE;
			return NULL;
		}

		if ( ! $dose instanceof \com\microsoft\wc\thing\types\GeneralMeasurement  && ! is_null($dose) ) {
			$dose = new \com\microsoft\wc\thing\types\GeneralMeasurement ($dose);
		}

		unset ($this->_overrides['dose']);
	
		return $dose;
	}

	public function getStrength($autoCreate = TRUE) {
		if ($this->strength===NULL && $autoCreate && ! isset($this->_overrides['strength']) ) {
			$this->strength = $this->createStrength();
		}
		return $this->strength;
	}
	
	protected function createStrength() {
		return new \com\microsoft\wc\thing\types\GeneralMeasurement();
	}

	public function setStrength($strength) {
		$this->strength = $this->validateStrength($strength);
	}

	protected function validateStrength($strength) {
		if ( $strength === FALSE ) {
			$this->_overrides['strength'] = TRUE;
			return NULL;
		}

		if ( ! $strength instanceof \com\microsoft\wc\thing\types\GeneralMeasurement  && ! is_null($strength) ) {
			$strength = new \com\microsoft\wc\thing\types\GeneralMeasurement ($strength);
		}

		unset ($this->_overrides['strength']);
	
		return $strength;
	}

	public function getFrequency($autoCreate = TRUE) {
		if ($this->frequency===NULL && $autoCreate && ! isset($this->_overrides['frequency']) ) {
			$this->frequency = $this->createFrequency();
		}
		return $this->frequency;
	}
	
	protected function createFrequency() {
		return new \com\microsoft\wc\thing\types\GeneralMeasurement();
	}

	public function setFrequency($frequency) {
		$this->frequency = $this->validateFrequency($frequency);
	}

	protected function validateFrequency($frequency) {
		if ( $frequency === FALSE ) {
			$this->_overrides['frequency'] = TRUE;
			return NULL;
		}

		if ( ! $frequency instanceof \com\microsoft\wc\thing\types\GeneralMeasurement  && ! is_null($frequency) ) {
			$frequency = new \com\microsoft\wc\thing\types\GeneralMeasurement ($frequency);
		}

		unset ($this->_overrides['frequency']);
	
		return $frequency;
	}

	public function getRoute($autoCreate = TRUE) {
		if ($this->route===NULL && $autoCreate && ! isset($this->_overrides['route']) ) {
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
		if ( $route === FALSE ) {
			$this->_overrides['route'] = TRUE;
			return NULL;
		}

		if ( ! $route instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($route) ) {
			$route = new \com\microsoft\wc\types\CodableValue ($route);
		}

		unset ($this->_overrides['route']);
	
		return $route;
	}

	public function getIndication($autoCreate = TRUE) {
		if ($this->indication===NULL && $autoCreate && ! isset($this->_overrides['indication']) ) {
			$this->indication = $this->createIndication();
		}
		return $this->indication;
	}
	
	protected function createIndication() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setIndication($indication) {
		$this->indication = $this->validateIndication($indication);
	}

	protected function validateIndication($indication) {
		if ( $indication === FALSE ) {
			$this->_overrides['indication'] = TRUE;
			return NULL;
		}

		if ( ! $indication instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($indication) ) {
			$indication = new \com\microsoft\wc\types\CodableValue ($indication);
		}

		unset ($this->_overrides['indication']);
	
		return $indication;
	}

	public function getDateStarted($autoCreate = TRUE) {
		if ($this->dateStarted===NULL && $autoCreate && ! isset($this->_overrides['dateStarted']) ) {
			$this->dateStarted = $this->createDateStarted();
		}
		return $this->dateStarted;
	}
	
	protected function createDateStarted() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setDateStarted($dateStarted) {
		$this->dateStarted = $this->validateDateStarted($dateStarted);
	}

	protected function validateDateStarted($dateStarted) {
		if ( $dateStarted === FALSE ) {
			$this->_overrides['dateStarted'] = TRUE;
			return NULL;
		}

		if ( ! $dateStarted instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($dateStarted) ) {
			$dateStarted = new \com\microsoft\wc\dates\ApproxDateTime ($dateStarted);
		}

		unset ($this->_overrides['dateStarted']);
	
		return $dateStarted;
	}

	public function getDateDiscontinued($autoCreate = TRUE) {
		if ($this->dateDiscontinued===NULL && $autoCreate && ! isset($this->_overrides['dateDiscontinued']) ) {
			$this->dateDiscontinued = $this->createDateDiscontinued();
		}
		return $this->dateDiscontinued;
	}
	
	protected function createDateDiscontinued() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setDateDiscontinued($dateDiscontinued) {
		$this->dateDiscontinued = $this->validateDateDiscontinued($dateDiscontinued);
	}

	protected function validateDateDiscontinued($dateDiscontinued) {
		if ( $dateDiscontinued === FALSE ) {
			$this->_overrides['dateDiscontinued'] = TRUE;
			return NULL;
		}

		if ( ! $dateDiscontinued instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($dateDiscontinued) ) {
			$dateDiscontinued = new \com\microsoft\wc\dates\ApproxDateTime ($dateDiscontinued);
		}

		unset ($this->_overrides['dateDiscontinued']);
	
		return $dateDiscontinued;
	}

	public function getPrescribed($autoCreate = TRUE) {
		if ($this->prescribed===NULL && $autoCreate && ! isset($this->_overrides['prescribed']) ) {
			$this->prescribed = $this->createPrescribed();
		}
		return $this->prescribed;
	}
	
	protected function createPrescribed() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setPrescribed($prescribed) {
		$this->prescribed = $this->validatePrescribed($prescribed);
	}

	protected function validatePrescribed($prescribed) {
		if ( $prescribed === FALSE ) {
			$this->_overrides['prescribed'] = TRUE;
			return NULL;
		}

		if ( ! $prescribed instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($prescribed) ) {
			$prescribed = new \com\microsoft\wc\types\CodableValue ($prescribed);
		}

		unset ($this->_overrides['prescribed']);
	
		return $prescribed;
	}

	public function getPrescription($autoCreate = TRUE) {
		if ($this->prescription===NULL && $autoCreate && ! isset($this->_overrides['prescription']) ) {
			$this->prescription = $this->createPrescription();
		}
		return $this->prescription;
	}
	
	protected function createPrescription() {
		return new \com\microsoft\wc\thing\medication\Prescription();
	}

	public function setPrescription($prescription) {
		$this->prescription = $this->validatePrescription($prescription);
	}

	protected function validatePrescription($prescription) {
		if ( $prescription === FALSE ) {
			$this->_overrides['prescription'] = TRUE;
			return NULL;
		}

		if ( ! $prescription instanceof \com\microsoft\wc\thing\medication\Prescription  && ! is_null($prescription) ) {
			$prescription = new \com\microsoft\wc\thing\medication\Prescription ($prescription);
		}

		unset ($this->_overrides['prescription']);
	
		return $prescription;
	}
} // end class Medication
