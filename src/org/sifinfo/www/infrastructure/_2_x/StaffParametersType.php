<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StaffParametersType")
 */
class StaffParametersType {
	/**
	 * Characteristics of the staff person identified by the district which the state uses to perform its matching logic.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StateProvinceIdType", name="StateProvinceId")
	 */
	protected $stateProvinceId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LocalIdType", name="LocalId")
	 */
	protected $localId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", name="SIF_RefId")
	 */
	protected $sifRefId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SSNType", name="SSN")
	 */
	protected $sSN;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Names", name="Names")
	 */
	protected $names;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Addresses", name="Addresses")
	 */
	protected $addresses;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DemographicsType", name="Demographics")
	 */
	protected $demographics;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Contacts", name="Contacts")
	 */
	protected $contacts;

	/**
	 * @XmlText	(type="string", name="EffectiveDate")
	 */
	protected $effectiveDate;

	/**
	 * @XmlText	(type="string", name="StartDate")
	 */
	protected $startDate;

	/**
	 * @XmlText	(type="string", name="EndDate")
	 */
	protected $endDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherIdListType", name="OtherIdList")
	 */
	protected $otherIdList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TimeElementType", name="TimeElement")
	 */
	protected $timeElement;

	public function __construct($stateProvinceId = NULL, $localId = NULL, $sifRefId = NULL, $sSN = NULL, $names = NULL, $addresses = NULL, $demographics = NULL, $contacts = NULL, $effectiveDate = NULL, $startDate = NULL, $endDate = NULL, $otherIdList = NULL, $timeElement = NULL) {
		$this->stateProvinceId = ($stateProvinceId===NULL) ? NULL : $this->validateStateProvinceId($stateProvinceId);
		$this->localId = ($localId===NULL) ? NULL : $this->validateLocalId($localId);
		$this->sifRefId = ($sifRefId===NULL) ? NULL : $this->validateSifRefId($sifRefId);
		$this->sSN = ($sSN===NULL) ? NULL : $this->validateSSN($sSN);
		$this->names = ($names===NULL) ? NULL : $this->validateNames($names);
		$this->addresses = ($addresses===NULL) ? NULL : $this->validateAddresses($addresses);
		$this->demographics = ($demographics===NULL) ? NULL : $this->validateDemographics($demographics);
		$this->contacts = ($contacts===NULL) ? NULL : $this->validateContacts($contacts);
		$this->effectiveDate = ($effectiveDate===NULL) ? NULL : $this->validateEffectiveDate($effectiveDate);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->otherIdList = ($otherIdList===NULL) ? NULL : $this->validateOtherIdList($otherIdList);
		$this->timeElement = ($timeElement===NULL) ? NULL : $this->validateTimeElement($timeElement);
	}

	public function getStateProvinceId($autoCreate = TRUE) {
		if ($this->stateProvinceId===NULL && $autoCreate && ! isset($this->_overrides['stateProvinceId']) ) {
			$this->stateProvinceId = $this->createStateProvinceId();
		}
		return $this->stateProvinceId;
	}
	
	protected function createStateProvinceId() {
		return NULL;
	}

	public function setStateProvinceId($stateProvinceId) {
		$this->stateProvinceId = $this->validateStateProvinceId($stateProvinceId);
	}

	protected function validateStateProvinceId($stateProvinceId) {
	
		return $stateProvinceId;
	}

	public function getLocalId($autoCreate = TRUE) {
		if ($this->localId===NULL && $autoCreate && ! isset($this->_overrides['localId']) ) {
			$this->localId = $this->createLocalId();
		}
		return $this->localId;
	}
	
	protected function createLocalId() {
		return NULL;
	}

	public function setLocalId($localId) {
		$this->localId = $this->validateLocalId($localId);
	}

	protected function validateLocalId($localId) {
	
		return $localId;
	}

	public function getSifRefId($autoCreate = TRUE) {
		if ($this->sifRefId===NULL && $autoCreate && ! isset($this->_overrides['sifRefId']) ) {
			$this->sifRefId = $this->createSifRefId();
		}
		return $this->sifRefId;
	}
	
