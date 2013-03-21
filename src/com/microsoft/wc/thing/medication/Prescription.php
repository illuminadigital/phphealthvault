<?php
namespace com\microsoft\wc\thing\medication;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.medication", prefix="")
 * })
 * @XmlEntity	(xml="Prescription")
 */
class Prescription {
	/**
	 * Information related to a medication prescription.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="prescribed-by")
	 */
	protected $prescribedBy;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="date-prescribed")
	 */
	protected $datePrescribed;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GeneralMeasurement", name="amount-prescribed")
	 */
	protected $amountPrescribed;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="substitution")
	 */
	protected $substitution;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="refills")
	 */
	protected $refills;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="days-supply")
	 */
	protected $daysSupply;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Date", name="prescription-expiration")
	 */
	protected $prescriptionExpiration;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="instructions")
	 */
	protected $instructions;

	public function __construct($prescribedBy = NULL, $datePrescribed = NULL, $amountPrescribed = NULL, $substitution = NULL, $refills = NULL, $daysSupply = NULL, $prescriptionExpiration = NULL, $instructions = NULL) {
		$this->prescribedBy = ($prescribedBy===NULL) ? NULL : $this->validatePrescribedBy($prescribedBy);
		$this->datePrescribed = ($datePrescribed===NULL) ? NULL : $this->validateDatePrescribed($datePrescribed);
		$this->amountPrescribed = ($amountPrescribed===NULL) ? NULL : $this->validateAmountPrescribed($amountPrescribed);
		$this->substitution = ($substitution===NULL) ? NULL : $this->validateSubstitution($substitution);
		$this->refills = ($refills===NULL) ? NULL : $this->validateRefills($refills);
		$this->daysSupply = ($daysSupply===NULL) ? NULL : $this->validateDaysSupply($daysSupply);
		$this->prescriptionExpiration = ($prescriptionExpiration===NULL) ? NULL : $this->validatePrescriptionExpiration($prescriptionExpiration);
		$this->instructions = ($instructions===NULL) ? NULL : $this->validateInstructions($instructions);
	}

	public function getPrescribedBy($autoCreate = TRUE) {
		if ($this->prescribedBy===NULL && $autoCreate && ! isset($this->_overrides['prescribedBy']) ) {
			$this->prescribedBy = $this->createPrescribedBy();
		}
		return $this->prescribedBy;
	}
	
	protected function createPrescribedBy() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setPrescribedBy($prescribedBy) {
		$this->prescribedBy = $this->validatePrescribedBy($prescribedBy);
	}

	protected function validatePrescribedBy($prescribedBy) {
		if ( ! $prescribedBy instanceof \com\microsoft\wc\thing\types\Person ) {
			$prescribedBy = new \com\microsoft\wc\thing\types\Person ($prescribedBy);
		}
	
		return $prescribedBy;
	}

	public function getDatePrescribed($autoCreate = TRUE) {
		if ($this->datePrescribed===NULL && $autoCreate && ! isset($this->_overrides['datePrescribed']) ) {
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
		if ( $datePrescribed === FALSE ) {
			$this->_overrides['datePrescribed'] = TRUE;
			return NULL;
		}

		if ( ! $datePrescribed instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($datePrescribed) ) {
			$datePrescribed = new \com\microsoft\wc\dates\ApproxDateTime ($datePrescribed);
		}

		unset ($this->_overrides['datePrescribed']);
	
		return $datePrescribed;
	}

	public function getAmountPrescribed($autoCreate = TRUE) {
		if ($this->amountPrescribed===NULL && $autoCreate && ! isset($this->_overrides['amountPrescribed']) ) {
			$this->amountPrescribed = $this->createAmountPrescribed();
		}
		return $this->amountPrescribed;
	}
	
	protected function createAmountPrescribed() {
		return new \com\microsoft\wc\thing\types\GeneralMeasurement();
	}

	public function setAmountPrescribed($amountPrescribed) {
		$this->amountPrescribed = $this->validateAmountPrescribed($amountPrescribed);
	}

	protected function validateAmountPrescribed($amountPrescribed) {
		if ( $amountPrescribed === FALSE ) {
			$this->_overrides['amountPrescribed'] = TRUE;
			return NULL;
		}

		if ( ! $amountPrescribed instanceof \com\microsoft\wc\thing\types\GeneralMeasurement  && ! is_null($amountPrescribed) ) {
			$amountPrescribed = new \com\microsoft\wc\thing\types\GeneralMeasurement ($amountPrescribed);
		}

		unset ($this->_overrides['amountPrescribed']);
	
		return $amountPrescribed;
	}

	public function getSubstitution($autoCreate = TRUE) {
		if ($this->substitution===NULL && $autoCreate && ! isset($this->_overrides['substitution']) ) {
			$this->substitution = $this->createSubstitution();
		}
		return $this->substitution;
	}
	
	protected function createSubstitution() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSubstitution($substitution) {
		$this->substitution = $this->validateSubstitution($substitution);
	}

	protected function validateSubstitution($substitution) {
		if ( $substitution === FALSE ) {
			$this->_overrides['substitution'] = TRUE;
			return NULL;
		}

		if ( ! $substitution instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($substitution) ) {
			$substitution = new \com\microsoft\wc\types\CodableValue ($substitution);
		}

		unset ($this->_overrides['substitution']);
	
		return $substitution;
	}

	public function getRefills($autoCreate = TRUE) {
		if ($this->refills===NULL && $autoCreate && ! isset($this->_overrides['refills']) ) {
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
		if ( $refills === FALSE ) {
			$this->_overrides['refills'] = TRUE;
			return NULL;
		}

		if ( ! $refills instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($refills) ) {
			$refills = new \com\microsoft\wc\thing\types\NonNegativeInt ($refills);
		}

		unset ($this->_overrides['refills']);
	
		return $refills;
	}

	public function getDaysSupply($autoCreate = TRUE) {
		if ($this->daysSupply===NULL && $autoCreate && ! isset($this->_overrides['daysSupply']) ) {
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
		if ( $daysSupply === FALSE ) {
			$this->_overrides['daysSupply'] = TRUE;
			return NULL;
		}

		if ( ! $daysSupply instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($daysSupply) ) {
			$daysSupply = new \com\microsoft\wc\thing\types\PositiveInt ($daysSupply);
		}

		unset ($this->_overrides['daysSupply']);
	
		return $daysSupply;
	}

	public function getPrescriptionExpiration($autoCreate = TRUE) {
		if ($this->prescriptionExpiration===NULL && $autoCreate && ! isset($this->_overrides['prescriptionExpiration']) ) {
			$this->prescriptionExpiration = $this->createPrescriptionExpiration();
		}
		return $this->prescriptionExpiration;
	}
	
	protected function createPrescriptionExpiration() {
		return new \com\microsoft\wc\dates\Date();
	}

	public function setPrescriptionExpiration($prescriptionExpiration) {
		$this->prescriptionExpiration = $this->validatePrescriptionExpiration($prescriptionExpiration);
	}

	protected function validatePrescriptionExpiration($prescriptionExpiration) {
		if ( $prescriptionExpiration === FALSE ) {
			$this->_overrides['prescriptionExpiration'] = TRUE;
			return NULL;
		}

		if ( ! $prescriptionExpiration instanceof \com\microsoft\wc\dates\Date  && ! is_null($prescriptionExpiration) ) {
			$prescriptionExpiration = new \com\microsoft\wc\dates\Date ($prescriptionExpiration);
		}

		unset ($this->_overrides['prescriptionExpiration']);
	
		return $prescriptionExpiration;
	}

	public function getInstructions($autoCreate = TRUE) {
		if ($this->instructions===NULL && $autoCreate && ! isset($this->_overrides['instructions']) ) {
			$this->instructions = $this->createInstructions();
		}
		return $this->instructions;
	}
	
	protected function createInstructions() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setInstructions($instructions) {
		$this->instructions = $this->validateInstructions($instructions);
	}

	protected function validateInstructions($instructions) {
		if ( $instructions === FALSE ) {
			$this->_overrides['instructions'] = TRUE;
			return NULL;
		}

		if ( ! $instructions instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($instructions) ) {
			$instructions = new \com\microsoft\wc\types\CodableValue ($instructions);
		}

		unset ($this->_overrides['instructions']);
	
		return $instructions;
	}
} // end class Prescription
