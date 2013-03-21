<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ContactInfoType")
 */
class ContactInfoType {
	/**
	 * Common element used to supply information for a contact person at a school, LEA, or other institution.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Name", name="Name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="string", name="PositionTitle")
	 */
	protected $positionTitle;

	/**
	 * @XmlText	(type="string", name="Role")
	 */
	protected $role;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AddressType", name="Address")
	 */
	protected $address;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\EmailListType", name="EmailList")
	 */
	protected $emailList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PhoneNumberListType", name="PhoneNumberList")
	 */
	protected $phoneNumberList;

	public function __construct($name = NULL, $positionTitle = NULL, $role = NULL, $address = NULL, $emailList = NULL, $phoneNumberList = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->positionTitle = ($positionTitle===NULL) ? NULL : $this->validatePositionTitle($positionTitle);
		$this->role = ($role===NULL) ? NULL : $this->validateRole($role);
		$this->address = ($address===NULL) ? NULL : $this->validateAddress($address);
		$this->emailList = ($emailList===NULL) ? NULL : $this->validateEmailList($emailList);
		$this->phoneNumberList = ($phoneNumberList===NULL) ? NULL : $this->validatePhoneNumberList($phoneNumberList);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \org\sifinfo\www\infrastructure\_2_x\Name();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \org\sifinfo\www\infrastructure\_2_x\Name ) {
			$name = new \org\sifinfo\www\infrastructure\_2_x\Name ($name);
		}
	
		return $name;
	}

	public function getPositionTitle($autoCreate = TRUE) {
		if ($this->positionTitle===NULL && $autoCreate && ! isset($this->_overrides['positionTitle']) ) {
			$this->positionTitle = $this->createPositionTitle();
		}
		return $this->positionTitle;
	}
	
	protected function createPositionTitle() {
		return NULL;
	}

	public function setPositionTitle($positionTitle) {
		$this->positionTitle = $this->validatePositionTitle($positionTitle);
	}

	protected function validatePositionTitle($positionTitle) {
		if ( ! is_string($positionTitle) && ! is_null($positionTitle) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'positionTitle', 'string'));
		}
	
		return $positionTitle;
	}

	public function getRole($autoCreate = TRUE) {
		if ($this->role===NULL && $autoCreate && ! isset($this->_overrides['role']) ) {
			$this->role = $this->createRole();
		}
		return $this->role;
	}
	
	protected function createRole() {
		return NULL;
	}

	public function setRole($role) {
		$this->role = $this->validateRole($role);
	}

	protected function validateRole($role) {
		if ( ! is_string($role) && ! is_null($role) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'role', 'string'));
		}
	
		return $role;
	}

	public function getAddress($autoCreate = TRUE) {
		if ($this->address===NULL && $autoCreate && ! isset($this->_overrides['address']) ) {
			$this->address = $this->createAddress();
		}
		return $this->address;
	}
	
	protected function createAddress() {
		return new \org\sifinfo\www\infrastructure\_2_x\AddressType();
	}

	public function setAddress($address) {
		$this->address = $this->validateAddress($address);
	}

	protected function validateAddress($address) {
		if ( $address === FALSE ) {
			$this->_overrides['address'] = TRUE;
			return NULL;
		}

		if ( ! $address instanceof \org\sifinfo\www\infrastructure\_2_x\AddressType  && ! is_null($address) ) {
			$address = new \org\sifinfo\www\infrastructure\_2_x\AddressType ($address);
		}

		unset ($this->_overrides['address']);
	
		return $address;
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
} // end class ContactInfoType
