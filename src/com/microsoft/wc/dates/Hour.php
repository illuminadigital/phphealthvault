<?php
namespace com\microsoft\wc\dates;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.dates", prefix="d")
 * })
 * @XmlRootEntity	(xml="hour")
 */
class Hour {
	/**
	 */

	/**
	 * @XmlValue	(type="integer", name="hour")
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

		if ($value < 0) {
			throw new \Exception(sprintf('Supplied %s value was less than the minimum (%d)', 'hour', 0));
		}

		if ($value > 23) {
			throw new \Exception(sprintf('Supplied %s value was greater than the maximum (%d)', 'hour', 23));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Hour
