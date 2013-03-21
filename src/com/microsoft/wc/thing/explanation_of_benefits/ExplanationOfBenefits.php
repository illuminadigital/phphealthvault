<?php
namespace com\microsoft\wc\thing\explanation_of_benefits;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.explanation-of-benefits", prefix="")
 * })
 * @XmlEntity	(xml="explanation-of-benefits")
 */
class ExplanationOfBenefits extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * An Explanation of Benefits (EOB) that contains information about an insurance claim.
	 */

	const ID = '356fbba9-e0c9-4f4f-b0d9-4594f2490d2f';
	const NAME = 'Explanation of Benefits';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="date-submitted")
	 */
	protected $dateSubmitted;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="patient")
	 */
	protected $patient;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="relationship-to-member")
	 */
	protected $relationshipToMember;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="plan")
	 */
	protected $plan;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="group-id")
	 */
	protected $groupId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="member-id")
	 */
	protected $memberId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="claim-type")
	 */
	protected $claimType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="claim-id")
	 */
	protected $claimId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="submitted-by")
	 */
	protected $submittedBy;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="provider")
	 */
	protected $provider;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="currency")
	 */
	protected $currency;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\explanation_of_benefits\ClaimAmounts", name="claim-totals")
	 */
	protected $claimTotals;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\explanation_of_benefits\Service", collection="true", name="services")
	 */
	protected $services;

	public function __construct($dateSubmitted = NULL, $patient = NULL, $relationshipToMember = NULL, $plan = NULL, $groupId = NULL, $memberId = NULL, $claimType = NULL, $claimId = NULL, $submittedBy = NULL, $provider = NULL, $currency = NULL, $claimTotals = NULL, $services = NULL) {
		$this->dateSubmitted = ($dateSubmitted===NULL) ? NULL : $this->validateDateSubmitted($dateSubmitted);
		$this->patient = ($patient===NULL) ? NULL : $this->validatePatient($patient);
		$this->relationshipToMember = ($relationshipToMember===NULL) ? NULL : $this->validateRelationshipToMember($relationshipToMember);
		$this->plan = ($plan===NULL) ? NULL : $this->validatePlan($plan);
		$this->groupId = ($groupId===NULL) ? NULL : $this->validateGroupId($groupId);
		$this->memberId = ($memberId===NULL) ? NULL : $this->validateMemberId($memberId);
		$this->claimType = ($claimType===NULL) ? NULL : $this->validateClaimType($claimType);
		$this->claimId = ($claimId===NULL) ? NULL : $this->validateClaimId($claimId);
		$this->submittedBy = ($submittedBy===NULL) ? NULL : $this->validateSubmittedBy($submittedBy);
		$this->provider = ($provider===NULL) ? NULL : $this->validateProvider($provider);
		$this->currency = ($currency===NULL) ? NULL : $this->validateCurrency($currency);
		$this->claimTotals = ($claimTotals===NULL) ? NULL : $this->validateClaimTotals($claimTotals);
		$this->services = ($services===NULL) ? NULL : $this->validateServices($services);
	}

	public function getDateSubmitted($autoCreate = TRUE) {
		if ($this->dateSubmitted===NULL && $autoCreate && ! isset($this->_overrides['dateSubmitted']) ) {
			$this->dateSubmitted = $this->createDateSubmitted();
		}
		return $this->dateSubmitted;
	}
	
	protected function createDateSubmitted() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setDateSubmitted($dateSubmitted) {
		$this->dateSubmitted = $this->validateDateSubmitted($dateSubmitted);
	}

	protected function validateDateSubmitted($dateSubmitted) {
		if ( ! $dateSubmitted instanceof \com\microsoft\wc\dates\DateTime ) {
			$dateSubmitted = new \com\microsoft\wc\dates\DateTime ($dateSubmitted);
		}
	
		return $dateSubmitted;
	}

	public function getPatient($autoCreate = TRUE) {
		if ($this->patient===NULL && $autoCreate && ! isset($this->_overrides['patient']) ) {
			$this->patient = $this->createPatient();
		}
		return $this->patient;
	}
	
	protected function createPatient() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setPatient($patient) {
		$this->patient = $this->validatePatient($patient);
	}

	protected function validatePatient($patient) {
		if ( ! $patient instanceof \com\microsoft\wc\thing\types\Person ) {
			$patient = new \com\microsoft\wc\thing\types\Person ($patient);
		}
	
		return $patient;
	}

	public function getRelationshipToMember($autoCreate = TRUE) {
		if ($this->relationshipToMember===NULL && $autoCreate && ! isset($this->_overrides['relationshipToMember']) ) {
			$this->relationshipToMember = $this->createRelationshipToMember();
		}
		return $this->relationshipToMember;
	}
	
	protected function createRelationshipToMember() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setRelationshipToMember($relationshipToMember) {
		$this->relationshipToMember = $this->validateRelationshipToMember($relationshipToMember);
	}

	protected function validateRelationshipToMember($relationshipToMember) {
		if ( $relationshipToMember === FALSE ) {
			$this->_overrides['relationshipToMember'] = TRUE;
			return NULL;
		}

		if ( ! $relationshipToMember instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($relationshipToMember) ) {
			$relationshipToMember = new \com\microsoft\wc\types\CodableValue ($relationshipToMember);
		}

		unset ($this->_overrides['relationshipToMember']);
	
		return $relationshipToMember;
	}

	public function getPlan($autoCreate = TRUE) {
		if ($this->plan===NULL && $autoCreate && ! isset($this->_overrides['plan']) ) {
			$this->plan = $this->createPlan();
		}
		return $this->plan;
	}
	
	protected function createPlan() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setPlan($plan) {
		$this->plan = $this->validatePlan($plan);
	}

	protected function validatePlan($plan) {
		if ( ! $plan instanceof \com\microsoft\wc\thing\types\Organization ) {
			$plan = new \com\microsoft\wc\thing\types\Organization ($plan);
		}
	
		return $plan;
	}

	public function getGroupId($autoCreate = TRUE) {
		if ($this->groupId===NULL && $autoCreate && ! isset($this->_overrides['groupId']) ) {
			$this->groupId = $this->createGroupId();
		}
		return $this->groupId;
	}
	
	protected function createGroupId() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setGroupId($groupId) {
		$this->groupId = $this->validateGroupId($groupId);
	}

	protected function validateGroupId($groupId) {
		if ( $groupId === FALSE ) {
			$this->_overrides['groupId'] = TRUE;
			return NULL;
		}

		if ( ! $groupId instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($groupId) ) {
			$groupId = new \com\microsoft\wc\types\Stringnznw ($groupId);
		}

		unset ($this->_overrides['groupId']);
	
		return $groupId;
	}

	public function getMemberId($autoCreate = TRUE) {
		if ($this->memberId===NULL && $autoCreate && ! isset($this->_overrides['memberId']) ) {
			$this->memberId = $this->createMemberId();
		}
		return $this->memberId;
	}
	
	protected function createMemberId() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setMemberId($memberId) {
		$this->memberId = $this->validateMemberId($memberId);
	}

	protected function validateMemberId($memberId) {
		if ( ! $memberId instanceof \com\microsoft\wc\types\Stringnznw ) {
			$memberId = new \com\microsoft\wc\types\Stringnznw ($memberId);
		}
	
		return $memberId;
	}

	public function getClaimType($autoCreate = TRUE) {
		if ($this->claimType===NULL && $autoCreate && ! isset($this->_overrides['claimType']) ) {
			$this->claimType = $this->createClaimType();
		}
		return $this->claimType;
	}
	
	protected function createClaimType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setClaimType($claimType) {
		$this->claimType = $this->validateClaimType($claimType);
	}

	protected function validateClaimType($claimType) {
		if ( ! $claimType instanceof \com\microsoft\wc\types\CodableValue ) {
			$claimType = new \com\microsoft\wc\types\CodableValue ($claimType);
		}
	
		return $claimType;
	}

	public function getClaimId($autoCreate = TRUE) {
		if ($this->claimId===NULL && $autoCreate && ! isset($this->_overrides['claimId']) ) {
			$this->claimId = $this->createClaimId();
		}
		return $this->claimId;
	}
	
	protected function createClaimId() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setClaimId($claimId) {
		$this->claimId = $this->validateClaimId($claimId);
	}

	protected function validateClaimId($claimId) {
		if ( ! $claimId instanceof \com\microsoft\wc\types\Stringnznw ) {
			$claimId = new \com\microsoft\wc\types\Stringnznw ($claimId);
		}
	
		return $claimId;
	}

	public function getSubmittedBy($autoCreate = TRUE) {
		if ($this->submittedBy===NULL && $autoCreate && ! isset($this->_overrides['submittedBy']) ) {
			$this->submittedBy = $this->createSubmittedBy();
		}
		return $this->submittedBy;
	}
	
	protected function createSubmittedBy() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setSubmittedBy($submittedBy) {
		$this->submittedBy = $this->validateSubmittedBy($submittedBy);
	}

	protected function validateSubmittedBy($submittedBy) {
		if ( ! $submittedBy instanceof \com\microsoft\wc\thing\types\Organization ) {
			$submittedBy = new \com\microsoft\wc\thing\types\Organization ($submittedBy);
		}
	
		return $submittedBy;
	}

	public function getProvider($autoCreate = TRUE) {
		if ($this->provider===NULL && $autoCreate && ! isset($this->_overrides['provider']) ) {
			$this->provider = $this->createProvider();
		}
		return $this->provider;
	}
	
	protected function createProvider() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setProvider($provider) {
		$this->provider = $this->validateProvider($provider);
	}

	protected function validateProvider($provider) {
		if ( ! $provider instanceof \com\microsoft\wc\thing\types\Organization ) {
			$provider = new \com\microsoft\wc\thing\types\Organization ($provider);
		}
	
		return $provider;
	}

	public function getCurrency($autoCreate = TRUE) {
		if ($this->currency===NULL && $autoCreate && ! isset($this->_overrides['currency']) ) {
			$this->currency = $this->createCurrency();
		}
		return $this->currency;
	}
	
	protected function createCurrency() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCurrency($currency) {
		$this->currency = $this->validateCurrency($currency);
	}

	protected function validateCurrency($currency) {
		if ( ! $currency instanceof \com\microsoft\wc\types\CodableValue ) {
			$currency = new \com\microsoft\wc\types\CodableValue ($currency);
		}
	
		return $currency;
	}

	public function getClaimTotals($autoCreate = TRUE) {
		if ($this->claimTotals===NULL && $autoCreate && ! isset($this->_overrides['claimTotals']) ) {
			$this->claimTotals = $this->createClaimTotals();
		}
		return $this->claimTotals;
	}
	
	protected function createClaimTotals() {
		return new \com\microsoft\wc\thing\explanation_of_benefits\ClaimAmounts();
	}

	public function setClaimTotals($claimTotals) {
		$this->claimTotals = $this->validateClaimTotals($claimTotals);
	}

	protected function validateClaimTotals($claimTotals) {
		if ( ! $claimTotals instanceof \com\microsoft\wc\thing\explanation_of_benefits\ClaimAmounts ) {
			$claimTotals = new \com\microsoft\wc\thing\explanation_of_benefits\ClaimAmounts ($claimTotals);
		}
	
		return $claimTotals;
	}

	public function getServices($autoCreate = TRUE) {
		if ($this->services===NULL && $autoCreate && ! isset($this->_overrides['services']) ) {
			$this->services = $this->createServices();
		}
		return $this->services;
	}
	
	protected function createServices() {
		return array();
	}

	public function setServices($services) {
		$this->services = $this->validateServices($services);
	}

	protected function validateServices($services) {
		if ( ! is_array ($services) ) {
			$services = array($services);
		}
		$count = count($services);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'services', 1));
		}
		foreach ($services as $entry) {
			if (!($entry instanceof Service)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'services', 'Service'));
			}
		}
	
		return $services;
	}

	public function addServices($services) {
		$this->services[] = $services;
	}
} // end class ExplanationOfBenefits
