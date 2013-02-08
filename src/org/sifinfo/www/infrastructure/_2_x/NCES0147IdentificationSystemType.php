<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0147IdentificationSystemType")
 */
class NCES0147IdentificationSystemType {
	/**
	 */
	static protected $enumValue = array('0254' => 'American College Testing (ACT) Program number', '5013' => 'Canadian Social Insurance Number', '0243' => 'College Board Admission Testing Program (ATP) number', '0175' => 'College Board/ACT code set of PK-grade 12 institutions', '0593' => 'District-assigned number', '0328' => 'Driver\'s license number', '0276' => 'Dun and Bradstreet number (i.e., DUNS number)', '0164' => 'Family unit number', '0264' => 'Federal identification number', '0339' => 'Health record number', '0233' => 'Integrated Postsecondary Education Data System (IPEDS) number', '0186' => 'LEA number for school', '0338' => 'Medicaid number', '0879' => 'Migrant number', '0216' => 'NCES number for LEA', '0208' => 'NCES number for school', '9999' => 'Other', '0222' => 'Other agency number', '0764' => 'Other federally assigned number', '0154' => 'Personal identification number', '0399' => 'Professional certificate or license number', '0495' => 'School-assigned number', '0763' => 'SEA number for LEA', '0197' => 'SEA number for school', '0780' => 'Selective Service number', '0004' => 'Social Security Administration number', '0686' => 'State-assigned number', '0873' => 'Statute number', '0936' => 'Sub-test number', '0307' => 'Test contractor assigned assessment number', '0113' => 'US government Visa number');

	/**
	 * @XmlValue	(type="string", name="NCES0147IdentificationSystemType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0147IdentificationSystemType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0147IdentificationSystemType