	protected function createSifRefId() {
		return NULL;
	}

	public function setSifRefId($sifRefId) {
		$this->sifRefId = $this->validateSifRefId($sifRefId);
	}

	protected function validateSifRefId($sifRefId) {
	
		return $sifRefId;
	}

	public function getSSN($autoCreate = TRUE) {
		if ($this->sSN===NULL && $autoCreate && ! isset($this->_overrides['sSN']) ) {
			$this->sSN = $this->createSSN();
		}
		return $this->sSN;
	}
	
	protected function createSSN() {
		return NULL;
	}

	public function setSSN($sSN) {
		$this->sSN = $this->validateSSN($sSN);
	}

	protected function validateSSN($sSN) {
	
		return $sSN;
	}

	public function getNames($autoCreate = TRUE) {
		if ($this->names===NULL && $autoCreate && ! isset($this->_overrides['names']) ) {
			$this->names = $this->createNames();
		}
		return $this->names;
	}
	
	protected function createNames() {
		return new \org\sifinfo\www\infrastructure\_2_x\Names();
	}

	public function setNames($names) {
		$this->names = $this->validateNames($names);
	}

	protected function validateNames($names) {
		if ( $names === FALSE ) {
			$this->_overrides['names'] = TRUE;
			return NULL;
		}

		if ( ! $names instanceof \org\sifinfo\www\infrastructure\_2_x\Names  && ! is_null($names) ) {
			$names = new \org\sifinfo\www\infrastructure\_2_x\Names ($names);
		}

		unset ($this->_overrides['names']);
	
		return $names;
	}

	public function getAddresses($autoCreate = TRUE) {
		if ($this->addresses===NULL && $autoCreate && ! isset($this->_overrides['addresses']) ) {
			$this->addresses = $this->createAddresses();
		}
		return $this->addresses;
	}
	
	protected function createAddresses() {
		return new \org\sifinfo\www\infrastructure\_2_x\Addresses();
	}

	public function setAddresses($addresses) {
		$this->addresses = $this->validateAddresses($addresses);
	}

	protected function validateAddresses($addresses) {
		if ( $addresses === FALSE ) {
			$this->_overrides['addresses'] = TRUE;
			return NULL;
		}

		if ( ! $addresses instanceof \org\sifinfo\www\infrastructure\_2_x\Addresses  && ! is_null($addresses) ) {
			$addresses = new \org\sifinfo\www\infrastructure\_2_x\Addresses ($addresses);
		}

		unset ($this->_overrides['addresses']);
	
		return $addresses;
	}

	public function getDemographics($autoCreate = TRUE) {
		if ($this->demographics===NULL && $autoCreate && ! isset($this->_overrides['demographics']) ) {
			$this->demographics = $this->createDemographics();
		}
		return $this->demographics;
	}
	
	protected function createDemographics() {
		return new \org\sifinfo\www\infrastructure\_2_x\DemographicsType();
	}

	public function setDemographics($demographics) {
		$this->demographics = $this->validateDemographics($demographics);
	}

	protected function validateDemographics($demographics) {
		if ( $demographics === FALSE ) {
			$this->_overrides['demographics'] = TRUE;
			return NULL;
		}

		if ( ! $demographics instanceof \org\sifinfo\www\infrastructure\_2_x\DemographicsType  && ! is_null($demographics) ) {
			$demographics = new \org\sifinfo\www\infrastructure\_2_x\DemographicsType ($demographics);
		}

		unset ($this->_overrides['demographics']);
	
		return $demographics;
	}

	public function getContacts($autoCreate = TRUE) {
		if ($this->contacts===NULL && $autoCreate && ! isset($this->_overrides['contacts']) ) {
			$this->contacts = $this->createContacts();
		}
		return $this->contacts;
	}
	
	protected function createContacts() {
		return new \org\sifinfo\www\infrastructure\_2_x\Contacts();
	}

	public function setContacts($contacts) {
		$this->contacts = $this->validateContacts($contacts);
	}

