<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentPersonalData")
 */
class StudentPersonalData {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LocalIdType", name="LocalId")
	 */
	protected $localId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StateProvinceIdType", name="StateProvinceId")
	 */
	protected $stateProvinceId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SSNType", name="SSN")
	 */
	protected $sSN;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherIdList", name="OtherIdList")
	 */
	protected $otherIdList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NameOfRecordType", name="Name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherNamesType", name="OtherNames")
	 */
	protected $otherNames;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DemographicsData", name="DemographicsData")
	 */
	protected $demographicsData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AddressListType", name="AddressList")
	 */
	protected $addressList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PhoneNumberListType", name="PhoneNumberList")
	 */
	protected $phoneNumberList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IDEAType", name="IDEA")
	 */
	protected $iDEA;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MigrantType", name="Migrant")
	 */
	protected $migrant;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Title1Type", name="Title1")
	 */
	protected $title1;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GiftedTalentedType", name="GiftedTalented")
	 */
	protected $giftedTalented;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\EconomicDisadvantageType", name="EconomicDisadvantage")
	 */
	protected $economicDisadvantage;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ELLType", name="ELL")
	 */
	protected $eLL;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\HomelessType", name="Homeless")
	 */
	protected $homeless;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Section504Type", name="Section504")
	 */
	protected $section504;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\VocationalConcentratorType", name="VocationalConcentrator")
	 */
	protected $vocationalConcentrator;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ImmigrantType", name="Immigrant")
	 */
	protected $immigrant;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NeglectedDelinquentType", name="NeglectedDelinquent")
	 */
	protected $neglectedDelinquent;

	public function __construct($localId = NULL, $stateProvinceId = NULL, $sSN = NULL, $otherIdList = NULL, $name = NULL, $otherNames = NULL, $demographicsData = NULL, $addressList = NULL, $phoneNumberList = NULL, $iDEA = NULL, $migrant = NULL, $title1 = NULL, $giftedTalented = NULL, $economicDisadvantage = NULL, $eLL = NULL, $homeless = NULL, $section504 = NULL, $vocationalConcentrator = NULL, $immigrant = NULL, $neglectedDelinquent = NULL) {
		$this->localId = ($localId===NULL) ? NULL : $this->validateLocalId($localId);
		$this->stateProvinceId = ($stateProvinceId===NULL) ? NULL : $this->validateStateProvinceId($stateProvinceId);
		$this->sSN = ($sSN===NULL) ? NULL : $this->validateSSN($sSN);
		$this->otherIdList = ($otherIdList===NULL) ? NULL : $this->validateOtherIdList($otherIdList);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->otherNames = ($otherNames===NULL) ? NULL : $this->validateOtherNames($otherNames);
		$this->demographicsData = ($demographicsData===NULL) ? NULL : $this->validateDemographicsData($demographicsData);
		$this->addressList = ($addressList===NULL) ? NULL : $this->validateAddressList($addressList);
		$this->phoneNumberList = ($phoneNumberList===NULL) ? NULL : $this->validatePhoneNumberList($phoneNumberList);
		$this->iDEA = ($iDEA===NULL) ? NULL : $this->validateIDEA($iDEA);
		$this->migrant = ($migrant===NULL) ? NULL : $this->validateMigrant($migrant);
		$this->title1 = ($title1===NULL) ? NULL : $this->validateTitle1($title1);
		$this->giftedTalented = ($giftedTalented===NULL) ? NULL : $this->validateGiftedTalented($giftedTalented);
		$this->economicDisadvantage = ($economicDisadvantage===NULL) ? NULL : $this->validateEconomicDisadvantage($economicDisadvantage);
		$this->eLL = ($eLL===NULL) ? NULL : $this->validateELL($eLL);
		$this->homeless = ($homeless===NULL) ? NULL : $this->validateHomeless($homeless);
		$this->section504 = ($section504===NULL) ? NULL : $this->validateSection504($section504);
		$this->vocationalConcentrator = ($vocationalConcentrator===NULL) ? NULL : $this->validateVocationalConcentrator($vocationalConcentrator);
		$this->immigrant = ($immigrant===NULL) ? NULL : $this->validateImmigrant($immigrant);
		$this->neglectedDelinquent = ($neglectedDelinquent===NULL) ? NULL : $this->validateNeglectedDelinquent($neglectedDelinquent);
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

	public function getOtherIdList($autoCreate = TRUE) {
		if ($this->otherIdList===NULL && $autoCreate && ! isset($this->_overrides['otherIdList']) ) {
			$this->otherIdList = $this->createOtherIdList();
		}
		return $this->otherIdList;
	}
	
	protected function createOtherIdList() {
		return new \org\sifinfo\www\infrastructure\_2_x\OtherIdList();
	}

	public function setOtherIdList($otherIdList) {
		$this->otherIdList = $this->validateOtherIdList($otherIdList);
	}

	protected function validateOtherIdList($otherIdList) {
		if ( $otherIdList === FALSE ) {
			$this->_overrides['otherIdList'] = TRUE;
			return NULL;
		}

		if ( ! $otherIdList instanceof \org\sifinfo\www\infrastructure\_2_x\OtherIdList  && ! is_null($otherIdList) ) {
			$otherIdList = new \org\sifinfo\www\infrastructure\_2_x\OtherIdList ($otherIdList);
		}

		unset ($this->_overrides['otherIdList']);
	
		return $otherIdList;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \org\sifinfo\www\infrastructure\_2_x\NameOfRecordType();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \org\sifinfo\www\infrastructure\_2_x\NameOfRecordType ) {
			$name = new \org\sifinfo\www\infrastructure\_2_x\NameOfRecordType ($name);
		}
	
		return $name;
	}

