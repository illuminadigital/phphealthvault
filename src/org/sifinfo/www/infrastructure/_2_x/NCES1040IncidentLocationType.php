<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES1040IncidentLocationType")
 */
class NCES1040IncidentLocationType {
	/**
	 */
	static protected $enumValue = array('3012' => 'Administrative offices area', '3022' => 'Athletic field or playground', '3020' => 'Auditorium', '3027' => 'Bus stop', '3013' => 'Cafeteria area', '3014' => 'Classroom', '3019' => 'Computer lab', '3015' => 'Hallway or stairs', '3018' => 'Library/media center', '3016' => 'Locker room or gym areas', '3026' => 'Off campus', '3030' => 'Off-campus at other school', '3031' => 'Off-campus at other school district facility', '3011' => 'On campus', '3021' => 'On-campus other inside area', '3025' => 'On-campus other outside area', '3413' => 'Online', '3024' => 'Parking lot', '3017' => 'Restroom', '3028' => 'School bus', '3023' => 'Stadium', '9997' => 'Unknown', '3029' => 'Walking to or from school');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES1040IncidentLocationType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES1040IncidentLocationType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES1040IncidentLocationType
