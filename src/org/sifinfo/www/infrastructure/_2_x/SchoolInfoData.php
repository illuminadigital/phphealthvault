<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SchoolInfoData")
 */
class SchoolInfoData {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LocalId", name="LocalId")
	 */
	protected $localId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StateProvinceIdType", name="StateProvinceId")
	 */
	protected $stateProvinceId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCESIdType", name="NCESId")
	 */
	protected $nCESId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolName", name="SchoolName")
	 */
	protected $schoolName;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolURLType", name="SchoolURL")
	 */
	protected $schoolURL;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolContactListType", name="SchoolContactList")
	 */
	protected $schoolContactList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AddressListType", name="AddressList")
	 */
	protected $addressList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PhoneNumberListType", name="PhoneNumberList")
	 */
	protected $phoneNumberList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdentificationInfoListType", name="IdentificationInfoList")
	 */
	protected $identificationInfoList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GradeLevelsType", name="GradeLevels")
	 */
	protected $gradeLevels;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($localId = NULL, $stateProvinceId = NULL, $nCESId = NULL, $schoolName = NULL, $schoolURL = NULL, $schoolContactList = NULL, $addressList = NULL, $phoneNumberList = NULL, $identificationInfoList = NULL, $gradeLevels = NULL, $sifExtendedElements = NULL) {
		$this->localId = ($localId===NULL) ? NULL : $this->validateLocalId($localId);
		$this->stateProvinceId = ($stateProvinceId===NULL) ? NULL : $this->validateStateProvinceId($stateProvinceId);
		$this->nCESId = ($nCESId===NULL) ? NULL : $this->validateNCESId($nCESId);
		$this->schoolName = ($schoolName===NULL) ? NULL : $this->validateSchoolName($schoolName);
		$this->schoolURL = ($schoolURL===NULL) ? NULL : $this->validateSchoolURL($schoolURL);
		$this->schoolContactList = ($schoolContactList===NULL) ? NULL : $this->validateSchoolContactList($schoolContactList);
		$this->addressList = ($addressList===NULL) ? NULL : $this->validateAddressList($addressList);
		$this->phoneNumberList = ($phoneNumberList===NULL) ? NULL : $this->validatePhoneNumberList($phoneNumberList);
		$this->identificationInfoList = ($identificationInfoList===NULL) ? NULL : $this->validateIdentificationInfoList($identificationInfoList);
		$this->gradeLevels = ($gradeLevels===NULL) ? NULL : $this->validateGradeLevels($gradeLevels);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getLocalId() {
		if ($this->localId===NULL) {
			$this->localId = $this->createLocalId();
		}
		return $this->localId;
	}
	
	protected function createLocalId() {
		return new \org\sifinfo\www\infrastructure\_2_x\LocalId();
	}

	public function setLocalId($localId) {
		$this->localId = $this->validateLocalId($localId);
	}

	protected function validateLocalId($localId) {
		if ( ! $localId instanceof \org\sifinfo\www\infrastructure\_2_x\LocalId ) {
			$localId = new \org\sifinfo\www\infrastructure\_2_x\LocalId ($localId);
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

	public function getNCESId() {
		if ($this->nCESId===NULL) {
			$this->nCESId = $this->createNCESId();
		}
		return $this->nCESId;
	}
	
	protected function createNCESId() {
		return new \org\sifinfo\www\infrastructure\_2_x\NCESIdType();
	}

	public function setNCESId($nCESId) {
		$this->nCESId = $this->validateNCESId($nCESId);
	}

	protected function validateNCESId($nCESId) {
		if ( ! $nCESId instanceof \org\sifinfo\www\infrastructure\_2_x\NCESIdType  && ! is_null($nCESId) ) {
			$nCESId = new \org\sifinfo\www\infrastructure\_2_x\NCESIdType ($nCESId);
		}
	
		return $nCESId;
	}

	public function getSchoolName() {
		if ($this->schoolName===NULL) {
			$this->schoolName = $this->createSchoolName();
		}
		return $this->schoolName;
	}
	
	protected function createSchoolName() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolName();
	}

	public function setSchoolName($schoolName) {
		$this->schoolName = $this->validateSchoolName($schoolName);
	}

	protected function validateSchoolName($schoolName) {
		if ( ! $schoolName instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolName ) {
			$schoolName = new \org\sifinfo\www\infrastructure\_2_x\SchoolName ($schoolName);
		}
	
		return $schoolName;
	}

	public function getSchoolURL() {
		if ($this->schoolURL===NULL) {
			$this->schoolURL = $this->createSchoolURL();
		}
		return $this->schoolURL;
	}
	
	protected function createSchoolURL() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolURLType();
	}

	public function setSchoolURL($schoolURL) {
		$this->schoolURL = $this->validateSchoolURL($schoolURL);
	}

	protected function validateSchoolURL($schoolURL) {
		if ( ! $schoolURL instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolURLType  && ! is_null($schoolURL) ) {
			$schoolURL = new \org\sifinfo\www\infrastructure\_2_x\SchoolURLType ($schoolURL);
		}
	
		return $schoolURL;
	}

	public function getSchoolContactList() {
		if ($this->schoolContactList===NULL) {
			$this->schoolContactList = $this->createSchoolContactList();
		}
		return $this->schoolContactList;
	}
	
	protected function createSchoolContactList() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolContactListType();
	}

