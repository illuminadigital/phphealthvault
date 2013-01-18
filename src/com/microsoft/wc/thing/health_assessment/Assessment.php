<?php
namespace com\microsoft\wc\thing\health_assessment;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.health-assessment", prefix="")
 * })
 * @XmlEntity	(xml="Assessment")
 */
class Assessment {
	/**
	 * A single assessment, containing the name and value of the assessed area.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="group")
	 */
	protected $group;

	public function __construct($name = NULL, $value = NULL, $group = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->group = ($group===NULL) ? NULL : $this->validateGroup($group);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodableValue ) {
			$name = new \com\microsoft\wc\types\CodableValue ($name);
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
		return array();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\types\CodableValue ) {
			$value = new \com\microsoft\wc\types\CodableValue ($value);
		}
		$count = count($value);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'value', 1));
		}
		foreach ($value as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'codable-value'));
			}
		}
	
		return $value;
	}

	public function addValue($value) {
		$this->value[] = $value;
	}

	public function getGroup() {
		if ($this->group===NULL) {
			$this->group = $this->createGroup();
		}
		return $this->group;
	}
	
	protected function createGroup() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setGroup($group) {
		$this->group = $this->validateGroup($group);
	}

	protected function validateGroup($group) {
		if ( ! $group instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($group) ) {
			$group = new \com\microsoft\wc\types\CodableValue ($group);
		}
	
		return $group;
	}
} // end class Assessment
