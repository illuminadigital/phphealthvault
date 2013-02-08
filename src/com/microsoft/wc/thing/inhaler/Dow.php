<?php
namespace com\microsoft\wc\thing\inhaler;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.inhaler", prefix="")
 * })
 * @XmlRootEntity	(xml="dow")
 */
class Dow {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\inhaler\Int", name="value")
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
		if (!is_int($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'int'));
		}

		if ($value < 1) {
			throw new \Exception(sprintf('Supplied %s value was less than the minimum (%d)', 'dow', 1));
		}

		if ($value > 7) {
			throw new \Exception(sprintf('Supplied %s value was greater than the maximum (%d)', 'dow', 7));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Dow
