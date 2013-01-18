<?php
namespace com\microsoft\wc\thing\explanation_of_benefits;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.explanation-of-benefits", prefix="")
 * })
 * @XmlEntity	(xml="ClaimAmounts")
 */
class ClaimAmounts {
	/**
	 * The financial information related to this claim.
	 */

	/**
	 * @XmlText	(type="float", name="charged-amount")
	 */
	protected $chargedAmount;

	/**
	 * @XmlText	(type="float", name="negotiated-amount")
	 */
	protected $negotiatedAmount;

	/**
	 * @XmlText	(type="float", name="copay")
	 */
	protected $copay;

	/**
	 * @XmlText	(type="float", name="deductible")
	 */
	protected $deductible;

	/**
	 * @XmlText	(type="float", name="amount-not-covered")
	 */
	protected $amountNotCovered;

	/**
	 * @XmlText	(type="float", name="eligible-for-benefits")
	 */
	protected $eligibleForBenefits;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="percentage-covered")
	 */
	protected $percentageCovered;

	/**
	 * @XmlText	(type="float", name="coinsurance")
	 */
	protected $coinsurance;

	/**
	 * @XmlText	(type="float", name="miscellaneous-adjustments")
	 */
	protected $miscellaneousAdjustments;

	/**
	 * @XmlText	(type="float", name="benefits-paid")
	 */
	protected $benefitsPaid;

	/**
	 * @XmlText	(type="float", name="patient-responsibility")
	 */
	protected $patientResponsibility;

	public function __construct($chargedAmount = NULL, $negotiatedAmount = NULL, $copay = NULL, $deductible = NULL, $amountNotCovered = NULL, $eligibleForBenefits = NULL, $percentageCovered = NULL, $coinsurance = NULL, $miscellaneousAdjustments = NULL, $benefitsPaid = NULL, $patientResponsibility = NULL) {
		$this->chargedAmount = ($chargedAmount===NULL) ? NULL : $this->validateChargedAmount($chargedAmount);
		$this->negotiatedAmount = ($negotiatedAmount===NULL) ? NULL : $this->validateNegotiatedAmount($negotiatedAmount);
		$this->copay = ($copay===NULL) ? NULL : $this->validateCopay($copay);
		$this->deductible = ($deductible===NULL) ? NULL : $this->validateDeductible($deductible);
		$this->amountNotCovered = ($amountNotCovered===NULL) ? NULL : $this->validateAmountNotCovered($amountNotCovered);
		$this->eligibleForBenefits = ($eligibleForBenefits===NULL) ? NULL : $this->validateEligibleForBenefits($eligibleForBenefits);
		$this->percentageCovered = ($percentageCovered===NULL) ? NULL : $this->validatePercentageCovered($percentageCovered);
		$this->coinsurance = ($coinsurance===NULL) ? NULL : $this->validateCoinsurance($coinsurance);
		$this->miscellaneousAdjustments = ($miscellaneousAdjustments===NULL) ? NULL : $this->validateMiscellaneousAdjustments($miscellaneousAdjustments);
		$this->benefitsPaid = ($benefitsPaid===NULL) ? NULL : $this->validateBenefitsPaid($benefitsPaid);
		$this->patientResponsibility = ($patientResponsibility===NULL) ? NULL : $this->validatePatientResponsibility($patientResponsibility);
	}

	public function getChargedAmount() {
		if ($this->chargedAmount===NULL) {
			$this->chargedAmount = $this->createChargedAmount();
		}
		return $this->chargedAmount;
	}
	
	protected function createChargedAmount() {
		return NULL;
	}

	public function setChargedAmount($chargedAmount) {
		$this->chargedAmount = $this->validateChargedAmount($chargedAmount);
	}

	protected function validateChargedAmount($chargedAmount) {
		if (!is_float($chargedAmount)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'chargedAmount', 'float'));
		}
	
		return $chargedAmount;
	}

	public function getNegotiatedAmount() {
		if ($this->negotiatedAmount===NULL) {
			$this->negotiatedAmount = $this->createNegotiatedAmount();
		}
		return $this->negotiatedAmount;
	}
	
	protected function createNegotiatedAmount() {
		return NULL;
	}

	public function setNegotiatedAmount($negotiatedAmount) {
		$this->negotiatedAmount = $this->validateNegotiatedAmount($negotiatedAmount);
	}

	protected function validateNegotiatedAmount($negotiatedAmount) {
		if (!is_float($negotiatedAmount)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'negotiatedAmount', 'float'));
		}
	
		return $negotiatedAmount;
	}

	public function getCopay() {
		if ($this->copay===NULL) {
			$this->copay = $this->createCopay();
		}
		return $this->copay;
	}
	
	protected function createCopay() {
		return NULL;
	}

	public function setCopay($copay) {
		$this->copay = $this->validateCopay($copay);
	}

	protected function validateCopay($copay) {
		if (!is_float($copay)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'copay', 'float'));
		}
	
		return $copay;
	}

	public function getDeductible() {
		if ($this->deductible===NULL) {
			$this->deductible = $this->createDeductible();
		}
		return $this->deductible;
	}
	
	protected function createDeductible() {
		return NULL;
	}

	public function setDeductible($deductible) {
		$this->deductible = $this->validateDeductible($deductible);
	}

	protected function validateDeductible($deductible) {
		if (!is_float($deductible)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'deductible', 'float'));
		}
	
		return $deductible;
	}

	public function getAmountNotCovered() {
		if ($this->amountNotCovered===NULL) {
			$this->amountNotCovered = $this->createAmountNotCovered();
		}
		return $this->amountNotCovered;
	}
	
	protected function createAmountNotCovered() {
		return NULL;
	}

	public function setAmountNotCovered($amountNotCovered) {
		$this->amountNotCovered = $this->validateAmountNotCovered($amountNotCovered);
	}

	protected function validateAmountNotCovered($amountNotCovered) {
		if (!is_float($amountNotCovered)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'amountNotCovered', 'float'));
		}
	
		return $amountNotCovered;
	}

	public function getEligibleForBenefits() {
		if ($this->eligibleForBenefits===NULL) {
			$this->eligibleForBenefits = $this->createEligibleForBenefits();
		}
		return $this->eligibleForBenefits;
	}
	
	protected function createEligibleForBenefits() {
		return NULL;
	}

	public function setEligibleForBenefits($eligibleForBenefits) {
		$this->eligibleForBenefits = $this->validateEligibleForBenefits($eligibleForBenefits);
	}

	protected function validateEligibleForBenefits($eligibleForBenefits) {
		if (!is_float($eligibleForBenefits)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'eligibleForBenefits', 'float'));
		}
	
		return $eligibleForBenefits;
	}

	public function getPercentageCovered() {
		if ($this->percentageCovered===NULL) {
			$this->percentageCovered = $this->createPercentageCovered();
		}
		return $this->percentageCovered;
	}
	
	protected function createPercentageCovered() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setPercentageCovered($percentageCovered) {
		$this->percentageCovered = $this->validatePercentageCovered($percentageCovered);
	}

	protected function validatePercentageCovered($percentageCovered) {
		if ( ! $percentageCovered instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($percentageCovered) ) {
			$percentageCovered = new \com\microsoft\wc\thing\types\Percentage ($percentageCovered);
		}
	
		return $percentageCovered;
	}

	public function getCoinsurance() {
		if ($this->coinsurance===NULL) {
			$this->coinsurance = $this->createCoinsurance();
		}
		return $this->coinsurance;
	}
	
	protected function createCoinsurance() {
		return NULL;
	}

	public function setCoinsurance($coinsurance) {
		$this->coinsurance = $this->validateCoinsurance($coinsurance);
	}

	protected function validateCoinsurance($coinsurance) {
		if (!is_float($coinsurance)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'coinsurance', 'float'));
		}
	
		return $coinsurance;
	}

	public function getMiscellaneousAdjustments() {
		if ($this->miscellaneousAdjustments===NULL) {
			$this->miscellaneousAdjustments = $this->createMiscellaneousAdjustments();
		}
		return $this->miscellaneousAdjustments;
	}
	
	protected function createMiscellaneousAdjustments() {
		return NULL;
	}

	public function setMiscellaneousAdjustments($miscellaneousAdjustments) {
		$this->miscellaneousAdjustments = $this->validateMiscellaneousAdjustments($miscellaneousAdjustments);
	}

	protected function validateMiscellaneousAdjustments($miscellaneousAdjustments) {
		if (!is_float($miscellaneousAdjustments)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'miscellaneousAdjustments', 'float'));
		}
	
		return $miscellaneousAdjustments;
	}

	public function getBenefitsPaid() {
		if ($this->benefitsPaid===NULL) {
			$this->benefitsPaid = $this->createBenefitsPaid();
		}
		return $this->benefitsPaid;
	}
	
	protected function createBenefitsPaid() {
		return NULL;
	}

	public function setBenefitsPaid($benefitsPaid) {
		$this->benefitsPaid = $this->validateBenefitsPaid($benefitsPaid);
	}

	protected function validateBenefitsPaid($benefitsPaid) {
		if (!is_float($benefitsPaid)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'benefitsPaid', 'float'));
		}
	
		return $benefitsPaid;
	}

	public function getPatientResponsibility() {
		if ($this->patientResponsibility===NULL) {
			$this->patientResponsibility = $this->createPatientResponsibility();
		}
		return $this->patientResponsibility;
	}
	
	protected function createPatientResponsibility() {
		return NULL;
	}

	public function setPatientResponsibility($patientResponsibility) {
		$this->patientResponsibility = $this->validatePatientResponsibility($patientResponsibility);
	}

	protected function validatePatientResponsibility($patientResponsibility) {
		if (!is_float($patientResponsibility)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'patientResponsibility', 'float'));
		}
	
		return $patientResponsibility;
	}
} // end class ClaimAmounts