	public function getOtherNames($autoCreate = TRUE) {
		if ($this->otherNames===NULL && $autoCreate && ! isset($this->_overrides['otherNames']) ) {
			$this->otherNames = $this->createOtherNames();
		}
		return $this->otherNames;
	}
	
	protected function createOtherNames() {
		return new \org\sifinfo\www\infrastructure\_2_x\OtherNamesType();
	}

	public function setOtherNames($otherNames) {
		$this->otherNames = $this->validateOtherNames($otherNames);
	}

	protected function validateOtherNames($otherNames) {
		if ( $otherNames === FALSE ) {
			$this->_overrides['otherNames'] = TRUE;
			return NULL;
		}

		if ( ! $otherNames instanceof \org\sifinfo\www\infrastructure\_2_x\OtherNamesType  && ! is_null($otherNames) ) {
			$otherNames = new \org\sifinfo\www\infrastructure\_2_x\OtherNamesType ($otherNames);
		}

		unset ($this->_overrides['otherNames']);
	
		return $otherNames;
	}

	public function getDemographicsData($autoCreate = TRUE) {
		if ($this->demographicsData===NULL && $autoCreate && ! isset($this->_overrides['demographicsData']) ) {
			$this->demographicsData = $this->createDemographicsData();
		}
		return $this->demographicsData;
	}
	
	protected function createDemographicsData() {
		return new \org\sifinfo\www\infrastructure\_2_x\DemographicsData();
	}

	public function setDemographicsData($demographicsData) {
		$this->demographicsData = $this->validateDemographicsData($demographicsData);
	}

	protected function validateDemographicsData($demographicsData) {
		if ( $demographicsData === FALSE ) {
			$this->_overrides['demographicsData'] = TRUE;
			return NULL;
		}

		if ( ! $demographicsData instanceof \org\sifinfo\www\infrastructure\_2_x\DemographicsData  && ! is_null($demographicsData) ) {
			$demographicsData = new \org\sifinfo\www\infrastructure\_2_x\DemographicsData ($demographicsData);
		}

		unset ($this->_overrides['demographicsData']);
	
		return $demographicsData;
	}

	public function getAddressList($autoCreate = TRUE) {
		if ($this->addressList===NULL && $autoCreate && ! isset($this->_overrides['addressList']) ) {
			$this->addressList = $this->createAddressList();
		}
		return $this->addressList;
	}
	
