<?php
namespace com\microsoft\wc\dates;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.dates", prefix="d")
 * })
 * @XmlRootEntity	(xml="month")
 */
class Month {
	/**
	 */

	/**
	 * @XmlValue	(type="integer", name="month")
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
			throw new \Exception(sprintf('Supplied %s value was less than the minimum (%d)', 'month', 1));
		}

		if ($value > 12) {
			throw new \Exception(sprintf('Supplied %s value was greater than the maximum (%d)', 'month', 12));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Month
