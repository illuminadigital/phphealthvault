<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="VocabularyAuthorization")
 */
class VocabularyAuthorization {
	/**
	 * A representation of a single vocabulary or a family of vocabularies, that an application is authorized to use.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getFamily($autoCreate = TRUE) {
		if ($this->family===NULL && $autoCreate && ! isset($this->_overrides['family']) ) {
			$this->family = $this->createFamily();
		}
		return $this->family;
	}
	
	protected function createFamily() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setFamily($family) {
		$this->family = $this->validateFamily($family);
	}

	protected function validateFamily($family) {
		if ( ! $family instanceof \com\microsoft\wc\types\Stringnz ) {
			$family = new \com\microsoft\wc\types\Stringnz ($family);
		}
	
		return $family;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( $name === FALSE ) {
			$this->_overrides['name'] = TRUE;
			return NULL;
		}

		if ( ! $name instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($name) ) {
			$name = new \com\microsoft\wc\types\Stringnz ($name);
		}

		unset ($this->_overrides['name']);
	
		return $name;
	}
} // end class VocabularyAuthorization
