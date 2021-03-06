<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="EDENLEPProgramTypeOfServicesReceivedType")
 */
class EDENLEPProgramTypeOfServicesReceivedType {
	/**
	 */
	static protected $enumValue = array('BILING' => 'Bilingual (including native language support)', 'DUALLANG' => 'Dual language', 'TWOIMM' => 'Two-way bilingual immersion', 'TRANSBIL' => 'Transitional bilingual', 'DEVBIL' => 'Developmental bilingual', 'HERITAGE' => 'Heritage language preservation programs', 'SHELENGL' => 'Sheltered English Instruction', 'STRUCIMM' => 'Structured English Immersion', 'SDAIE' => 'Specially designed academic instruction delivered in English', 'CONTENTESL' => 'Content-based ESL', 'PULLESL' => 'Pull-out ESL', 'OTHER' => 'Other', 'MISSING' => 'MISSING', 'NOTCOLLECT' => 'Not Collected');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="EDENLEPProgramTypeOfServicesReceivedType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'EDENLEPProgramTypeOfServicesReceivedType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class EDENLEPProgramTypeOfServicesReceivedType
