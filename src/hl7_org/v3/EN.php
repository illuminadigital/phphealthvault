<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="EN")
 */
class EN extends \ANY\ANY {
	/**
	 * A name for a person, organization, place or thing. A sequence of name parts, such as given name or family name, prefix, suffix, etc. Examples for entity name values are "Jim Bob Walton, Jr.", "Health Level Seven, Inc.", "Lake Tahoe", etc. An entity name may be as simple as a character string or may consist of several entity name parts, such as, "Jim", "Bob", "Walton", and "Jr.", "Health Level Seven" and "Inc.", "Lake" and "Tahoe".
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\En.delimiter", name="delimiter")
	 */
	protected $delimiter;

	/**
	 * @XmlElement	(type="\hl7_org\v3\En.family", name="family")
	 */
	protected $family;

	/**
	 * @XmlElement	(type="\hl7_org\v3\En.given", name="given")
	 */
	protected $given;

	/**
	 * @XmlElement	(type="\hl7_org\v3\En.prefix", name="prefix")
	 */
	protected $prefix;

	/**
	 * @XmlElement	(type="\hl7_org\v3\En.suffix", name="suffix")
	 */
	protected $suffix;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLTS", name="validTime")
	 */
	protected $validTime;

	/**
	 * @XmlAttribute	(type="string", name="use")
	 */
	protected $use;

	public function __construct($delimiter = NULL, $family = NULL, $given = NULL, $prefix = NULL, $suffix = NULL, $validTime = NULL, $use = NULL) {
		$this->delimiter = ($delimiter===NULL) ? NULL : $this->validateDelimiter($delimiter);
		$this->family = ($family===NULL) ? NULL : $this->validateFamily($family);
		$this->given = ($given===NULL) ? NULL : $this->validateGiven($given);
		$this->prefix = ($prefix===NULL) ? NULL : $this->validatePrefix($prefix);
		$this->suffix = ($suffix===NULL) ? NULL : $this->validateSuffix($suffix);
		$this->validTime = ($validTime===NULL) ? NULL : $this->validateValidTime($validTime);
		$this->use = ($use===NULL) ? NULL : $this->validateUse($use);
	}

	public function getDelimiter() {
		if ($this->delimiter===NULL) {
			$this->delimiter = $this->createDelimiter();
		}
		return $this->delimiter;
	}
	
	protected function createDelimiter() {
		return new \hl7_org\v3\En.delimiter();
	}

	public function setDelimiter($delimiter) {
		$this->delimiter = $this->validateDelimiter($delimiter);
	}

	protected function validateDelimiter($delimiter) {
		if ( ! $delimiter instanceof \hl7_org\v3\En.delimiter ) {
			$delimiter = new \hl7_org\v3\En.delimiter ($delimiter);
		}
	
		return $delimiter;
	}

	public function getFamily() {
		if ($this->family===NULL) {
			$this->family = $this->createFamily();
		}
		return $this->family;
	}
	
	protected function createFamily() {
		return new \hl7_org\v3\En.family();
	}

	public function setFamily($family) {
		$this->family = $this->validateFamily($family);
	}

	protected function validateFamily($family) {
		if ( ! $family instanceof \hl7_org\v3\En.family ) {
			$family = new \hl7_org\v3\En.family ($family);
		}
	
		return $family;
	}

	public function getGiven() {
		if ($this->given===NULL) {
			$this->given = $this->createGiven();
		}
		return $this->given;
	}
	
	protected function createGiven() {
		return new \hl7_org\v3\En.given();
	}

	public function setGiven($given) {
		$this->given = $this->validateGiven($given);
	}

	protected function validateGiven($given) {
		if ( ! $given instanceof \hl7_org\v3\En.given ) {
			$given = new \hl7_org\v3\En.given ($given);
		}
	
		return $given;
	}

	public function getPrefix() {
		if ($this->prefix===NULL) {
			$this->prefix = $this->createPrefix();
		}
		return $this->prefix;
	}
	
	protected function createPrefix() {
		return new \hl7_org\v3\En.prefix();
	}

	public function setPrefix($prefix) {
		$this->prefix = $this->validatePrefix($prefix);
	}

	protected function validatePrefix($prefix) {
		if ( ! $prefix instanceof \hl7_org\v3\En.prefix ) {
			$prefix = new \hl7_org\v3\En.prefix ($prefix);
		}
	
		return $prefix;
	}

	public function getSuffix() {
		if ($this->suffix===NULL) {
			$this->suffix = $this->createSuffix();
		}
		return $this->suffix;
	}
	
	protected function createSuffix() {
		return new \hl7_org\v3\En.suffix();
	}

	public function setSuffix($suffix) {
		$this->suffix = $this->validateSuffix($suffix);
	}

	protected function validateSuffix($suffix) {
		if ( ! $suffix instanceof \hl7_org\v3\En.suffix ) {
			$suffix = new \hl7_org\v3\En.suffix ($suffix);
		}
	
		return $suffix;
	}

	public function getValidTime() {
		if ($this->validTime===NULL) {
			$this->validTime = $this->createValidTime();
		}
		return $this->validTime;
	}
	
	protected function createValidTime() {
		return new \hl7_org\v3\IVLTS();
	}

	public function setValidTime($validTime) {
		$this->validTime = $this->validateValidTime($validTime);
	}

	protected function validateValidTime($validTime) {
		if ( ! $validTime instanceof \hl7_org\v3\IVLTS  && ! is_null($validTime) ) {
			$validTime = new \hl7_org\v3\IVLTS ($validTime);
		}
	
		return $validTime;
	}

	public function getUse() {
		if ($this->use===NULL) {
			$this->use = $this->createUse();
		}
		return $this->use;
	}
	
	protected function createUse() {
		return new \hl7_org\v3\SetEntityNameUse();
	}

	public function setUse($use) {
		$this->use = $this->validateUse($use);
	}

	protected function validateUse($use) {
		if ( ! $use instanceof \hl7_org\v3\SetEntityNameUse  && ! is_null($use) ) {
			$use = new \hl7_org\v3\SetEntityNameUse ($use);
		}
	
		return $use;
	}
} // end class EN
