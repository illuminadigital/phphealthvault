<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="GraduationDateType")
 */
class GraduationDateType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="value")
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
		return new \org\sifinfo\www\infrastructure\_2_x\PartialDateType();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \org\sifinfo\www\infrastructure\_2_x\PartialDateType ) {
			$value = new \org\sifinfo\www\infrastructure\_2_x\PartialDateType ($value);
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class GraduationDateType
