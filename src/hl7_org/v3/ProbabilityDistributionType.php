<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="ProbabilityDistributionType")
 */
class ProbabilityDistributionType {
	/**
	 */
	static protected $enumValue = array('B' => 'B', 'E' => 'E', 'F' => 'F', 'G' => 'G', 'LN' => 'LN', 'N' => 'N', 'T' => 'T', 'U' => 'U', 'X2' => 'X2');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\hl7_org\v3\Cs", name="value")
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
		return new \hl7_org\v3\CS();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\CS ) {
			$value = new \hl7_org\v3\CS ($value);
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'ProbabilityDistributionType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class ProbabilityDistributionType