	protected function validateContacts($contacts) {
		if ( $contacts === FALSE ) {
			$this->_overrides['contacts'] = TRUE;
			return NULL;
		}

		if ( ! $contacts instanceof \org\sifinfo\www\infrastructure\_2_x\Contacts  && ! is_null($contacts) ) {
			$contacts = new \org\sifinfo\www\infrastructure\_2_x\Contacts ($contacts);
		}

		unset ($this->_overrides['contacts']);
	
		return $contacts;
	}

	public function getEffectiveDate($autoCreate = TRUE) {
		if ($this->effectiveDate===NULL && $autoCreate && ! isset($this->_overrides['effectiveDate']) ) {
			$this->effectiveDate = $this->createEffectiveDate();
		}
		return $this->effectiveDate;
	}
	
	protected function createEffectiveDate() {
		return NULL;
	}

	public function setEffectiveDate($effectiveDate) {
		$this->effectiveDate = $this->validateEffectiveDate($effectiveDate);
	}

	protected function validateEffectiveDate($effectiveDate) {
		if ( ! is_string($effectiveDate) && ! is_null($effectiveDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effectiveDate', 'string'));
		}
	
		return $effectiveDate;
	}

	public function getStartDate($autoCreate = TRUE) {
		if ($this->startDate===NULL && $autoCreate && ! isset($this->_overrides['startDate']) ) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return NULL;
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
		if ( ! is_string($startDate) && ! is_null($startDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'startDate', 'string'));
		}
	
		return $startDate;
	}

	public function getEndDate($autoCreate = TRUE) {
		if ($this->endDate===NULL && $autoCreate && ! isset($this->_overrides['endDate']) ) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return NULL;
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
		if ( ! is_string($endDate) && ! is_null($endDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'endDate', 'string'));
		}
	
		return $endDate;
	}

	public function getOtherIdList($autoCreate = TRUE) {
		if ($this->otherIdList===NULL && $autoCreate && ! isset($this->_overrides['otherIdList']) ) {
			$this->otherIdList = $this->createOtherIdList();
		}
		return $this->otherIdList;
	}
	
	protected function createOtherIdList() {
		return new \org\sifinfo\www\infrastructure\_2_x\OtherIdListType();
	}

	public function setOtherIdList($otherIdList) {
		$this->otherIdList = $this->validateOtherIdList($otherIdList);
	}

	protected function validateOtherIdList($otherIdList) {
		if ( $otherIdList === FALSE ) {
			$this->_overrides['otherIdList'] = TRUE;
			return NULL;
		}

		if ( ! $otherIdList instanceof \org\sifinfo\www\infrastructure\_2_x\OtherIdListType  && ! is_null($otherIdList) ) {
			$otherIdList = new \org\sifinfo\www\infrastructure\_2_x\OtherIdListType ($otherIdList);
		}

		unset ($this->_overrides['otherIdList']);
	
		return $otherIdList;
	}

	public function getTimeElement($autoCreate = TRUE) {
		if ($this->timeElement===NULL && $autoCreate && ! isset($this->_overrides['timeElement']) ) {
			$this->timeElement = $this->createTimeElement();
		}
		return $this->timeElement;
	}
	
	protected function createTimeElement() {
		return new \org\sifinfo\www\infrastructure\_2_x\TimeElementType();
	}

	public function setTimeElement($timeElement) {
		$this->timeElement = $this->validateTimeElement($timeElement);
	}

	protected function validateTimeElement($timeElement) {
		if ( $timeElement === FALSE ) {
			$this->_overrides['timeElement'] = TRUE;
			return NULL;
		}

		if ( ! $timeElement instanceof \org\sifinfo\www\infrastructure\_2_x\TimeElementType  && ! is_null($timeElement) ) {
			$timeElement = new \org\sifinfo\www\infrastructure\_2_x\TimeElementType ($timeElement);
		}

		unset ($this->_overrides['timeElement']);
	
		return $timeElement;
	}
} // end class StaffParametersType
