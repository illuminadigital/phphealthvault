<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="EDENHomelessEducationalSupportServicesAndActivitiesTypeOfServicesReceivedType")
 */
class EDENHomelessEducationalSupportServicesAndActivitiesTypeOfServicesReceivedType {
	/**
	 */
	static protected $enumValue = array('TUT' => 'Tutoring or other instructional support', 'EE' => 'Expedited evaluations', 'PD' => 'Staff professional development and awareness', 'MEDREF' => 'Referrals for medical, dental, and other health services', 'TRANS' => 'Transportation', 'ECPGM' => 'Early Childhood Programs', 'ASST' => 'Assistance with participation in school programs', 'BASSUM' => 'Before-school, after-school, mentoring, summer programs', 'RECS' => 'Obtaining or transferring records necessary for enrollment', 'PARENT' => 'Parent education related to rights and resources for children', 'COORD' => 'Coordinator between schools and agencies', 'COUNS' => 'Counseling', 'DOMV' => 'Addressing needs related to domestic violence', 'CLOTH' => 'Clothing to meet a school requirement', 'SUPPLY' => 'School supplies', 'OTHREF' => 'Referral to other programs and services', 'EMER' => 'Emergency assistance related to school attendance', 'OTHER' => 'Other services or activities', 'MISSING' => 'MISSING', 'NOTCOLLECT' => 'Not Collected', 'NOTAPPLIC' => 'Not Applicable, when no McKinney Vento Program');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="EDENHomelessEducationalSupportServicesAndActivitiesTypeOfServicesReceivedType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'EDENHomelessEducationalSupportServicesAndActivitiesTypeOfServicesReceivedType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class EDENHomelessEducationalSupportServicesAndActivitiesTypeOfServicesReceivedType