	public function setSchoolContactList($schoolContactList) {
		$this->schoolContactList = $this->validateSchoolContactList($schoolContactList);
	}

	protected function validateSchoolContactList($schoolContactList) {
		if ( ! $schoolContactList instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolContactListType  && ! is_null($schoolContactList) ) {
			$schoolContactList = new \org\sifinfo\www\infrastructure\_2_x\SchoolContactListType ($schoolContactList);
		}
	
		return $schoolContactList;
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

	public function getIdentificationInfoList() {
		if ($this->identificationInfoList===NULL) {
			$this->identificationInfoList = $this->createIdentificationInfoList();
		}
		return $this->identificationInfoList;
	}
	
	protected function createIdentificationInfoList() {
		return new \org\sifinfo\www\infrastructure\_2_x\IdentificationInfoListType();
	}

	public function setIdentificationInfoList($identificationInfoList) {
		$this->identificationInfoList = $this->validateIdentificationInfoList($identificationInfoList);
	}

	protected function validateIdentificationInfoList($identificationInfoList) {
		if ( ! $identificationInfoList instanceof \org\sifinfo\www\infrastructure\_2_x\IdentificationInfoListType  && ! is_null($identificationInfoList) ) {
			$identificationInfoList = new \org\sifinfo\www\infrastructure\_2_x\IdentificationInfoListType ($identificationInfoList);
		}
	
		return $identificationInfoList;
	}

	public function getGradeLevels() {
		if ($this->gradeLevels===NULL) {
			$this->gradeLevels = $this->createGradeLevels();
		}
		return $this->gradeLevels;
	}
	
	protected function createGradeLevels() {
		return new \org\sifinfo\www\infrastructure\_2_x\GradeLevelsType();
	}

	public function setGradeLevels($gradeLevels) {
		$this->gradeLevels = $this->validateGradeLevels($gradeLevels);
	}

	protected function validateGradeLevels($gradeLevels) {
		if ( ! $gradeLevels instanceof \org\sifinfo\www\infrastructure\_2_x\GradeLevelsType  && ! is_null($gradeLevels) ) {
			$gradeLevels = new \org\sifinfo\www\infrastructure\_2_x\GradeLevelsType ($gradeLevels);
		}
	
		return $gradeLevels;
	}

	public function getSifExtendedElements() {
		if ($this->sifExtendedElements===NULL) {
			$this->sifExtendedElements = $this->createSifExtendedElements();
		}
		return $this->sifExtendedElements;
	}
	
	protected function createSifExtendedElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType();
	}

	public function setSifExtendedElements($sifExtendedElements) {
		$this->sifExtendedElements = $this->validateSifExtendedElements($sifExtendedElements);
	}

	protected function validateSifExtendedElements($sifExtendedElements) {
		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}
	
		return $sifExtendedElements;
	}
} // end class SchoolInfoData
