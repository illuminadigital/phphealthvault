<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="CourseCreditsType")
 */
class CourseCreditsType {
	/**
	 * The number of credits awarded upon course completion.
	 */

	/**
	 * @XmlText	(type="float", name="value")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	public function __construct($value = NULL, $type = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
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
		if (!is_float($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'float'));
		}
	
		return $value;
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return NULL;
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
	
		return $type;
	}
} // end class CourseCreditsType
