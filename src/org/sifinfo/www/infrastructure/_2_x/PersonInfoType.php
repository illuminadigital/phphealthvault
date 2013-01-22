<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="PersonInfoType")
 */
class PersonInfoType {
	/**
	 * A wrapper element for information that describes a generic person. This element may be used as a basic building block for person-type objects.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LocalIdType", name="LocalId")
	 */
	protected $localId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherIdListType", name="OtherIdList")
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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DemographicsType", name="Demographics")
	 */
	protected $demographics;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AddressListType", name="AddressList")
	 */
	protected $addressList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PhoneNumberListType", name="PhoneNumberList")
	 */
	protected $phoneNumberList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\EmailListType", name="EmailList")
	 */
	protected $emailList;

	public function __construct($localId = NULL, $otherIdList = NULL, $name = NULL, $otherNames = NULL, $demographics = NULL, $addressList = NULL, $phoneNumberList = NULL, $emailList = NULL) {
		$this->localId = ($localId===NULL) ? NULL : $this->validateLocalId($localId);
		$this->otherIdList = ($otherIdList===NULL) ? NULL : $this->validateOtherIdList($otherIdList);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->otherNames = ($otherNames===NULL) ? NULL : $this->validateOtherNames($otherNames);
		$this->demographics = ($demographics===NULL) ? NULL : $this->validateDemographics($demographics);
		$this->addressList = ($addressList===NULL) ? NULL : $this->validateAddressList($addressList);
		$this->phoneNumberList = ($phoneNumberList===NULL) ? NULL : $this->validatePhoneNumberList($phoneNumberList);
		$this->emailList = ($emailList===NULL) ? NULL : $this->validateEmailList($emailList);
	}

	public function getLocalId() {
		if ($this->localId===NULL) {
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

	public function getOtherIdList() {
		if ($this->otherIdList===NULL) {
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
		if ( ! $otherIdList instanceof \org\sifinfo\www\infrastructure\_2_x\OtherIdListType  && ! is_null($otherIdList) ) {
			$otherIdList = new \org\sifinfo\www\infrastructure\_2_x\OtherIdListType ($otherIdList);
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

	public function getDemographics() {
		if ($this->demographics===NULL) {
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
		if ( ! $demographics instanceof \org\sifinfo\www\infrastructure\_2_x\DemographicsType  && ! is_null($demographics) ) {
			$demographics = new \org\sifinfo\www\infrastructure\_2_x\DemographicsType ($demographics);
		}
	
		return $demographics;
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

	public function getEmailList() {
		if ($this->emailList===NULL) {
			$this->emailList = $this->createEmailList();
		}
		return $this->emailList;
	}
	
	protected function createEmailList() {
		return new \org\sifinfo\www\infrastructure\_2_x\EmailListType();
	}

	public function setEmailList($emailList) {
		$this->emailList = $this->validateEmailList($emailList);
	}

	protected function validateEmailList($emailList) {
		if ( ! $emailList instanceof \org\sifinfo\www\infrastructure\_2_x\EmailListType  && ! is_null($emailList) ) {
			$emailList = new \org\sifinfo\www\infrastructure\_2_x\EmailListType ($emailList);
		}
	
		return $emailList;
	}
} // end class PersonInfoType
