<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="PhoneNumberType")
 */
class PhoneNumberType {
	/**
	 * This element represents a phone number and occurs within objects such as StudentPersonal, StaffPersonal, etc.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="Number")
	 */
	protected $number;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="Extension")
	 */
	protected $extension;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ListedStatus", name="ListedStatus")
	 */
	protected $listedStatus;

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	public function __construct($number = NULL, $extension = NULL, $listedStatus = NULL, $type = NULL) {
		$this->number = ($number===NULL) ? NULL : $this->validateNumber($number);
		$this->extension = ($extension===NULL) ? NULL : $this->validateExtension($extension);
		$this->listedStatus = ($listedStatus===NULL) ? NULL : $this->validateListedStatus($listedStatus);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
	}

	public function getNumber() {
		if ($this->number===NULL) {
			$this->number = $this->createNumber();
		}
		return $this->number;
	}
	
	protected function createNumber() {
		return NULL;
	}

	public function setNumber($number) {
		$this->number = $this->validateNumber($number);
	}

	protected function validateNumber($number) {
		if (!is_normalizedString($number)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'number', 'normalizedString'));
		}
	
		return $number;
	}

	public function getExtension() {
		if ($this->extension===NULL) {
			$this->extension = $this->createExtension();
		}
		return $this->extension;
	}
	
	protected function createExtension() {
		return NULL;
	}

	public function setExtension($extension) {
		$this->extension = $this->validateExtension($extension);
	}

	protected function validateExtension($extension) {
		if ( ! is_normalizedString($extension) && ! is_null($extension) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'extension', 'normalizedString'));
		}
	
		return $extension;
	}

	public function getListedStatus() {
		if ($this->listedStatus===NULL) {
			$this->listedStatus = $this->createListedStatus();
		}
		return $this->listedStatus;
	}
	
	protected function createListedStatus() {
		return new \org\sifinfo\www\infrastructure\_2_x\ListedStatus();
	}

	public function setListedStatus($listedStatus) {
		$this->listedStatus = $this->validateListedStatus($listedStatus);
	}

	protected function validateListedStatus($listedStatus) {
		if ( ! $listedStatus instanceof \org\sifinfo\www\infrastructure\_2_x\ListedStatus  && ! is_null($listedStatus) ) {
			$listedStatus = new \org\sifinfo\www\infrastructure\_2_x\ListedStatus ($listedStatus);
		}
	
		return $listedStatus;
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return NULL;
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
	
		return $type;
	}
} // end class PhoneNumberType
