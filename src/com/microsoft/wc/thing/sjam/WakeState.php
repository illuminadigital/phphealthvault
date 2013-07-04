<?php
namespace com\microsoft\wc\thing\sjam;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.sjam", prefix="")
 * })
 * @XmlEntity	(xml="wake-state")
 */
class WakeState {
	/**
	 * An evaluation of how the person felt when they got up in the morning.
	 * 1 = Wide awake,2 = Awake but a little tired,3 = Sleepy
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="integer", name="wake-state")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return 0;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		$isValid = FALSE;
		if ( is_integer($value) ) {
			$isValid = TRUE;
		}
		else if ( $value == ($castVar = (integer) $value) ) {
			$isValid = TRUE;
			$value = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'integer'));
		}
	
		return $value;
	}
} // end class WakeState
