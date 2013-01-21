<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="BodySurfaceRoute")
 */
class BodySurfaceRoute {
	/**
	 */
	static protected $enumValue = array('ELECTOSMOS' => 'ELECTOSMOS', 'SOAK' => 'SOAK', 'TOPICAL' => 'TOPICAL', 'IONTO' => 'IONTO', 'DRESS' => 'DRESS', 'SWAB' => 'SWAB');

	/**
	 * @XmlElement	(type="\hl7_org\v3\Cs", name="value")
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
		return new \hl7_org\v3\Cs();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\Cs ) {
			$value = new \hl7_org\v3\Cs ($value);
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'BodySurfaceRoute', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class BodySurfaceRoute