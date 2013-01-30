<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="contact")
 */
class Contact {
	/**
	 * Contact
	 * Defines a set of contact information.
	 * The contact information can consist of any number ofphysical/mailing addresses, phone numbers, or emailaddresses.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Address", collection="true", name="address")
	 */
	protected $address;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Phone", collection="true", name="phone")
	 */
	protected $phone;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Email", collection="true", name="email")
	 */
	protected $email;

	public function __construct($address = NULL, $phone = NULL, $email = NULL) {
		$this->address = ($address===NULL) ? NULL : $this->validateAddress($address);
		$this->phone = ($phone===NULL) ? NULL : $this->validatePhone($phone);
		$this->email = ($email===NULL) ? NULL : $this->validateEmail($email);
	}

	public function getAddress() {
		if ($this->address===NULL) {
			$this->address = $this->createAddress();
		}
		return $this->address;
	}
	
	protected function createAddress() {
		return array();
	}

	public function setAddress($address) {
		$this->address = $this->validateAddress($address);
	}

	protected function validateAddress($address) {
		if ( ! is_array ($address) && ! is_null($address) ) {
			$address = array($address);
		}
		$count = count($address);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'address', 0));
		}
		foreach ($address as $entry) {
			if (!($entry instanceof Address)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'address', 'address'));
			}
		}
	
		return $address;
	}

	public function addAddress($address) {
		$this->address[] = $address;
	}

	public function getPhone() {
		if ($this->phone===NULL) {
			$this->phone = $this->createPhone();
		}
		return $this->phone;
	}
	
	protected function createPhone() {
		return array();
	}

	public function setPhone($phone) {
		$this->phone = $this->validatePhone($phone);
	}

	protected function validatePhone($phone) {
		if ( ! is_array ($phone) && ! is_null($phone) ) {
			$phone = array($phone);
		}
		$count = count($phone);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'phone', 0));
		}
		foreach ($phone as $entry) {
			if (!($entry instanceof Phone)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'phone', 'phone'));
			}
		}
	
		return $phone;
	}

	public function addPhone($phone) {
		$this->phone[] = $phone;
	}

	public function getEmail() {
		if ($this->email===NULL) {
			$this->email = $this->createEmail();
		}
		return $this->email;
	}
	
	protected function createEmail() {
		return array();
	}

	public function setEmail($email) {
		$this->email = $this->validateEmail($email);
	}

	protected function validateEmail($email) {
		if ( ! is_array ($email) && ! is_null($email) ) {
			$email = array($email);
		}
		$count = count($email);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'email', 0));
		}
		foreach ($email as $entry) {
			if (!($entry instanceof Email)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'email', 'email'));
			}
		}
	
		return $email;
	}

	public function addEmail($email) {
		$this->email[] = $email;
	}
} // end class Contact
