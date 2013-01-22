<?php
namespace com\microsoft\wc\thing\daily_medication_usage;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.daily-medication-usage", prefix="")
 * })
 * @XmlEntity	(xml="daily-medication-usage")
 */
class DailyMedicationUsage extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Recording the act taking a medication.
	 */

	const ID = 'A9A76456-0357-493e-B840-598BBB9483FD';
	const NAME = 'Daily Medication Usage';

	/**
	 * @XmlText	(type="string", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="drug-name")
	 */
	protected $drugName;

	/**
	 * @XmlText	(type="integer", name="number-doses-consumed-in-day")
	 */
	protected $numberDosesConsumedInDay;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="purpose-of-use")
	 */
	protected $purposeOfUse;

	/**
	 * @XmlText	(type="integer", name="number-doses-intended-in-day")
	 */
	protected $numberDosesIntendedInDay;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="medication-usage-schedule")
	 */
	protected $medicationUsageSchedule;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="drug-form")
	 */
	protected $drugForm;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="prescription-type")
	 */
	protected $prescriptionType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="single-dose-description")
	 */
	protected $singleDoseDescription;

	public function __construct($when = NULL, $drugName = NULL, $numberDosesConsumedInDay = NULL, $purposeOfUse = NULL, $numberDosesIntendedInDay = NULL, $medicationUsageSchedule = NULL, $drugForm = NULL, $prescriptionType = NULL, $singleDoseDescription = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->drugName = ($drugName===NULL) ? NULL : $this->validateDrugName($drugName);
		$this->numberDosesConsumedInDay = ($numberDosesConsumedInDay===NULL) ? NULL : $this->validateNumberDosesConsumedInDay($numberDosesConsumedInDay);
		$this->purposeOfUse = ($purposeOfUse===NULL) ? NULL : $this->validatePurposeOfUse($purposeOfUse);
		$this->numberDosesIntendedInDay = ($numberDosesIntendedInDay===NULL) ? NULL : $this->validateNumberDosesIntendedInDay($numberDosesIntendedInDay);
		$this->medicationUsageSchedule = ($medicationUsageSchedule===NULL) ? NULL : $this->validateMedicationUsageSchedule($medicationUsageSchedule);
		$this->drugForm = ($drugForm===NULL) ? NULL : $this->validateDrugForm($drugForm);
		$this->prescriptionType = ($prescriptionType===NULL) ? NULL : $this->validatePrescriptionType($prescriptionType);
		$this->singleDoseDescription = ($singleDoseDescription===NULL) ? NULL : $this->validateSingleDoseDescription($singleDoseDescription);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\Date();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\Date ) {
			$when = new \com\microsoft\wc\dates\Date ($when);
		}
	
		return $when;
	}

	public function getDrugName() {
		if ($this->drugName===NULL) {
			$this->drugName = $this->createDrugName();
		}
		return $this->drugName;
	}
	
	protected function createDrugName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDrugName($drugName) {
		$this->drugName = $this->validateDrugName($drugName);
	}

	protected function validateDrugName($drugName) {
		if ( ! $drugName instanceof \com\microsoft\wc\types\CodableValue ) {
			$drugName = new \com\microsoft\wc\types\CodableValue ($drugName);
		}
	
		return $drugName;
	}

	public function getNumberDosesConsumedInDay() {
		if ($this->numberDosesConsumedInDay===NULL) {
			$this->numberDosesConsumedInDay = $this->createNumberDosesConsumedInDay();
		}
		return $this->numberDosesConsumedInDay;
	}
	
	protected function createNumberDosesConsumedInDay() {
		return 0;
	}

	public function setNumberDosesConsumedInDay($numberDosesConsumedInDay) {
		$this->numberDosesConsumedInDay = $this->validateNumberDosesConsumedInDay($numberDosesConsumedInDay);
	}

	protected function validateNumberDosesConsumedInDay($numberDosesConsumedInDay) {
		if (!is_integer($numberDosesConsumedInDay)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'numberDosesConsumedInDay', 'integer'));
		}
	
		return $numberDosesConsumedInDay;
	}

	public function getPurposeOfUse() {
		if ($this->purposeOfUse===NULL) {
			$this->purposeOfUse = $this->createPurposeOfUse();
		}
		return $this->purposeOfUse;
	}
	
	protected function createPurposeOfUse() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setPurposeOfUse($purposeOfUse) {
		$this->purposeOfUse = $this->validatePurposeOfUse($purposeOfUse);
	}

	protected function validatePurposeOfUse($purposeOfUse) {
		if ( ! $purposeOfUse instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($purposeOfUse) ) {
			$purposeOfUse = new \com\microsoft\wc\types\CodableValue ($purposeOfUse);
		}
	
		return $purposeOfUse;
	}

	public function getNumberDosesIntendedInDay() {
		if ($this->numberDosesIntendedInDay===NULL) {
			$this->numberDosesIntendedInDay = $this->createNumberDosesIntendedInDay();
		}
		return $this->numberDosesIntendedInDay;
	}
	
	protected function createNumberDosesIntendedInDay() {
		return 0;
	}

	public function setNumberDosesIntendedInDay($numberDosesIntendedInDay) {
		$this->numberDosesIntendedInDay = $this->validateNumberDosesIntendedInDay($numberDosesIntendedInDay);
	}

	protected function validateNumberDosesIntendedInDay($numberDosesIntendedInDay) {
		if ( ! is_integer($numberDosesIntendedInDay) && ! is_null($numberDosesIntendedInDay) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'numberDosesIntendedInDay', 'integer'));
		}
	
		return $numberDosesIntendedInDay;
	}

	public function getMedicationUsageSchedule() {
		if ($this->medicationUsageSchedule===NULL) {
			$this->medicationUsageSchedule = $this->createMedicationUsageSchedule();
		}
		return $this->medicationUsageSchedule;
	}
	
	protected function createMedicationUsageSchedule() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMedicationUsageSchedule($medicationUsageSchedule) {
		$this->medicationUsageSchedule = $this->validateMedicationUsageSchedule($medicationUsageSchedule);
	}

	protected function validateMedicationUsageSchedule($medicationUsageSchedule) {
		if ( ! $medicationUsageSchedule instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($medicationUsageSchedule) ) {
			$medicationUsageSchedule = new \com\microsoft\wc\types\CodableValue ($medicationUsageSchedule);
		}
	
		return $medicationUsageSchedule;
	}

	public function getDrugForm() {
		if ($this->drugForm===NULL) {
			$this->drugForm = $this->createDrugForm();
		}
		return $this->drugForm;
	}
	
	protected function createDrugForm() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDrugForm($drugForm) {
		$this->drugForm = $this->validateDrugForm($drugForm);
	}

	protected function validateDrugForm($drugForm) {
		if ( ! $drugForm instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($drugForm) ) {
			$drugForm = new \com\microsoft\wc\types\CodableValue ($drugForm);
		}
	
		return $drugForm;
	}

	public function getPrescriptionType() {
		if ($this->prescriptionType===NULL) {
			$this->prescriptionType = $this->createPrescriptionType();
		}
		return $this->prescriptionType;
	}
	
	protected function createPrescriptionType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setPrescriptionType($prescriptionType) {
		$this->prescriptionType = $this->validatePrescriptionType($prescriptionType);
	}

	protected function validatePrescriptionType($prescriptionType) {
		if ( ! $prescriptionType instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($prescriptionType) ) {
			$prescriptionType = new \com\microsoft\wc\types\CodableValue ($prescriptionType);
		}
	
		return $prescriptionType;
	}

	public function getSingleDoseDescription() {
		if ($this->singleDoseDescription===NULL) {
			$this->singleDoseDescription = $this->createSingleDoseDescription();
		}
		return $this->singleDoseDescription;
	}
	
	protected function createSingleDoseDescription() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSingleDoseDescription($singleDoseDescription) {
		$this->singleDoseDescription = $this->validateSingleDoseDescription($singleDoseDescription);
	}

	protected function validateSingleDoseDescription($singleDoseDescription) {
		if ( ! $singleDoseDescription instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($singleDoseDescription) ) {
			$singleDoseDescription = new \com\microsoft\wc\types\CodableValue ($singleDoseDescription);
		}
	
		return $singleDoseDescription;
	}
} // end class DailyMedicationUsage
