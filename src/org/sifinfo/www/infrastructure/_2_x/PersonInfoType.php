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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getEmailList($autoCreate = TRUE) {
		if ($this->emailList===NULL && $autoCreate && ! isset($this->_overrides['emailList']) ) {
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
		if ( $emailList === FALSE ) {
			$this->_overrides['emailList'] = TRUE;
			return NULL;
		}

		if ( ! $emailList instanceof \org\sifinfo\www\infrastructure\_2_x\EmailListType  && ! is_null($emailList) ) {
			$emailList = new \org\sifinfo\www\infrastructure\_2_x\EmailListType ($emailList);
		}

		unset ($this->_overrides['emailList']);
	
		return $emailList;
	}
} // end class PersonInfoType
