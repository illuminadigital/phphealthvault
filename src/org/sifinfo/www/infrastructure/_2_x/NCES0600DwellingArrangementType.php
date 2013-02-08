<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0600DwellingArrangementType")
 */
class NCES0600DwellingArrangementType {
	/**
	 */
	static protected $enumValue = array('1669' => 'Boarding house', '1670' => 'Cooperative house', '1671' => 'Crisis shelter', '1672' => 'Disaster shelter', '1674' => 'Family residence', '1675' => 'Foster home', '3425' => 'Group home/halfway house', '1676' => 'Institution', '1680' => 'No home', '9999' => 'Other', '1681' => 'Other dormitory', '1677' => 'Prison or juvenile detention center', '1673' => 'Residential school/dormitory', '1678' => 'Rooming house', '1679' => 'Transient shelter');

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Token", name="value")
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
		if (!is_token($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'token'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0600DwellingArrangementType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0600DwellingArrangementType
