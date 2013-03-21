<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="PhoneNumberListType")
 */
class PhoneNumberListType {
	/**
	 * Lists phone numbers associated with an entity.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PhoneNumber", collection="true", name="PhoneNumber")
	 */
	protected $phoneNumber;

	public function __construct($phoneNumber = NULL) {
		$this->phoneNumber = ($phoneNumber===NULL) ? NULL : $this->validatePhoneNumber($phoneNumber);
	}

	public function getPhoneNumber($autoCreate = TRUE) {
		if ($this->phoneNumber===NULL && $autoCreate && ! isset($this->_overrides['phoneNumber']) ) {
			$this->phoneNumber = $this->createPhoneNumber();
		}
		return $this->phoneNumber;
	}
	
	protected function createPhoneNumber() {
		return array();
	}

	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $this->validatePhoneNumber($phoneNumber);
	}

	protected function validatePhoneNumber($phoneNumber) {
		if ( ! is_array ($phoneNumber) ) {
			$phoneNumber = array($phoneNumber);
		}
		$count = count($phoneNumber);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'phoneNumber', 1));
		}
		foreach ($phoneNumber as $entry) {
			if (!($entry instanceof PhoneNumber)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'phoneNumber', 'PhoneNumber'));
			}
		}
	
		return $phoneNumber;
	}

	public function addPhoneNumber($phoneNumber) {
		$this->phoneNumber[] = $phoneNumber;
	}
} // end class PhoneNumberListType
