<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlRootEntity	(xml="one-to-five")
 */
class OneToFive {
	/**
	 */

	/**
	 * @XmlValue	(type="integer", name="one-to-five")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue() {
		if ($this->value===NULL) {
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

		if ($value < 1) {
			throw new \Exception(sprintf('Supplied %s value was less than the minimum (%d)', 'one-to-five', 1));
		}

		if ($value > 5) {
			throw new \Exception(sprintf('Supplied %s value was greater than the maximum (%d)', 'one-to-five', 5));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class OneToFive
