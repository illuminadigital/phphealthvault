<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0434EmploymentSeparationReasonType")
 */
class NCES0434EmploymentSeparationReasonType {
	/**
	 */
	static protected $enumValue = array('1391' => 'Change of assignment', '1404' => 'Death', '1401' => 'Discharge due to a falsified application form', '1400' => 'Discharge due to continued absence or tardiness', '1402' => 'Discharge due to credential revoked or suspended', '1399' => 'Discharge due to misconduct', '1403' => 'Discharge due to unsatisfactory work performance', '1398' => 'Discharge due to unsuitability', '1387' => 'Employment in education', '1388' => 'Employment outside of education', '1390' => 'Family/personal relocation', '1392' => 'Formal study or research', '1394' => 'Homemaking/caring for a family member', '1393' => 'Illness/disability', '1406' => 'Lay off due to lack of funding', '1395' => 'Layoff due to budgetary reduction', '1397' => 'Layoff due to decreased workload', '1396' => 'Layoff due to organizational restructuring', '1407' => 'Lost credential', '9999' => 'Other', '1405' => 'Personal reason', '1389' => 'Retirement', '9997' => 'Unknown');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES0434EmploymentSeparationReasonType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0434EmploymentSeparationReasonType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0434EmploymentSeparationReasonType
