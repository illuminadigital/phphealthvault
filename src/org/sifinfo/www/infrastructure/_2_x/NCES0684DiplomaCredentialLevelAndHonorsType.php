<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0684DiplomaCredentialLevelAndHonorsType")
 */
class NCES0684DiplomaCredentialLevelAndHonorsType {
	/**
	 */
	static protected $enumValue = array('2004' => 'Class salutatorian', '2003' => 'Class valedictorian', '1995' => 'Cum laude', '2000' => 'Local scholar award', '2006' => 'Locally-sponsored scholarships', '1996' => 'Magna cum laude', '2002' => 'National scholar award', '2008' => 'Nationally-sponsored scholarships', '9999' => 'Other', '2009' => 'Other monetary award', '2005' => 'Prize awards (not limited to subject matter awards)', '2357' => 'Rank', '1999' => 'Scholar award with distinction', '1998' => 'Scholar award with honor', '2001' => 'State scholar award', '2007' => 'State-sponsored scholarships', '1997' => 'Summa cum laude');

	/**
	 * @XmlValue	(type="string", name="NCES0684DiplomaCredentialLevelAndHonorsType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0684DiplomaCredentialLevelAndHonorsType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0684DiplomaCredentialLevelAndHonorsType
