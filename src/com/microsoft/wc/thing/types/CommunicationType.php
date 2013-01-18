<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="communication-type")
 */
class CommunicationType {
	/**
	 * Defines what type of communication is used.
	 * This type is used to specify the communication medium(i.e. phone, email, pager, etc.), the priority of whichmedium is preferred and the class (i.e. home, office,mobile, etc.) of medium.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="communication-medium")
	 */
	protected $communicationMedium;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="priority")
	 */
	protected $priority;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="class")
	 */
	protected $class;

	/**
	 * @XmlText	(type="string", name="value")
	 */
	protected $value;

	public function __construct($communicationMedium = NULL, $priority = NULL, $class = NULL, $value = NULL) {
		$this->communicationMedium = ($communicationMedium===NULL) ? NULL : $this->validateCommunicationMedium($communicationMedium);
		$this->priority = ($priority===NULL) ? NULL : $this->validatePriority($priority);
		$this->class = ($class===NULL) ? NULL : $this->validateClass($class);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getCommunicationMedium() {
		if ($this->communicationMedium===NULL) {
			$this->communicationMedium = $this->createCommunicationMedium();
		}
		return $this->communicationMedium;
	}
	
	protected function createCommunicationMedium() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCommunicationMedium($communicationMedium) {
		$this->communicationMedium = $this->validateCommunicationMedium($communicationMedium);
	}

	protected function validateCommunicationMedium($communicationMedium) {
		if ( ! $communicationMedium instanceof \com\microsoft\wc\types\CodableValue ) {
			$communicationMedium = new \com\microsoft\wc\types\CodableValue ($communicationMedium);
		}
	
		return $communicationMedium;
	}

	public function getPriority() {
		if ($this->priority===NULL) {
			$this->priority = $this->createPriority();
		}
		return $this->priority;
	}
	
	protected function createPriority() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setPriority($priority) {
		$this->priority = $this->validatePriority($priority);
	}

	protected function validatePriority($priority) {
		if ( ! $priority instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($priority) ) {
			$priority = new \com\microsoft\wc\thing\types\PositiveInt ($priority);
		}
	
		return $priority;
	}

	public function getClass() {
		if ($this->class===NULL) {
			$this->class = $this->createClass();
		}
		return $this->class;
	}
	
	protected function createClass() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setClass($class) {
		$this->class = $this->validateClass($class);
	}

	protected function validateClass($class) {
		if ( ! $class instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($class) ) {
			$class = new \com\microsoft\wc\types\CodableValue ($class);
		}
	
		return $class;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}
	
		return $value;
	}
} // end class CommunicationType