	protected function createAddressList() {
		return new \org\sifinfo\www\infrastructure\_2_x\AddressListType();
	}

	public function setAddressList($addressList) {
		$this->addressList = $this->validateAddressList($addressList);
	}

	protected function validateAddressList($addressList) {
		if ( $addressList === FALSE ) {
			$this->_overrides['addressList'] = TRUE;
			return NULL;
		}

		if ( ! $addressList instanceof \org\sifinfo\www\infrastructure\_2_x\AddressListType  && ! is_null($addressList) ) {
			$addressList = new \org\sifinfo\www\infrastructure\_2_x\AddressListType ($addressList);
		}

		unset ($this->_overrides['addressList']);
	
		return $addressList;
	}

	public function getPhoneNumberList($autoCreate = TRUE) {
		if ($this->phoneNumberList===NULL && $autoCreate && ! isset($this->_overrides['phoneNumberList']) ) {
			$this->phoneNumberList = $this->createPhoneNumberList();
		}
		return $this->phoneNumberList;
	}
	
	protected function createPhoneNumberList() {
		return new \org\sifinfo\www\infrastructure\_2_x\PhoneNumberListType();
	}

	public function setPhoneNumberList($phoneNumberList) {
		$this->phoneNumberList = $this->validatePhoneNumberList($phoneNumberList);
	}

	protected function validatePhoneNumberList($phoneNumberList) {
		if ( $phoneNumberList === FALSE ) {
			$this->_overrides['phoneNumberList'] = TRUE;
			return NULL;
		}

		if ( ! $phoneNumberList instanceof \org\sifinfo\www\infrastructure\_2_x\PhoneNumberListType  && ! is_null($phoneNumberList) ) {
			$phoneNumberList = new \org\sifinfo\www\infrastructure\_2_x\PhoneNumberListType ($phoneNumberList);
		}

		unset ($this->_overrides['phoneNumberList']);
	
		return $phoneNumberList;
	}

	public function getIDEA($autoCreate = TRUE) {
		if ($this->iDEA===NULL && $autoCreate && ! isset($this->_overrides['iDEA']) ) {
			$this->iDEA = $this->createIDEA();
		}
		return $this->iDEA;
	}
	
	protected function createIDEA() {
		return NULL;
	}

	public function setIDEA($iDEA) {
		$this->iDEA = $this->validateIDEA($iDEA);
	}

	protected function validateIDEA($iDEA) {
	
		return $iDEA;
	}

	public function getMigrant($autoCreate = TRUE) {
		if ($this->migrant===NULL && $autoCreate && ! isset($this->_overrides['migrant']) ) {
			$this->migrant = $this->createMigrant();
		}
		return $this->migrant;
	}
	
	protected function createMigrant() {
		return NULL;
	}

	public function setMigrant($migrant) {
		$this->migrant = $this->validateMigrant($migrant);
	}

	protected function validateMigrant($migrant) {
	
		return $migrant;
	}

	public function getTitle1($autoCreate = TRUE) {
		if ($this->title1===NULL && $autoCreate && ! isset($this->_overrides['title1']) ) {
			$this->title1 = $this->createTitle1();
		}
		return $this->title1;
	}
	
	protected function createTitle1() {
		return NULL;
	}

	public function setTitle1($title1) {
		$this->title1 = $this->validateTitle1($title1);
	}

	protected function validateTitle1($title1) {
	
		return $title1;
	}

	public function getGiftedTalented($autoCreate = TRUE) {
		if ($this->giftedTalented===NULL && $autoCreate && ! isset($this->_overrides['giftedTalented']) ) {
			$this->giftedTalented = $this->createGiftedTalented();
		}
		return $this->giftedTalented;
	}
	
	protected function createGiftedTalented() {
		return NULL;
	}

	public function setGiftedTalented($giftedTalented) {
		$this->giftedTalented = $this->validateGiftedTalented($giftedTalented);
	}

	protected function validateGiftedTalented($giftedTalented) {
	
		return $giftedTalented;
	}

