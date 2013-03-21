<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="Phone")
 */
class Phone {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
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
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getIsPrimary($autoCreate = TRUE) {
		if ($this->isPrimary===NULL && $autoCreate && ! isset($this->_overrides['isPrimary']) ) {
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
		if ( ! is_bool($isPrimary) && ! is_null($isPrimary) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isPrimary', 'boolean'));
		}
	
		return $isPrimary;
	}

	public function getNumber($autoCreate = TRUE) {
		if ($this->number===NULL && $autoCreate && ! isset($this->_overrides['number']) ) {
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
