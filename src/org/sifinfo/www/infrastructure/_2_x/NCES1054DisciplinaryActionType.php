<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES1054DisciplinaryActionType")
 */
class NCES1054DisciplinaryActionType {
	/**
	 */
	static protected $enumValue = array('3071' => 'Bus suspension', '3072' => 'Change of placement (long-term)', '3073' => 'Change of placement (reassignment), pending an expulsion hearing', '3074' => 'Change of placement (reassignment), resulting from an expulsion hearing', '3075' => 'Change of placement (reassignment), temporary', '3076' => 'Community service', '3077' => 'Conference with and warning to student', '3078' => 'Conference with and warning to student and parent/guardian', '3079' => 'Confiscation of contraband', '3080' => 'Conflict resolution or anger management services mandated', '3081' => 'Corporal punishment', '3082' => 'Counseling mandated', '3083' => 'Demerit', '3084' => 'Detention', '3085' => 'Expulsion recommendation', '3086' => 'Expulsion with services', '3087' => 'Expulsion without services', '3088' => 'Juvenile justice referral', '3089' => 'Law enforcement referral', '3090' => 'Letter of apology', '3091' => 'Loss of privileges', '3105' => 'No action', '9998' => 'None', '9999' => 'Other', '3092' => 'Physical activity', '3158' => 'Removal by a hearing officer', '3093' => 'Reprimand', '3094' => 'Restitution', '3095' => 'Saturday school', '3096' => 'School probation', '3097' => 'Substance abuse counseling mandated', '3098' => 'Substance abuse treatment mandated', '3099' => 'Suspension after school', '3100' => 'Suspension, in-school', '3154' => 'Suspension, out of school, greater than 10 consecutive school days', '3155' => 'Suspension, out of school, separate days cumulating to more than 10 school days', '3101' => 'Suspension, out-of-school, with services', '3102' => 'Suspension, out-of-school, without services', '3157' => 'Unilateral removal - drug incident', '3156' => 'Unilateral removal - weapon incident', '9997' => 'Unknown', '3103' => 'Unsatisfactory behavior grade', '3104' => 'Work detail');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES1054DisciplinaryActionType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES1054DisciplinaryActionType
