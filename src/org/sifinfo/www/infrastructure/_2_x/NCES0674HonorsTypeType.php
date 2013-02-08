<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0674HonorsTypeType")
 */
class NCES0674HonorsTypeType {
	/**
	 */
	static protected $enumValue = array('0737' => 'Athletic awards', '0738' => 'Awarding of units of value', '0742' => 'Certificate', '0740' => 'Citizenship award/recognition', '0741' => 'Completion of requirement, but no units of value awarded', '2047' => 'Honor award', '1985' => 'Honor roll', '1986' => 'Honor society', '1987' => 'Honorable mention', '1988' => 'Honors program', '0744' => 'Letter of student commendation', '0745' => 'Medals', '0746' => 'Monogram/letter', '9999' => 'Other', '0747' => 'Points', '1989' => 'Prize awards', '0748' => 'Promotion or advancement', '1990' => 'Ranks', '1991' => 'Scholarships');

	/**
	 * @XmlValue	(type="string", name="NCES0674HonorsTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0674HonorsTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0674HonorsTypeType
