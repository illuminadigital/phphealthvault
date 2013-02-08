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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.delimiter", name="delimiter")
	 */
	protected $delimiter;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.family", name="family")
	 */
	protected $family;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.given", name="given")
	 */
	protected $given;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.prefix", name="prefix")
	 */
	protected $prefix;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.suffix", name="suffix")
	 */
	protected $suffix;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLTS", name="validTime")
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
		return NULL;
	}

	public function setDelimiter($delimiter) {
		$this->delimiter = $this->validateDelimiter($delimiter);
	}

	protected function validateDelimiter($delimiter) {
	
		return $delimiter;
	}

	public function getFamily() {
		if ($this->family===NULL) {
			$this->family = $this->createFamily();
		}
		return $this->family;
	}
	
	protected function createFamily() {
		return NULL;
	}

	public function setFamily($family) {
		$this->family = $this->validateFamily($family);
	}

	protected function validateFamily($family) {
	
		return $family;
	}

	public function getGiven() {
		if ($this->given===NULL) {
			$this->given = $this->createGiven();
		}
		return $this->given;
	}
	
	protected function createGiven() {
		return NULL;
	}

	public function setGiven($given) {
		$this->given = $this->validateGiven($given);
	}

	protected function validateGiven($given) {
	
		return $given;
	}

	public function getPrefix() {
		if ($this->prefix===NULL) {
			$this->prefix = $this->createPrefix();
		}
		return $this->prefix;
	}
	
	protected function createPrefix() {
		return NULL;
	}

	public function setPrefix($prefix) {
		$this->prefix = $this->validatePrefix($prefix);
	}

	protected function validatePrefix($prefix) {
	
		return $prefix;
	}

	public function getSuffix() {
		if ($this->suffix===NULL) {
			$this->suffix = $this->createSuffix();
		}
		return $this->suffix;
	}
	
	protected function createSuffix() {
		return NULL;
	}

	public function setSuffix($suffix) {
		$this->suffix = $this->validateSuffix($suffix);
	}

	protected function validateSuffix($suffix) {
	
		return $suffix;
	}

	public function getValidTime() {
		if ($this->validTime===NULL) {
			$this->validTime = $this->createValidTime();
		}
		return $this->validTime;
	}
	
	protected function createValidTime() {
		return NULL;
	}

	public function setValidTime($validTime) {
		$this->validTime = $this->validateValidTime($validTime);
	}

	protected function validateValidTime($validTime) {
	
		return $validTime;
	}

	public function getUse() {
		if ($this->use===NULL) {
			$this->use = $this->createUse();
		}
		return $this->use;
	}
	
	protected function createUse() {
		return NULL;
	}

	public function setUse($use) {
		$this->use = $this->validateUse($use);
	}

	protected function validateUse($use) {
	
		return $use;
	}
} // end class EN
