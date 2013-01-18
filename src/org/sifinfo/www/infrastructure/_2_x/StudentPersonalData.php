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

	public function getLocalId() {
		if ($this->localId===NULL) {
			$this->localId = $this->createLocalId();
		}
		return $this->localId;
	}
	
	protected function createLocalId() {
		return new \org\sifinfo\www\infrastructure\_2_x\LocalIdType();
	}

	public function setLocalId($localId) {
		$this->localId = $this->validateLocalId($localId);
	}

	protected function validateLocalId($localId) {
		if ( ! $localId instanceof \org\sifinfo\www\infrastructure\_2_x\LocalIdType  && ! is_null($localId) ) {
			$localId = new \org\sifinfo\www\infrastructure\_2_x\LocalIdType ($localId);
		}
	
		return $localId;
	}

	public function getStateProvinceId() {
		if ($this->stateProvinceId===NULL) {
			$this->stateProvinceId = $this->createStateProvinceId();
		}
		return $this->stateProvinceId;
	}
	
	protected function createStateProvinceId() {
		return new \org\sifinfo\www\infrastructure\_2_x\StateProvinceIdType();
	}

	public function setStateProvinceId($stateProvinceId) {
		$this->stateProvinceId = $this->validateStateProvinceId($stateProvinceId);
	}

	protected function validateStateProvinceId($stateProvinceId) {
		if ( ! $stateProvinceId instanceof \org\sifinfo\www\infrastructure\_2_x\StateProvinceIdType  && ! is_null($stateProvinceId) ) {
			$stateProvinceId = new \org\sifinfo\www\infrastructure\_2_x\StateProvinceIdType ($stateProvinceId);
		}
	
		return $stateProvinceId;
	}

	public function getSSN() {
		if ($this->sSN===NULL) {
			$this->sSN = $this->createSSN();
		}
		return $this->sSN;
	}
	
	protected function createSSN() {
		return new \org\sifinfo\www\infrastructure\_2_x\SSNType();
	}

	public function setSSN($sSN) {
		$this->sSN = $this->validateSSN($sSN);
	}

	protected function validateSSN($sSN) {
		if ( ! $sSN instanceof \org\sifinfo\www\infrastructure\_2_x\SSNType  && ! is_null($sSN) ) {
			$sSN = new \org\sifinfo\www\infrastructure\_2_x\SSNType ($sSN);
		}
	
		return $sSN;
	}

	public function getOtherIdList() {
		if ($this->otherIdList===NULL) {
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
		if ( ! $otherIdList instanceof \org\sifinfo\www\infrastructure\_2_x\OtherIdList  && ! is_null($otherIdList) ) {
			$otherIdList = new \org\sifinfo\www\infrastructure\_2_x\OtherIdList ($otherIdList);
		}
	
		return $otherIdList;
	}

	public function getName() {
		if ($this->name===NULL) {
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

	public function getOtherNames() {
		if ($this->otherNames===NULL) {
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
		if ( ! $otherNames instanceof \org\sifinfo\www\infrastructure\_2_x\OtherNamesType  && ! is_null($otherNames) ) {
			$otherNames = new \org\sifinfo\www\infrastructure\_2_x\OtherNamesType ($otherNames);
		}
	
		return $otherNames;
	}

	public function getDemographicsData() {
		if ($this->demographicsData===NULL) {
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
		if ( ! $demographicsData instanceof \org\sifinfo\www\infrastructure\_2_x\DemographicsData  && ! is_null($demographicsData) ) {
			$demographicsData = new \org\sifinfo\www\infrastructure\_2_x\DemographicsData ($demographicsData);
		}
	
		return $demographicsData;
	}

	public function getAddressList() {
		if ($this->addressList===NULL) {
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
		if ( ! $addressList instanceof \org\sifinfo\www\infrastructure\_2_x\AddressListType  && ! is_null($addressList) ) {
			$addressList = new \org\sifinfo\www\infrastructure\_2_x\AddressListType ($addressList);
		}
	
		return $addressList;
	}

	public function getPhoneNumberList() {
		if ($this->phoneNumberList===NULL) {
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
		if ( ! $phoneNumberList instanceof \org\sifinfo\www\infrastructure\_2_x\PhoneNumberListType  && ! is_null($phoneNumberList) ) {
			$phoneNumberList = new \org\sifinfo\www\infrastructure\_2_x\PhoneNumberListType ($phoneNumberList);
		}
	
		return $phoneNumberList;
	}

	public function getIDEA() {
		if ($this->iDEA===NULL) {
			$this->iDEA = $this->createIDEA();
		}
		return $this->iDEA;
	}
	
	protected function createIDEA() {
		return new \org\sifinfo\www\infrastructure\_2_x\IDEAType();
	}

	public function setIDEA($iDEA) {
		$this->iDEA = $this->validateIDEA($iDEA);
	}

	protected function validateIDEA($iDEA) {
		if ( ! $iDEA instanceof \org\sifinfo\www\infrastructure\_2_x\IDEAType  && ! is_null($iDEA) ) {
			$iDEA = new \org\sifinfo\www\infrastructure\_2_x\IDEAType ($iDEA);
		}
	
		return $iDEA;
	}

	public function getMigrant() {
		if ($this->migrant===NULL) {
			$this->migrant = $this->createMigrant();
		}
		return $this->migrant;
	}
	
	protected function createMigrant() {
		return new \org\sifinfo\www\infrastructure\_2_x\MigrantType();
	}

	public function setMigrant($migrant) {
		$this->migrant = $this->validateMigrant($migrant);
	}

	protected function validateMigrant($migrant) {
		if ( ! $migrant instanceof \org\sifinfo\www\infrastructure\_2_x\MigrantType  && ! is_null($migrant) ) {
			$migrant = new \org\sifinfo\www\infrastructure\_2_x\MigrantType ($migrant);
		}
	
		return $migrant;
	}

	public function getTitle1() {
		if ($this->title1===NULL) {
			$this->title1 = $this->createTitle1();
		}
		return $this->title1;
	}
	
	protected function createTitle1() {
		return new \org\sifinfo\www\infrastructure\_2_x\Title1Type();
	}

	public function setTitle1($title1) {
		$this->title1 = $this->validateTitle1($title1);
	}

	protected function validateTitle1($title1) {
		if ( ! $title1 instanceof \org\sifinfo\www\infrastructure\_2_x\Title1Type  && ! is_null($title1) ) {
			$title1 = new \org\sifinfo\www\infrastructure\_2_x\Title1Type ($title1);
		}
	
		return $title1;
	}

	public function getGiftedTalented() {
		if ($this->giftedTalented===NULL) {
			$this->giftedTalented = $this->createGiftedTalented();
		}
		return $this->giftedTalented;
	}
	
	protected function createGiftedTalented() {
		return new \org\sifinfo\www\infrastructure\_2_x\GiftedTalentedType();
	}

	public function setGiftedTalented($giftedTalented) {
		$this->giftedTalented = $this->validateGiftedTalented($giftedTalented);
	}

	protected function validateGiftedTalented($giftedTalented) {
		if ( ! $giftedTalented instanceof \org\sifinfo\www\infrastructure\_2_x\GiftedTalentedType  && ! is_null($giftedTalented) ) {
			$giftedTalented = new \org\sifinfo\www\infrastructure\_2_x\GiftedTalentedType ($giftedTalented);
		}
	
		return $giftedTalented;
	}

	public function getEconomicDisadvantage() {
		if ($this->economicDisadvantage===NULL) {
			$this->economicDisadvantage = $this->createEconomicDisadvantage();
		}
		return $this->economicDisadvantage;
	}
	
	protected function createEconomicDisadvantage() {
		return new \org\sifinfo\www\infrastructure\_2_x\EconomicDisadvantageType();
	}

	public function setEconomicDisadvantage($economicDisadvantage) {
		$this->economicDisadvantage = $this->validateEconomicDisadvantage($economicDisadvantage);
	}

	protected function validateEconomicDisadvantage($economicDisadvantage) {
		if ( ! $economicDisadvantage instanceof \org\sifinfo\www\infrastructure\_2_x\EconomicDisadvantageType  && ! is_null($economicDisadvantage) ) {
			$economicDisadvantage = new \org\sifinfo\www\infrastructure\_2_x\EconomicDisadvantageType ($economicDisadvantage);
		}
	
		return $economicDisadvantage;
	}

	public function getELL() {
		if ($this->eLL===NULL) {
			$this->eLL = $this->createELL();
		}
		return $this->eLL;
	}
	
	protected function createELL() {
		return new \org\sifinfo\www\infrastructure\_2_x\ELLType();
	}

	public function setELL($eLL) {
		$this->eLL = $this->validateELL($eLL);
	}

	protected function validateELL($eLL) {
		if ( ! $eLL instanceof \org\sifinfo\www\infrastructure\_2_x\ELLType  && ! is_null($eLL) ) {
			$eLL = new \org\sifinfo\www\infrastructure\_2_x\ELLType ($eLL);
		}
	
		return $eLL;
	}

	public function getHomeless() {
		if ($this->homeless===NULL) {
			$this->homeless = $this->createHomeless();
		}
		return $this->homeless;
	}
	
	protected function createHomeless() {
		return new \org\sifinfo\www\infrastructure\_2_x\HomelessType();
	}

	public function setHomeless($homeless) {
		$this->homeless = $this->validateHomeless($homeless);
	}

	protected function validateHomeless($homeless) {
		if ( ! $homeless instanceof \org\sifinfo\www\infrastructure\_2_x\HomelessType  && ! is_null($homeless) ) {
			$homeless = new \org\sifinfo\www\infrastructure\_2_x\HomelessType ($homeless);
		}
	
		return $homeless;
	}

	public function getSection504() {
		if ($this->section504===NULL) {
			$this->section504 = $this->createSection504();
		}
		return $this->section504;
	}
	
	protected function createSection504() {
		return new \org\sifinfo\www\infrastructure\_2_x\Section504Type();
	}

	public function setSection504($section504) {
		$this->section504 = $this->validateSection504($section504);
	}

	protected function validateSection504($section504) {
		if ( ! $section504 instanceof \org\sifinfo\www\infrastructure\_2_x\Section504Type  && ! is_null($section504) ) {
			$section504 = new \org\sifinfo\www\infrastructure\_2_x\Section504Type ($section504);
		}
	
		return $section504;
	}

	public function getVocationalConcentrator() {
		if ($this->vocationalConcentrator===NULL) {
			$this->vocationalConcentrator = $this->createVocationalConcentrator();
		}
		return $this->vocationalConcentrator;
	}
	
	protected function createVocationalConcentrator() {
		return new \org\sifinfo\www\infrastructure\_2_x\VocationalConcentratorType();
	}

	public function setVocationalConcentrator($vocationalConcentrator) {
		$this->vocationalConcentrator = $this->validateVocationalConcentrator($vocationalConcentrator);
	}

	protected function validateVocationalConcentrator($vocationalConcentrator) {
		if ( ! $vocationalConcentrator instanceof \org\sifinfo\www\infrastructure\_2_x\VocationalConcentratorType  && ! is_null($vocationalConcentrator) ) {
			$vocationalConcentrator = new \org\sifinfo\www\infrastructure\_2_x\VocationalConcentratorType ($vocationalConcentrator);
		}
	
		return $vocationalConcentrator;
	}

	public function getImmigrant() {
		if ($this->immigrant===NULL) {
			$this->immigrant = $this->createImmigrant();
		}
		return $this->immigrant;
	}
	
	protected function createImmigrant() {
		return new \org\sifinfo\www\infrastructure\_2_x\ImmigrantType();
	}

	public function setImmigrant($immigrant) {
		$this->immigrant = $this->validateImmigrant($immigrant);
	}

	protected function validateImmigrant($immigrant) {
		if ( ! $immigrant instanceof \org\sifinfo\www\infrastructure\_2_x\ImmigrantType  && ! is_null($immigrant) ) {
			$immigrant = new \org\sifinfo\www\infrastructure\_2_x\ImmigrantType ($immigrant);
		}
	
		return $immigrant;
	}

	public function getNeglectedDelinquent() {
		if ($this->neglectedDelinquent===NULL) {
			$this->neglectedDelinquent = $this->createNeglectedDelinquent();
		}
		return $this->neglectedDelinquent;
	}
	
	protected function createNeglectedDelinquent() {
		return new \org\sifinfo\www\infrastructure\_2_x\NeglectedDelinquentType();
	}

	public function setNeglectedDelinquent($neglectedDelinquent) {
		$this->neglectedDelinquent = $this->validateNeglectedDelinquent($neglectedDelinquent);
	}

	protected function validateNeglectedDelinquent($neglectedDelinquent) {
		if ( ! $neglectedDelinquent instanceof \org\sifinfo\www\infrastructure\_2_x\NeglectedDelinquentType  && ! is_null($neglectedDelinquent) ) {
			$neglectedDelinquent = new \org\sifinfo\www\infrastructure\_2_x\NeglectedDelinquentType ($neglectedDelinquent);
		}
	
		return $neglectedDelinquent;
	}
} // end class StudentPersonalData
