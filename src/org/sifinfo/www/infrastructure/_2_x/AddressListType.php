<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="AddressListType")
 */
class AddressListType {
	/**
	 * A list of Address elements.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Address", collection="true", name="Address")
	 */
	protected $address;

	public function __construct($address = NULL) {
		$this->address = ($address===NULL) ? NULL : $this->validateAddress($address);
	}

	public function getAddress($autoCreate = TRUE) {
		if ($this->address===NULL && $autoCreate && ! isset($this->_overrides['address']) ) {
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
		if ( ! is_array ($address) ) {
			$address = array($address);
		}
		$count = count($address);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'address', 1));
		}
		foreach ($address as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\Address )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'address', 'Address'));
			}
		}
	
		return $address;
	}

	public function addAddress($address) {
		$this->address[] = $address;
	}
} // end class AddressListType
