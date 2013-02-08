<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0599NonResidentAttendanceRationaleType")
 */
class NCES0599NonResidentAttendanceRationaleType {
	/**
	 */
	static protected $enumValue = array('1661' => 'Attending a private school', '1657' => 'Attending an area alternative school', '1658' => 'Attending an area magnet program', '1659' => 'Attending an area special education school', '1660' => 'Attending an area vocational/technical school', '1668' => 'Charter school', '1662' => 'Court-mandated juvenile system assignment', '1663' => 'Home schooling', '1664' => 'Local education agency (LEA) assignment', '1665' => 'Migrant education program participation', '1666' => 'Open school enrollment', '1667' => 'Voucher');

	/**
	 * @XmlValue	(type="string", name="NCES0599NonResidentAttendanceRationaleType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0599NonResidentAttendanceRationaleType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0599NonResidentAttendanceRationaleType
