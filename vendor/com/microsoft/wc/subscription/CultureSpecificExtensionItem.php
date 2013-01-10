<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\Stringnz;
use com\microsoft\wc\subscription\CultureSpecificString;

/**
 * @XmlEntity	(xml="CultureSpecificExtensionItem")
 */
class CultureSpecificExtensionItem {
	/**
	 * Any extra data in string-value pair format.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Stringnz", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\CultureSpecificString", collection="true", name="value")
	 */
	protected $value;

	public function __construct($name = NULL, $value = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new Stringnz();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof Stringnz ) {
			$name = new Stringnz ($name);
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
		if ( ! $value instanceof CultureSpecificString ) {
			$value = new CultureSpecificString ($value);
		}
		$count = count($value);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'value', 1));
		}
		foreach ($value as $entry) {
			if (!($entry instanceof CultureSpecificString)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'CultureSpecificString'));
			}
		}
	
		return $value;
	}

	public function addValue($value) {
		$this->value[] = $value;
	}
} // end class CultureSpecificExtensionItem
