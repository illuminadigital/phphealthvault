<?php
namespace com\microsoft\wc\thing\message;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.message", prefix="")
 * })
 * @XmlEntity	(xml="message-header-item")
 */
class MessageHeaderItem {
	/**
	 * An item of header information.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="value")
	 */
	protected $value;

	public function __construct($name = NULL, $value = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\Stringnznw ) {
			$name = new \com\microsoft\wc\types\Stringnznw ($name);
		}
	
		return $name;
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\types\Stringnznw ) {
			$value = new \com\microsoft\wc\types\Stringnznw ($value);
		}
	
		return $value;
	}
} // end class MessageHeaderItem
