<?php
namespace com\microsoft\wc\thing\payer;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.payer", prefix="")
 * })
 * @XmlEntity	(xml="payer")
 */
class Payer extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information about the person or organization that paysfor health and medical related bills.
	 */

	const ID = '9366440c-ec81-4b89-b231-308a4c4d70ed';
	const NAME = 'Insurance Plan';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="plan-name")
	 */
	protected $planName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="coverage-type")
	 */
	protected $coverageType;

	/**
	 * @XmlText	(type="string", name="carrier-id")
	 */
	protected $carrierId;

	/**
	 * @XmlText	(type="string", name="group-num")
	 */
	protected $groupNum;

	/**
	 * @XmlText	(type="string", name="plan-code")
	 */
	protected $planCode;

	/**
	 * @XmlText	(type="string", name="subscriber-id")
	 */
	protected $subscriberId;

	/**
	 * @XmlText	(type="string", name="person-code")
	 */
	protected $personCode;

	/**
	 * @XmlText	(type="string", name="subscriber-name")
	 */
	protected $subscriberName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="subscriber-dob")
	 */
	protected $subscriberDob;

	/**
	 * @XmlText	(type="boolean", name="is-primary")
	 */
	protected $isPrimary;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="expiration-date")
	 */
	protected $expirationDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Contact", name="contact")
	 */
	protected $contact;

	public function __construct($planName = NULL, $coverageType = NULL, $carrierId = NULL, $groupNum = NULL, $planCode = NULL, $subscriberId = NULL, $personCode = NULL, $subscriberName = NULL, $subscriberDob = NULL, $isPrimary = NULL, $expirationDate = NULL, $contact = NULL) {
		$this->planName = ($planName===NULL) ? NULL : $this->validatePlanName($planName);
		$this->coverageType = ($coverageType===NULL) ? NULL : $this->validateCoverageType($coverageType);
		$this->carrierId = ($carrierId===NULL) ? NULL : $this->validateCarrierId($carrierId);
		$this->groupNum = ($groupNum===NULL) ? NULL : $this->validateGroupNum($groupNum);
		$this->planCode = ($planCode===NULL) ? NULL : $this->validatePlanCode($planCode);
		$this->subscriberId = ($subscriberId===NULL) ? NULL : $this->validateSubscriberId($subscriberId);
		$this->personCode = ($personCode===NULL) ? NULL : $this->validatePersonCode($personCode);
		$this->subscriberName = ($subscriberName===NULL) ? NULL : $this->validateSubscriberName($subscriberName);
		$this->subscriberDob = ($subscriberDob===NULL) ? NULL : $this->validateSubscriberDob($subscriberDob);
		$this->isPrimary = ($isPrimary===NULL) ? NULL : $this->validateIsPrimary($isPrimary);
		$this->expirationDate = ($expirationDate===NULL) ? NULL : $this->validateExpirationDate($expirationDate);
		$this->contact = ($contact===NULL) ? NULL : $this->validateContact($contact);
	}

	public function getPlanName($autoCreate = TRUE) {
		if ($this->planName===NULL && $autoCreate && ! isset($this->_overrides['planName']) ) {
			$this->planName = $this->createPlanName();
		}
		return $this->planName;
	}
	
	protected function createPlanName() {
		return '';
	}

	public function setPlanName($planName) {
		$this->planName = $this->validatePlanName($planName);
	}

	protected function validatePlanName($planName) {
		if (!is_string($planName)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'planName', 'string'));
		}
	
		return $planName;
	}

	public function getCoverageType($autoCreate = TRUE) {
		if ($this->coverageType===NULL && $autoCreate && ! isset($this->_overrides['coverageType']) ) {
			$this->coverageType = $this->createCoverageType();
		}
		return $this->coverageType;
	}
	
	protected function createCoverageType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCoverageType($coverageType) {
		$this->coverageType = $this->validateCoverageType($coverageType);
	}

	protected function validateCoverageType($coverageType) {
		if ( $coverageType === FALSE ) {
			$this->_overrides['coverageType'] = TRUE;
			return NULL;
		}

		if ( ! $coverageType instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($coverageType) ) {
			$coverageType = new \com\microsoft\wc\types\CodableValue ($coverageType);
		}

		unset ($this->_overrides['coverageType']);
	
		return $coverageType;
	}

	public function getCarrierId($autoCreate = TRUE) {
		if ($this->carrierId===NULL && $autoCreate && ! isset($this->_overrides['carrierId']) ) {
			$this->carrierId = $this->createCarrierId();
		}
		return $this->carrierId;
	}
	
	protected function createCarrierId() {
		return '';
	}

	public function setCarrierId($carrierId) {
		$this->carrierId = $this->validateCarrierId($carrierId);
	}

	protected function validateCarrierId($carrierId) {
		if ( ! is_string($carrierId) && ! is_null($carrierId) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'carrierId', 'string'));
		}
	
		return $carrierId;
	}

	public function getGroupNum($autoCreate = TRUE) {
		if ($this->groupNum===NULL && $autoCreate && ! isset($this->_overrides['groupNum']) ) {
			$this->groupNum = $this->createGroupNum();
		}
		return $this->groupNum;
	}
	
	protected function createGroupNum() {
		return '';
	}

	public function setGroupNum($groupNum) {
		$this->groupNum = $this->validateGroupNum($groupNum);
	}

	protected function validateGroupNum($groupNum) {
		if ( ! is_string($groupNum) && ! is_null($groupNum) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'groupNum', 'string'));
		}
	
		return $groupNum;
	}

	public function getPlanCode($autoCreate = TRUE) {
		if ($this->planCode===NULL && $autoCreate && ! isset($this->_overrides['planCode']) ) {
			$this->planCode = $this->createPlanCode();
		}
		return $this->planCode;
	}
	
	protected function createPlanCode() {
		return '';
	}

	public function setPlanCode($planCode) {
		$this->planCode = $this->validatePlanCode($planCode);
	}

	protected function validatePlanCode($planCode) {
		if ( ! is_string($planCode) && ! is_null($planCode) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'planCode', 'string'));
		}
	
		return $planCode;
	}

	public function getSubscriberId($autoCreate = TRUE) {
		if ($this->subscriberId===NULL && $autoCreate && ! isset($this->_overrides['subscriberId']) ) {
			$this->subscriberId = $this->createSubscriberId();
		}
		return $this->subscriberId;
	}
	
	protected function createSubscriberId() {
		return '';
	}

	public function setSubscriberId($subscriberId) {
		$this->subscriberId = $this->validateSubscriberId($subscriberId);
	}

	protected function validateSubscriberId($subscriberId) {
		if ( ! is_string($subscriberId) && ! is_null($subscriberId) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'subscriberId', 'string'));
		}
	
		return $subscriberId;
	}

	public function getPersonCode($autoCreate = TRUE) {
		if ($this->personCode===NULL && $autoCreate && ! isset($this->_overrides['personCode']) ) {
			$this->personCode = $this->createPersonCode();
		}
		return $this->personCode;
	}
	
	protected function createPersonCode() {
		return '';
	}

	public function setPersonCode($personCode) {
		$this->personCode = $this->validatePersonCode($personCode);
	}

	protected function validatePersonCode($personCode) {
		if ( ! is_string($personCode) && ! is_null($personCode) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'personCode', 'string'));
		}
	
		return $personCode;
	}

	public function getSubscriberName($autoCreate = TRUE) {
		if ($this->subscriberName===NULL && $autoCreate && ! isset($this->_overrides['subscriberName']) ) {
			$this->subscriberName = $this->createSubscriberName();
		}
		return $this->subscriberName;
	}
	
	protected function createSubscriberName() {
		return '';
	}

	public function setSubscriberName($subscriberName) {
		$this->subscriberName = $this->validateSubscriberName($subscriberName);
	}

	protected function validateSubscriberName($subscriberName) {
		if ( ! is_string($subscriberName) && ! is_null($subscriberName) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'subscriberName', 'string'));
		}
	
		return $subscriberName;
	}

	public function getSubscriberDob($autoCreate = TRUE) {
		if ($this->subscriberDob===NULL && $autoCreate && ! isset($this->_overrides['subscriberDob']) ) {
			$this->subscriberDob = $this->createSubscriberDob();
		}
		return $this->subscriberDob;
	}
	
	protected function createSubscriberDob() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setSubscriberDob($subscriberDob) {
		$this->subscriberDob = $this->validateSubscriberDob($subscriberDob);
	}

	protected function validateSubscriberDob($subscriberDob) {
		if ( $subscriberDob === FALSE ) {
			$this->_overrides['subscriberDob'] = TRUE;
			return NULL;
		}

		if ( ! $subscriberDob instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($subscriberDob) ) {
			$subscriberDob = new \com\microsoft\wc\dates\DateTime ($subscriberDob);
		}

		unset ($this->_overrides['subscriberDob']);
	
		return $subscriberDob;
	}

	public function getIsPrimary($autoCreate = TRUE) {
		if ($this->isPrimary===NULL && $autoCreate && ! isset($this->_overrides['isPrimary']) ) {
			$this->isPrimary = $this->createIsPrimary();
		}
		return $this->isPrimary;
	}
	
	protected function createIsPrimary() {
		return FALSE;
	}

	public function setIsPrimary($isPrimary) {
		$this->isPrimary = $this->validateIsPrimary($isPrimary);
	}

	protected function validateIsPrimary($isPrimary) {
		if ( ! is_bool($isPrimary) && ! is_null($isPrimary) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isPrimary', 'boolean'));
		}
	
		return $isPrimary;
	}

	public function getExpirationDate($autoCreate = TRUE) {
		if ($this->expirationDate===NULL && $autoCreate && ! isset($this->_overrides['expirationDate']) ) {
			$this->expirationDate = $this->createExpirationDate();
		}
		return $this->expirationDate;
	}
	
	protected function createExpirationDate() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setExpirationDate($expirationDate) {
		$this->expirationDate = $this->validateExpirationDate($expirationDate);
	}

	protected function validateExpirationDate($expirationDate) {
		if ( $expirationDate === FALSE ) {
			$this->_overrides['expirationDate'] = TRUE;
			return NULL;
		}

		if ( ! $expirationDate instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($expirationDate) ) {
			$expirationDate = new \com\microsoft\wc\dates\DateTime ($expirationDate);
		}

		unset ($this->_overrides['expirationDate']);
	
		return $expirationDate;
	}

	public function getContact($autoCreate = TRUE) {
		if ($this->contact===NULL && $autoCreate && ! isset($this->_overrides['contact']) ) {
			$this->contact = $this->createContact();
		}
		return $this->contact;
	}
	
	protected function createContact() {
		return new \com\microsoft\wc\thing\types\Contact();
	}

	public function setContact($contact) {
		$this->contact = $this->validateContact($contact);
	}

	protected function validateContact($contact) {
		if ( $contact === FALSE ) {
			$this->_overrides['contact'] = TRUE;
			return NULL;
		}

		if ( ! $contact instanceof \com\microsoft\wc\thing\types\Contact  && ! is_null($contact) ) {
			$contact = new \com\microsoft\wc\thing\types\Contact ($contact);
		}

		unset ($this->_overrides['contact']);
	
		return $contact;
	}
} // end class Payer
