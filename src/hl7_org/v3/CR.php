<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="CR")
 */
class CR extends \ANY\ANY {
	/**
	 * A concept qualifier code with optionally named role. Both qualifier role and value codes must be defined by the coding system. For example, if SNOMED RT defines a concept "leg", a role relation "has-laterality", and another concept "left", the concept role relation allows to add the qualifier "has-laterality: left" to a primary code "leg" to construct the meaning "left leg".
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\CV", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CD", name="value")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="inverted")
	 */
	protected $inverted;

	public function __construct($name = NULL, $value = NULL, $inverted = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->inverted = ($inverted===NULL) ? NULL : $this->validateInverted($inverted);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \hl7_org\v3\CV();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \hl7_org\v3\CV  && ! is_null($name) ) {
			$name = new \hl7_org\v3\CV ($name);
		}
	
		return $name;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \hl7_org\v3\CD();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\CD  && ! is_null($value) ) {
			$value = new \hl7_org\v3\CD ($value);
		}
	
		return $value;
	}

	public function getInverted() {
		if ($this->inverted===NULL) {
			$this->inverted = $this->createInverted();
		}
		return $this->inverted;
	}
	
	protected function createInverted() {
		return NULL;
	}

	public function setInverted($inverted) {
		$this->inverted = $this->validateInverted($inverted);
	}

	protected function validateInverted($inverted) {
	
		return $inverted;
	}
} // end class CR
