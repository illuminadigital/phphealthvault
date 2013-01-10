<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlRootEntity	(xml="TextualPermissionsType")
 */
class TextualPermissionsType {
	/**
	 */
	static protected $enumValue = array('Custom' => 'Custom', 'ReadAll' => 'ReadAll', 'UpdateAll' => 'UpdateAll', 'CreateAll' => 'CreateAll', 'DeleteAll' => 'DeleteAll', 'ReadUpdateAll' => 'ReadUpdateAll', 'ReadCreateAll' => 'ReadCreateAll', 'UpdateCreateAll' => 'UpdateCreateAll', 'ReadUpdateCreateAll' => 'ReadUpdateCreateAll', 'ReadUpdateCreateDeleteAll' => 'ReadUpdateCreateDeleteAll');

	/**
	 * @XmlValue	(type="string", name="TextualPermissionsType")
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
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'TextualPermissionsType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class TextualPermissionsType
