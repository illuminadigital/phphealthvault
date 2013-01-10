<?php
namespace com\microsoft\wc\vocab;

use com\microsoft\wc\types\Stringnz;

/**
 * @XmlEntity	(xml="VocabularyAuthorization")
 */
class VocabularyAuthorization {
	/**
	 * A representation of a single vocabulary or a family of vocabularies, that an application is authorized to use.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="family")
	 */
	protected $family;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="name")
	 */
	protected $name;

	public function __construct($family = NULL, $name = NULL) {
		$this->family = ($family===NULL) ? NULL : $this->validateFamily($family);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getFamily() {
		if ($this->family===NULL) {
			$this->family = $this->createFamily();
		}
		return $this->family;
	}
	
	protected function createFamily() {
		return new Stringnz();
	}

	public function setFamily($family) {
		$this->family = $this->validateFamily($family);
	}

	protected function validateFamily($family) {
		if ( ! $family instanceof Stringnz ) {
			$family = new Stringnz ($family);
		}
	
		return $family;
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
		if ( ! $name instanceof Stringnz  && ! is_null($name) ) {
			$name = new Stringnz ($name);
		}
	
		return $name;
	}
} // end class VocabularyAuthorization
