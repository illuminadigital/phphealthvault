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
	 * Note: Please use the new version of this data type instead of this version.This thing type describes a medication a person has.
	 */

	const ID = '5C5F1223-F63C-4464-870C-3E36BA471DEF';
	const NAME = 'Medication';

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", collection="true", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="date-discontinued")
	 */
	protected $dateDiscontinued;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="date-filled")
	 */
	protected $dateFilled;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="date-prescribed")
	 */
	protected $datePrescribed;

	/**
	 * @XmlText	(type="boolean", name="is-prescribed")
	 */
	protected $isPrescribed;

	/**
	 * @XmlText	(type="string", name="indication")
	 */
	protected $indication;

	/**
	 * @XmlText	(type="string", name="amount-prescribed")
	 */
	protected $amountPrescribed;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\medication\DoseValue", name="dose-value")
	 */
	protected $doseValue;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="dose-unit")
	 */
	protected $doseUnit;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="strength-value")
	 */
	protected $strengthValue;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="strength-unit")
	 */
	protected $strengthUnit;

	/**
	 * @XmlText	(type="string", name="frequency")
	 */
	protected $frequency;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="route")
	 */
	protected $route;

	/**
	 * @XmlText	(type="string", name="duration")
	 */
	protected $duration;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="duration-unit")
	 */
	protected $durationUnit;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="refills")
	 */
	protected $refills;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="refills-left")
	 */
	protected $refillsLeft;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="days-supply")
	 */
	protected $daysSupply;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DurationValue", name="prescription-duration")
	 */
	protected $prescriptionDuration;

	/**
	 * @XmlText	(type="string", name="instructions")
	 */
	protected $instructions;

	/**
	 * @XmlText	(type="boolean", name="substitution-permitted")
	 */
	protected $substitutionPermitted;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Contact", name="pharmacy")
	 */
	protected $pharmacy;

	/**
	 * @XmlText	(type="string", name="prescription-number")
	 */
	protected $prescriptionNumber;

	public function __construct($name = NULL, $code = NULL, $dateDiscontinued = NULL, $dateFilled = NULL, $datePrescribed = NULL, $isPrescribed = NULL, $indication = NULL, $amountPrescribed = NULL, $doseValue = NULL, $doseUnit = NULL, $strengthValue = NULL, $strengthUnit = NULL, $frequency = NULL, $route = NULL, $duration = NULL, $durationUnit = NULL, $refills = NULL, $refillsLeft = NULL, $daysSupply = NULL, $prescriptionDuration = NULL, $instructions = NULL, $substitutionPermitted = NULL, $pharmacy = NULL, $prescriptionNumber = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->dateDiscontinued = ($dateDiscontinued===NULL) ? NULL : $this->validateDateDiscontinued($dateDiscontinued);
		$this->dateFilled = ($dateFilled===NULL) ? NULL : $this->validateDateFilled($dateFilled);
		$this->datePrescribed = ($datePrescribed===NULL) ? NULL : $this->validateDatePrescribed($datePrescribed);
		$this->isPrescribed = ($isPrescribed===NULL) ? NULL : $this->validateIsPrescribed($isPrescribed);
		$this->indication = ($indication===NULL) ? NULL : $this->validateIndication($indication);
		$this->amountPrescribed = ($amountPrescribed===NULL) ? NULL : $this->validateAmountPrescribed($amountPrescribed);
		$this->doseValue = ($doseValue===NULL) ? NULL : $this->validateDoseValue($doseValue);
		$this->doseUnit = ($doseUnit===NULL) ? NULL : $this->validateDoseUnit($doseUnit);
		$this->strengthValue = ($strengthValue===NULL) ? NULL : $this->validateStrengthValue($strengthValue);
		$this->strengthUnit = ($strengthUnit===NULL) ? NULL : $this->validateStrengthUnit($strengthUnit);
		$this->frequency = ($frequency===NULL) ? NULL : $this->validateFrequency($frequency);
		$this->route = ($route===NULL) ? NULL : $this->validateRoute($route);
		$this->duration = ($duration===NULL) ? NULL : $this->validateDuration($duration);
		$this->durationUnit = ($durationUnit===NULL) ? NULL : $this->validateDurationUnit($durationUnit);
		$this->refills = ($refills===NULL) ? NULL : $this->validateRefills($refills);
		$this->refillsLeft = ($refillsLeft===NULL) ? NULL : $this->validateRefillsLeft($refillsLeft);
		$this->daysSupply = ($daysSupply===NULL) ? NULL : $this->validateDaysSupply($daysSupply);
		$this->prescriptionDuration = ($prescriptionDuration===NULL) ? NULL : $this->validatePrescriptionDuration($prescriptionDuration);
		$this->instructions = ($instructions===NULL) ? NULL : $this->validateInstructions($instructions);
		$this->substitutionPermitted = ($substitutionPermitted===NULL) ? NULL : $this->validateSubstitutionPermitted($substitutionPermitted);
		$this->pharmacy = ($pharmacy===NULL) ? NULL : $this->validatePharmacy($pharmacy);
		$this->prescriptionNumber = ($prescriptionNumber===NULL) ? NULL : $this->validatePrescriptionNumber($prescriptionNumber);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! is_string($name) && ! is_null($name) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getCode() {
		if ($this->code===NULL) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return array();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( ! is_array ($code) && ! is_null($code) ) {
			$code = array($code);
		}
		$count = count($code);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'code', 0));
		}
		foreach ($code as $entry) {
			if (!($entry instanceof NonNegativeInt)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'nonNegativeInt'));
			}
		}
	
		return $code;
	}

	public function addCode($code) {
		$this->code[] = $code;
	}

	public function getDateDiscontinued() {
		if ($this->dateDiscontinued===NULL) {
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
		if ( ! $dateDiscontinued instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($dateDiscontinued) ) {
			$dateDiscontinued = new \com\microsoft\wc\dates\ApproxDateTime ($dateDiscontinued);
		}
	
		return $dateDiscontinued;
	}

	public function getDateFilled() {
		if ($this->dateFilled===NULL) {
			$this->dateFilled = $this->createDateFilled();
		}
		return $this->dateFilled;
	}
	
	protected function createDateFilled() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setDateFilled($dateFilled) {
		$this->dateFilled = $this->validateDateFilled($dateFilled);
	}

	protected function validateDateFilled($dateFilled) {
		if ( ! $dateFilled instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($dateFilled) ) {
			$dateFilled = new \com\microsoft\wc\dates\ApproxDateTime ($dateFilled);
		}
	
		return $dateFilled;
	}

	public function getDatePrescribed() {
		if ($this->datePrescribed===NULL) {
			$this->datePrescribed = $this->createDatePrescribed();
		}
		return $this->datePrescribed;
	}
	
	protected function createDatePrescribed() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setDatePrescribed($datePrescribed) {
		$this->datePrescribed = $this->validateDatePrescribed($datePrescribed);
	}

	protected function validateDatePrescribed($datePrescribed) {
		if ( ! $datePrescribed instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($datePrescribed) ) {
			$datePrescribed = new \com\microsoft\wc\dates\ApproxDateTime ($datePrescribed);
		}
	
		return $datePrescribed;
	}

	public function getIsPrescribed() {
		if ($this->isPrescribed===NULL) {
			$this->isPrescribed = $this->createIsPrescribed();
		}
		return $this->isPrescribed;
	}
	
	protected function createIsPrescribed() {
		return FALSE;
	}

	public function setIsPrescribed($isPrescribed) {
		$this->isPrescribed = $this->validateIsPrescribed($isPrescribed);
	}

	protected function validateIsPrescribed($isPrescribed) {
		if ( ! is_bool($isPrescribed) && ! is_null($isPrescribed) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isPrescribed', 'boolean'));
		}
	
		return $isPrescribed;
	}

	public function getIndication() {
		if ($this->indication===NULL) {
			$this->indication = $this->createIndication();
		}
		return $this->indication;
	}
	
	protected function createIndication() {
		return '';
	}

	public function setIndication($indication) {
		$this->indication = $this->validateIndication($indication);
	}

	protected function validateIndication($indication) {
		if ( ! is_string($indication) && ! is_null($indication) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'indication', 'string'));
		}
	
		return $indication;
	}

	public function getAmountPrescribed() {
		if ($this->amountPrescribed===NULL) {
			$this->amountPrescribed = $this->createAmountPrescribed();
		}
		return $this->amountPrescribed;
	}
	
	protected function createAmountPrescribed() {
		return '';
	}

	public function setAmountPrescribed($amountPrescribed) {
		$this->amountPrescribed = $this->validateAmountPrescribed($amountPrescribed);
	}

	protected function validateAmountPrescribed($amountPrescribed) {
		if ( ! is_string($amountPrescribed) && ! is_null($amountPrescribed) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'amountPrescribed', 'string'));
		}
	
		return $amountPrescribed;
	}

	public function getDoseValue() {
		if ($this->doseValue===NULL) {
			$this->doseValue = $this->createDoseValue();
		}
		return $this->doseValue;
	}
	
	protected function createDoseValue() {
		return new \com\microsoft\wc\thing\medication\DoseValue();
	}

	public function setDoseValue($doseValue) {
		$this->doseValue = $this->validateDoseValue($doseValue);
	}

	protected function validateDoseValue($doseValue) {
		if ( ! $doseValue instanceof \com\microsoft\wc\thing\medication\DoseValue  && ! is_null($doseValue) ) {
			$doseValue = new \com\microsoft\wc\thing\medication\DoseValue ($doseValue);
		}
	
		return $doseValue;
	}

	public function getDoseUnit() {
		if ($this->doseUnit===NULL) {
			$this->doseUnit = $this->createDoseUnit();
		}
		return $this->doseUnit;
	}
	
	protected function createDoseUnit() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDoseUnit($doseUnit) {
		$this->doseUnit = $this->validateDoseUnit($doseUnit);
	}

	protected function validateDoseUnit($doseUnit) {
		if ( ! $doseUnit instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($doseUnit) ) {
			$doseUnit = new \com\microsoft\wc\types\CodableValue ($doseUnit);
		}
	
		return $doseUnit;
	}

	public function getStrengthValue() {
		if ($this->strengthValue===NULL) {
			$this->strengthValue = $this->createStrengthValue();
		}
		return $this->strengthValue;
	}
	
	protected function createStrengthValue() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setStrengthValue($strengthValue) {
		$this->strengthValue = $this->validateStrengthValue($strengthValue);
	}

	protected function validateStrengthValue($strengthValue) {
		if ( ! $strengthValue instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($strengthValue) ) {
			$strengthValue = new \com\microsoft\wc\thing\types\NonNegativeInt ($strengthValue);
		}
	
		return $strengthValue;
	}

	public function getStrengthUnit() {
		if ($this->strengthUnit===NULL) {
			$this->strengthUnit = $this->createStrengthUnit();
		}
		return $this->strengthUnit;
	}
	
	protected function createStrengthUnit() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStrengthUnit($strengthUnit) {
		$this->strengthUnit = $this->validateStrengthUnit($strengthUnit);
	}

	protected function validateStrengthUnit($strengthUnit) {
		if ( ! $strengthUnit instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($strengthUnit) ) {
			$strengthUnit = new \com\microsoft\wc\types\CodableValue ($strengthUnit);
		}
	
		return $strengthUnit;
	}

	public function getFrequency() {
		if ($this->frequency===NULL) {
			$this->frequency = $this->createFrequency();
		}
		return $this->frequency;
	}
	
	protected function createFrequency() {
		return '';
	}

	public function setFrequency($frequency) {
		$this->frequency = $this->validateFrequency($frequency);
	}

	protected function validateFrequency($frequency) {
		if ( ! is_string($frequency) && ! is_null($frequency) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'frequency', 'string'));
		}
	
		return $frequency;
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

	public function getDuration() {
		if ($this->duration===NULL) {
			$this->duration = $this->createDuration();
		}
		return $this->duration;
	}
	
	protected function createDuration() {
		return '';
	}

	public function setDuration($duration) {
		$this->duration = $this->validateDuration($duration);
	}

	protected function validateDuration($duration) {
		if ( ! is_string($duration) && ! is_null($duration) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'duration', 'string'));
		}
	
		return $duration;
	}

	public function getDurationUnit() {
		if ($this->durationUnit===NULL) {
			$this->durationUnit = $this->createDurationUnit();
		}
		return $this->durationUnit;
	}
	
	protected function createDurationUnit() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDurationUnit($durationUnit) {
		$this->durationUnit = $this->validateDurationUnit($durationUnit);
	}

	protected function validateDurationUnit($durationUnit) {
		if ( ! $durationUnit instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($durationUnit) ) {
			$durationUnit = new \com\microsoft\wc\types\CodableValue ($durationUnit);
		}
	
		return $durationUnit;
	}

	public function getRefills() {
		if ($this->refills===NULL) {
			$this->refills = $this->createRefills();
		}
		return $this->refills;
	}
	
	protected function createRefills() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setRefills($refills) {
		$this->refills = $this->validateRefills($refills);
	}

	protected function validateRefills($refills) {
		if ( ! $refills instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($refills) ) {
			$refills = new \com\microsoft\wc\thing\types\NonNegativeInt ($refills);
		}
	
		return $refills;
	}

	public function getRefillsLeft() {
		if ($this->refillsLeft===NULL) {
			$this->refillsLeft = $this->createRefillsLeft();
		}
		return $this->refillsLeft;
	}
	
	protected function createRefillsLeft() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setRefillsLeft($refillsLeft) {
		$this->refillsLeft = $this->validateRefillsLeft($refillsLeft);
	}

	protected function validateRefillsLeft($refillsLeft) {
		if ( ! $refillsLeft instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($refillsLeft) ) {
			$refillsLeft = new \com\microsoft\wc\thing\types\NonNegativeInt ($refillsLeft);
		}
	
		return $refillsLeft;
	}

	public function getDaysSupply() {
		if ($this->daysSupply===NULL) {
			$this->daysSupply = $this->createDaysSupply();
		}
		return $this->daysSupply;
	}
	
	protected function createDaysSupply() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setDaysSupply($daysSupply) {
		$this->daysSupply = $this->validateDaysSupply($daysSupply);
	}

	protected function validateDaysSupply($daysSupply) {
		if ( ! $daysSupply instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($daysSupply) ) {
			$daysSupply = new \com\microsoft\wc\thing\types\NonNegativeInt ($daysSupply);
		}
	
		return $daysSupply;
	}

	public function getPrescriptionDuration() {
		if ($this->prescriptionDuration===NULL) {
			$this->prescriptionDuration = $this->createPrescriptionDuration();
		}
		return $this->prescriptionDuration;
	}
	
	protected function createPrescriptionDuration() {
		return new \com\microsoft\wc\thing\types\DurationValue();
	}

	public function setPrescriptionDuration($prescriptionDuration) {
		$this->prescriptionDuration = $this->validatePrescriptionDuration($prescriptionDuration);
	}

	protected function validatePrescriptionDuration($prescriptionDuration) {
		if ( ! $prescriptionDuration instanceof \com\microsoft\wc\thing\types\DurationValue  && ! is_null($prescriptionDuration) ) {
			$prescriptionDuration = new \com\microsoft\wc\thing\types\DurationValue ($prescriptionDuration);
		}
	
		return $prescriptionDuration;
	}

	public function getInstructions() {
		if ($this->instructions===NULL) {
			$this->instructions = $this->createInstructions();
		}
		return $this->instructions;
	}
	
	protected function createInstructions() {
		return '';
	}

	public function setInstructions($instructions) {
		$this->instructions = $this->validateInstructions($instructions);
	}

	protected function validateInstructions($instructions) {
		if ( ! is_string($instructions) && ! is_null($instructions) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'instructions', 'string'));
		}
	
		return $instructions;
	}

	public function getSubstitutionPermitted() {
		if ($this->substitutionPermitted===NULL) {
			$this->substitutionPermitted = $this->createSubstitutionPermitted();
		}
		return $this->substitutionPermitted;
	}
	
	protected function createSubstitutionPermitted() {
		return FALSE;
	}

	public function setSubstitutionPermitted($substitutionPermitted) {
		$this->substitutionPermitted = $this->validateSubstitutionPermitted($substitutionPermitted);
	}

	protected function validateSubstitutionPermitted($substitutionPermitted) {
		if ( ! is_bool($substitutionPermitted) && ! is_null($substitutionPermitted) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'substitutionPermitted', 'boolean'));
		}
	
		return $substitutionPermitted;
	}

	public function getPharmacy() {
		if ($this->pharmacy===NULL) {
			$this->pharmacy = $this->createPharmacy();
		}
		return $this->pharmacy;
	}
	
	protected function createPharmacy() {
		return new \com\microsoft\wc\thing\types\Contact();
	}

	public function setPharmacy($pharmacy) {
		$this->pharmacy = $this->validatePharmacy($pharmacy);
	}

	protected function validatePharmacy($pharmacy) {
		if ( ! $pharmacy instanceof \com\microsoft\wc\thing\types\Contact  && ! is_null($pharmacy) ) {
			$pharmacy = new \com\microsoft\wc\thing\types\Contact ($pharmacy);
		}
	
		return $pharmacy;
	}

	public function getPrescriptionNumber() {
		if ($this->prescriptionNumber===NULL) {
			$this->prescriptionNumber = $this->createPrescriptionNumber();
		}
		return $this->prescriptionNumber;
	}
	
	protected function createPrescriptionNumber() {
		return '';
	}

	public function setPrescriptionNumber($prescriptionNumber) {
		$this->prescriptionNumber = $this->validatePrescriptionNumber($prescriptionNumber);
	}

	protected function validatePrescriptionNumber($prescriptionNumber) {
		if ( ! is_string($prescriptionNumber) && ! is_null($prescriptionNumber) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'prescriptionNumber', 'string'));
		}
	
		return $prescriptionNumber;
	}
} // end class Medication
