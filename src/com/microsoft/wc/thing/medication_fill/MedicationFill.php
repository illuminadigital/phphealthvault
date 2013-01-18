<?php
namespace com\microsoft\wc\thing\medication_fill;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.medication-fill", prefix="")
 * })
 * @XmlEntity	(xml="medication-fill")
 */
class MedicationFill extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to filling a medication.
	 * This type contains information related to filling a medication, and is related to the medication type.Instances of this type are typically linked to a medication instance using related items. For example, if the medication is prescribed, the medication fill describes typical information that apharmacy would add.
	 */

	const ID = '167ecf6b-bb54-43f9-a473-507b334907e0';
	const NAME = 'Medication Fill';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="date-filled")
	 */
	protected $dateFilled;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="days-supply")
	 */
	protected $daysSupply;

	/**
	 * @XmlText	(type="string", name="next-refill-date")
	 */
	protected $nextRefillDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="refills-left")
	 */
	protected $refillsLeft;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="pharmacy")
	 */
	protected $pharmacy;

	/**
	 * @XmlText	(type="string", name="prescription-number")
	 */
	protected $prescriptionNumber;

	/**
	 * @XmlText	(type="string", name="lot-number")
	 */
	protected $lotNumber;

	public function __construct($name = NULL, $dateFilled = NULL, $daysSupply = NULL, $nextRefillDate = NULL, $refillsLeft = NULL, $pharmacy = NULL, $prescriptionNumber = NULL, $lotNumber = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->dateFilled = ($dateFilled===NULL) ? NULL : $this->validateDateFilled($dateFilled);
		$this->daysSupply = ($daysSupply===NULL) ? NULL : $this->validateDaysSupply($daysSupply);
		$this->nextRefillDate = ($nextRefillDate===NULL) ? NULL : $this->validateNextRefillDate($nextRefillDate);
		$this->refillsLeft = ($refillsLeft===NULL) ? NULL : $this->validateRefillsLeft($refillsLeft);
		$this->pharmacy = ($pharmacy===NULL) ? NULL : $this->validatePharmacy($pharmacy);
		$this->prescriptionNumber = ($prescriptionNumber===NULL) ? NULL : $this->validatePrescriptionNumber($prescriptionNumber);
		$this->lotNumber = ($lotNumber===NULL) ? NULL : $this->validateLotNumber($lotNumber);
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

	public function getDaysSupply() {
		if ($this->daysSupply===NULL) {
			$this->daysSupply = $this->createDaysSupply();
		}
		return $this->daysSupply;
	}
	
	protected function createDaysSupply() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setDaysSupply($daysSupply) {
		$this->daysSupply = $this->validateDaysSupply($daysSupply);
	}

	protected function validateDaysSupply($daysSupply) {
		if ( ! $daysSupply instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($daysSupply) ) {
			$daysSupply = new \com\microsoft\wc\thing\types\PositiveInt ($daysSupply);
		}
	
		return $daysSupply;
	}

	public function getNextRefillDate() {
		if ($this->nextRefillDate===NULL) {
			$this->nextRefillDate = $this->createNextRefillDate();
		}
		return $this->nextRefillDate;
	}
	
	protected function createNextRefillDate() {
		return new \com\microsoft\wc\dates\Date();
	}

	public function setNextRefillDate($nextRefillDate) {
		$this->nextRefillDate = $this->validateNextRefillDate($nextRefillDate);
	}

	protected function validateNextRefillDate($nextRefillDate) {
		if ( ! $nextRefillDate instanceof \com\microsoft\wc\dates\Date  && ! is_null($nextRefillDate) ) {
			$nextRefillDate = new \com\microsoft\wc\dates\Date ($nextRefillDate);
		}
	
		return $nextRefillDate;
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

	public function getPharmacy() {
		if ($this->pharmacy===NULL) {
			$this->pharmacy = $this->createPharmacy();
		}
		return $this->pharmacy;
	}
	
	protected function createPharmacy() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setPharmacy($pharmacy) {
		$this->pharmacy = $this->validatePharmacy($pharmacy);
	}

	protected function validatePharmacy($pharmacy) {
		if ( ! $pharmacy instanceof \com\microsoft\wc\thing\types\Organization  && ! is_null($pharmacy) ) {
			$pharmacy = new \com\microsoft\wc\thing\types\Organization ($pharmacy);
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

	public function getLotNumber() {
		if ($this->lotNumber===NULL) {
			$this->lotNumber = $this->createLotNumber();
		}
		return $this->lotNumber;
	}
	
	protected function createLotNumber() {
		return '';
	}

	public function setLotNumber($lotNumber) {
		$this->lotNumber = $this->validateLotNumber($lotNumber);
	}

	protected function validateLotNumber($lotNumber) {
		if ( ! is_string($lotNumber) && ! is_null($lotNumber) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'lotNumber', 'string'));
		}
	
		return $lotNumber;
	}
} // end class MedicationFill