	public function getEconomicDisadvantage($autoCreate = TRUE) {
		if ($this->economicDisadvantage===NULL && $autoCreate && ! isset($this->_overrides['economicDisadvantage']) ) {
			$this->economicDisadvantage = $this->createEconomicDisadvantage();
		}
		return $this->economicDisadvantage;
	}
	
	protected function createEconomicDisadvantage() {
		return NULL;
	}

	public function setEconomicDisadvantage($economicDisadvantage) {
		$this->economicDisadvantage = $this->validateEconomicDisadvantage($economicDisadvantage);
	}

	protected function validateEconomicDisadvantage($economicDisadvantage) {
	
		return $economicDisadvantage;
	}

	public function getELL($autoCreate = TRUE) {
		if ($this->eLL===NULL && $autoCreate && ! isset($this->_overrides['eLL']) ) {
			$this->eLL = $this->createELL();
		}
		return $this->eLL;
	}
	
	protected function createELL() {
		return NULL;
	}

	public function setELL($eLL) {
		$this->eLL = $this->validateELL($eLL);
	}

	protected function validateELL($eLL) {
	
		return $eLL;
	}

	public function getHomeless($autoCreate = TRUE) {
		if ($this->homeless===NULL && $autoCreate && ! isset($this->_overrides['homeless']) ) {
			$this->homeless = $this->createHomeless();
		}
		return $this->homeless;
	}
	
	protected function createHomeless() {
		return NULL;
	}

	public function setHomeless($homeless) {
		$this->homeless = $this->validateHomeless($homeless);
	}

	protected function validateHomeless($homeless) {
	
		return $homeless;
	}

	public function getSection504($autoCreate = TRUE) {
		if ($this->section504===NULL && $autoCreate && ! isset($this->_overrides['section504']) ) {
			$this->section504 = $this->createSection504();
		}
		return $this->section504;
	}
	
	protected function createSection504() {
		return NULL;
	}

	public function setSection504($section504) {
		$this->section504 = $this->validateSection504($section504);
	}

	protected function validateSection504($section504) {
	
		return $section504;
	}

	public function getVocationalConcentrator($autoCreate = TRUE) {
		if ($this->vocationalConcentrator===NULL && $autoCreate && ! isset($this->_overrides['vocationalConcentrator']) ) {
			$this->vocationalConcentrator = $this->createVocationalConcentrator();
		}
		return $this->vocationalConcentrator;
	}
	
	protected function createVocationalConcentrator() {
		return NULL;
	}

	public function setVocationalConcentrator($vocationalConcentrator) {
		$this->vocationalConcentrator = $this->validateVocationalConcentrator($vocationalConcentrator);
	}

	protected function validateVocationalConcentrator($vocationalConcentrator) {
	
		return $vocationalConcentrator;
	}

	public function getImmigrant($autoCreate = TRUE) {
		if ($this->immigrant===NULL && $autoCreate && ! isset($this->_overrides['immigrant']) ) {
			$this->immigrant = $this->createImmigrant();
		}
		return $this->immigrant;
	}
	
	protected function createImmigrant() {
		return NULL;
	}

	public function setImmigrant($immigrant) {
		$this->immigrant = $this->validateImmigrant($immigrant);
	}

	protected function validateImmigrant($immigrant) {
	
		return $immigrant;
	}

	public function getNeglectedDelinquent($autoCreate = TRUE) {
		if ($this->neglectedDelinquent===NULL && $autoCreate && ! isset($this->_overrides['neglectedDelinquent']) ) {
			$this->neglectedDelinquent = $this->createNeglectedDelinquent();
		}
		return $this->neglectedDelinquent;
	}
	
	protected function createNeglectedDelinquent() {
		return NULL;
	}

	public function setNeglectedDelinquent($neglectedDelinquent) {
		$this->neglectedDelinquent = $this->validateNeglectedDelinquent($neglectedDelinquent);
	}

	protected function validateNeglectedDelinquent($neglectedDelinquent) {
	
		return $neglectedDelinquent;
	}
} // end class StudentPersonalData
