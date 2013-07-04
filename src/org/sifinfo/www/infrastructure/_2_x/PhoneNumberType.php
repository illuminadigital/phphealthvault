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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="Number")
	 */
	protected $number;

	/**
	 * @XmlText	(type="string", name="Extension")
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

	public function getNumber($autoCreate = TRUE) {
		if ($this->number===NULL && $autoCreate && ! isset($this->_overrides['number']) ) {
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
		if (!is_string($number)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'number', 'string'));
		}
	
		return $number;
	}

	public function getExtension($autoCreate = TRUE) {
		if ($this->extension===NULL && $autoCreate && ! isset($this->_overrides['extension']) ) {
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
		if ( ! is_string($extension) && ! is_null($extension) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'extension', 'string'));
		}
	
		return $extension;
	}

	public function getListedStatus($autoCreate = TRUE) {
		if ($this->listedStatus===NULL && $autoCreate && ! isset($this->_overrides['listedStatus']) ) {
			$this->listedStatus = $this->createListedStatus();
		}
		return $this->listedStatus;
	}
	
	protected function createListedStatus() {
		return NULL;
	}

	public function setListedStatus($listedStatus) {
		$this->listedStatus = $this->validateListedStatus($listedStatus);
	}

	protected function validateListedStatus($listedStatus) {
	
		return $listedStatus;
	}

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
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
