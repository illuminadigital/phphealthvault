<?php
namespace com\microsoft\wc\thing\height;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.height", prefix="")
 * })
 * @XmlEntity	(xml="height")
 */
class Height extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information about a height measurement.
	 */

	const ID = '40750a6a-89b2-455c-bd8d-b420a4cb500b';
	const NAME = 'Height Measurement';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LengthValue", name="value")
	 */
	protected $value;

	public function __construct($when = NULL, $value = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\thing\types\LengthValue();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\thing\types\LengthValue ) {
			$value = new \com\microsoft\wc\thing\types\LengthValue ($value);
		}
	
		return $value;
	}
} // end class Height
