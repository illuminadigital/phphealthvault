<?php
namespace com\microsoft\wc\thing\explanation_of_benefits;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.explanation-of-benefits", prefix="")
 * })
 * @XmlEntity	(xml="Service")
 */
class Service {
	/**
	 * Information about a specific service..
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="service-type")
	 */
	protected $serviceType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="diagnosis")
	 */
	protected $diagnosis;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="billing-code")
	 */
	protected $billingCode;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DurationValue", name="service-dates")
	 */
	protected $serviceDates;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\explanation_of_benefits\ClaimAmounts", name="claim-amounts")
	 */
	protected $claimAmounts;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", collection="true", name="notes")
	 */
	protected $notes;

	public function __construct($serviceType = NULL, $diagnosis = NULL, $billingCode = NULL, $serviceDates = NULL, $claimAmounts = NULL, $notes = NULL) {
		$this->serviceType = ($serviceType===NULL) ? NULL : $this->validateServiceType($serviceType);
		$this->diagnosis = ($diagnosis===NULL) ? NULL : $this->validateDiagnosis($diagnosis);
		$this->billingCode = ($billingCode===NULL) ? NULL : $this->validateBillingCode($billingCode);
		$this->serviceDates = ($serviceDates===NULL) ? NULL : $this->validateServiceDates($serviceDates);
		$this->claimAmounts = ($claimAmounts===NULL) ? NULL : $this->validateClaimAmounts($claimAmounts);
		$this->notes = ($notes===NULL) ? NULL : $this->validateNotes($notes);
	}

	public function getServiceType() {
		if ($this->serviceType===NULL) {
			$this->serviceType = $this->createServiceType();
		}
		return $this->serviceType;
	}
	
	protected function createServiceType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setServiceType($serviceType) {
		$this->serviceType = $this->validateServiceType($serviceType);
	}

	protected function validateServiceType($serviceType) {
		if ( ! $serviceType instanceof \com\microsoft\wc\types\CodableValue ) {
			$serviceType = new \com\microsoft\wc\types\CodableValue ($serviceType);
		}
	
		return $serviceType;
	}

	public function getDiagnosis() {
		if ($this->diagnosis===NULL) {
			$this->diagnosis = $this->createDiagnosis();
		}
		return $this->diagnosis;
	}
	
	protected function createDiagnosis() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDiagnosis($diagnosis) {
		$this->diagnosis = $this->validateDiagnosis($diagnosis);
	}

	protected function validateDiagnosis($diagnosis) {
		if ( ! $diagnosis instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($diagnosis) ) {
			$diagnosis = new \com\microsoft\wc\types\CodableValue ($diagnosis);
		}
	
		return $diagnosis;
	}

	public function getBillingCode() {
		if ($this->billingCode===NULL) {
			$this->billingCode = $this->createBillingCode();
		}
		return $this->billingCode;
	}
	
	protected function createBillingCode() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setBillingCode($billingCode) {
		$this->billingCode = $this->validateBillingCode($billingCode);
	}

	protected function validateBillingCode($billingCode) {
		if ( ! $billingCode instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($billingCode) ) {
			$billingCode = new \com\microsoft\wc\types\CodableValue ($billingCode);
		}
	
		return $billingCode;
	}

	public function getServiceDates() {
		if ($this->serviceDates===NULL) {
			$this->serviceDates = $this->createServiceDates();
		}
		return $this->serviceDates;
	}
	
	protected function createServiceDates() {
		return new \com\microsoft\wc\thing\types\DurationValue();
	}

	public function setServiceDates($serviceDates) {
		$this->serviceDates = $this->validateServiceDates($serviceDates);
	}

	protected function validateServiceDates($serviceDates) {
		if ( ! $serviceDates instanceof \com\microsoft\wc\thing\types\DurationValue ) {
			$serviceDates = new \com\microsoft\wc\thing\types\DurationValue ($serviceDates);
		}
	
		return $serviceDates;
	}

	public function getClaimAmounts() {
		if ($this->claimAmounts===NULL) {
			$this->claimAmounts = $this->createClaimAmounts();
		}
		return $this->claimAmounts;
	}
	
	protected function createClaimAmounts() {
		return new \com\microsoft\wc\thing\explanation_of_benefits\ClaimAmounts();
	}

	public function setClaimAmounts($claimAmounts) {
		$this->claimAmounts = $this->validateClaimAmounts($claimAmounts);
	}

	protected function validateClaimAmounts($claimAmounts) {
		if ( ! $claimAmounts instanceof \com\microsoft\wc\thing\explanation_of_benefits\ClaimAmounts ) {
			$claimAmounts = new \com\microsoft\wc\thing\explanation_of_benefits\ClaimAmounts ($claimAmounts);
		}
	
		return $claimAmounts;
	}

	public function getNotes() {
		if ($this->notes===NULL) {
			$this->notes = $this->createNotes();
		}
		return $this->notes;
	}
	
	protected function createNotes() {
		return array();
	}

	public function setNotes($notes) {
		$this->notes = $this->validateNotes($notes);
	}

	protected function validateNotes($notes) {
		if ( ! $notes instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($notes) ) {
			$notes = new \com\microsoft\wc\types\Stringnznw ($notes);
		}
		$count = count($notes);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'notes', 0));
		}
		foreach ($notes as $entry) {
			if (!($entry instanceof Stringnznw)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'notes', 'stringnznw'));
			}
		}
	
		return $notes;
	}

	public function addNotes($notes) {
		$this->notes[] = $notes;
	}
} // end class Service
