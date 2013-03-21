<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlRootEntity	(xml="stringnz512")
 */
class Stringnz512 extends \com\microsoft\wc\types\Stringnz {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="value")
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
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\types\Stringnz ) {
			$value = new \com\microsoft\wc\types\Stringnz ($value);
		}

		if (strlen($value) < 1) {
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'stringnz512', 1));
		}

		if (strlen($value) > 512) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'stringnz512', 512));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Stringnz512
