<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0815ProgramExitReasonType")
 */
class NCES0815ProgramExitReasonType {
	/**
	 */
	static protected $enumValue = array('2226' => 'Completion of IFSP prior to reaching maximum age for Part C', '2223' => 'Died', '2222' => 'Discontinued schooling, not special education', '2221' => 'Discontinued schooling, special education only', '2227' => 'Eligible for IDEA, Part B', '2224' => 'Expulsion', '2212' => 'Graduated with a high school diploma', '2231' => 'Moved out of state', '2216' => 'No longer receiving special education', '2228' => 'Not eligible for Part B, exit with referrals to other programs', '9999' => 'Other', '2230' => 'Part B eligibility not determined', '2214' => 'Program completion', '2225' => 'Program discontinued', '2215' => 'Reached maximum age', '2213' => 'Received certificate of completion, modified diploma, or finished IEP requirements', '2217' => 'Refused services', '2220' => 'Suspended from school', '2406' => 'Transferred to another district or school, known not to be continuing in program/service', '2218' => 'Transferred to another district or school, known to be continuing in program/service', '2219' => 'Transferred to another district or school, not known to be continuing in program/service', '2233' => 'Unknown reason', '2232' => 'Withdrawal by a parent (or guardian)');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0815ProgramExitReasonType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0815ProgramExitReasonType
