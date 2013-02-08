<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0644ExitWithdrawalTypeType")
 */
class NCES0644ExitWithdrawalTypeType {
	/**
	 */
	static protected $enumValue = array('3501' => 'Completed a state-recognized vocational education program', '1928' => 'Completed grade 12, but did not meet all graduation requirements', '1922' => 'Completed school with other credentials', '3509' => 'Completed with a state-recognized equivalency certificate', '1923' => 'Died or is permanently incapacitated', '1927' => 'Discontinued schooling', '3503' => 'Enrolled in a foreign exchange program, eligible to return', '1930' => 'Enrolled in a postsecondary early admission program, eligible to return', '3500' => 'Enrolled in an adult education or training program', '3505' => 'Exited', '1925' => 'Expelled or involuntarily withdrawn', '1921' => 'Graduated with regular, advanced, International Baccalaureate, or other type of diploma', '3502' => 'Not enrolled, eligible to return', '1931' => 'Not enrolled, unknown status', '9999' => 'Other', '1926' => 'Reached maximum age for services', '3508' => 'Student is in a charter school managed by the same local education agency', '1907' => 'Student is in a different public school in the same local education agency', '3499' => 'Student is in the same local education agency and receiving education services, but is not assigned to a particular school', '1919' => 'Transferred to a charter school', '1911' => 'Transferred to a private, non-religiously-affiliated school in a different local education agency in the same state', '1912' => 'Transferred to a private, non-religiously-affiliated school in a different state', '1910' => 'Transferred to a private, non-religiously-affiliated school in the same local education agency', '1914' => 'Transferred to a private, religiously-affiliated school in a different local education agency in the same state', '1915' => 'Transferred to a private, religiously-affiliated school in a different state', '1913' => 'Transferred to a private, religiously-affiliated school in the same local education agency', '1908' => 'Transferred to a public school in a different local education agency in the same state', '1909' => 'Transferred to a public school in a different state', '1916' => 'Transferred to a school outside of the country', '1917' => 'Transferred to an institution', '1918' => 'Transferred to home schooling', '1924' => 'Withdrawn due to illness', '3504' => 'Withdrawn from school, under the age for compulsory attendance; eligible to return');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0644ExitWithdrawalTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0644ExitWithdrawalTypeType
