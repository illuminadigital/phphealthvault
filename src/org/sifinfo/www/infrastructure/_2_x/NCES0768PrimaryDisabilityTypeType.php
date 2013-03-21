<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0768PrimaryDisabilityTypeType")
 */
class NCES0768PrimaryDisabilityTypeType {
	/**
	 */
	static protected $enumValue = array('2121' => 'Autistic/Autism', '2122' => 'Deaf-blindness', '2133' => 'Deafness', '2134' => 'Developmental delay', '2127' => 'Emotional Disturbance', '2123' => 'Hearing impairment', '2135' => 'Infants and Toddlers with Disabilities', '2124' => 'Mental retardation', '2125' => 'Multiple disabilities', '2126' => 'Orthopedic impairment', '2132' => 'Other health impairment', '2128' => 'Specific learning disability', '2129' => 'Speech or language impairment', '2130' => 'Traumatic brain injury', '2131' => 'Visual impairment');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES0768PrimaryDisabilityTypeType")
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
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0768PrimaryDisabilityTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0768PrimaryDisabilityTypeType
