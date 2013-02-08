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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Name", name="Name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="PositionTitle")
	 */
	protected $positionTitle;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="Role")
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

	public function getName() {
		if ($this->name===NULL) {
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

	public function getPositionTitle() {
		if ($this->positionTitle===NULL) {
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
		if ( ! is_normalizedString($positionTitle) && ! is_null($positionTitle) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'positionTitle', 'normalizedString'));
		}
	
		return $positionTitle;
	}

	public function getRole() {
		if ($this->role===NULL) {
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
		if ( ! is_normalizedString($role) && ! is_null($role) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'role', 'normalizedString'));
		}
	
		return $role;
	}

	public function getAddress() {
		if ($this->address===NULL) {
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
		if ( ! $address instanceof \org\sifinfo\www\infrastructure\_2_x\AddressType  && ! is_null($address) ) {
			$address = new \org\sifinfo\www\infrastructure\_2_x\AddressType ($address);
		}
	
		return $address;
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
} // end class ContactInfoType
