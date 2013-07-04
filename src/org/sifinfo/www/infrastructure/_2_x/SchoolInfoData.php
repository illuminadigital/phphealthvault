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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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
		if (!is_LocalId($localId)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'localId', 'LocalId'));
		}
	
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

	public function getNCESId($autoCreate = TRUE) {
		if ($this->nCESId===NULL && $autoCreate && ! isset($this->_overrides['nCESId']) ) {
			$this->nCESId = $this->createNCESId();
		}
		return $this->nCESId;
	}
	
	protected function createNCESId() {
		return NULL;
	}

	public function setNCESId($nCESId) {
		$this->nCESId = $this->validateNCESId($nCESId);
	}

	protected function validateNCESId($nCESId) {
	
		return $nCESId;
	}

	public function getSchoolName($autoCreate = TRUE) {
		if ($this->schoolName===NULL && $autoCreate && ! isset($this->_overrides['schoolName']) ) {
			$this->schoolName = $this->createSchoolName();
		}
		return $this->schoolName;
	}
	
	protected function createSchoolName() {
		return NULL;
	}

	public function setSchoolName($schoolName) {
		$this->schoolName = $this->validateSchoolName($schoolName);
	}

	protected function validateSchoolName($schoolName) {
		if (!is_SchoolName($schoolName)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'schoolName', 'SchoolName'));
		}
	
		return $schoolName;
	}

	public function getSchoolURL($autoCreate = TRUE) {
		if ($this->schoolURL===NULL && $autoCreate && ! isset($this->_overrides['schoolURL']) ) {
			$this->schoolURL = $this->createSchoolURL();
		}
		return $this->schoolURL;
	}
	
	protected function createSchoolURL() {
		return NULL;
	}

	public function setSchoolURL($schoolURL) {
		$this->schoolURL = $this->validateSchoolURL($schoolURL);
	}

	protected function validateSchoolURL($schoolURL) {
	
		return $schoolURL;
	}

	public function getSchoolContactList($autoCreate = TRUE) {
		if ($this->schoolContactList===NULL && $autoCreate && ! isset($this->_overrides['schoolContactList']) ) {
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
		if ( $schoolContactList === FALSE ) {
			$this->_overrides['schoolContactList'] = TRUE;
			return NULL;
		}

		if ( ! $schoolContactList instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolContactListType  && ! is_null($schoolContactList) ) {
			$schoolContactList = new \org\sifinfo\www\infrastructure\_2_x\SchoolContactListType ($schoolContactList);
		}

		unset ($this->_overrides['schoolContactList']);
	
		return $schoolContactList;
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

	public function getIdentificationInfoList($autoCreate = TRUE) {
		if ($this->identificationInfoList===NULL && $autoCreate && ! isset($this->_overrides['identificationInfoList']) ) {
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
		if ( $identificationInfoList === FALSE ) {
			$this->_overrides['identificationInfoList'] = TRUE;
			return NULL;
		}

		if ( ! $identificationInfoList instanceof \org\sifinfo\www\infrastructure\_2_x\IdentificationInfoListType  && ! is_null($identificationInfoList) ) {
			$identificationInfoList = new \org\sifinfo\www\infrastructure\_2_x\IdentificationInfoListType ($identificationInfoList);
		}

		unset ($this->_overrides['identificationInfoList']);
	
		return $identificationInfoList;
	}

	public function getGradeLevels($autoCreate = TRUE) {
		if ($this->gradeLevels===NULL && $autoCreate && ! isset($this->_overrides['gradeLevels']) ) {
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
		if ( $gradeLevels === FALSE ) {
			$this->_overrides['gradeLevels'] = TRUE;
			return NULL;
		}

		if ( ! $gradeLevels instanceof \org\sifinfo\www\infrastructure\_2_x\GradeLevelsType  && ! is_null($gradeLevels) ) {
			$gradeLevels = new \org\sifinfo\www\infrastructure\_2_x\GradeLevelsType ($gradeLevels);
		}

		unset ($this->_overrides['gradeLevels']);
	
		return $gradeLevels;
	}

	public function getSifExtendedElements($autoCreate = TRUE) {
		if ($this->sifExtendedElements===NULL && $autoCreate && ! isset($this->_overrides['sifExtendedElements']) ) {
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
		if ( $sifExtendedElements === FALSE ) {
			$this->_overrides['sifExtendedElements'] = TRUE;
			return NULL;
		}

		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}

		unset ($this->_overrides['sifExtendedElements']);
	
		return $sifExtendedElements;
	}
} // end class SchoolInfoData
