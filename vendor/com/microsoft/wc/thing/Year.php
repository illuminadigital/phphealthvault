<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlRootEntity	(xml="year")
 */
class Year {
	/**
	 */

	/**
	 * @XmlValue	(type="int", name="year")
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
		if (!is_integer($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'integer'));
		}

		if ($value < 1000) {
			throw new \Exception(sprintf('Supplied %s value was less than the minimum (%d)', 'year', 1000));
		}

		if ($value > 9999) {
			throw new \Exception(sprintf('Supplied %s value was greater than the maximum (%d)', 'year', 9999));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Year
