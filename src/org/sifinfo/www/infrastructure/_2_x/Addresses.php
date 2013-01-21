<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Addresses")
 */
class Addresses {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Address", collection="true", name="Address")
	 */
	protected $address;

	public function __construct($address = NULL) {
		$this->address = ($address===NULL) ? NULL : $this->validateAddress($address);
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
		if ( ! $address instanceof \org\sifinfo\www\infrastructure\_2_x\Address  && ! is_null($address) ) {
			$address = new \org\sifinfo\www\infrastructure\_2_x\Address ($address);
		}
		$count = count($address);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'address', 0));
		}
		foreach ($address as $entry) {
			if (!($entry instanceof Address)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'address', 'Address'));
			}
		}
	
		return $address;
	}

	public function addAddress($address) {
		$this->address[] = $address;
	}
} // end class Addresses
