<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="email")
 */
class Email {
	/**
	 * Email
	 * An email address.
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
	 * @XmlText	(type="string", name="address")
	 */
	protected $address;

	public function __construct($description = NULL, $isPrimary = NULL, $address = NULL) {
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->isPrimary = ($isPrimary===NULL) ? NULL : $this->validateIsPrimary($isPrimary);
		$this->address = ($address===NULL) ? NULL : $this->validateAddress($address);
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

	public function getAddress($autoCreate = TRUE) {
		if ($this->address===NULL && $autoCreate && ! isset($this->_overrides['address']) ) {
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
} // end class Email
