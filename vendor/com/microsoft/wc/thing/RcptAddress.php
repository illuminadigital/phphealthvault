<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="RcptAddress")
 */
class RcptAddress {
	/**
	 * Identifies an message recipient by email and name.
	 */

	/**
	 * @XmlText	(type="string", name="address")
	 */
	protected $address;

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	public function __construct($address = NULL, $name = NULL) {
		$this->address = ($address===NULL) ? NULL : $this->validateAddress($address);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getAddress() {
		if ($this->address===NULL) {
			$this->address = $this->createAddress();
		}
		return $this->address;
	}
	
	protected function createAddress() {
		return '';
	}

	public function setAddress($address) {
		$this->address = $this->validateAddress($address);
	}

	protected function validateAddress($address) {
		if (!is_string($address)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'address', 'string'));
		}
	
		return $address;
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}
} // end class RcptAddress
