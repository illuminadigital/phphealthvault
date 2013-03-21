<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="EDENMigrantStudentsServedMigrantServiceTypeType")
 */
class EDENMigrantStudentsServedMigrantServiceTypeType {
	/**
	 */
	static protected $enumValue = array('COS' => 'Continuation of Service', 'AIS' => 'Any Instructional Service', 'RI' => 'Reading Instruction', 'MI' => 'Mathematics Instruction', 'HSCA' => 'High School Credit Accrual (Grades 9-12 only)', 'ANYSS' => 'Any Support Service', 'CS' => 'Counseling Service', 'ARS' => 'Any Referred Service', 'MISSING' => 'MISSING', 'NOTCOLLECT' => 'Not Collected');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="EDENMigrantStudentsServedMigrantServiceTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'EDENMigrantStudentsServedMigrantServiceTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class EDENMigrantStudentsServedMigrantServiceTypeType
