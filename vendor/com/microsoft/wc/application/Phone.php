<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="Phone")
 */
class Phone {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	/**
	 * @XmlText	(type="boolean", name="is-primary")
	 */
	protected $isPrimary;

	/**
	 * @XmlText	(type="string", name="number")
	 */
	protected $number;

	public function __construct($description = NULL, $isPrimary = NULL, $number = NULL) {
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->isPrimary = ($isPrimary===NULL) ? NULL : $this->validateIsPrimary($isPrimary);
		$this->number = ($number===NULL) ? NULL : $this->validateNumber($number);
	}

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if (!is_string($description)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getIsPrimary() {
		if ($this->isPrimary===NULL) {
			$this->isPrimary = $this->createIsPrimary();
		}
		return $this->isPrimary;
	}
	
	protected function createIsPrimary() {
		return FALSE;
	}

	public function setIsPrimary($isPrimary) {
		$this->isPrimary = $this->validateIsPrimary($isPrimary);
	}

	protected function validateIsPrimary($isPrimary) {
		if (!is_bool($isPrimary)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isPrimary', 'boolean'));
		}
	
		return $isPrimary;
	}

	public function getNumber() {
		if ($this->number===NULL) {
			$this->number = $this->createNumber();
		}
		return $this->number;
	}
	
	protected function createNumber() {
		return '';
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
} // end class Phone
