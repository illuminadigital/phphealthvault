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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PhoneNumber", collection="true", name="PhoneNumber")
	 */
	protected $phoneNumber;

	public function __construct($phoneNumber = NULL) {
		$this->phoneNumber = ($phoneNumber===NULL) ? NULL : $this->validatePhoneNumber($phoneNumber);
	}

	public function getPhoneNumber() {
		if ($this->phoneNumber===NULL) {
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
		if ( ! $phoneNumber instanceof \org\sifinfo\www\infrastructure\_2_x\PhoneNumber ) {
			$phoneNumber = new \org\sifinfo\www\infrastructure\_2_x\PhoneNumber ($phoneNumber);
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
