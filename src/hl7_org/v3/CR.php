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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CV", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CD", name="value")
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
		return NULL;
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
	
		return $name;
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
